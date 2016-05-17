<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

  public function index() 
  {
    $this->load->helper('text'); // load helper text untuk limit karakter isi
    $this->load->model('pesan_m'); // load model pesan_m
    $pesan = $this->pesan_m->ambil_semua_pesan()->result(); // menyimpan data yang di ambil dari function
    // ambil_semua_pesan() dan di konversi ke object
    $no = 1;
    $data['no'] = $no;
    $data['pesan'] = $pesan; // masukkan data $pesan ke dalam array data untuk view

    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_tampil_pesan', $data);
  }

  public function baca_pesan() { // mestinya harus ada id pesan untuk query select ke database
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_baca_pesan', $data);
  }

}
