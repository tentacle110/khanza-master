<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Adm_menu extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('main_models');

    }
    public function index()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('menu/adm-menu');
        $this->load->view('templates/admin/footer');
    }
}
