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
class Pekerjaan_model extends CI_Model{
    //put your code here
    private $table_name = "pekerjaan";

    public function get_all_pekerjaan()
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function get_pekerjaan($limit, $offset)
    {
        $query = $this->db->get($this->table_name, $limit, $offset);
        return $query->result();
    }

    public function get_pekerjaan_by_id($id)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query->row();
    }

    public function get_count_pekerjaan()
    {
        $this->db->from($this->table_name);
        return $this->db->count_all_results();
    }

    public function save_pekerjaan($nama)
    {
        $data = array(
            'pekerjaan' => $nama
        );
        $this->db->insert($this->table_name, $data);
    }

    public function update_pekerjaan($id, $nama)
    {
        $data = array(
            'pekerjaan' => $nama
        );

        $this->db->update($this->table_name, $data, array('id' => $id));
    }
}
