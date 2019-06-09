<?php
class User extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("booking_model");
        $this->load->model("kost_model");
        $this->load->model("register_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        if($this->session->userdata('level') == '1') {
            $data['judul'] = "Dashboard User - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/user/navbar');
            $this->load->view('template/user/sidebar');
            $this->load->view('user/index');
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function databooking()
    {
        if($this->session->userdata('level') == '1') {
            $idUser = $this->session->idUser; 
            $data['bookings'] = $this->booking_model->getAll($idUser);
            // query memanggil function tigatable di model  
            $data['judul'] = "Dashboard User - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/user/navbar');
            $this->load->view('template/user/sidebar');
            $this->load->view('user/databooking',$data);
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function profile()
    {
        $idUser = $this->session->idUser;
        $data['profile'] = $this->register_model->getProfile($idUser);
        if($this->session->userdata('level') == '1') {
            $profile = $this->register_model;
            $validation = $this->form_validation;
            $validation->set_rules($profile->rules());

            if ($validation->run()) {   
                $profile->updateProfile($idUser);
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('user/profile');
            }
            $data['judul'] = "Profile Pemilik - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/user/navbar',$data);
            $this->load->view('template/user/sidebar');
            $this->load->view('user/profile');
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    function delete(){
        $idBooking = $this->uri->segment(3);
        $this->booking_model->delete($idBooking);
        redirect('user/databooking');
    }
    public function booking($idKost)
    {
        if($this->session->userdata('level') == '1') {
            $this->booking_model->book();
            redirect ('user/databooking');
        } else {
            redirect ('login');
        }
    }
}

