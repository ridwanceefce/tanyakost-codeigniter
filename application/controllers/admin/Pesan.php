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
    $admin  = $this->admin_m->ambil_semua_data_admin($id_admin)->row_array();

    $data['no']     = 1;
    $data['pesans'] = $pesans;
    $data['admin']  = $admin;
    $data['judul']  = "Tanyakost.com | Tempat cari kost";

    $this->load->view('admin/v_tampil_pesan', $data);
  }

  public function baca_pesan() { // mestinya harus ada id pesan untuk query select ke database
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_baca_pesan', $data);
  }

}
