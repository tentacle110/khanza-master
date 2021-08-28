<?php

defined('BASEPATH') or exit('No direct script access allowed');

class RawatJalan extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/rawat_jalan');
        $this->load->view('templates/admin/footer');
    }
}
