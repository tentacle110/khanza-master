<?php

class Main_models extends CI_Model
{
    public function all_data($table)
    {
        return $this->db->get($table);
    }
    public function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function tableWhere($where, $table)
    {
        return $query = $this->db->get_where($table, $where);
    }

    function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function getData($where, $table)
    {
        return $query = $this->db->get_where($table, $where);
    }
    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
    public function getDataDokterById($kd_dokter)
    {
        return $this->db->get_where('dokter', array('kd_dokter' => $kd_dokter))->row();
    }
    public function getDataPoliById($kd_poli)
    {
        return $this->db->get_where('poliklinik', array('kd_poli' => $kd_poli))->row();
    }
    public function getDataPenjabById($kd_pj)
    {
        return $this->db->get_where('penjab', array('kd_pj' => $kd_pj))->row();
    }
    public function getDataInstansiById($kode_perusahaan)
    {
        return $this->db->get_where('perusahaan_pasien', array('kode_perusahaan' => $kode_perusahaan))->row();
    }
    public function getDataPasienById($no_rkm_medis)
    {
        return $this->db->get_where('pasien', array('no_rkm_medis' => $no_rkm_medis))->row();
    }
    function join_rm_pasien()
    {
        $this->db->select('*');
        $this->db->from('reg_periksa');
        $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis');
        $query = $this->db->get();
        return $query;
    }

