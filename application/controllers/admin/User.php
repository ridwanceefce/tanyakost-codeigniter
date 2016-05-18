<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function index() 
  { 
    $id_admin = $this->uri->segment(2);
    $this->load->model('admin_m'); // load model admin_m
    $this->load->model('user_m'); // load model user_m

    $admin = $this->admin_m->ambil_semua_data_admin($id_admin)->row_array();
    $users = $this->user_m->ambil_user_terbaru()->result();

    $data['no']    = 1;
    $data['admin'] = $admin;
    $data['users'] = $users;
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_tampil_user', $data);
  }

  public function tampil_detail_user() { // mestinya ada id yang diterima dari view 
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('admin/v_tampil_detail_user', $data);
  }

}
