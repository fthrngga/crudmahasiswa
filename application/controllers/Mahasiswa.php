<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
//fathur
 class Mahasiswa extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->model('Prodi_model');
    }

    function index() {
        $data['judul'] = "Halaman Mahasiswa";  
        $data['mahasiswa'] = $this->Mahasiswa_model->get();  
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_mahasiswa", $data);
        $this->load->view("layout/footer");
    }

    public function tambah(){
        $data['judul'] = "Halaman Tambah Mahasiswa";
        $data['prodi'] = $this->Prodi_model->get();  
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
        $this->load->view("layout/footer");
    }

    public function detail($id){
        $data['judul'] = "Halaman Detail Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);  
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
        $this->load->view("layout/footer");
    }

    public function hapus($id){
        $this->Mahasiswa_model->delete($id);
        redirect('mahasiswa');
    }

    public function upload(){
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),

        ];
        $this->Mahasiswa_model->insert($data);
        redirect('Mahasiswa');
    }

    public function edit($id){
        $data['judul'] = "Halaman Edit Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);  
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
        $this->load->view("layout/footer");
    }

    public function update(){
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),

        ];
        $id = $this->input->post('id');
        $this->Mahasiswa_model->update(['id' => $id],$data);
        redirect('Mahasiswa');
    }
 }