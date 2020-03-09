<?php

class M_data extends CI_Model
{
    // Method untuk meanmpilkan data sesuai database
    function tampil_data()
    {
        return $this->db->get('user');
    }

    // Method yang bertugas untuk memasukkan data ke database
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // Method untuk menghapus data dari database berdasarkan id
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // Method Edit data user berdasarkan id
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // Method yang bertugas untuk mengganti atau update data user
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
