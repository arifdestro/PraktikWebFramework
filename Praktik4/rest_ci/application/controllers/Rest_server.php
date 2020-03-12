<?php

defined('BASEPATH') or exit('No direct script access allowed');

// Untuk memakai sistem rest pada kontak maka kita perlu memakai Class Rest disini
// Seteleah itu bisa kita terapkan di file yang lain

class Rest_server extends CI_Controller
{

    public function index()
    {
        $this->load->helper('url');

        $this->load->view('rest_server');
    }
}
