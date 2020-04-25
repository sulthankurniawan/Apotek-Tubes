<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
    
	function index(){
		 if ($this->input->post('Login')){

            $this->form_validation->set_rules('username', 'username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('v_login');
            }
            else
            {
                redirect('v_home');

            }

        }else {

            $this->load->helper(array('form'));
            $this->load->view('v_login');
        }
    }




	function check_database($password)
    {

         $username = $this->input->post('akun');


        $result = $this->Model_login->user($username, $password);

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    #`id_akun` => $row -> id_akun,
 					#`id_keranjang` $row -> id_keranjang,
  					#`nama_rs` $row -> nama_rs,
  					`username` => $row -> username,
 	 				`password` => $row -> password,
  					#`alamat_rs` $row -> alamat_rs,
  					#`email_rs`$row -> email_rs,
                );
                $this->session->set_userdata('Login', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Username atau Password salah');
            return false;
        }
    }
}

	#function logout(){
	#	$this->session->sess_destroy();
	#	redirect(base_url('login'));
	#}


?>
