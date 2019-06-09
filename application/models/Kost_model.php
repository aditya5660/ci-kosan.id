<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kost_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('kost')->result();  
    }
    public function getfasilitas()
    {
        return $this->db->get('fasilitas')->result();    
    }
    public function getByUser($idUser)
    {
        return $this->db->get_where('kost', ["idUser" => $idUser])->result();
    }
    public function getById($idKost)
    {
        return $this->db->get_where('kost', ["idKost" => $idKost])->row();
    }
    public function rules()
    {
        return [
            ['field' => 'namaKost',
            'label' => 'Name',
            'rules' => 'required']
        ];
    }
    public function addKost()
    {
        $fasilitas = implode('//', $this->input->post('fasilitas'));
        $post = $this->input->post();

        $this->idKost = uniqid();
        $this->idUser = $this->session->idUser;
        $this->namaKost = $post["namaKost"];
        $this->tipeKost = $post["tipeKost"];
        $this->ukuranKamar = $post["ukuranKamar"];
        $this->hargaBulanan = $post["hargaBulanan"];
        $this->hargaTahunan = $post["hargaTahunan"];
        $this->jamKunjung = $post["jamKunjung"];
        $this->alamat = $post["alamat"];
        $this->kecamatan = $post["kecamatan"];
        $this->kabupatenKota = $post["kabupatenKota"];
        $this->provinsi = $post["provinsi"];
        $this->kodepos = $post["kodepos"];
        $this->deskripsi = $post["deskripsi"];
        $this->fasilitas = $fasilitas;
        $this->image = $this->_uploadImage();
        $this->tglKost = $post["tglKost"];

        $this->db->insert('kost',$this);
        redirect('owner/daftarkos');
    }
    public function updateKost()
    {
        $fasilitas = implode('//', $this->input->post('fasilitas'));
        $post = $this->input->post();
        
        $this->idKost = $post["idKost"];
        $this->idUser = $this->session->idUser;
        $this->namaKost = $post["namaKost"];
        $this->tipeKost = $post["tipeKost"];
        $this->ukuranKamar = $post["ukuranKamar"];
        $this->hargaBulanan = $post["hargaBulanan"];
        $this->hargaTahunan = $post["hargaTahunan"];
        $this->jamKunjung = $post["jamKunjung"];
        $this->alamat = $post["alamat"];
        $this->kecamatan = $post["kecamatan"];
        $this->kabupatenKota = $post["kabupatenKota"];
        $this->provinsi = $post["provinsi"];
        $this->kodepos = $post["kodepos"];
        $this->deskripsi = $post["deskripsi"];
        $this->fasilitas = $fasilitas;
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["oldImage"];
        };
        $this->tglKost = $post["tglKost"];

        $this->db->update('kost', $this, array('idKost' => $post['idKost']));
    }

    public function delete($idKost){
        $this->_deleteImage($idKost);
        return $this->db->delete('kost', array("idKost" => $idKost));
    }
    private function _uploadImage()
    {
        $this->input->post();
        $config['upload_path']          = './uploadimg/kost/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->idKost;
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
            return array_map('unlink', glob(FCPATH."uploadimg/kost/$filename.*"));
        }
    }
    function search_kost($title){
        $this->db->like('namaKost', $title , 'both');
        $this->db->order_by('namaKost', 'ASC');
        $this->db->limit(10);
        return $this->db->get('kost')->result();
    }
    function search_location($location){
        $this->db->like('provinsi', $location , 'both');
        $this->db->order_by('provinsi', 'ASC');
        $this->db->limit(10);
        return $this->db->get('kost')->result();
    }
    function search_tipekost($tipekost){
        $this->db->like('tipeKost', $tipekost , 'both');
        $this->db->order_by('tipeKost', 'ASC');
        $this->db->limit(10);
        return $this->db->get('kost')->result();
    }

} 
    
