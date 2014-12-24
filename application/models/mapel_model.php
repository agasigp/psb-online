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
class Mapel_model extends CI_Model{
    //put your code here
    private $table_name = "mata_pelajaran";

    public function get_mapel()
    {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
}
