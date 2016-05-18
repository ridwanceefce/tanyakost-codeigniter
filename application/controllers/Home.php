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
    $keyword = $this->uri->segment(2);



    $data['keyword']  =  $keyword;
    $data['judul']    = "Tanyakost.com | Tempat cari kost";

    $this->load->view('v_kost_hasil', $data);
  }

  public function cari_detail() { 
    $id_kost = $this->uri->segment(3);

    $this->load->model('kost_m');
    $this->load->model('user_m');

    $kost     = $this->kost_m->ambil_kost_id($id_kost)->row_array();
    $id_user  = $kost['id_user'];
    $user     = $this->user_m->ambil_user($id_user);
    
    $data['kost'] = $kost;
    $data['user'] = $user;
    $data['judul'] = "Tanyakost.com | Tempat cari kost";

    $this->load->view('v_hasil_detail', $data);
  }
}