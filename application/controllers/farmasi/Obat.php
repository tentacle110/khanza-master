<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('farmasi');
    }

    public function input() {
        $data['nota'] = $this->farmasi->nota();
        $data['databarang'] = $this->farmasi->joinTable('databarang', 'jenis', 'databarang.kdjns = jenis.kdjns')->result();
        $this->load->view('farmasi/input_obat', $data);
    }

}
