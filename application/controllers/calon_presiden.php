<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
//
 class Calon_presiden extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('calon_presiden_model');
    }

    function index() {
        $data['judul'] = "Halaman Calon Presiden";  
        $data['calon_presiden'] = $this->calon_presiden_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("calon_presiden/vw_calon_presiden", $data);
        $this->load->view("layout/footer");
    }

    public function tambah(){
        $data['judul'] = "Halaman Tambah calon presiden";
        $data['calon_presiden'] = $this->calon_presiden_model->get();  
        $this->load->view("layout/header");
        $this->load->view("calon_presiden/vw_tambah_calon_presiden", $data);
        $this->load->view("layout/footer");
    }

    public function upload(){
        $data = [
            'namaLengkap' => $this->input->post('namaLengkap'),
            'nik' => $this->input->post('nik'),
            'asal' => $this->input->post('asal'),
            'partai' => $this->input->post('partai'),
            'riwayatPekerjaan' => $this->input->post('riwayatPekerjaan'),
            'umur' => $this->input->post('umur'),
        ];
        $this->calon_presiden_model->insert($data);
        redirect('Calon_presiden');
    }

    public function hapus($id){
        $this->calon_presiden_model->delete($id);
        redirect('Calon_presiden');
    }

    public function edit($id){
        $data['judul'] = "Halaman Edit calon presiden";
        $data['calon_presiden'] = $this->calon_presiden_model->getById($id);  
        $this->load->view("layout/header", $data);
        $this->load->view("calon_presiden/vw_ubah_calon_presiden", $data);
        $this->load->view("layout/footer");
    }
 
    public function update(){
        $data = [
            'namaLengkap' => $this->input->post('namaLengkap'),
            'nik' => $this->input->post('nik'),
            'asal' => $this->input->post('asal'),
            'partai' => $this->input->post('partai'),
            'riwayatPekerjaan' => $this->input->post('riwayatPekerjaan'),
            'umur' => $this->input->post('umur'),
        ];
        $id = $this->input->post('id');
        $this->calon_presiden_model->update(['id' => $id],$data);
        redirect('Calon_presiden');
    }
}