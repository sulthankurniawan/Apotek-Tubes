<?php

class Akun extends CI_Model{

    function registrasi($table, $data){
        $daftar = $this->db->insert($table, $data);
        if($daftar){
            return true;
        }
        else{
            return false;
        }
    }

    function login_user($id, $password){
        $this->db->where('id_akun', $id);
        $this->db->where('password', $password);
        $result = $this->db->get('status');
        if($result->num_rows()=='user'){
            return $results->row(0);
        }
        else{
            return false;
        }
    }

    function login_admin($id,$password){
        $this->db->where('id',$id);
        $this->db->where('password',$password);
        $result = $this->db->get('status');
        if($result->num_rows()=='admin'){
            return $result->row(0);
        }else{
            return false;
        }
    }

    function ubah_akun($table, $id, $data){
        $this->db->where('id_akun', $id);
        $update = $this->db->update($table,$data);

        if ($update){
        return TRUE;
        }else{
        return FALSE;
        }
    }

}