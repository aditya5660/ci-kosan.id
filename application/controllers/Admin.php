<?php

class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("blog_model");
        $this->load->model("kost_model");
        $this->load->model("admin_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        if($this->session->userdata('level') == '2') {
            $data['judul'] = "Dashboard Admin - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/admin/navbar');
            $this->load->view('template/admin/sidebar');
            $this->load->view('admin/index');
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function datamember()
    {
        if($this->session->userdata('level') == '2') {
            $data['member'] = $this->admin_model->getAllMember();
            $data['judul'] = "Data Member - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/admin/navbar');
            $this->load->view('template/admin/sidebar');
            $this->load->view('admin/datamember');
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function dataadmin()
    {
        if($this->session->userdata('level') == '2') {
            $data['member'] = $this->admin_model->getAllAdmin();
            $data['judul'] = "Data Member - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/admin/navbar');
            $this->load->view('template/admin/sidebar');
            $this->load->view('admin/dataadmin');
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function dataowner()
    {
        if($this->session->userdata('level') == '2') {
            $data['owner'] = $this->admin_model->getAllOwner();
            
            $data['judul'] = "Data Owner - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/admin/navbar');
            $this->load->view('template/admin/sidebar');
            $this->load->view('admin/dataowner',$data);
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function datakost()
    {
        if($this->session->userdata('level') == '2') {
            $data['kost'] = $this->kost_model->getAll();
            $data['judul'] = "Blog - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/admin/navbar');
            $this->load->view('template/admin/sidebar');
            $this->load->view('admin/datakost',$data);
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function blog()
    {
        if($this->session->userdata('level') == '2') {
            $data['blog'] = $this->blog_model->getAll();
            $data['judul'] = "Blog - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/admin/navbar');
            $this->load->view('template/admin/sidebar');
            $this->load->view('admin/blog',$data);
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    

    public function blogpost()
    {
        $blog = $this->blog_model;
        $validation = $this->form_validation;
        $validation->set_rules($blog->rules());
        if ($validation->run()) {
            $blog->addArtikel();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        if($this->session->userdata('level') == '2') {
            $data['judul'] = "Blog Detail  - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/admin/navbar');
            $this->load->view('template/admin/sidebar');
            $this->load->view('admin/blogpost');
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    public function blogedit($idArtikel = null)
    {
        if($this->session->userdata('level') == '2') {
            $blog = $this->blog_model;
            $validation = $this->form_validation;
            $validation->set_rules($blog->rules());

            if ($validation->run()) {
                $blog->updateArtikel();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('admin/blog');
            }
            $data['blog'] = $blog->getById($idArtikel);
            $data['judul'] = "Blog Detail  - Kosan.id";
            $this->load->view('template/header',$data);
            $this->load->view('template/admin/navbar');
            $this->load->view('template/admin/sidebar');
            $this->load->view('admin/blogedit',$data);
            $this->load->view('template/js');
        } else {
            redirect ('login');
        }
    }
    function delete(){ 
        $idArtikel = $this->uri->segment(3);
        $this->blog_model->delete($idArtikel);
        redirect('admin/blog');
    }
    function deletekost(){ 
        $idKost = $this->uri->segment(3);
        $this->kost_model->delete($idKost);
        redirect('admin/datakost');
    }
    public function accept($idUser = null)
    {
        $accept = $this->model->admin_model();
        $accept->accept($idUser);
    }

}