<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function index() 
  {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_profile_admin', $data);
  }

  public function ubah_profile() {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_profile_ubah_admin', $data);
  }

}
