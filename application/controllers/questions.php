<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    /** 
     * Home page
     * All questions are listed in the home page
     * This is the default controller
     * https://w1761369.users.ecs.westminster.ac.uk/2019483/index.php
     * http://w1761369.users.ecs.westminster.ac.uk/2019483/index.php/questions/home 
     * */ 
    public function index() {
        $this->load->view('home-page');
    }
    
    public function about() {
        $this->load->view('about-page');
    }
}