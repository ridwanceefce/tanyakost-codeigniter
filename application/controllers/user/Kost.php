<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {

  public function index() 
  {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_kosts_user', $data);
  }

  public function ubah_profile() {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_profile_ubah_admin', $data);
  }

}
