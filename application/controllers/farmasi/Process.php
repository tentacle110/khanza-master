<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('farmasi');
    }

    public function pay() {
        $jumlah = count($_POST['obat']);
        $pembelian = $_POST['obat'];
        $data = array("pembelian" => $pembelian,'jumlah' => $jumlah,'nota' => $this->farmasi->nota());
        $this->load->view('farmasi/penjualan_obat', $data);
    }

}
