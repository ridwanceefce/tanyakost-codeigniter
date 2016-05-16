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
    $this->load->view('home_page', $data);
  }
}