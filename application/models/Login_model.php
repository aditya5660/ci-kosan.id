<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function cek($email, $password){
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        return $this->db->get('users');
    }

}