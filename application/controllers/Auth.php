<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Main_models');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }
    function login()
    {
        $username = $this->input->post('user_name');
        $password = sha1($this->input->post('pass_word'));
        $where = array('usere' => $username, 'passworde' => $password);
        // $where = array('user_name' => $username, 'pass_word' => $password);
        $cek = $this->Main_models->tableWhere($where, 'admin');

        if ($cek->num_rows() > 0) {
            $data = $cek->row_array();
            $data_session = array(
                'nama' => $data['usere'],
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Login Gagal');
            $this->load->view('auth/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('auth/login');
    }

    public function reset_password()
    {
        $this->load->view('auth/reset-password');
    }
}
