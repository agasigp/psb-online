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
class Program_keahlian_model extends CI_Model{
    //put your code here
    private $table_name = "program_keahlian";

    public function get_all_program_keahlian()
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function get_program_keahlian($limit, $offset)
    {
        $query = $this->db->get($this->table_name, $limit, $offset);
        return $query->result();
    }

    public function get_program_keahlian_by_id($id)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query->row();
    }

    public function get_count_program_keahlian()
    {
        $this->db->from($this->table_name);
        return $this->db->count_all_results();
    }

    public function save_program_keahlian($nama, $kode)
    {
        $data = array(
            'program_keahlian' => $nama,
            'kode' => $kode
        );
        $this->db->insert($this->table_name, $data);
    }

    public function update_program_keahlian($id, $nama, $kode)
    {
        $data = array(
            'program_keahlian' => $nama,
            'kode' => $kode
        );

        $this->db->update($this->table_name, $data, array('id' => $id));
    }
}
