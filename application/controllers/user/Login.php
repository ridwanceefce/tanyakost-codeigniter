<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','security'));
		$this->load->model('login_m');
		$this->load->library('session');
	}
  public function index()
  {
    $data['judul'] = "Tanyakost.com | Tempat cari kost";
    $this->load->view('user/v_login_user', $data);

  }
  public function masuk(){
  	
  	$pass = $this->input->post('passwd');
  	$passwd = do_hash($pass,'md5');
  	$email = $this->input->post('emails');
  	$data = array(
  		'email' => $email,
  		'password' => $passwd);
  	$cek = $this->login_m->masuk_m($data);
  	if($cek){
  		$id_user = $this->login_m->ambil_user_id($email);
  		$this->session->set_userdata($data);
  		redirect('user/'.$id_user['id_user']);
  	}else{
  		redirect('user/login');
  	}
  }
}
