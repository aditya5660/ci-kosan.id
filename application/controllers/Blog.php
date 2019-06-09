<?php 
class Blog extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model("blog_model");
        $this->load->model("kost_model");
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $data['blog'] = $this->blog_model->getAll();
        $data['kostall'] = $this->kost_model->getAll();
        $data['judul'] = "Blog - Kosan.id";
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('home/blog');
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }
    public function blogdetails($idArtikel = null)
    {
        $data['kostall'] = $this->kost_model->getAll();
        $blog = $this->blog_model;
        $data['blog'] = $blog->getById($idArtikel);
        $data['judul'] = "Blog Details - Kosan.id";
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('home/blogdetails',$data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }
}
