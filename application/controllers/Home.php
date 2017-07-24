<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Home_model');;
    }

    function index(){
        $this->load->view('index');
    }
}