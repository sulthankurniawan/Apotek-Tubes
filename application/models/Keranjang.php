<?php

class Keranjang extends CI_Model{

    private $table = 'keranjang';

    public $id_keranjang;
    public $id_barang;
    public $kuantitas_barang;
    public $status;


    function tambah_keranjang($table,$data){
        $tambah = $this->db->insert($table,$data);
        if($tambah){
            return true;
        }
        else{
            return false;
        }
    }

    public function lihat_keranjang($table)
	{
        $data = $this->db->get($table);
		return $data->result_array();
    }
    
    public function lihat_barang_id_keranjang($table,$id_keranjang){
        $this->db->where('id_keranjang',$id_keranjang);
        $data = $this->db->get($table);
		return $data->result_array();
    }

    public function lihat_keranjang_id_akun($table,$id_akun){
        $this->db->where('id_akun',$id_akun);
        $data = $this->db->get($table);
		return $data->result_array();
    }

    public function hapus_keranjang($id_keranjang,$table)
	{
		//use query builder to delete data based on id 
        $this->db->where('id_keranjang',$id_keranjang);
		return $this->db->delete($table);
    }
    
    function edit_keranjang($table,$id_keranjang,$data){
        $this->db->where('id_keranjang', $id_keranjang);
        $update = $this->db->update($table,$data);

        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

?>