<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Answers_Model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function createAnswer($data = array()) {
        return $this->db->insert("answer", $data);
    }
}