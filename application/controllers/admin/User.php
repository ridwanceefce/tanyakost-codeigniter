<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function index() 
  {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_tampil_users', $data);
  }

  public function ubah_profile() {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_profile_ubah_admin', $data);
  }

}
