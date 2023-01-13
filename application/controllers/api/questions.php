<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';

class Questions extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();    // load database
        $this->load->model(array('api_model'));
        $this->load->library('form_validation');
    }

    public function index_get() {
        $questions = $this->api_model->getAllQuestions();

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

    // http://localhost/2019483/index.php/api/User/login
    public function login_get() {
        $this->load->view('login-page');
    }

    // http://localhost/2019483/index.php/api/User/signup
    public function signup_get() {
        $this->load->view('signup-page');
    }
    
    public function about_get() {
        $this->load->view('about-page');
    }
}