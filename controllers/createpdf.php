<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class createpdf extends CI_Controller
{
function pdf($bulan, $tahun)
{
    $this->load->helper('pdf_helper');
    
    $query = $this->db->query("SELECt * FROM tb_pasien where kode_pasien='$kode_pasien' LIMIT 1");
    $this->load->view('pdfreport', $data);
}
}