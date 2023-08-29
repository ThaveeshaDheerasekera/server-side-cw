<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function signupUser($data = array()) {
        return $this->db->insert("user", $data);
    }

    public function authenticate($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        
        $result = $query->result();
        $num_rows = $query->num_rows();

        if ($num_rows > 0) {
            if (password_verify($password, $result[0]->password)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}