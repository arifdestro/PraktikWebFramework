<?php

class Admin extends CI_Controller
{

    // Konstruktor kelas Admin yang memanggil session untuk login user
    // Apabila berhasil masuk ke v_tampil
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    function index()
    {
        $this->load->view('v_tampil');
    }
}

// Mohon maaf saya sedikit modifikasi untuk login tidak saya arahkan ke view admin-nya
// saya men-direct ke proses crud-nya jadi mungkin tidak sama dengan di BKPM
