<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model
{

    public function getAll($idUser)
    {
        $this->db->select('*');
        $this->db->where('booking.idUser', $idUser);
        $this->db->from('booking');
        $this->db->join('kost', 'booking.idKost = kost.idKost');
        
        $q = $this->db->get();
        return $q->result();
    }
    public function getByOwner($idKost)
    {
        $this->db->select('*');
        $this->db->where('booking.idKost', $idKost);
        $this->db->from('booking');
        $this->db->join('kost', 'booking.idKost = kost.idKost');
        $this->db->join('users', 'booking.idUser = users.idUser');
        
        $q = $this->db->get();
        return $q->result();
    }
    public function delete($idBooking){
        return $this->db->delete('booking', array("idBooking" => $idBooking));
    }
    
    public function book(){
        $post = $this->input->post();
        $this->idBooking = uniqid();
        $this->idUser = $this->session->idUser;
        $this->idKost = $this->uri->segment(3);
        $this->status = '0';
        $this->tglBooking = $this->input->post('tglBooking');
        $this->db->insert('booking',$this);
    }
    
}