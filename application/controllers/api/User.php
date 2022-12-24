<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';

class User extends REST_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
  }
  
  // public function index() {
  //   $this->load->view('login-page');
  // }

  // public function index_get() {
  //   echo "This is get a method";
  // }

  public function login_get() {
    $this->load->view('login-page');
  }

  public function signup_get() {
    $this->load->view('signup-page');
  }
}
