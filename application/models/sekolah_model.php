<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of program_keahlian
 *
 * @author agasi
 */
class Sekolah_model extends CI_Model{
    private $table_name = "sekolah";

    public function get_all_sekolah()
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
    
    public function get_sekolah($limit, $offset)
    {
        $query = $this->db->get($this->table_name, $limit, $offset);
        return $query->result();
    }

    public function get_sekolah_by_id($id)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query->row();
    }

    public function get_count_sekolah()
    {
        $this->db->from($this->table_name);
        return $this->db->count_all_results();
    }

    public function save_sekolah($nama, $npsn, $alamat, $status)
    {
        $data = array(
            'nama' => $nama,
            'npsn' => $npsn,
            'alamat' => $alamat,
            'status' => $status
        );
        $this->db->insert($this->table_name, $data);
    }

    public function update_sekolah($id, $nama, $npsn, $alamat, $status)
    {
        $data = array(
            'nama' => $nama,
            'npsn' => $npsn,
            'alamat' => $alamat,
            'status' => $status
        );

        $this->db->update($this->table_name, $data, array('id' => $id));
    }
}
