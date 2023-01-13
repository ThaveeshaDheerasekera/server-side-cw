<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';

class Users extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    /** 
     * Login page
     * http://w1761369.users.ecs.westminster.ac.uk/2019483/index.php/user/login 
     * */ 
    public function login() {
        $this->load->view('login-page');
    }

    /** 
     * Signup page
     * http://w1761369.users.ecs.westminster.ac.uk/2019483/index.php/user/signup 
     * */ 
    public function signup() {
        $this->load->view('signup-page');
    }
}