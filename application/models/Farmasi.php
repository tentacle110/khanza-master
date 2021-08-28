<?php

class Farmasi extends CI_Model {

// READ

    function tableWhere($where, $table) {
        return $query = $this->db->get_where($table, $where);
    }

    public function all_data($table) {
        return $this->db->get($table);
    }

    public function dataLimit($table, $limit, $where, $type) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($where, $type);
        $this->db->limit($limit);
        return $query = $this->db->get();
    }

    function joinTable($table, $join1, $join2) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($join1, $join2);
        return $query = $this->db->get();
        //$data['data1'] = $this->db->query("SELECT * FROM category WHERE status_category = '1'");
    }

    function joinThreeTable($table, $join1, $join2, $join3, $join4) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($join1, $join2);
        $this->db->join($join3, $join4);
        return $query = $this->db->get();
    }

    public function edit($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function deleteData($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert($data, $table) {
        $this->db->insert($table, $data);
    }

    public function nota() {
        $tgl = date('Ymd');
        $q = $this->db->query("SELECT MAX(RIGHT(nota_jual,3)) AS seri FROM penjualan WHERE DATE(tgl_jual)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->seri) + 1;
                $kd = $tgl.sprintf("%03s", $tmp);
            }
        } else {
            $kd = $tgl."001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return $kd;
    }

}
