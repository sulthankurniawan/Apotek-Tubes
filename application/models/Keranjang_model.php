<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_model extends CI_Model{

    private $_table = 'keranjang';

    public $id_keranjang;
    public $id_barang;
    public $kuantitas_barang;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    function tambah_keranjang(){
        $post = $this->input->post();
        $this->id_keranjang = uniqid();
        $this->id_barang = $post["id_barang"];
        $this->kuantitas_barang = $post["kuantitas_barang"];
        $this->status = "Menunggu";
        return $this->db->insert($this->_table, $this);
    }

    public function lihat_keranjang_id($id_keranjang){
        return $this->db->get($this->_table)->result();
    }

    public function hapus_barang_dikeranjang($id_barang, $id_keranjang, $_table){
        return $this->db->delete($this->_table, array("id_barang" => $id_barang, "id_keranjang" => $id_keranjang));
    }

    function ubah_keranjang(){
        $post = $this->input->post();
        $this->id_keranjang = $post["id_keranjang"];
        $this->id_barang = $post["id_barang"];
        $this->kuantitas_barang = $post["kuantitas_barang"];
        $this->status = "Menunggu";
        return $this->db->insert($this->_table, $this, array('id_keranjang' => $post['id_keranjang']));
    }

    function 

    

}