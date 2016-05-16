<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index() {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_dashboard_admin', $data);
  }

  public function ubah_profile() {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_ubah_profil', $data);
  }

}
