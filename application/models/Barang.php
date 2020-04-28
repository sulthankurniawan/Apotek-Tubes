<?php

class Barang extends CI_Model{

    private $table = 'barang';

    public $id_barang;
    public $nama_barang;
    public $kategori;
    public $deskripsi;
    public $gambar = 'default.png';


    function tambah_barang($table,$data){
        $tambah = $this->db->insert($table,$data);
        if($tambah){
            return true;
        }
        else{
            return false;
        }
    }

    public function lihat_barang($table)
	{
        $data = $this->db->get($table);
		return $data->result_array();
    }
    
    public function lihat_barang_id($table,$id_barang){
        $this->db->where('id_barang',$id_barang);
        $data = $this->db->get($table);
		return $data->result_array();
    }

    public function lihat_barang_kategori($table,$kategori){
        $this->db->where('kategori',$kategori);
        $data = $this->db->get($table);
		return $data->result_array();
    }

    public function hapus_barang($id_barang,$table)
	{
		//use query builder to delete data based on id 
        $this->db->where('id_barang',$id_barang);
		return $this->db->delete($table);
    }
    
    function edit_barang($table,$id_barang,$data){
        $this->db->where('id_barang', $id_barang);
        $update = $this->db->update($table,$data);

        if ($update){
        return TRUE;
        }else{
        return FALSE;
        }
    }
}

?>