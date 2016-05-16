<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost_m extends CI_Model {

        // public function __construct()
        // {
        //         // Call the CI_Model constructor
        //         parent::__construct();
        // }

  public function get_all_kost() {
    $kost = $this->db->get('kost')->result();
    return $kost;
  }
  

}

/* End of file Kost.php */
/* Location: ./application/models/Kost.php */