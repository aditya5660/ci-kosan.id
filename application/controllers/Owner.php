<?php
class Owner extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kost_model");
        $this->load->model("booking_model");
        $this->load->model("register_model");
        $this->load->library('form_validation');
        $this->load->library(array('googlemaps'));
    }
    public function index()
    {
        $data['kosts'] = $this->kost_model->getall();
        $data['judul'] = "Dashboard - Kosan.id";
        if($this->session->userdata('level') == '0')
			{   $this->load->view('template/header',$data);
                $this->load->view('template/owner/navbar',$data);
                $this->load->view('template/owner/sidebar');
                $this->load->view('owner/index');
                $this->load->view('template/js');
            } else {
                redirect ('login');
            }
    }
    public function profile()
    {
        $idUser = $this->session->idUser;
        $data['profile'] = $this->register_model->getProfile($idUser);
        if($this->session->userdata('level') == '0') {
            $profile = $this->register_model;
            $validation = $this->form_validation;
            $validation->set_rules($profile->rules());

            if ($validation->run()) {   
                $profile->updateProfile($idUser);
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('owner/profile');
            }
            $data['judul'] = "Profile Pemilik - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/owner/navbar',$data);
            $this->load->view('template/owner/sidebar');
            $this->load->view('owner/profile',$data);
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function tambahkos()
    {   
        
        $data['fasilitas'] = $this->kost_model->getfasilitas();
        $kost = $this->kost_model;
        $validation = $this->form_validation;
        $validation->set_rules($kost->rules());
        
        if ($validation->run()) {   
            $kost->addKost();
            $this->session->set_flashdata('success', 'Kost Berhasil Disimpan');
        }
        if($this->session->userdata('level') == '0') {
            $data['judul'] = "Tambah Kost - Kosan.id";
            $this->load->view('template/headerowner',$data);
            $this->load->view('template/owner/navbar',$data);
            $this->load->view('template/owner/sidebar');  
            $this->load->view('owner/tambahkos',$data);
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function editkos($idKost = null)
    {
        
        $data['fasilitas'] = $this->kost_model->getfasilitas();
        if (!isset($idKost)) redirect('admin/index');
        $kost = $this->kost_model;
        $validation = $this->form_validation;
        $validation->set_rules($kost->rules());

        if ($validation->run()) {
            $kost->updateKost();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('owner/daftarkos');
        }
        if($this->session->userdata('level') == '0') {
            $data['kost'] = $kost->getById($idKost);
            $data['chxfasilitas']= explode('//', $data['kost']->fasilitas);
            if (!$data["kost"]) show_404();
            $data['judul'] = "Edit Kost - Kosan.id";
            $this->load->view('template/headerowner',$data);
            $this->load->view('template/owner/navbar',$data);
            $this->load->view('template/owner/sidebar');
            $this->load->view('owner/editkos',$data);
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    
    public function daftarkos($idKost = null)
    {
        if($this->session->userdata('level') == '0') {
            $idUser = $this->session->idUser; 
            $data["kosts"] = $this->kost_model->getByUser($idUser);

            $data['judul'] = "Daftar Kost - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/owner/navbar',$data);
            $this->load->view('template/owner/sidebar');
            $this->load->view('owner/daftarkos',$data);
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function databooking($idKost = null)
    {
        if($this->session->userdata('level') == '0') {
            $idUser = $this->session->idUser;
            $data["kosts"] = $this->kost_model->getByUser($idUser);
            foreach ($data["kosts"] as $key => $kost) {
                $data['bookings'] = $this->booking_model->getByOwner($kost->idKost);
            }
            $data['judul'] = "Daftar Kost - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/owner/navbar',$data);
            $this->load->view('template/owner/sidebar');
            $this->load->view('owner/databooking',$data);
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    
    function delete(){
        $idKost = $this->uri->segment(3);
        $this->kost_model->delete($idKost);
        redirect('owner/daftarkos');
    }

    
}

