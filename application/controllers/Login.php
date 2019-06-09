<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = "Login - Kosan.id";
        $this->load->view('template/header',$data);
        $this->load->view('template/header');
        $this->load->view('home/login');
        $this->load->view('template/js');
    }

	function getLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->login_model->cek($email, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['idUser'] = $data->idUser;
				$sess_data['email'] = $data->email;
				$sess_data['level'] = $data->level;
				$this->session->set_userdata($sess_data);
			}
			if($this->session->userdata('level') == '0' ) 
			{
				$idUser = $this->session->idUser;
				redirect('owner');
			}
			elseif($this->session->userdata('level') == '1')
			{
				redirect('user');
			}
			elseif($this->session->userdata('level') == '2')
			{
				redirect('admin');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			redirect('login');
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}