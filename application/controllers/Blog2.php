<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog2 extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $data['judul'] = "Judul blog";
        $data['isi'] = "isi blog";
        $this->load->view("blog_view",$data);
    }
}
?>