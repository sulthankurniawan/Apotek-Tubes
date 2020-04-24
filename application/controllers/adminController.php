<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class adminController extends CI_Controller{
	function __construct();
		parent::__construct();
		$this->load->model('admin');
	}
	
	public function login(){
		$this->load->view('admin_login');
	}

	public function login_masuk(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->admin->login_admin($username, $password);
		if ($cek){
			$sess_data = array('logged_in_admin' => 1,);
			$this->session->set_userdata($sess_data);
			$this->session->set_flashdata('login_alert', 'login_berhasil');
			redirect('adminController');

		} else {
			$this->session->set_flashdata('login_alert', 'login_gagal');
			redirect('adminController');
		}
	}

















 ?>
