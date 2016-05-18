<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

  public function ambil_semua_data_admin($id_admin) {
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('id', $id_admin);
    $hasil = $this->db->get();
    return $hasil;
  }

}

/* End of file Admin_m.php */
/* Location: ./application/models/Admin_m.php */