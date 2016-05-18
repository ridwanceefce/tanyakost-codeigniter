<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

  public function ambil_user_terbaru() {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->order_by('id_user', 'desc');
    $this->db->limit(5);
    $user = $this->db->get();
    return $user;
  }
  public function ambil_user($id_user) {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('id_user', $id_user);
    $hasil = $this->db->get();
    return $hasil->row_array();
  }

}

/* End of file User_m.php */
/* Location: ./application/models/User_m.php */