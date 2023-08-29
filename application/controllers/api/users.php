<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require APPPATH . 'libraries/REST_Controller.php';

class Users extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Users_Model');
        $this->load->library('form_validation');
        $this->load->helper('security');
    }

    public function signup_post() {
        $first_name = $this->security->xss_clean($this->post('first_name'));
        $last_name = $this->security->xss_clean($this->post('last_name'));
        $username = $this->security->xss_clean($this->post('username'));
        $email = $this->security->xss_clean($this->post('email'));
        $password = $this->security->xss_clean($this->post('password'));

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // hashing the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Checking for errors
        if ($this->form_validation->run() == FALSE) {
            $this->response(
                array(
                    "status" => 0,
                    "message" => "Failed to validate form data"
                ), 
                REST_Controller::HTTP_NOT_FOUND
            );
        } else {
            if (!empty($first_name) && !empty($last_name) && !empty($username) && !empty($email) && !empty($password)) {
                // all values are available
                $user = array(
                'first_name' => $first_name,
                'last_name' => $last_name,
                'username' => $username,
                'email' => $email,
                'password' => $hashed_password
                );
                if ($this->Users_Model->signupUser($user)) {
                    $this->response(
                        array(
                        "status" => 1,
                        "message" => "Successfully added the user to the database"
                        ),
                        REST_Controller::HTTP_OK
                    );
                } else {
                    $this->response(
                        array(
                        "status" => 0,
                        "message" => "Failed to add the user to the database"
                        ), 
                        REST_Controller::HTTP_INTERNAL_SERVER_ERROR
                    );
                }
            } else {
                // there are some empty fields
                $this->response(
                array(
                    "status" => 0,
                    "message" => "All fields needs to be filled",
                ),
                REST_Controller::HTTP_NOT_FOUND
                );
            }
        }
    }

    public function login_post() {
        $username = $this->security->xss_clean($this->post('username'));
        $password = $this->security->xss_clean($this->post('password'));

        $this->response($this->Users_Model->authenticate($username, $password));
    }
}