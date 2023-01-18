<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Questions_Model');
    }

    /** 
     * Home page
     * All questions are listed in the home page
     * This is the default controller
     * https://w1761369.users.ecs.westminster.ac.uk/2019483/index.php
     * http://w1761369.users.ecs.westminster.ac.uk/2019483/index.php/questions/home 
     * */ 
    public function index() {
        $this->data['questions'] = $this->Questions_Model->listQuestions();
        $this->load->view('home-page', $this->data);
    }

    public function question() {
        $this->load->view('question-page');
    }

    public function addQuestion() {
        $this->load->view('add-question-page.php');
    } 
    
    public function about() {
        $this->load->view('about-page');
    }
}