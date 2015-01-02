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
class Agama_model extends CI_Model{
    //put your code here
    private $table_name = "agama";

    public function get_all_agama()
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    public function get_agama($limit, $offset)
    {
        $query = $this->db->get($this->table_name, $limit, $offset);
        return $query->result();
    }

    public function get_agama_by_id($id)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query->row();
    }

    public function get_count_agama()
    {
        $this->db->from($this->table_name);
        return $this->db->count_all_results();
    }

    public function save_agama($nama)
    {
        $data = array(
            'agama' => $nama
        );
        $this->db->insert($this->table_name, $data);
    }

    public function update_agama($id, $nama)
    {
        $data = array(
            'agama' => $nama
        );

        $this->db->update($this->table_name, $data, array('id' => $id));
    }
}
