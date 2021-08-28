<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form', 'url');
        $this->load->model('main_models');
        //vaidasi session login
        if ($this->session->userdata('status') != "login") {
            $this->load->view('auth/login');
        }
    }
    public function index()
    {
        if ($this->session->userdata('status') != "login") {
        } else {
            $data['pasien']         = $this->main_models->all_data('pasien')->result(); ////Dari tabel pasien
            $data['dokter']         = $this->main_models->all_data('dokter')->result(); ////Dari tabel dokter
            $data['unit']           = $this->main_models->all_data('poliklinik')->result(); //Dari tabel poliklinik
            $data['perujuk']        = $this->main_models->all_data('rujuk_masuk')->result(); //Dari tabel rujuk_masuk
            $data['penjab']         = $this->main_models->all_data('penjab')->result(); //Dari tabel penjab(penanggung jawab)
            $data['rujukan']   = $this->main_models->join_rujukan_poli()->result(); //Dari tabel rujukan_internal_poli
            $data['rekam_medik']    = $this->main_models->join_rm_pasien()->result(); //Dari tabel reg_periksa
            $data['no_registrasi']  = $this->main_models->get_no_registrasi();
            $data['no_rawat']       = $this->main_models->get_no_rawat();
            $data['pegawai']        = $this->main_models->all_data('pegawai')->result(); //Dari tabel pegawai
            $data['spesialis']      = $this->main_models->all_data('spesialis')->result(); //Dari tabel spesialis
            $data['kabupaten']      = $this->main_models->all_data('kabupaten')->result(); //Dari tabel kabupaten
            $data['kecamatan']      = $this->main_models->all_data('kecamatan')->result(); //Dari tabel kecamatan
            $data['kelurahan']      = $this->main_models->all_data('kelurahan')->result(); //Dari tabel kelurahan
            $data['propinsi']       = $this->main_models->all_data('propinsi')->result(); //Dari tabel propinsi
            $data['suku']           = $this->main_models->all_data('suku_bangsa')->result(); //Dari tabel suku_bangsa
            $data['bahasa']         = $this->main_models->all_data('bahasa_pasien')->result(); //Dari tabel bahasa_pasien
            $data['cacat']          = $this->main_models->all_data('cacat_fisik')->result(); //Dari tabel cacat_fisik
            // show by date
            // $date1 = $this->input->post('date_from');
            // $date2 = $this->input->post('date_to');
            // $data_arr = array(
            // 'date1' => $date1,
            // 'date2' => $date2
            // );
            // $data = $this->main_models->reg_periksa_by_date_range($data_arr);
            // if ($date1 == "" || $date2 == "") {
            // $data['date_range_error_message'] = "Both date fields are required";
            // } else {
            // $result = $this->main_models->reg_periksa_by_date_range($data_arr);
            // if ($result != false) {
            // $data['barang_kategori'] = $this->main_models->reg_periksa_by_date_range($data_arr);

            $data['reg_awal']       = $this->main_models->join_reg_periksa()->result(); //Dari tabel reg periksa,pasein,dokter,poliklinik dan penjab
            $this->load->view('templates/admin/header');
            $this->load->view('admin/registrasi', $data);
            $this->load->view('templates/admin/footer');
            // }else {
            //     $this->toastr->warning('Tidak ada data pada periode yang anda tentukan!');
            //     redirect('admin/registrasi');
            //     }
            // }
        }
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

    public function insert_registrasi()
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
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi');
    }

    // Dokter Di tuju CRUD Function
    public function dokter_dituju()
    {
        $data['dokter']     = $this->main_models->all_data('dokter')->result(); //Dari tabel dokter
        $data['spesialis']      = $this->main_models->all_data('spesialis')->result(); //Dari tabel spesialis

        $this->load->view('templates/admin/header');
        $this->load->view('admin/dokter_dituju', $data);
        $this->load->view('templates/admin/footer');
    }

    //  Function autofill dokter
    public function get_nik()
    {
        if (!$this->input->is_ajax_request()) :
            show_404();
        else :
            $nik = $this->main_models->get_nik();
            if ($nik->num_rows() > 0) :
                $this->result['status'] = true;
                foreach ($nik->result() as $key => $value) :
                    $this->result['data'][$key]['nik'] = $value->nik;
                    $this->result['data'][$key]['nama'] = $value->nama;
                endforeach;
            endif;

            echo json_encode($this->result);
        endif;
    }
    //  Function autofill add data Dokter
    public function get_pegawai()
    {
        if (!$this->input->is_ajax_request()) :
            show_404();
        else :
            $nik   = $this->input->get('nik');
            $pegawai  = $this->main_models->get_pegawai($nik);
            if ($pegawai->num_rows() > 0) :
                $this->result['status'] = true;
                $this->result['data']   = $pegawai->row_array();
            endif;

            echo json_encode($this->result);
        endif;
    }
    public function insert_dokter_dituju()
    {
        $this->form_validation->set_rules('nik', 'Kode Dokter', 'trim|required|is_unique[dokter.kd_dokter]');

        $a = $this->input->post('nik');
        $b = $this->input->post('agama');
        $c = $this->input->post('stts_nikah');
        $d = $this->input->post('nama');
        $e = $this->input->post('alamat');
        $f = $this->input->post('jk');
        $g = $this->input->post('goldar');
        $h = $this->input->post('no_telp');
        $i = $this->input->post('tmp_lahir');
        $j = $this->input->post('tgl_lahir');
        $k = $this->input->post('spesialis');
        $l = $this->input->post('no_ijin_praktek');
        $m = $this->input->post('alumni');
        $data = array(
            'kd_dokter' => $a,
            'agama' => $b,
            'stts_nikah' => $c,
            'nm_dokter' => $d,
            'almt_tgl' => $e,
            'jk' => $f,
            'gol_drh' => $g,
            'no_telp' => $h,
            'tmp_lahir' => $i,
            'tgl_lahir' => $j,
            'kd_sps' => $k,
            'no_ijn_praktek' => $l,
            'alumni' => $m
        );


        if ($this->form_validation->run() == FALSE) {
            $data['dokter']     = $this->main_models->all_data('dokter')->result(); //Dari tabel dokter
            $data['spesialis']      = $this->main_models->all_data('spesialis')->result(); //Dari tabel spesialis

            $this->load->view('templates/admin/header');
            $this->load->view('admin/dokter_dituju', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->main_models->insert($data, 'dokter');
            $this->toastr->success('Data Berhasil Tersimpan');
            redirect('admin/registrasi/dokter_dituju');
        }
    }

    public function get_update_dokter_dituju($kd_dokter)
    {
        $data['dokter']         = $this->main_models->all_data('dokter')->result(); //Dari tabel dokter
        $data['spesialis']      = $this->main_models->all_data('spesialis')->result(); //Dari tabel spesialis
        $data['dokterById']     = $this->main_models->getDataDokterById($kd_dokter);

        $this->load->view('templates/admin/header');
        $this->load->view('admin/dokter_dituju', $data);
        $this->load->view('templates/admin/footer');
    }

    public function update_dokter_dituju($kd_dokter)
    {
        $a = $this->input->post('nik');
        $b = $this->input->post('agama');
        $c = $this->input->post('stts_nikah');
        $d = $this->input->post('nama');
        $e = $this->input->post('alamat');
        $f = $this->input->post('jk');
        $g = $this->input->post('goldar');
        $h = $this->input->post('no_telp');
        $i = $this->input->post('tmp_lahir');
        $j = $this->input->post('tgl_lahir');
        $k = $this->input->post('spesialis');
        $l = $this->input->post('no_ijin_praktek');
        $m = $this->input->post('alumni');
        $data = array(
            'kd_dokter' => $a,
            'agama' => $b,
            'stts_nikah' => $c,
            'nm_dokter' => $d,
            'almt_tgl' => $e,
            'jk' => $f,
            'gol_drh' => $g,
            'no_telp' => $h,
            'tmp_lahir' => $i,
            'tgl_lahir' => $j,
            'kd_sps' => $k,
            'no_ijn_praktek' => $l,
            'alumni' => $m
        );
        $where = array(
            'kd_dokter' => $kd_dokter
        );
        $this->main_models->update_data('dokter', $data, $where);
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/dokter_dituju');
    }
    public function delete_dokter_dituju($kd_dokter)
    {
        $where = array('kd_dokter' => $kd_dokter);
        $this->main_models->deleteData($where, 'dokter');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/dokter_dituju');
    }

    // CRUD Poliklinik/unit function
    public function poliklinik()
    {
        $data['unit']           = $this->main_models->all_data('poliklinik')->result(); //Dari tabel poliklinik
        $this->load->view('templates/admin/header');
        $this->load->view('admin/poliklinik', $data);
        $this->load->view('templates/admin/footer');
    }


    public function insert_poliklinik()
    {
        $this->form_validation->set_rules('kd_poli', 'Kode Poliklinik', 'trim|required|is_unique[poliklinik.kd_poli]');
        $a = $this->input->post('nm_poli');
        $b = $this->input->post('kd_poli');
        $c = $this->input->post('registrasi_baru');
        $d = $this->input->post('registrasi_lama');

        $data = array(
            'nm_poli' => $a,
            'kd_poli' => $b,
            'registrasi' => $c,
            'registrasilama' => $d,

        );
        if ($this->form_validation->run() == FALSE) {
            $data['unit']           = $this->main_models->all_data('poliklinik')->result(); //Dari tabel poliklinik

            $this->load->view('templates/admin/header');
            $this->load->view('admin/poliklinik', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->main_models->insert($data, 'poliklinik');
            $this->toastr->success('Data Berhasil Tersimpan');
            redirect('admin/registrasi/poliklinik');
        }
    }

    public function get_update_poli($kd_poli)
    {
        $data['unit']           = $this->main_models->all_data('poliklinik')->result(); //Dari tabel poliklinik
        $data['poliById']       = $this->main_models->getDataPoliById($kd_poli);

        $this->load->view('templates/admin/header');
        $this->load->view('admin/poliklinik', $data);
        $this->load->view('templates/admin/footer');
    }

    public function update_poli($kd_poli)
    {
        $this->form_validation->set_rules('kd_poli', 'Kode Poliklinik', 'trim|required|is_unique[poliklinik.kd_poli]');
        $a = $this->input->post('nm_poli');
        $b = $this->input->post('kd_poli');
        $c = $this->input->post('registrasi_baru');
        $d = $this->input->post('registrasi_lama');

        $data = array(
            'nm_poli' => $a,
            'kd_poli' => $b,
            'registrasi' => $c,
            'registrasilama' => $d,

        );
        $where = array(
            'kd_poli' => $kd_poli
        );
        $this->main_models->update_data('poliklinik', $data, $where);
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/poliklinik');
    }

    public function delete_poli($kd_poli)
    {
        $where = array('kd_poli' => $kd_poli);
        $this->main_models->deleteData($where, 'poliklinik');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/poliklinik');
    }

    // CRUD Jenis Bayar/Asuransi/Penangung Jawab pasien Function
    public function jenis_bayar()
    {
        $data['penjab']         = $this->main_models->all_data('penjab')->result(); //Dari tabel penjab(penanggung jawab)

        $this->load->view('templates/admin/header');
        $this->load->view('admin/jenis_bayar', $data);
        $this->load->view('templates/admin/footer');
    }
    public function insert_penanggung_pasien()
    {
        $this->form_validation->set_rules('kd_pj', 'Kode Asuransi', 'trim|required|is_unique[penjab.kd_pj]');
        $a = $this->input->post('kd_pj');
        $b = $this->input->post('nama');
        $c = $this->input->post('no_telp');
        $d = $this->input->post('nama_perusahaan');
        $e = $this->input->post('attn');
        $f = $this->input->post('alamat_asuransi');

        $data = array(
            'kd_pj' => $a,
            'png_jawab' => $b,
            'no_telp' => $c,
            'nama_perusahaan' => $d,
            'attn' => $e,
            'alamat_asuransi' => $f
        );
        if ($this->form_validation->run() == FALSE) {
            $data['penjab']         = $this->main_models->all_data('penjab')->result(); //Dari tabel penjab(penanggung jawab)

            $this->load->view('templates/admin/header');
            $this->load->view('admin/jenis_bayar', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->main_models->insert($data, 'penjab');
            $this->toastr->success('Data Berhasil Tersimpan');
            redirect('admin/registrasi/jenis_bayar');
        }
    }
    public function get_update_jenis_bayar($kd_pj)
    {
        $data['penjab']         = $this->main_models->all_data('penjab')->result(); //Dari tabel penjab(penanggung jawab)
        $data['penjabById']     = $this->main_models->getDataPenjabById($kd_pj);
        $this->load->view('templates/admin/header');
        $this->load->view('admin/jenis_bayar', $data);
        $this->load->view('templates/admin/footer');
    }
    public function update_jenis_bayar($kd_pj)
    {
        $a = $this->input->post('kd_pj');
        $b = $this->input->post('nama');
        $c = $this->input->post('no_telp');
        $d = $this->input->post('nama_perusahaan');
        $e = $this->input->post('attn');
        $f = $this->input->post('alamat_asuransi');

        $data = array(
            'kd_pj' => $a,
            'png_jawab' => $b,
            'no_telp' => $c,
            'nama_perusahaan' => $d,
            'attn' => $e,
            'alamat_asuransi' => $f
        );
        $where = array(
            'kd_pj' => $kd_pj
        );
        $this->main_models->update_data('penjab', $data, $where);
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/jenis_bayar');
    }

    public function delete_jenis_bayar($kd_pj)
    {
        $where = array('kd_pj' => $kd_pj);
        $this->main_models->deleteData($where, 'penjab');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/jenis_bayar');
    }


    public function pasien()
    {
        $data['no_rekam_medik']       = $this->main_models->get_antrian_rekam_medik();
        $data['pasien']       = $this->main_models->join_pasien()->result();

        // $data['pasien']         = $this->main_models->all_data('pasien')->result(); ////Dari tabel pasien
        // $data['kabupaten']      = $this->main_models->all_data('kabupaten')->result(); //Dari tabel kabupaten
        // $data['kecamatan']      = $this->main_models->all_data('kecamatan')->result(); //Dari tabel kecamatan
        // $data['kelurahan']      = $this->main_models->all_data('kelurahan')->result(); //Dari tabel kelurahan
        // $data['propinsi']      = $this->main_models->all_data('propinsi')->result(); //Dari tabel propinsi
        // $data['suku']           = $this->main_models->all_data('suku_bangsa')->result(); //Dari tabel suku_bangsa
        // $data['bahasa']           = $this->main_models->all_data('bahasa_pasien')->result(); //Dari tabel bahasa_pasien
        // $data['cacat']           = $this->main_models->all_data('cacat_fisik')->result(); //Dari tabel cacat_fisik
        // $data['penjab']         = $this->main_models->all_data('penjab')->result(); //Dari tabel penjab(penanggung jawab)
        // $data['perusahaan']         = $this->main_models->all_data('perusahaan_pasien')->result(); //Dari tabel Perusahhan Pasien

        $this->load->view('templates/admin/header');
        $this->load->view('admin/pasien', $data);
        $this->load->view('templates/admin/footer');
    }

    public function insert_pasien_baru()
    {
        $a = $this->input->post('no_rkm_medis');
        $b = $this->input->post('agama');
        $c = $this->input->post('status_nikah');
        $d = $this->input->post('nama_pasien');
        $f = $this->input->post('asuransi');
        $g = $this->input->post('jenis_kelamin');
        $h = $this->input->post('goldar');
        $i = $this->input->post('no_peserta');
        $j = $this->input->post('email');
        $k = $this->input->post('tempat_lahir');
        $l = $this->input->post('tgl_lahir');
        $m = $this->input->post('no_telpon');
        $n = $this->input->post('pertama_daftar');
        $o = $this->input->post('Tahun');
        $p = $this->input->post('Bulan');
        $q = $this->input->post('Hari');
        $umur_lengkap = "$o TH " . "$p BL " . "$q HR";
        $r = $this->input->post('pendidikan');
        $s = $this->input->post('pekerjaan');
        $t = $this->input->post('identitas');
        $u = $this->input->post('ibu');
        $v = $this->input->post('alamat_pasien');
        $w = $this->input->post('penjab');
        $x = $this->input->post('kelurahan');
        $y = $this->input->post('kecamatan');
        $z = $this->input->post('kabupaten');
        $aa = $this->input->post('provinsi');
        $ab = $this->input->post('nama_penjab');
        $ac = $this->input->post('alamat_penjab');
        $ad = $this->input->post('pekerjaan_penjab');
        $af = $this->input->post('kelurahan_penjab');
        $ag = $this->input->post('kecamatan_penjab');
        $ah = $this->input->post('suku');
        $ai = $this->input->post('kabupaten_penjab');
        $aj = $this->input->post('provinsi_penjab');
        $ak = $this->input->post('bahasa');
        $al = $this->input->post('instansi');
        $am = $this->input->post('nip');
        $an = $this->input->post('cacat_fisik');

        $data = array(
            'no_rkm_medis' => $a,
            'nm_pasien' => $d,
            'no_ktp' => $t,
            'jk' => $g,
            'tmp_lahir' => $k,
            'tgl_lahir' => $l,
            'nm_ibu' => $u,
            'alamat' => $v,
            'gol_darah' => $h,
            'pekerjaan' => $s,
            'stts_nikah' => $c,
            'agama' => $b,
            'tgl_daftar' => $n,
            'no_tlp' => $m,
            'umur' => $umur_lengkap,
            'pnd' => $r,
            'keluarga' => $w,
            'namakeluarga' => $ab,
            'kd_pj' => $f,
            'no_peserta' => $i,
            'kd_kel' => $x,
            'kd_kec' => $y,
            'kd_kab' => $z,
            'pekerjaanpj' => $ad,
            'alamatpj' => $ac,
            'kelurahanpj' => $af,
            'kecamatanpj' => $ag,
            'kabupatenpj' => $ah,
            'perusahaan_pasien' => $al,
            'suku_bangsa' => $ah,
            'bahasa_pasien' => $ak,
            'cacat_fisik' => $an,
            'email' => $j,
            'nip' => $am,
            'kd_prop' => $aa,
            'propinsipj' => $aj
        );
        $this->main_models->insert($data, 'pasien');
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/pasien');
    }

    public function get_update_pasien($no_rkm_medis)
    {
        $data['no_rekam_medik']       = $this->main_models->get_antrian_rekam_medik();
        $data['pasien']         = $this->main_models->all_data('pasien')->result(); ////Dari tabel pasien
        $data['kabupaten']      = $this->main_models->all_data('kabupaten')->result(); //Dari tabel kabupaten
        $data['kecamatan']      = $this->main_models->all_data('kecamatan')->result(); //Dari tabel kecamatan
        $data['kelurahan']      = $this->main_models->all_data('kelurahan')->result(); //Dari tabel kelurahan
        $data['propinsi']      = $this->main_models->all_data('propinsi')->result(); //Dari tabel propinsi
        $data['suku']           = $this->main_models->all_data('suku_bangsa')->result(); //Dari tabel suku_bangsa
        $data['bahasa']           = $this->main_models->all_data('bahasa_pasien')->result(); //Dari tabel bahasa_pasien
        $data['cacat']           = $this->main_models->all_data('cacat_fisik')->result(); //Dari tabel cacat_fisik
        $data['penjab']         = $this->main_models->all_data('penjab')->result(); //Dari tabel penjab(penanggung jawab)
        $data['perusahaan']         = $this->main_models->all_data('perusahaan_pasien')->result(); //Dari tabel Perusahhan Pasien
        $data['pasienById']     = $this->main_models->getDataPasienById($no_rkm_medis);
        $this->load->view('templates/admin/header');
        $this->load->view('admin/pasien', $data);
        $this->load->view('templates/admin/footer');
    }

    public function update_pasien($no_rkm_medis)
    {
        $a = $this->input->post('no_rkm_medis');
        $b = $this->input->post('agama');
        $c = $this->input->post('status_nikah');
        $d = $this->input->post('nama_pasien');
        $f = $this->input->post('asuransi');
        $g = $this->input->post('jenis_kelamin');
        $h = $this->input->post('goldar');
        $i = $this->input->post('no_peserta');
        $j = $this->input->post('email');
        $k = $this->input->post('tempat_lahir');
        $l = $this->input->post('tgl_lahir');
        $m = $this->input->post('no_telpon');
        $n = $this->input->post('pertama_daftar');
        $o = $this->input->post('Tahun');
        $p = $this->input->post('Bulan');
        $q = $this->input->post('Hari');
        $umur_lengkap = "$o TH " . "$p BL " . "$q HR";
        $r = $this->input->post('pendidikan');
        $s = $this->input->post('pekerjaan');
        $t = $this->input->post('identitas');
        $u = $this->input->post('ibu');
        $v = $this->input->post('alamat_pasien');
        $w = $this->input->post('penjab');
        $x = $this->input->post('kelurahan');
        $y = $this->input->post('kecamatan');
        $z = $this->input->post('kabupaten');
        $aa = $this->input->post('provinsi');
        $ab = $this->input->post('nama_penjab');
        $ac = $this->input->post('alamat_penjab');
        $ad = $this->input->post('pekerjaan_penjab');
        $af = $this->input->post('kelurahan_penjab');
        $ag = $this->input->post('kecamatan_penjab');
        $ah = $this->input->post('suku');
        $ai = $this->input->post('kabupaten_penjab');
        $aj = $this->input->post('provinsi_penjab');
        $ak = $this->input->post('bahasa');
        $al = $this->input->post('instansi');
        $am = $this->input->post('nip');
        $an = $this->input->post('cacat_fisik');

        $data = array(
            'no_rkm_medis' => $a,
            'nm_pasien' => $d,
            'no_ktp' => $t,
            'jk' => $g,
            'tmp_lahir' => $k,
            'tgl_lahir' => $l,
            'nm_ibu' => $u,
            'alamat' => $v,
            'gol_darah' => $h,
            'pekerjaan' => $s,
            'stts_nikah' => $c,
            'agama' => $b,
            'tgl_daftar' => $n,
            'no_tlp' => $m,
            'umur' => $umur_lengkap,
            'pnd' => $r,
            'keluarga' => $w,
            'namakeluarga' => $ab,
            'kd_pj' => $f,
            'no_peserta' => $i,
            'kd_kel' => $x,
            'kd_kec' => $y,
            'kd_kab' => $z,
            'pekerjaanpj' => $ad,
            'alamatpj' => $ac,
            'kelurahanpj' => $af,
            'kecamatanpj' => $ag,
            'kabupatenpj' => $ah,
            'perusahaan_pasien' => $al,
            'suku_bangsa' => $ah,
            'bahasa_pasien' => $ak,
            'cacat_fisik' => $an,
            'email' => $j,
            'nip' => $am,
            'kd_prop' => $aa,
            'propinsipj' => $aj
        );
        $where = array(
            'no_rekam_medis' => $no_rkm_medis,
        );
        $this->main_models->update_data('pasien', $data, $where);
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/tambah_pasien_baru');
    }

    public function delete_pasien($no_rkm_medis)
    {
        $where = array('no_rkm_medis' => $no_rkm_medis);
        $this->main_models->deleteData($where, 'pasien');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/pasien');
    }

    public function tambah_cacat_fisik()
    {
        $data['cacat']           = $this->main_models->all_data('cacat_fisik')->result(); //Dari tabel cacat_fisik

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_cacat_fisik', $data);
        $this->load->view('templates/admin/footer');
    }
    public function insert_cacat_fisik()
    {
        $a = $this->input->post('nama_cacat');
        $data = array(
            'nama_cacat' => $a
        );
        $this->main_models->insert($data, 'cacat_fisik');
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/tambah_cacat_fisik');
    }
    public function delete_cacat_fisik($id)
    {
        $where = array('id' => $id);
        $this->main_models->deleteData($where, 'cacat_fisik');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/tambah_cacat_fisik');
    }

    public function tambah_bahasa()
    {
        $data['bahasa']           = $this->main_models->all_data('bahasa_pasien')->result(); //Dari tabel bahasa_pasien

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_bahasa', $data);
        $this->load->view('templates/admin/footer');
    }
    public function insert_bahasa()
    {
        $a = $this->input->post('nama_bahasa');
        $data = array(
            'nama_bahasa' => $a
        );
        $this->main_models->insert($data, 'bahasa_pasien');
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/tambah_bahasa');
    }
    public function delete_bahasa($id)
    {
        $where = array('id' => $id);
        $this->main_models->deleteData($where, 'bahasa_pasien');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/tambah_bahasa');
    }

    public function tambah_suku()
    {
        $data['suku']           = $this->main_models->all_data('suku_bangsa')->result(); //Dari tabel suku_bangsa

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_suku', $data);
        $this->load->view('templates/admin/footer');
    }

    public function insert_suku()
    {
        $a = $this->input->post('nama_suku');
        $data = array(
            'nama_suku_bangsa' => $a
        );
        $this->main_models->insert($data, 'suku_bangsa');
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/tambah_suku');
    }
    public function delete_suku($id)
    {
        $where = array('id' => $id);
        $this->main_models->deleteData($where, 'suku_bangsa');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/tambah_suku');
    }
    public function tambah_kelurahan()
    {
        $data['kelurahan']           = $this->main_models->all_data('kelurahan')->result(); //Dari tabel kelurahan

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_kelurahan', $data);
        $this->load->view('templates/admin/footer');
    }

    public function insert_kelurahan()
    {
        $a = $this->input->post('nama_kelurahan');
        $data = array(
            'nm_kel' => $a
        );
        $this->main_models->insert($data, 'kelurahan');
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/tambah_kelurahan');
    }
    public function delete_kelurahan($kd_kel)
    {
        $where = array('kd_kel' => $kd_kel);
        $this->main_models->deleteData($where, 'kelurahan');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/tambah_kelurahan');
    }

    public function tambah_kecamatan()
    {
        $data['kecamatan']           = $this->main_models->all_data('kecamatan')->result(); //Dari tabel kecamatan

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_kecamatan', $data);
        $this->load->view('templates/admin/footer');
    }

    public function insert_kecamatan()
    {
        $a = $this->input->post('nama_kec');
        $data = array(
            'nm_kec' => $a
        );
        $this->main_models->insert($data, 'kecamatan');
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/tambah_kecamatan');
    }
    public function delete_kecamatan($kd_kec)
    {
        $where = array('kd_kec' => $kd_kec);
        $this->main_models->deleteData($where, 'kecamatan');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/tambah_kecamatan');
    }
    public function tambah_kabupaten()
    {
        $data['kabupaten']           = $this->main_models->all_data('kabupaten')->result(); //Dari tabel kabupaten

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_kabupaten', $data);
        $this->load->view('templates/admin/footer');
    }
    public function insert_kabupaten()
    {
        $a = $this->input->post('nm_kab');
        $data = array(
            'nm_kab' => $a
        );
        $this->main_models->insert($data, 'kabupaten');
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/tambah_kabupaten');
    }
    public function delete_kabupaten($kd_kab)
    {
        $where = array('kd_kab' => $kd_kab);
        $this->main_models->deleteData($where, 'kabupaten');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/tambah_kabupaten');
    }
    public function tambah_provinsi()
    {
        $data['provinsi']           = $this->main_models->all_data('propinsi')->result(); //Dari tabel propinsi

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_provinsi', $data);
        $this->load->view('templates/admin/footer');
    }
    public function insert_provinsi()
    {
        $a = $this->input->post('nm_prop');
        $data = array(
            'nm_prop' => $a
        );
        $this->main_models->insert($data, 'propinsi');
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/tambah_provinsi');
    }
    public function delete_propinsi($kd_prop)
    {
        $where = array('kd_prop' => $kd_prop);
        $this->main_models->deleteData($where, 'propinsi');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/tambah_provinsi');
    }
    public function tambah_spesialis()
    {
        $data['spesialis']      = $this->main_models->all_data('spesialis')->result(); //Dari tabel spesialis

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_spesialis', $data);
        $this->load->view('templates/admin/footer');
    }
    public function tambah_instansi_pasien()
    {
        $data['instansi']      = $this->main_models->all_data('perusahaan_pasien')->result(); //Dari tabel perusahaan pasien

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_instansi_pasien', $data);
        $this->load->view('templates/admin/footer');
    }

    public function insert_instansi_pasien()
    {
        $this->form_validation->set_rules('kode_perusahaan', 'Kode Perusahaan', 'trim|required|is_unique[perusahaan_pasien.kode_perusahaan]');
        $a = $this->input->post('kode_perusahaan');
        $b = $this->input->post('nama_perusahaan');
        $c = $this->input->post('no_telp');
        $d = $this->input->post('kota');
        $e = $this->input->post('alamat');

        $data = array(
            'kode_perusahaan' => $a,
            'nama_perusahaan' => $b,
            'alamat' => $e,
            'kota' => $d,
            'no_telp' => $c
        );
        if ($this->form_validation->run() == FALSE) {
            $data['instansi']      = $this->main_models->all_data('perusahaan_pasien')->result(); //Dari tabel perusahaan pasien

            $this->load->view('templates/admin/header');
            $this->load->view('admin/tambah_instansi_pasien', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->main_models->insert($data, 'perusahaan_pasien');
            $this->toastr->success('Data Berhasil Tersimpan');
            redirect('admin/registrasi/tambah_instansi_pasien');
        }
    }

    public function get_update_instansi($kode_perusahaan)
    {
        $data['instansi']      = $this->main_models->all_data('perusahaan_pasien')->result(); //Dari tabel perusahaan pasien
        $data['instansiById']     = $this->main_models->getDataInstansiById($kode_perusahaan);
        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_instansi_pasien', $data);
        $this->load->view('templates/admin/footer');
    }

    public function update_instansi_pasien($kode_perusahaan)
    {
        $a = $this->input->post('kode_perusahaan');
        $b = $this->input->post('nama_perusahaan');
        $c = $this->input->post('no_telp');
        $d = $this->input->post('kota');
        $e = $this->input->post('alamat');

        $data = array(
            'kode_perusahaan' => $a,
            'nama_perusahaan' => $b,
            'alamat' => $e,
            'kota' => $d,
            'no_telp' => $c
        );
        $where = array(
            'kode_perusahaan' => $kode_perusahaan
        );
        $this->main_models->update_data('perusahaan_pasien', $data, $where);
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/tambah_instansi_pasien');
    }

    public function delete_instansi($kode_perusahaan)
    {
        $where = array('kode_perusahaan' => $kode_perusahaan);
        $this->main_models->deleteData($where, 'perusahaan_pasien');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/tambah_instansi_pasien');
    }

    public function triase_igd()
    {
        $data['triase']           = $this->main_models->join_triase_igd()->result(); //Dari tabel data triase igd
        $data['macam_kasus']      = $this->main_models->all_data('master_triase_macam_kasus')->result(); //Dari tabel data triase macam kasus igd
        $data['dokter']           = $this->main_models->all_data('dokter')->result(); ////Dari tabel dokter
        $this->load->view('templates/admin/header');
        $this->load->view('admin/triase_igd', $data);
        $this->load->view('templates/admin/footer');
    }

    public function get_no_rkm_medis_triase()
    {
        if (!$this->input->is_ajax_request()) :
            show_404();
        else :
            $no_rkm_medis = $this->main_models->get_no_rkm_medis();
            if ($no_rkm_medis->num_rows() > 0) :
                $this->result['status'] = true;
                foreach ($no_rkm_medis->result() as $key => $value) :
                    $this->result['data'][$key]['no_rawat'] = $value->no_rawat;
                    $this->result['data'][$key]['no_rkm_medis'] = $value->no_rkm_medis;
                    $this->result['data'][$key]['nm_pasien'] = $value->nm_pasien;
                endforeach;
            endif;

            echo json_encode($this->result);
        endif;
    }

    public function macam_kasus()
    {
        $data['macam_kasus']      = $this->main_models->all_data('master_triase_macam_kasus')->result(); //Dari tabel data triase macam kasus igd

        $this->load->view('templates/admin/header');
        $this->load->view('admin/tambah_macam_kasus', $data);
        $this->load->view('templates/admin/footer');
    }

    public function insert_macam_kasus()
    {
        $a = $this->input->post('kode_kasus');
        $b = $this->input->post('macam_kasus');
        $data = array(
            'kode_kasus' => $a,
            'macam_kasus' => $b
        );
        $this->main_models->insert($data, 'master_triase_macam_kasus');
        $this->toastr->success('Data Berhasil Tersimpan');
        redirect('admin/registrasi/macam_kasus');
    }
    public function delete_macam_kasus($kode_kasus)
    {
        $where = array('kode_kasus' => $kode_kasus);
        $this->main_models->deleteData($where, 'master_triase_macam_kasus');
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->toastr->error('Data Gagal Dihapus, Sedang di gunakan pada tabel lain.');
        } else {
            $this->toastr->success('Data Berhasil Terhapus');
        }
        redirect('admin/registrasi/macam_kasus');
    }
    public function penilaian_keperawatan()
    {
        $data['keperawatan']      = $this->main_models->join_penilaian_ralan()->result(); //Dari tabel data penilaian_awal_keperawatan_ralan
        $this->load->view('templates/admin/header');
        $this->load->view('admin/penilaian_keperawatan', $data);
        $this->load->view('templates/admin/footer');
    }

    public function penilaian_gigimulut()
    {
        $data['keperawatan']      = $this->main_models->join_penilaian_gigi()->result(); //Dari tabel data penilaian_awal_keperawatan_gigi

        $this->load->view('templates/admin/header');
        $this->load->view('admin/penilaian_gigimulut', $data);
        $this->load->view('templates/admin/footer');
    }
    public function penilaian_kebidanan()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/penilaian_kebidanan');
        $this->load->view('templates/admin/footer');
    }
    public function penilaian_bayi()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/penilaian_bayi');
        $this->load->view('templates/admin/footer');
    }
    public function resume_pasien()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/resume_pasien');
        $this->load->view('templates/admin/footer');
    }
    public function diagnosa_pasien()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/diagnosa_pasien');
        $this->load->view('templates/admin/footer');
    }
    public function deteksi_corona()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/deteksi_corona');
        $this->load->view('templates/admin/footer');
    }
    public function hemodialisa()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/hemodialisa');
        $this->load->view('templates/admin/footer');
    }
    public function permintaan_operasi()
    {
        $this->load->view('templates/admin/header');
        $this->load->view('admin/permintaan_operasi');
        $this->load->view('templates/admin/footer');
    }
}
