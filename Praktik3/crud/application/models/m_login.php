<?php

class M_login extends CI_Model
{
    // Fungsi / Method untuk cek login user
    // Method ini akan mengecek data user di database
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
