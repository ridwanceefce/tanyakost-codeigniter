<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

  public function index() 
  {
    $id_admin = $this->uri->segment(2);

    $this->load->model('admin_m');
    $this->load->model('pesan_m');

    $this->load->helper('text');

    $pesans = $this->pesan_m->ambil_semua_pesan()->result();
    $admin  = $this->admin_m->ambil_semua_data_admin($id_admin);

    $data['no']     = 1;
    $data['pesans'] = $pesans;
    $data['admin']  = $admin;
    $data['judul']  = "Tanyakost.com | Tempat cari kost";

    $this->load->view('admin/v_tampil_pesan', $data);
  }

  public function baca_pesan() { // mestinya harus ada id pesan untuk query select ke database
    $id_admin = $this->uri->segment(2);
    $id_pesan = $this->uri->segment(4);

    $this->load->model('admin_m');
    $this->load->model('pesan_m');

    $admin = $this->admin_m->ambil_semua_data_admin($id_admin);
    $pesan = $this->pesan_m->baca_pesan($id_pesan)->row_array();

    $data['admin']  = $admin;
    $data['pesan']  = $pesan;
    $data['judul']  = "Tanyakost.com | Tempat cari kost";

    $this->load->view('admin/v_baca_pesan', $data);
  }

}
