<?php

class Login extends CI_Controller
{

    // Konstruktor memanggil model m_login
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    // Method memanggil view v_login untuk form login user
    function index()
    {
        $this->load->view('v_login');
    }

    // Method ini digunakan untuk menge-cek username dan password yang dimasukkan oleh user
    // Login dengan array dengan password bertipe md5
    // Jika sukses maka user berhasil masuk dan bisa melakukan CRUD
    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login("admin", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("crud"));
        } else {
            echo "Username dan password salah !";
        }
    }

    // Jika user mengklik Login maka session akan berakhir
    // dan diarahkan ke form login
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
