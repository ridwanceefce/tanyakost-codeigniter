<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index()
  {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_dashboard_user', $data);
  }

  public function ubah_profil() {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_ubah_profil', $data);
  }
}
