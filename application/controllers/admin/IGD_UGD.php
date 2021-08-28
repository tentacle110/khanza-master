<?php

defined('BASEPATH') or exit('No direct script access allowed');

class IGD_UGD extends CI_Controller
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
    public function index()
    {
        $data['pasien']         = $this->main_models->all_data('pasien')->result(); ////Dari tabel pasien
        $data['dokter']         = $this->main_models->all_data('dokter')->result(); ////Dari tabel dokter
        $data['unit']           = $this->main_models->all_data('poliklinik')->result(); //Dari tabel poliklinik
        $data['perujuk']        = $this->main_models->all_data('rujuk_masuk')->result(); //Dari tabel rujuk_masuk
        $data['penjab']         = $this->main_models->all_data('penjab')->result(); //Dari tabel penjab(penanggung jawab)
        $data['rekam_medik']    = $this->main_models->join_rm_pasien()->result(); //Dari tabel reg_periksa
        $data['no_registrasi']  = $this->main_models->get_no_registrasi();
        $data['no_rawat']       = $this->main_models->get_no_rawat();
        $data['no_rekam_medik'] = $this->main_models->get_no_rkm_medis();
        $data['pegawai']        = $this->main_models->all_data('pegawai')->result(); //Dari tabel pegawai
        $data['spesialis']      = $this->main_models->all_data('spesialis')->result(); //Dari tabel spesialis
        $data['kabupaten']      = $this->main_models->all_data('kabupaten')->result(); //Dari tabel kabupaten
        $data['kecamatan']      = $this->main_models->all_data('kecamatan')->result(); //Dari tabel kecamatan
        $data['kelurahan']      = $this->main_models->all_data('kelurahan')->result(); //Dari tabel kelurahan
        $data['propinsi']      = $this->main_models->all_data('propinsi')->result(); //Dari tabel propinsi
        $data['suku']           = $this->main_models->all_data('suku_bangsa')->result(); //Dari tabel suku_bangsa
        $data['bahasa']         = $this->main_models->all_data('bahasa_pasien')->result(); //Dari tabel bahasa_pasien
        $data['cacat']          = $this->main_models->all_data('cacat_fisik')->result(); //Dari tabel cacat_fisik
        $this->load->view('templates/admin/header');
        $this->load->view('admin/igd_ugd', $data);
        $this->load->view('templates/admin/footer');
    }

    //  Function autofill registrasi pasien
    public function get_no_rkm_medis()
    {
        if (!$this->input->is_ajax_request()) :
            show_404();
        else :
            $no_rkm_medis = $this->main_models->get_no_rkm_medis();
            if ($no_rkm_medis->num_rows() > 0) :
                $this->result['status'] = true;
                foreach ($no_rkm_medis->result() as $key => $value) :
                    $this->result['data'][$key]['no_rkm_medis'] = $value->no_rkm_medis;
                    $this->result['data'][$key]['nm_pasien'] = $value->nm_pasien;
                endforeach;
            endif;

            echo json_encode($this->result);
        endif;
    }
    //  Function autofill registrasi pasien
    public function get_pasien()
    {
        if (!$this->input->is_ajax_request()) :
            show_404();
        else :
            $no_rkm_medis   = $this->input->get('no_rkm_medis');
            $pasien  = $this->main_models->get_pasien($no_rkm_medis);
            if ($pasien->num_rows() > 0) :
                $this->result['status'] = true;
                $this->result['data']   = $pasien->row_array();
            endif;

            echo json_encode($this->result);
        endif;
    }

    public function insert()
    {
        $a = $this->input->post('no_registrasi');
        $b = $this->input->post('no_rawat');
        $c = $this->input->post('tgl_registrasi');
        $d = $this->input->post('jam_registrasi');
        $e = $this->input->post('dokter_dituju');
        $f = $this->input->post('unit');
        $g = $this->input->post('no_rkm_medis');
        $h = $this->input->post('p_jawab');
        $i = $this->input->post('almt_pj');
        $j = $this->input->post('hubunganpj');
        $k = $this->input->post('stts_daftar');
        $l = $this->input->post('kd_pj');

        // echo $a." ".$b." ".$c." ".$d." "." ".$e. " ".$f." ".$g." ".$h." ".$i." ".$j." ".$k;
        $data = array(
            'no_reg' => $a,
            'no_rawat' => $b,
            'tgl_registrasi' => $c,
            'jam_reg' => $d,
            'kd_dokter' => $e,
            'kd_poli' => $f,
            'no_rkm_medis' => $g,
            'p_jawab' => $h,
            'almt_pj' => $i,
            'hubunganpj' => $j,
            'stts_daftar' => $k,
            'kd_pj' => $l
        );
        $this->main_models->insert($data, 'reg_periksa');
        $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
        redirect('admin/registrasi');
    }



    public function dokter_dituju()
    {
        $data['dokter']     = $this->main_models->all_data('dokter')->result(); //Dari tabel dokter
        $data['spesialis']      = $this->main_models->all_data('spesialis')->result(); //Dari tabel spesialis

        $this->load->view('templates/admin/header');
        $this->load->view('admin/dokter_dituju', $data);
        $this->load->view('templates/admin/footer');
    }
    public function insert_dokter_dituju()
    {
        $a = $this->input->post('kd_dokter');
        $b = $this->input->post('agama');
        $c = $this->input->post('stts_nikah');
        $d = $this->input->post('nama_dokter');
        $e = $this->input->post('alamat');
        $f = $this->input->post('jenis_kelamin');
        $g = $this->input->post('goldar');
        $h = $this->input->post('no_telp');
        $i = $this->input->post('tempat_lahir');
        $j = $this->input->post('tgl_lahir');
        $k = $this->input->post('spesialis');
        $l = $this->input->post('no_ijin_praktek');
        $m = $this->input->post('alumni');
        $data = array(
            'kd_dokter' => $a,
            'agama' => $b,
            'stts_nikah' => $c,
            'nm_dokter' => $d,
            'alamat' => $e,
            'jk' => $f,
            'gol_drh' => $g,
            'no_telp' => $h,
            'tmp_lahir' => $i,
            'tgl_lahir' => $j,
            'kd_sps' => $k,
            'no_ijin_praktek' => $l,
            'alumni' => $m,
        );
        $this->main_models->insert($data, 'reg_periksa');
        $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
        redirect('registrasi');
    }


    public function poliklinik()
    {
        $data['unit']           = $this->main_models->all_data('poliklinik')->result(); //Dari tabel poliklinik

        $this->load->view('templates/admin/header');
        $this->load->view('admin/poliklinik', $data);
        $this->load->view('templates/admin/footer');
    }
    public function insert_poliklinik()
    {
        $a = $this->input->post('nm_poli');
        $b = $this->input->post('kd_poli');
        $c = $this->input->post('registrasi_baru');
        $d = $this->input->post('registrasilama');

        $data = array(
            'nm_poli' => $a,
            'kd_poli' => $b,
            'registrasi' => $c,
            'registrasilama' => $d,

        );
        $this->main_models->insert($data, 'poliklinik');
        $this->session->set_flashdata('category_success', 'Data Berhasil Tersimpan');
        redirect('registrasi');
    }

    public function jenis_bayar()
    {
        $data['penjab']         = $this->main_models->all_data('penjab')->result(); //Dari tabel penjab(penanggung jawab)

        $this->load->view('templates/admin/header');
        $this->load->view('admin/jenis_bayar', $data);
        $this->load->view('templates/admin/footer');
    }
    public function pasien()
    {
        $data['pasien']         = $this->main_models->all_data('pasien')->result(); ////Dari tabel pasien
        $data['kabupaten']      = $this->main_models->all_data('kabupaten')->result(); //Dari tabel kabupaten
        $data['kecamatan']      = $this->main_models->all_data('kecamatan')->result(); //Dari tabel kecamatan
        $data['kelurahan']      = $this->main_models->all_data('kelurahan')->result(); //Dari tabel kelurahan
        $data['propinsi']      = $this->main_models->all_data('propinsi')->result(); //Dari tabel propinsi
        $data['suku']           = $this->main_models->all_data('suku_bangsa')->result(); //Dari tabel suku_bangsa
        $data['bahasa']           = $this->main_models->all_data('bahasa_pasien')->result(); //Dari tabel bahasa_pasien
        $data['cacat']           = $this->main_models->all_data('cacat_fisik')->result(); //Dari tabel cacat_fisik
        $data['penjab']         = $this->main_models->all_data('penjab')->result(); //Dari tabel penjab(penanggung jawab)

        $this->load->view('templates/admin/header');
        $this->load->view('admin/pasien', $data);
        $this->load->view('templates/admin/footer');
    }

    public function tambah_cacat_fisik()
    {
        $data['cacat']           = $this->main_models->all_data('cacat_fisik')->result(); //Dari tabel cacat_fisik

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_cacat_fisik', $data);
        $this->load->view('templates/admin/footer');
    }
    public function tambah_bahasa()
    {
        $data['bahasa']           = $this->main_models->all_data('bahasa_pasien')->result(); //Dari tabel bahasa_pasien

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_bahasa', $data);
        $this->load->view('templates/admin/footer');
    }
    public function tambah_suku()
    {
        $data['suku']           = $this->main_models->all_data('suku_bangsa')->result(); //Dari tabel suku_bangsa

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_suku', $data);
        $this->load->view('templates/admin/footer');
    }
    public function tambah_kelurahan()
    {
        $data['kelurahan']           = $this->main_models->all_data('kelurahan')->result(); //Dari tabel kelurahan

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_kelurahan', $data);
        $this->load->view('templates/admin/footer');
    }
    public function tambah_kecamatan()
    {
        $data['kecamatan']           = $this->main_models->all_data('kecamatan')->result(); //Dari tabel kecamatan

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_kecamatan', $data);
        $this->load->view('templates/admin/footer');
    }
    public function tambah_kabupaten()
    {
        $data['kabupaten']           = $this->main_models->all_data('kabupaten')->result(); //Dari tabel kabupaten

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_kabupaten', $data);
        $this->load->view('templates/admin/footer');
    }
    public function tambah_spesialis()
    {
        $data['spesialis']      = $this->main_models->all_data('spesialis')->result(); //Dari tabel spesialis

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_spesialis', $data);
        $this->load->view('templates/admin/footer');
    }
}
