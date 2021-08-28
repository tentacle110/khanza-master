<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('main_models');
        //vaidasi session login
        if ($this->session->userdata('status') != "login") {
            $this->load->view('auth/login');
        }
    }
    public function index()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('menu/index');
        $this->load->view('templates/admin/footer');
    }
}
