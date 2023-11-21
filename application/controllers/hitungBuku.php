<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class HitungBuku extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('buku');
    }
    function index() {
        $this->buku->hitung_buku();
        
    }
 }
 