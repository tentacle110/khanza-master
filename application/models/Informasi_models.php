<?php

class Informasi_models extends CI_Model
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



    public function join_jadwal(){

        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('dokter', 'dokter.kd_dokter = jadwal.kd_dokter','left');
        $this->db->join('poliklinik', 'poliklinik.kd_poli = jadwal.kd_poli','left');
        $query = $this->db->get();
        return $query;

    }
    
    public function join_stok_darah()
    {
        $this->db->select('*');
        $this->db->from('utd_stok_darah');
        $this->db->join('utd_komponen_darah', 'utd_komponen_darah.kode = utd_stok_darah.kode_komponen' ,'left');
        $query = $this->db->get();
        return $query;
    }
    public function join_pasien_ranap()
    {
        $this->db->select('*');
        $this->db->from('data_klasifikasi_pasien_ranap');
        $this->db->join('reg_periksa', 'reg_periksa.no_rawat = data_klasifikasi_pasien_ranap.no_rawat' ,'left');
        $this->db->join('pasien', ' pasien.no_rkm_medis= reg_periksa.no_rkm_medis','left');
        $this->db->join('kamar', ' kamar.kd_kamar= data_klasifikasi_pasien_ranap.kd_kamar','left');
        $this->db->join('bangsal', ' bangsal.kd_bangsal= kamar.kd_bangsal','left');
        $query = $this->db->get();
        return $query;
    }

    public function join_harga_kamar(){
        $this->db->select("*");        
        $this->db->from('kamar');
        $this->db->join('bangsal','bangsal.kd_bangsal = kamar.kd_bangsal','left');
        $this->db->select('kamar.status as stts');

        $query = $this->db->get();
        return $query;
    }

    public function join_harga_lab(){
        $this->db->select('*');
        $this->db->from('template_laboratorium');
        $this->db->join('jns_perawatan_lab','jns_perawatan_lab.kd_jenis_prw = template_laboratorium.kd_jenis_prw');
        $this->db->join('penjab','penjab.kd_pj = jns_perawatan_lab.kd_pj');
        $query = $this->db->get();
        return $query;
    }

    public function join_harga_operasi(){
        $this->db->select('*');
        $this->db->from('paket_operasi');
        $this->db->join('penjab','penjab.kd_pj = paket_operasi.kd_pj');
        $query = $this->db->get();
        return $query;
    }
    
    public function join_harga_radiologi(){
        $this->db->select('*');
        $this->db->from('jns_perawatan_radiologi');
        $this->db->join('penjab','penjab.kd_pj = jns_perawatan_radiologi.kd_pj');
        $query = $this->db->get();
        return $query;
    }

    public function join_tarif_tindakan(){
        $this->db->select('*');
        $this->db->from('jns_perawatan_inap');
        $this->db->join('kategori_perawatan','kategori_perawatan.kd_kategori = jns_perawatan_inap.kd_kategori');
        $query = $this->db->get();
        return $query;
    }
}
