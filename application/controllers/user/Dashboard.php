<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct() {
    parent::__construct();
    // Your own constructor code
    $this->load->helper('text'); // load helper text untuk limit karakter isi
    $this->load->model('user_m'); // load model user_m
    $this->load->model('pesan_m'); // load model pesan_m
    $this->load->model('kost_m'); // load model kost_m
  }

  public function index()
  {
    $user_id = $this->uri->segment(2); // untuk mengambil id user yang ada di url

    $this->load->helper('text'); // untuk mengambil function dari helper text

    $user = $this->user_m->ambil_user($user_id); // simpan hasil return data dari function tampil_user ke variabel $user
    $pesan = $this->pesan_m->ambil_pesan_user($user_id);
    $kost = $this->kost_m->ambil_kost_user($user_id)->result();

    $data['user'] = $user; // masukkan data $user ke dalam array $data dengan key user
    $data['pesan'] = $pesan; // masukkan data $pesan ke dalam array $data dengan key pesan 
    $data['kost'] = $kost; // masukkan data $kost ke dalam array $data dengan key kost 
    $data['no'] = 1; // untuk penomoran pesan
    $data['judul'] = "Tanyakost.com | Tempat cari kost"; // variabel judul
    $this->load->view('user/v_dashboard_user', $data); // panggil view 
  }

  public function ubah_profil() {
    $user_id = $this->uri->segment(2);
    
    $user = $this->user_m->ambil_user($user_id); // ambil data user dengan id $user_id dengan tipe data array
    $data['user'] = $user;
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_ubah_profil', $data);
  }
}
