<?php

class About extends CI_Controller{
    public function index()
    {
        $data['judul'] = "Tentang Kosan.id";
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('home/about');
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }
}