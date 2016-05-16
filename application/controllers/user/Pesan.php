<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

  public function index() 
  {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_tampil_pesan', $data);
  }

  public function baca_pesan() { // mestinya harus ada id pesan untuk query select ke database
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_baca_pesan', $data);
  }

}
