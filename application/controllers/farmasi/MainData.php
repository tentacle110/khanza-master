<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MainData extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('farmasi');
    }

    public function index() {
        $this->load->view('farmasi/main');
    }

}
