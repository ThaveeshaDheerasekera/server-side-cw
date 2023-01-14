<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
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