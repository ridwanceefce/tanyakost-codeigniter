<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_m extends CI_Model {

  public function ambil_semua_pesan() {
    $pesan = $this->db->get('pesan');
    return $pesan;
  }

  public function ambil_pesan_user($id_user) {
    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('id_user', $id_user);
    $hasil = $this->db->get();
    return $hasil->result(); // ada kemungkinan data pesan lebih dari satu
  }

  public function baca_pesan($id_pesan) {
    $this->db->select('*');
    $this->db->from('pesan');
    $this->db->where('id', $id_pesan);
    $hasil = $this->db->get();
    return $hasil;
  }
}

/* End of file Pesan_m.php */
/* Location: ./application/models/Pesan_m.php */