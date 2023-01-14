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
    }

    public function index_get() {
        $questions = $this->Questions_Model->getAllQuestions();

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
    
    public function about_get() {
        $this->load->view('about-page');
    }
}