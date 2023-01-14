<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';

class Users extends REST_Controller {

    public function __construct() {
        parent::__construct();
    }
}