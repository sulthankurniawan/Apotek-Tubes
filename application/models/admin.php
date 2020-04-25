<?php 

class admin extends CI_Model{
	function login_admin($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get('admin_account');
		if($result->num_rows()==1){
			return $result->row(0);
		}else{
			return false;
		}
	}
	function tambah_barang($table, $data){
		$tambah = $this->db->insert($table,$data);
		if($add){
			return true;
		} else {
			return false;
		}
	}
	public function getbarang($table){
		$data = $this->db->get($table);
		return $data->result_array();
	}

	public function getbarangByid($table,$id){
		$this->db->where('id',$id);
		$data = $this->db->get($table);
		return $data->result_array();
	}

	public function hapusbarang($id,$table){
		$this->db->where('id',$id);
		$update = $this->db->update($table,$data);

		if($update){
			return true;
		}else{
			return false;
		}
	}
}














 ?>