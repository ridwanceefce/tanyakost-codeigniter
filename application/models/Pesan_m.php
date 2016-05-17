<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_m extends CI_Model {

  public function ambil_semua_pesan() {
    $pesan = $this->db->get('pesan');
    return $pesan;
  }

}

/* End of file Pesan_m.php */
/* Location: ./application/models/Pesan_m.php */