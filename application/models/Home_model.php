<?php

class Home_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getUserModel(){
        return $this->db->get('user')->result();
    }
}