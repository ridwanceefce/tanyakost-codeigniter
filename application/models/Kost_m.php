<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost_m extends CI_Model {

  public function ambil_semua_kost() {
    $kost = $this->db->get('kost')->result();
    return $kost;
  }

  public function ambil_kost_terbaru() {
    $this->db->select('*');
    $this->db->from('kost');
    $this->db->order_by('id_kost', 'desc');
    $hasil = $this->db->get();
    return $hasil;
  }
 
  public function ambil_kost_user($id_user) {
    $this->db->select('*');
    $this->db->from('kost');
    $this->db->where('id_user', $id_user);
    $hasil = $this->db->get();
    return $hasil;
  }

  public function ambil_kost_detail($id_kost) {
    $this->db->select('*');
    $this->db->from('kost');
    $this->db->where('id_kost', $id_kost);
    $hasil = $this->db->get();
    return $hasil;
  }

  public function ambil_kost_id($id_kost) {
    $this->db->select('*');
    $this->db->from('kost');
    $this->db->where('id_kost', $id_kost);
    $hasil = $this->db->get();
    return $hasil;
  }

}