<?php 
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("register_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $register = $this->register_model;
        $validation = $this->form_validation;
        $validation->set_rules($register->rules());

        if ($validation->run()) {   
            $register->register();
            
        }
        $data['judul'] = "Daftar - Kosan.id";
        $this->load->view('template/header',$data);
        $this->load->view('template/header');
        $this->load->view('home/register');
        $this->load->view('template/js');
    }
    public function success()
    {
        
        $data['judul'] = "Sukses - Kosan.id";
        $this->load->view('template/header',$data);
        $this->load->view('home/registersuccess');
        $this->load->view('template/js');
    }
    
}
