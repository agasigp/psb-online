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

    public function get_program_keahlian()
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
    public function get_program_keahlian_by_id($id)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query->row();
    }
}
