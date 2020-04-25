<?php

class Keranjang extends CI_Model{

    private $table = 'keranjang';

    public $id_keranjang;
    public $id_barang;
    public $kuantitas_barang;
    public $status;


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
    
    public function lihat_barang_id($table,$id){
        $this->db->where('id',$id);
        $data = $this->db->get($table);
		return $data->result_array();
    }

    public function hapus_barang($id,$table)
	{
		//use query builder to delete data based on id 
        $this->db->where('id',$id);
		return $this->db->delete($table);
    }
    
    function edit_barang($table,$id,$data){
        $this->db->where('id', $id);
        $update = $this->db->update($table,$data);

        if ($update){
        return TRUE;
        }else{
        return FALSE;
        }
    }
}