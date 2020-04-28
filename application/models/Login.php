<?php
class Login extends CI_Model{
    function validate($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('akun',1);
        return $result;
    }
}