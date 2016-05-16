<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  function __construct()
  {
    parent:: __construct();
    // $this->load->model('Main_m'); // untuk meload model hanya sekali saja
  }

  public function index()
  {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('v_home_page', $data);
  }

  public function cari_kost() {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('v_kost_hasil', $data);
  }

  public function cari_detail() { // mestinya ada id
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('v_hasil_detail', $data);
  }
}