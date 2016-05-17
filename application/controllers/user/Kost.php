<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {

  public function __construct() {
    parent::__construct();
    // Your own constructor code
    $this->load->helper('text'); // load helper text untuk limit karakter isi
    $this->load->model('user_m'); // load model user_m
  }

  public function index() 
  {
    $id_user = $this->uri->segment(2); // ambil id user di url 

    $user = $this->user_m->ambil_user($id_user);

    $data['user'] = $user;
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_tampil_kost', $data);
  }

  public function input_kost() {
    $id_user = $this->uri->segment(2);

    $user = $this->user_m->ambil_user($id_user);

    $data['user'] = $user;
    $data['judul'] = "Tanyakost.com";
    $this->load->view('user/v_tambah_kost', $data);
  }

  public function ubah_kost() { // mestinya ada id yang di terima dari view
    $data['judul'] = "Tanyakost.com";
    $this->load->view('user/v_ubah_kost', $data);
  }
}
