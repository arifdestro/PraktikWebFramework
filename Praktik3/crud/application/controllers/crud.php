<?php


class Crud extends CI_Controller
{

    // Modifikasi saya konstruk ini saya ambil dari Controller admin
    // disini kita memanggil session login user
    // memanggil Model dengan nama m_data
    // dan helper URL
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }

    // Disini akan menampilkan data dari m_data dan menampilkan result dari database
    // di view tampil akan memanggil tampil data dari model
    function index()
    {
        $data['user'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_tampil', $data);
    }

    // Method memanggil view input data atau bisa disebut form
    function tambah()
    {
        $this->load->view('v_input');
    }

    // Method menambahkan user sesuai field database
    function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );
        $this->m_data->input_data($data, 'user');
        redirect('crud/index');
    }

    // Method menghapus user berdasarkan id user
    function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'user');
        redirect('crud/index');
    }

    // Method edit data sesuai id user
    function edit($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where, 'user')->result();
        $this->load->view('v_edit', $data);
    }

    // Method untuk update data setelah edit dan data akan dimasukkan melalui array
    function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );

        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'user');
        redirect('crud/index');
    }
}
