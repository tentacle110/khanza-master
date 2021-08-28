<?php

defined('BASEPATH') or exit('No direct script access allowed');

class RawatInap extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->library('datatables'); //load library ignited-dataTable
        $this->load->model('Main_models');
        //vaidasi session login
        if ($this->session->userdata('status') != "login") {
            $this->load->view('auth/login');
        }
    }

    public function index()
    {
        $data['ranap'] = $this->Main_models->join_ranap()->result();
        
        $this->load->view('templates/admin/header');
        $this->load->view('admin/rawat_inap', $data);
        $this->load->view('templates/admin/footer');
    }
    public function pulang($no_rkm_medis)
    {
        $data['ranap'] = $this->Main_models->join_ranap()->result();
        $data['ranapById'] = $this->Main_models->join_ranap_by_id($no_rkm_medis);
        $data['penyakit']    = $this->Main_models->join_penyakit()->result(); //Dari tabel join penyakit & kategori penyakit
        $data['icd']    = $this->Main_models->all_data('icd9')->result(); //Dari tabel Icd9
        $this->load->view('templates/admin/header');
        $this->load->view('admin/rawat_inap',$data);
        $this->load->view('templates/admin/footer');
    }

    public function penyakit_json()
    {
        header('Content-Type: application/json');
        echo $this->Main_models->get_penyakit_json();
        // $this->datatables->select("*");
        // $this->datatables->from("penyakit");
        // $this->datatables->join('kategori_penyakit', 'penyakit.kd_ktg = kategori_penyakit.kd_ktg');
        // return print_r($this->datatables->generate());
    }
    
    public function icd9_json(){
        header('Content-Type: application/json');
        echo $this->Main_models->get_icd9_json();
    }

    
}
