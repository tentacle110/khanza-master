<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('Informasi_models');
        //vaidasi session login
        if ($this->session->userdata('status') != "login") {
            $this->load->view('auth/login');
        }
    }
    public function pasien_kamar_inap()
    {

        $data['ranap'] = $this->Informasi_models->join_pasien_ranap()->result();
        $this->load->view('templates/admin/header');
        $this->load->view('informasi/pasien_kamar_inap',$data);
        $this->load->view('templates/admin/footer');
    }

    public function telusur_kunjungan_pasien()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('informasi/telusur_kunjungan_pasien');
        $this->load->view('templates/admin/footer');
    }

    public function penggunaan_kamar_inap()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/menu');
        $this->load->view('informasi/penggunaan_kamar_inap');
        $this->load->view('templates/admin/footer');
    }

    public function informasi_ketersediaan_stok_darah()
    {
        $data['stok_darah']  = $this->Informasi_models->join_stok_darah()->result();

        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/menu');
        $this->load->view('informasi/informasi_ketersediaan_stok_darah', $data);
        $this->load->view('templates/admin/footer');
    }
    public function tarif_kamar()
    {
        $data['tarif'] = $this->Informasi_models->join_harga_kamar()->result();

        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/menu');
        $this->load->view('informasi/tarif_kamar',$data);
        $this->load->view('templates/admin/footer');
    }
    public function tarif_laboratorium()
    {
        $data['tarif'] = $this->Informasi_models->join_harga_lab()->result();
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/menu');
        $this->load->view('informasi/tarif_laboratorium',$data);
        $this->load->view('templates/admin/footer');
    }
    public function tarif_radiologi()
    {
        $data['tarif']= $this->Informasi_models->join_harga_radiologi()->result();
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/menu');
        $this->load->view('informasi/tarif_radiologi',$data);
        $this->load->view('templates/admin/footer');
    }
    public function tarif_operasi_vk()
    {
        $data['operasi'] = $this->Informasi_models->join_harga_operasi()->result();
        
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/menu');
        $this->load->view('informasi/tarif_operasi_vk',$data);
        $this->load->view('templates/admin/footer');
    }
    public function tarif_rawat_jalan()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/menu');
        $this->load->view('informasi/tarif_rawat_jalan');
        $this->load->view('templates/admin/footer');
    }
    public function tarif_rawat_inap()
    {
        $data['tarif'] = $this->Informasi_models->join_tarif_tindakan()->result();

        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/menu');
        $this->load->view('informasi/tarif_rawat_inap',$data);
        $this->load->view('templates/admin/footer');
    }
    public function jadwal_praktek_dokter()
    {
        $data['jadwal']  = $this->Informasi_models->join_jadwal()->result();

        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/menu');
        $this->load->view('informasi/jadwal_praktek_dokter',$data);
        $this->load->view('templates/admin/footer');
    }
}
