<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getAllOwner()
    {
        return $this->db->get_where('users', ["level" => '0'])->result();
    }
    public function getAllMember()
    {
        return $this->db->get_where('users', ["level" => '1'])->result();
    }
    public function getAllAdmin()
    {
        return $this->db->get_where('users', ["level" => '3'])->result();
    }
    
}











