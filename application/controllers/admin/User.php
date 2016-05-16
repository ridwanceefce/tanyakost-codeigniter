<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function index() 
  {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_tampil_user', $data);
  }

  public function tampil_detail_user() { // mestinya ada id yang diterima dari view 
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_tampil_detail_user', $data);
  }

}
