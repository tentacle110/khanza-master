<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('Pdf');
    }
	public function laporan_dokter()
	{
       // Simple table
       
	}
}