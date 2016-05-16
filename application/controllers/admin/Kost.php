<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {

  public function index() 
  {
    $this->load->model('kost_m');

    $kosts = $this->kost_m->get_all_kost();

    $data['kosts'] = $kosts;

    $data['judul'] = "Tanyakost.com - Semua Kost"; // Data yang tampil
    // di title page

    $this->load->view('admin/v_tampil_kost', $data);
  }

  public function ubah_kost() {
    $data['judul'] = "Tanyakost.com | Ubah kost";
    $this->load->view('admin/v_ubah_kost', $data);
  }

}
