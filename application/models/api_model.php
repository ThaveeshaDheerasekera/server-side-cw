<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {
    
    // constructor
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllQuestions() {
        $this->db->select('*');
        $this->db->from('question');
        $query = $this->db->get();

        return $query->result();
    }
}