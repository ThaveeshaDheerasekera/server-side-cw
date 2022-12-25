<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';

class User extends REST_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
  }

  // http://localhost/2019483/index.php/api/User/login
  public function login_get() {
    $this->load->view('login-page');
  }

  // http://localhost/2019483/index.php/api/User/signup
  public function signup_get() {
    $this->load->view('signup-page');
  }
}
