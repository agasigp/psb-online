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

    public function get_agama()
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
}
