<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {

  public function index() 
  {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_tampil_kost', $data);
  }

  public function input_kost() {
    $data['judul'] = "Tanyakost.com";
    $this->load->view('user/v_tambah_kost', $data);
  }

  public function ubah_kost() { // mestinya ada id yang di terima dari view
    $data['judul'] = "Tanyakost.com";
    $this->load->view('user/v_ubah_kost', $data);
  }
}
