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
class Bobot_nilai_model extends CI_Model{
    //put your code here
    private $table_name = "bobot";

    public function get_bobot_nilai($limit, $offset)
    {
        $this->db->select('b.id, pk.program_keahlian, mp.mata_pelajaran, b.bobot');
        $this->db->from('bobot b');
        $this->db->join('mata_pelajaran mp', 'b.mata_pelajaran_id = mp.id');
        $this->db->join('program_keahlian pk', 'b.program_keahlian_id = pk.id');
        $this->db->order_by('pk.program_keahlian');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        
        return $query->result();
    }

    public function get_bobot_nilai_by_id($id)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query->row();
    }

    public function get_count_bobot_nilai()
    {
        $this->db->from($this->table_name);
        return $this->db->count_all_results();
    }

    public function save_bobot_nilai($program_keahlian, $mapel, $bobot)
    {
        $data = array(
            'program_keahlian_id' => $program_keahlian,
            'mata_pelajaran_id' => $mapel,
            'bobot' => $bobot           
        );
        
        $this->db->insert($this->table_name, $data);
    }

    public function update_bobot_nilai($id, $program_keahlian, $mapel, $bobot)
    {
        $data = array(
            'program_keahlian_id' => $program_keahlian,
            'mata_pelajaran_id' => $mapel,
            'bobot' => $bobot
        );

        $this->db->update($this->table_name, $data, array('id' => $id));
    }
}
