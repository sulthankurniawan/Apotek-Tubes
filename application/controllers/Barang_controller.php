<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_controller extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data["barang"] = $this->Barang_model->lihat_barang();
        $this->load->view("admin_barang", $data);
    }

    public function tambah_barang(){
        $barang = $this->Barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("admin_tambah_barang");
    }

    public function edit_barang($id_barang = null){
        if (!isset($id_barang)) redirect('admin_barang');

        $barang = $this->Barang_model;
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()){
            $barang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["barang"] = $barang->lihat_barang_id($id_barang);
        if (!$data["barang"]) show_404();

        $this->load->view("admin_edit_barang", $data);
    }

    public function hapus_barang($id_barang=null)
    {
        if (!isset($id_barang)) show_404();

        if ($this->Barang_model->delete($id_barang)){
            redirect(site_url('admin_barang'));
        }
    }

}

?>