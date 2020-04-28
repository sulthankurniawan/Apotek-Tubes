<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// if (!defined('BASEPATH'))
//     exit('No direct script access allowed');

class Barang_model extends CI_Model{

    private $_table = 'barang';

    public $id_barang;
    public $nama_barang;
    public $kategori;
    public $deskripsi;
    public $gambar = 'default.png';

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


    function tambah_barang(){
        $post = $this->input->post();
        $this->id_barang = uniqid();
        $this->nama_barang = $post["nama_barang"];
        $this->kategori = $post["kategori"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->insert($this->_table, $this);
    }

    public function lihat_barang()
	{
        return $this->db->get($this->_table)->result();
    }
    
    public function lihat_barang_id($id_barang){
        return $this->db->get_where($this->_table, ["id_barang" => $id_barang])->row();
    }

    public function lihat_barang_kategori($kategori){
        return $this->db->get_where($this->_table, ["kategori" => $kategori])->row();
    }

    public function hapus_barang($id_barang,$table)
	{
		return $this->db->delete($this->_table, array("id_barang" => $id_produk));
    }
    
    public function edit_barang($table,$id_barang,$data){
        $post = $this->input->post();
        $this->id_barang = $post["id_barang"];
        $this->nama_barang = $post["nama_barang"];
        $this->kategori = $post["kategori"];
        $this->deskripsi = $post["deskripsi"];
        return $this->db->update($this->_table, $this, array('id_barang' => $post['id_barang']));
    }
}

?>