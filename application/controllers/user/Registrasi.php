<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

  public function index()
  {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_registrasi_user', $data);
  }
}
