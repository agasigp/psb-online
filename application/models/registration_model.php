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
class Registration_model extends CI_Model{
    //put your code here
    private $table_name = "calon_siswa";

    public function save_registration($data)
    {
        $this->db->trans_start();
        $this->db->insert($this->table_name, $data['siswa']);

        $nilai_un = array(
            array(
                'calon_siswa_id' => $this->db->insert_id(),
                'mata_pelajaran_id' => 1,
                'nilai' => $data['mata_pelajaran']['bhs_indo']
            ),
            array(
                'calon_siswa_id' => $this->db->insert_id(),
                'mata_pelajaran_id' => 2,
                'nilai' => $data['mata_pelajaran']['bhs_inggris']
            ),
            array(
                'calon_siswa_id' => $this->db->insert_id(),
                'mata_pelajaran_id' => 3,
                'nilai' => $data['mata_pelajaran']['matematika']
            ),
            array(
                'calon_siswa_id' => $this->db->insert_id(),
                'mata_pelajaran_id' => 4,
                'nilai' => $data['mata_pelajaran']['ipa']
            )
        );
        
        $prestasi = array(
            array(
                'calon_siswa_id' => $this->db->insert_id(),
                'prestasi' => $data['prestasi']['prestasi1']
            ),
            array(
                'calon_siswa_id' => $this->db->insert_id(),
                'prestasi' => $data['prestasi']['prestasi2']
            ),
            array(
                'calon_siswa_id' => $this->db->insert_id(),
                'prestasi' => $data['prestasi']['prestasi3']
            ),
            array(
                'calon_siswa_id' => $this->db->insert_id(),
                'prestasi' => $data['prestasi']['prestasi4']
            )
        );
        
        $this->db->insert_batch('nilai_un', $nilai_un);
        $this->db->insert_batch('prestasi', $prestasi);
        $this->db->trans_complete();
    }

    public function get_last_id()
    {
        $this->db->select_max('id', 'last_id');
        $query = $this->db->get('calon_siswa');
        return $query->row();
    }
}
