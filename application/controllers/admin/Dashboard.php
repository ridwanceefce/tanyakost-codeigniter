<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index() {
    $id_admin = $this->uri->segment(2); // ambil id admin dari url ke 2

    $this->load->helper('text');

    $this->load->model('admin_m'); // load model admin untuk controller dashborard
    $this->load->model('user_m'); // load model user
    $this->load->model('kost_m'); // load model kost
    $this->load->model('pesan_m');

    $admin = $this->admin_m->ambil_semua_data_admin($id_admin)->row_array(); // simpan data admin di variabel $admin dalam bentuk array
    $users = $this->user_m->ambil_user_terbaru()->result();
    $kosts = $this->kost_m->ambil_kost_terbaru()->result();
    $pesans = $this->pesan_m->ambil_pesan_terbaru()->result();

    $data['no_user'] = 1;
    $data['no_pesan'] = 1;
    $data['pesans'] = $pesans;
    $data['kosts']  = $kosts; // masukkan data object $kosts ke dalam array $data
    $data['users']  = $users; // masukkan data object $users kedalam array $data
    $data['admin']  = $admin; // masukkan data $admin kedalam array $data dengan key admin untuk dilmpar ke view
    $data['judul']  = "Tanyakost.com | Tempat cari kost";

    $this->load->view('admin/v_dashboard_admin', $data);
  }

  public function ubah_profile() {
    $id_admin = $this->uri->segment(2);

    $this->load->model('admin_m');

    $admin = $this->admin_m->ambil_semua_data_admin($id_admin)->row_array();

    $data['admin'] = $admin;
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_ubah_profil', $data);
  }

}
