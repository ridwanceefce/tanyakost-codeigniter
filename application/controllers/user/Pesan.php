<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

  public function __construct() {
    parent::__construct();
    // Your own constructor code
    $this->load->helper('text'); // load helper text untuk limit karakter isi
    $this->load->model('user_m'); // load model user_m
    $this->load->model('pesan_m'); // load model pesan_m
  }

  public function index() {

    $id_user = $this->uri->segment(4);

    $user = $this->user_m->ambil_user($id_user);
    $pesan = $this->pesan_m->ambil_semua_pesan()->result(); // menyimpan data yang di ambil dari function ambil_semua_pesan() dan di konversi ke object
    
    $no = 1;
    $data['no'] = $no;
    $data['pesan'] = $pesan; // masukkan data $pesan ke dalam array data untuk view
    $data['user'] = $user;
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_tampil_pesan', $data);
  }

  public function baca_pesan() { // mestinya harus ada id pesan untuk query select ke database
    $id_pesan = $this->uri->segment(5);
    $id_user = $this->uri->segment(4);

    $pesan = $this->pesan_m->baca_pesan($id_pesan)->row_array();
    $user = $this->user_m->ambil_user($id_user);

    $data['pesan'] = $pesan;
    $data['user'] = $user;
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_baca_pesan', $data);
  }

}
