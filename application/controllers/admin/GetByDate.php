<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('main_models');
        //vaidasi session login
        if ($this->session->userdata('status') != "login") {
            $this->load->view('auth/login');
        }
    }
    public function reg_awal() {
            $this->load->view('templates/admin/header');
            $this->load->view('admin/index');
            $this->load->view('templates/admin/footer');
    }
}
