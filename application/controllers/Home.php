<?php

class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kost_model");
        $this->load->model("blog_model");
        $this->load->model("register_model");
        $this->load->library('form_validation');
        $this->load->library(array('googlemaps'));
    }

    public function index()
    {
        
        $data['kost'] = $this->kost_model->getAll();
        $data['blog'] = $this->blog_model->getAll();
        $data['judul'] = "Kosan.id - Marketplace Kost Indonesia";
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }
    public function detailkos($idKost=null)
    {
        $kost = $this->kost_model;
        $data['kostall'] = $this->kost_model->getAll();
        $data['kost'] = $kost->getById($idKost);

        $data['judul'] = $data['kost']->namaKost ;
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('home/detailkos',$data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function search()
    {
        $data['kostall'] = $this->kost_model->getAll();
        if($title = $this->input->get('title')){
            $data['search'] = $this->kost_model->search_kost($title);
        } else if($location = $this->input->get('location')){
            $data['search'] = $this->kost_model->search_location($location);
        } else if($tipekost = $this->input->get('tipekost')){
            $data['search'] = $this->kost_model->search_tipekost($tipekost);
        } else {
            $data['search'] = $this->kost_model->getAll();
        };
        $data['judul'] = "Cari Kost - Kosan.id";
        $this->load->view('template/header',$data);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('home/search',$data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }
    
    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->kost_model->search_kost($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label' => $row->namaKost,
                );
                echo json_encode($arr_result);
            }
        }
    }
    
}

