<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';

class Questions extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();    // load database
        $this->load->model('Questions_Model');
        $this->load->library('form_validation');
        $this->load->helper('security');
    }

    public function index_get() {
        $questions = $this->Questions_Model->listQuestions();

        if($questions > 0) {
            $this->response(
                array(
                    'status' => 1,
                    'message' => 'Successfully listed all questions',
                    'data' => $questions
                ), REST_Controller::HTTP_OK
            );
        } else {
            $this->response(
                array(
                    'status' => 0,
                    'message' => 'Failed to questions',
                    'data' => $questions
                ), REST_Controller::HTTP_NOT_FOUND
            );
        }   
    }

    public function question_get() {
        $id = $this->input->get('id');

        $question = $this->Questions_Model->getQuestionByID($id);
        if($question != NULL) {
            $this->response(
                array(
                    'status' => 1,
                    'message' => 'Successfully displayed the question',
                    'data' => $question
                ), REST_Controller::HTTP_OK
            );
        } else {
            $this->response(
                array(
                    'status' => 0,
                    'message' => 'There is no question with that id',
                    'data' => $question
                ), REST_Controller::HTTP_NOT_FOUND
            );
        }   
    }

    public function index_post() {
        $title = $this->security->xss_clean($this->post('title'));
        $description = $this->security->xss_clean($this->post('description'));
        $tags = $this->security->xss_clean($this->post('tags'));
        $user_id = $this->security->xss_clean($this->post('user_id'));

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('tags', 'Tags', 'required');
        $this->form_validation->set_rules('user_id', 'User ID', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->response(
                array(
                    "status" => 0,
                    "message" => "Failed to validate form data"
                ),
                REST_Controller::HTTP_NOT_FOUND
            );
        } else {
            if(!empty($title) && !empty($description) && !empty($tags) && !empty($user_id)) {
                $question = array(
                    'title' => $title,
                    'description' => $description,
                    'tags' => $tags,
                    'user_id' => $user_id
                );
                if ($this->Questions_Model->createQuestion($question)) {
                    $this->response(
                        array(
                            'status' => 1,
                            'message' => "Successfully added the question to the database"
                        ),
                        REST_Controller::HTTP_OK
                    );
                } else {
                    $this->response(
                        array(
                            'status' => 0,
                            'message' => "Failed to add the user to the database"
                        ),
                        REST_Controller::HTTP_INTERNAL_SERVER_ERROR
                    ); 
                }
            } else {
                $this->response(
                    array(
                        "status" => 0,
                        "message" => "All fields needs to be filled",
                    ),
                    REST_Controller::HTTP_NOT_FOUND
                );
            }
        }
    }

    public function answers_get() {
        $id = $this->input->get('id');
        $answers = $this->Questions_Model->listAnswersForAQuestion($id);
        if($answers > 0) {
            $this->response(
                array(
                    'status' => 1,
                    'message' => 'Successfully listed all answers',
                    'data' => $answers
                ), REST_Controller::HTTP_OK
            );
        } else {
            $this->response(
                array(
                    'status' => 0,
                    'message' => 'There are no anwers for this question',
                    'data' => $answers
                ), REST_Controller::HTTP_NOT_FOUND
            );
        } 
    }

    public function answers_post() {
        $comment = $this->security->xss_clean($this->post('comment'));
        $user_id = $this->security->xss_clean($this->post('user_id'));
        $question_id = $this->security->xss_clean($this->post('question_id'));

        $this->form_validation->set_rules('comment', 'Comment', 'required');
        $this->form_validation->set_rules('user_id', 'User ID', 'required');
        $this->form_validation->set_rules('question_id', 'Question ID', 'required');

        if($this->form_validation->run() == FALSE) {
            $this->response(
                array(
                    "status" => 0,
                    "message" => "Failed to validate form data"
                ),
                REST_Controller::HTTP_NOT_FOUND
            );
        } else {
            if(!empty($comment) && !empty($user_id) && !empty($question_id)) {
                $answer = array(
                    'comment' => $comment,
                    'user_id' => $user_id,
                    'question_id' => $question_id
                );
                if ($this->Questions_Model->createAnswer($answer)) {
                    $this->response(
                        array(
                            'status' => 1,
                            'message' => "Successfully added the answer to the database"
                        ),
                        REST_Controller::HTTP_OK
                    );
                } else {
                    $this->response(
                        array(
                            'status' => 0,
                            'message' => "Failed to add the answer to the database"
                        ),
                        REST_Controller::HTTP_INTERNAL_SERVER_ERROR
                    ); 
                }
            } else {
                $this->response(
                    array(
                        "status" => 0,
                        "message" => "All fields needs to be filled",
                    ),
                    REST_Controller::HTTP_NOT_FOUND
                );
            }
        }
    }
}