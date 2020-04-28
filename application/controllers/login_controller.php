<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Login');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    function index(){
        $this->load->view('login');
    }

    function auth(){
        $username = $this->input->post('username',TRUE);
        // $password = md5($this->input->post('password',TRUE));
        $password = $this->input->post('password',TRUE);
        $validate = $this->Login->validate($username,$password);
        if($validate->num_rows() > 0){
            $data = $validate->row_array();
            $username = $data['username'];
            $password = $data['password'];
            $status = $data['status'];
            $sesdata = array(
                'username' => $username,
                'password' => $password,
                'status' => $status,
                'logged_in' => TRUE 
            );
            $this->session->set_userdata($sesdata);
            // akses admin
            if($status === 'admin'){
                redirect('page');
            }
            // akses user
            else if ($status === 'user'){
                redirect('page/user');
            }
        }
        else {
            echo $this->session->set_flashdata('msg','Username atau Password salah');
            redirect('login');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}

?>