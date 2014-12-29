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
    private $table_calon_siswa = "calon_siswa";
    private $table_nilai_un = "nilai_un";

    public function save_registration($data)
    {
        $this->db->trans_start();
        $this->db->insert($this->table_calon_siswa, $data['siswa']);

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
        
//        $this->db->where('')
        $query = $this->db->count_all($this->table_calon_siswa);
        return $query;
    }

    public function get_calon_siswa_by_id($id)
    {
        $query = $this->db->get_where($this->table_calon_siswa, array('id' => $id));
        return $query->row();
    }

    public function get_calon_siswa_by_no_pendaftaran($no_daftar)
    {
        $this->db->select('cs.id,
                cs.nama ,
		ag.agama,
		pk.program_keahlian,
		cs.no_pendaftaran,
		cs.nisn,
		cs.tempat_lahir,
		cs.tgl_lahir,
		cs.jenis_kelamin,
		cs.alamat,
		cs.alamat_jogja,
		cs.no_telepon,
		cs.ayah,
		cs.ibu,
		p1.pekerjaan AS pekerjaan_ayah,
		p2.pekerjaan AS pekerjaan_ibu,
		cs.alamat_ortu,
		cs.no_telepon_ortu,
		cs.wali,
		p3.pekerjaan AS pekerjaan_wali,
		cs.alamat_wali,
		cs.no_telepon_wali,
		sk.nama AS sekolah,
		cs.waktu_daftar');
        $this->db->from('calon_siswa cs');
        $this->db->join('agama ag', 'cs.agama_id = ag.id');
        $this->db->join('pekerjaan p1', 'cs.pekerjaan_ayah');
        $this->db->join('pekerjaan p2', 'cs.pekerjaan_ibu');
        $this->db->join('pekerjaan p3', 'cs.pekerjaan_wali');
        $this->db->join('program_keahlian pk', 'cs.program_keahlian_id = pk.id');
        $this->db->join('sekolah sk', 'cs.sekolah_id = sk.id');
        $this->db->where('cs.no_pendaftaran', $no_daftar);
        $query = $this->db->get();
//        $query = $this->db->get_where($this->table_calon_siswa, array('no_pendaftaran' => $no_daftar));
        return $query->row();
    }

    public function get_nilai_un_by_id($id_siswa)
    {
        $this->db->select('mapel.id, mapel.mata_pelajaran, un.nilai');
        $this->db->from('nilai_un un');
        $this->db->join('mata_pelajaran mapel', 'mapel.id = un.mata_pelajaran_id');
        $this->db->join('calon_siswa cs', 'cs.id = un.calon_siswa_id');
        $this->db->where('un.calon_siswa_id', $id_siswa);

        $query = $this->db->get();
        return $query->result();
    }

    public function get_prestasi_by_id($id_siswa)
    {       
        $query = $this->db->get_where('prestasi', array('calon_siswa_id' => $id_siswa));
        return $query->result();
    }

    public function get_result()
    {
        $this->db->select('cs.id,
                cs.nama ,
		pk.program_keahlian,
		cs.no_pendaftaran,
		cs.nisn,
		sk.nama AS sekolah,
		cs.waktu_daftar');
        $this->db->from('calon_siswa cs');
        $this->db->join('program_keahlian pk', 'cs.program_keahlian_id = pk.id');
        $this->db->join('sekolah sk', 'cs.sekolah_id = sk.id');
        $query = $this->db->get();

        return $query->result();
    }
}
