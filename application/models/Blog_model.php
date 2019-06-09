<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'judulArtikel',
            'label' => 'Juaul',
            'rules' => 'required']
        ];
    }
    public function addArtikel(){
        $post = $this->input->post();

        $this->idArtikel = uniqid();
        $this->judulArtikel = $post["judulArtikel"];
        $this->isiArtikel = $post["editor"];
        $this->tglArtikel = $post["tglArtikel"];
        $this->image = $this->_uploadImage();
        $this->db->insert('blog',$this);
        redirect('admin/blog');
    }
    public function updateArtikel()
    {
        $post = $this->input->post();

        $this->idArtikel = $post["idArtikel"];
        $this->judulArtikel = $post["judulArtikel"];
        $this->isiArtikel = $post["editor"];
        $this->tglArtikel = $post["tglArtikel"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["oldImage"];
        };

        $this->db->update('blog', $this, array('idArtikel' => $post['idArtikel']));
    }
    public function getById($idArtikel){
        return $this->db->get_where('blog',['idArtikel' => $idArtikel])->row();
    }
    public function getAll(){
        return $this->db->get('blog')->result();
    }  
    public function delete($idArtikel){
        $this->_deleteImage($idArtikel);
        return $this->db->delete('blog', array("idArtikel" => $idArtikel)); 
    }
    private function _uploadImage()
    {
        $this->input->post();
        $config['upload_path']          = './uploadimg/blog/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->idArtikel;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }
    private function _deleteImage($idKost)
    {
        $kost = $this->getById($idKost);
        if ($kost->image != "default.jpg") {
            $filename = explode(".", $kost->image)[0];
            return array_map('unlink', glob(FCPATH."uploadimg/blog/$filename.*"));
        }
    }
}
