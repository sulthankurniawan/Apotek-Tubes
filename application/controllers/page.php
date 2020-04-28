<?php
class page extends CI_Controller{
    function __constuct(){
        parent::__constuct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
    }

    function index(){
        // akses admin
        if($this->session->userdata('status') === 'admin'){
            $this->load->view('admin_permintaan');
        }
        else{
            echo "Akses ditolak";
        }
    }

    function user(){
        // akses user
        if($this->session->userdata('status') === 'user'){
            $this->load->view('home');
        }
        else{
            echo "Akses ditolak";
        }

    }
}
?>