<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';

class Answers extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Answers_Model');
        $this->load->library('form_validation');
        $this->load->helper('security');
    }
}