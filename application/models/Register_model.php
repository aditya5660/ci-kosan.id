
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required']
        ];
    }
    public function getProfile($idUser){
        return $this->db->get_where('users',['idUser' => $idUser])->row();
    }
    public function register()
    {
        $post = $this->input->post();
        $this->idUser = uniqid();
        $this->namaDepan = $post["namaDepan"];
        $this->namaBelakang = $post["namaBelakang"];
        $this->noHp = $post["noHp"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->level = $post["level"];

        $this->db->insert('users',$this);
        redirect('register/success');
    }
    
    public function updateProfile($idUser)
    {
        $post = $this->input->post();
        $idUser = $this->session->idUser;
        $this->idUser = $idUser;
        $this->namaDepan = $post["namaDepan"];
        $this->namaBelakang = $post["namaBelakang"];
        $this->noHp = $post["noHp"];
        $this->email = $post["email"];
        $this->level = $post["level"];
        $this->db->update('users', $this, array('idUser' => $post['idUser']));
    }
}

