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
class Kelas_model extends CI_Model {

    //put your code here
    private $table_name = "kelas";

    public function get_all_kelas()
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function get_kelas($limit, $offset)
    {       
        $this->db->limit($limit, $offset);
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function get_kelas_by_id($id)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query->row();
    }

    public function get_count_kelas()
    {
        $this->db->from($this->table_name);
        return $this->db->count_all_results();
    }

    public function save_kelas($kelas)
    {
        $data = array(
//            'program_keahlian_id' => $program_keahlian_id,
            'kelas' => $kelas
        );
        $this->db->insert($this->table_name, $data);
    }

    public function update_kelas($id, $kelas)
    {
        $data = array(
//            'program_keahlian_id' => $program_keahlian_id,
            'kelas' => $kelas
        );

        $this->db->update($this->table_name, $data, array('id' => $id));
    }

}
