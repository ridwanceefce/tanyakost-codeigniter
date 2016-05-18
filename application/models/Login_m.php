<?php 
class Login_m extends CI_Model{
	function __construct(){
		$this->load->database();
	}
	function masuk_m($data){
		$d = $this->db->get_where('user',$data);
		return $d->num_rows();
	}
	function ambil_user_id($email){
		$this->db->select('id_user');
		$this->db->from('user');
    	$this->db->where('email', $email);
	    $hasil = $this->db->get();	
	    return $hasil->row_array();
	}

} ?>