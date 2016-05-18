<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {

  public function index() 
  {
    $id_admin = $this->uri->segment(2);

    $this->load->model('kost_m');
    $this->load->model('admin_m');

    $admin = $this->admin_m->ambil_semua_data_admin($id_admin)->row_array();
    $kosts = $this->kost_m->ambil_semua_kost();

    $data['admin'] = $admin;
    $data['kosts'] = $kosts;
    $data['judul'] = "Tanyakost.com - Semua Kost"; // Data yang tampil di title page

    $this->load->view('admin/v_tampil_kost', $data);
  }

  public function ubah_kost() {
    $data['judul'] = "Tanyakost.com | Ubah kost";
    $this->load->view('admin/v_ubah_kost', $data);
  }

}