    public function reg_periksa_by_date_range($data_arr) {
        $condition = "tanggal_masuk BETWEEN " . "'" . $data_arr['date1'] . "'" . " AND " . "'" . $data_arr['date2'] . "'";
        $this->db->from('reg_periksa');
        $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis', 'left');
        $this->db->join('dokter', 'dokter.kd_dokter = reg_periksa.kd_dokter', 'left');
        $this->db->join('poliklinik', 'poliklinik.kd_poli = reg_periksa.kd_poli', 'left');
        $this->db->join('penjab', 'penjab.kd_pj = reg_periksa.kd_pj', 'left');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
        return $query->result();
        } else {
        return false;
        }
        }

    function join_reg_periksa()
    {
        $this->db->select('*');
        $this->db->from('reg_periksa');
        $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis', 'left');
        $this->db->join('dokter', 'dokter.kd_dokter = reg_periksa.kd_dokter', 'left');
        $this->db->join('poliklinik', 'poliklinik.kd_poli = reg_periksa.kd_poli', 'left');
        $this->db->join('penjab', 'penjab.kd_pj = reg_periksa.kd_pj', 'left');
        $today = date('Y-m-d');
        $this->db->where('tgl_registrasi', $today);
        $query = $this->db->get();
        return $query;
    }

    public function get_no_rawat()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(no_reg,4)) AS kd_max FROM reg_periksa WHERE DATE(tgl_registrasi)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('y/m/d/') . $kd;
    }
    public function get_no_registrasi()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(no_reg,3)) AS kd_max FROM reg_periksa WHERE DATE(tgl_registrasi)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $kd;
    }
    public function get_antrian_rekam_medik()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(no_rkm_medis,6)) AS kd_max FROM pasien");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%06s", $tmp);
            }
        } else {
            $kd = "000001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $kd;
    }

    public function get_no_rkm_medis()
    {
        $this->db->select('*');
        $this->db->from('pasien');
        // $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis');
        $this->db->group_by('pasien.no_rkm_medis');
        $query = $this->db->get();
        return $query;
    }

    public function get_pasien($no_rkm_medis)
    {
        $this->db->select('*');
        $this->db->from('pasien');
        // $this->db->join('reg_periksa', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis');
        $this->db->join('penjab', 'pasien.kd_pj = penjab.kd_pj','left');
        $this->db->join('kelurahan', 'pasien.kd_kel = kelurahan.kd_kel','left');
        $this->db->join('kecamatan', 'pasien.kd_kec = kecamatan.kd_kec','left');
        $this->db->join('kabupaten', 'pasien.kd_kab = kabupaten.kd_kab','left');
        $this->db->join('perusahaan_pasien', 'pasien.perusahaan_pasien = perusahaan_pasien.kode_perusahaan','left');
        $this->db->join('suku_bangsa', 'pasien.suku_bangsa = suku_bangsa.id','left');
        $this->db->join('bahasa_pasien', 'pasien.bahasa_pasien = bahasa_pasien.id','left');
        $this->db->join('cacat_fisik', 'pasien.cacat_fisik = cacat_fisik.id','left');
        $this->db->join('propinsi', 'pasien.kd_prop = propinsi.kd_prop','left');
        $this->db->where('pasien.no_rkm_medis', $no_rkm_medis);
        $query = $this->db->get();
        return $query;
    }

    public function join_pasien()
    {
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->join('penjab', 'pasien.kd_pj = penjab.kd_pj','left');
        $this->db->join('kelurahan', 'pasien.kd_kel = kelurahan.kd_kel','left');
        $this->db->join('kecamatan', 'pasien.kd_kec = kecamatan.kd_kec','left');
        $this->db->join('kabupaten', 'pasien.kd_kab = kabupaten.kd_kab','left');
        $this->db->join('perusahaan_pasien', 'pasien.perusahaan_pasien = perusahaan_pasien.kode_perusahaan','left');
        $this->db->join('suku_bangsa', 'pasien.suku_bangsa = suku_bangsa.id','left');
        $this->db->join('bahasa_pasien', 'pasien.bahasa_pasien = bahasa_pasien.id','left');
        $this->db->join('cacat_fisik', 'pasien.cacat_fisik = cacat_fisik.id','left');
        $this->db->join('propinsi', 'pasien.kd_prop = propinsi.kd_prop','left');
        $query = $this->db->get();
        return $query;
    }


    // public function join_rujukan_poli()
    // {
    //     $this->db->select('*');
    //     $this->db->from('rujukan_internal_poli');
    //     $this->db->join('reg_periksa', 'reg_periksa.no_rawat = rujukan_internal_poli.no_rawat', 'left');
    //     $this->db->join('dokter', 'dokter.kd_dokter = rujukan_internal_poli.kd_dokter', 'left');
    //     $this->db->join('poliklinik', 'poliklinik.kd_poli = rujukan_internal_poli.kd_poli', 'left');
    //     $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis', 'left');
    //     $this->db->join('penjab', 'penjab.kd_pj = reg_periksa.kd_pj', 'left');
    //     $query = $this->db->get();
    //     return $query;
    // }
    public function join_rujukan_poli()
    {
        $this->db->select('*');
        $this->db->from('reg_periksa');
        //$this->db->join('rujuk', 'rujuk.no_rawat = reg_periksa.no_rawat', 'left');
        $this->db->join('dokter', 'dokter.kd_dokter = reg_periksa.kd_dokter', 'left');
        $this->db->join('poliklinik', 'poliklinik.kd_poli = reg_periksa.kd_poli', 'left');
        $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis', 'left');
        $this->db->join('penjab', 'penjab.kd_pj = reg_periksa.kd_pj', 'left');
        $query = $this->db->get();
        return $query;
    }

    public function join_ranap()
    {
        $this->db->select('*');
        $this->db->from('reg_periksa');
        $this->db->join('dokter', 'dokter.kd_dokter = reg_periksa.kd_dokter');
        $this->db->join('kamar_inap', 'kamar_inap.no_rawat = reg_periksa.no_rawat');
        $this->db->join('kamar', 'kamar.kd_kamar = kamar_inap.kd_kamar');
        $this->db->join('bangsal', 'bangsal.kd_bangsal = kamar.kd_bangsal');
        $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis');
        $this->db->join('penjab', 'penjab.kd_pj = reg_periksa.kd_pj');
        $query = $this->db->get();
        return $query;
    }
    public function join_ranap_by_id($no_rkm_medis)
    {
        $this->db->select('*');
        $this->db->from('kamar_inap');
        $this->db->join('reg_periksa', 'reg_periksa.no_rawat = kamar_inap.no_rawat');
        $this->db->join('dokter', 'dokter.kd_dokter = reg_periksa.kd_dokter');
        $this->db->join('kamar', 'kamar.kd_kamar = kamar_inap.kd_kamar');
        $this->db->join('bangsal', 'bangsal.kd_bangsal = kamar.kd_bangsal');
        $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis');
        $this->db->join('penjab', 'penjab.kd_pj = reg_periksa.kd_pj');
        $this->db->where('reg_periksa.no_rkm_medis', $no_rkm_medis);
        return $this->db->get()->row();
    }
    public function join_penyakit()
    {
        $this->db->select('*');
        $this->db->from('penyakit');
        $this->db->join('kategori_penyakit', 'kategori_penyakit.kd_ktg = penyakit.kd_ktg');
        $query = $this->db->get();
        return $query;
    }
    public function get_penyakit_json()
    {
        $this->datatables->select("*");
        $this->datatables->from("penyakit");
        $this->datatables->join('kategori_penyakit', 'kd_ktg');
        return $this->datatables->generate();
    }
    public function get_icd9_json()
    {
        $this->datatables->select("*");
        $this->datatables->from("icd9");
        $this->datatables->add_column('view', '$1','<div class="form-check">
        <input class="form-check-input" type="checkbox" value="">
</div>');
        return $this->datatables->generate();
    }

    // Dokter CRUD Function
    public function get_nik()
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->group_by('pegawai.nik');
        $query = $this->db->get();
        return $query;
    }
    public function get_pegawai($nik)
    {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->where('pegawai.nik', $nik);
        $query = $this->db->get();
        return $query;
    }

    public function join_triase_igd()
    {
        $this->db->select('*');
        $this->db->from('data_triase_igd');
        $this->db->join('reg_periksa', 'data_triase_igd.no_rawat = reg_periksa.no_rawat');
        $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis');
        $this->db->join('master_triase_macam_kasus', 'data_triase_igd.kode_kasus = master_triase_macam_kasus.kode_kasus');
        $query = $this->db->get();
        return $query;
    }

    public function join_penilaian_ralan()
    {
        $this->db->select('*');
        $this->db->from('penilaian_awal_keperawatan_ralan');
        $this->db->join('reg_periksa', 'reg_periksa.no_rawat = penilaian_awal_keperawatan_ralan.no_rawat');
        $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis');
        $this->db->join('petugas', 'petugas.nip = penilaian_awal_keperawatan_ralan.nip');
        $query = $this->db->get();
        return $query;
    }

    public function join_penilaian_gigi()
    {
        $this->db->select('*');
        $this->db->from('penilaian_awal_keperawatan_gigi');
        $this->db->join('reg_periksa', 'reg_periksa.no_rawat = penilaian_awal_keperawatan_gigi.no_rawat');
        $this->db->join('pasien', 'pasien.no_rkm_medis = reg_periksa.no_rkm_medis');
        $query = $this->db->get();
        return $query;
    }
}
