<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions_Model extends CI_Model {
    
    // constructor
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function listQuestions() {
        $this->db->select('*');
        $this->db->from('question');
        $query = $this->db->get();
        return $query->result();
    }

    public function getQuestionByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('question');

        return $query->result();
    }

    public function createQuestion($data = array()) {
        return $this->db->insert("question", $data);
    }

    public function listAnswersForAQuestion($id) {
        $this->db->where('question_id', $id);
        $query = $this->db->get('answer');

        return $query->result();
    }

    public function createAnswer($data = array()) {
        return $this->db->insert("answer", $data);
    }
}