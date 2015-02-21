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
class Siswa_model extends CI_Model {

    private $table_name = "calon_siswa";

    public function get_calon_siswa($limit, $offset, $tahun)
    {
        $sql = "SELECT
		@id := cs.id AS id,
                @pk_id := cs.program_keahlian_id,
                cs.program_keahlian_id,
                cs.nama,
		pk.program_keahlian,
		cs.no_pendaftaran,
		cs.nisn,
		cs.sekolah_asal,
		cs.waktu_daftar,
                cs.status,
		(SELECT GROUP_CONCAT(un.nilai SEPARATOR ',') FROM nilai_un un WHERE un.calon_siswa_id = @id ORDER BY un.mata_pelajaran_id) AS nilai,
                (SELECT GROUP_CONCAT(b.bobot SEPARATOR ',') FROM bobot b WHERE b.program_keahlian_id = @pk_id ORDER BY b.mata_pelajaran_id) AS bobot
                FROM calon_siswa cs JOIN program_keahlian pk ON cs.program_keahlian_id = pk.id
                WHERE YEAR(cs.waktu_daftar) = ?
                LIMIT ? OFFSET ?";

        $query = $this->db->query($sql, array($tahun, $limit, $offset));
        return $query->result();
    }

    public function get_all_calon_siswa($tahun)
    {
        $sql = "SELECT
		@id := cs.id AS id,
                @pk_id := cs.program_keahlian_id,
                cs.program_keahlian_id,
                cs.nama,
		pk.program_keahlian,
		cs.no_pendaftaran,
		cs.nisn,
		cs.sekolah_asal,
		cs.waktu_daftar,
                cs.status,
		(SELECT GROUP_CONCAT(un.nilai SEPARATOR ',') FROM nilai_un un WHERE un.calon_siswa_id = @id ORDER BY un.mata_pelajaran_id) AS nilai,
                (SELECT GROUP_CONCAT(b.bobot SEPARATOR ',') FROM bobot b WHERE b.program_keahlian_id = @pk_id ORDER BY b.mata_pelajaran_id) AS bobot
                FROM calon_siswa cs JOIN program_keahlian pk ON cs.program_keahlian_id = pk.id
                WHERE YEAR(cs.waktu_daftar) = ?";

        $query = $this->db->query($sql, array($tahun));
        return $query->result();
    }

    public function get_all_siswa()
    {
        $this->db->select('s.id, cs.nama, k.kelas, pk.program_keahlian');
        $this->db->from('siswa s');
        $this->db->join('kelas k', 's.kelas_id = k.id');
        $this->db->join('calon_siswa cs', 's.calon_siswa_id = cs.id');
        $this->db->join('program_keahlian pk', 'cs.program_keahlian_id = pk.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_calon_siswa_by_id2($id)
    {
        $query = $this->db->get_where($this->table_name, array('id' => $id));
        return $query->row();
    }

    public function get_count_bobot_kesehatan($id)
    {
        $this->db->from('tes_kesehatan');
        $this->db->where('calon_siswa_id', $id);
        
        return $this->db->count_all_results();
    }

    public function save_siswa($kelas, $siswa)
    {
        $data = array(
            'calon_siswa_id' => $siswa->id,
            'kelas_id' => $kelas
        );
        
        $this->db->insert('siswa', $data);
    }

    public function update_siswa($id, $nama, $npsn, $alamat, $status)
    {
        $data = array(
            'nama' => $nama,
            'npsn' => $npsn,
            'alamat' => $alamat,
            'status' => $status
        );

        $this->db->update($this->table_name, $data, array('id' => $id));
    }

    public function save_tes_kesehatan($data)
    {
        $this->db->insert('tes_kesehatan', $data);
    }

    public function update_tes_kesehatan($id, $data)
    {
        $this->db->where('calon_siswa_id', $id);
        $this->db->update('tes_kesehatan', $data);
    }

    public function get_tes_kesehatan($id)
    {
        $query = $this->db->get_where('tes_kesehatan', array('calon_siswa_id' => $id));
        return $query->row();
    }

    public function get_calon_siswa_by_id($id)
    {
        $this->db->select('cs.id,
                cs.nama ,
		cs.agama,
                pk.id AS program_keahlian_id,
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
                cs.sekolah_asal,
		cs.pekerjaan_ayah,
		cs.pekerjaan_ibu,
		cs.alamat_ortu,
		cs.no_telepon_ortu,
		cs.wali,
		cs.pekerjaan_wali,
		cs.alamat_wali,
		cs.no_telepon_wali,
		cs.waktu_daftar');
        $this->db->from('calon_siswa cs');
        $this->db->join('program_keahlian pk', 'cs.program_keahlian_id = pk.id');
        $this->db->where('cs.id', $id);
        $query = $this->db->get();
//        $query = $this->db->get_where($this->table_calon_siswa, array('no_pendaftaran' => $no_daftar));
        return $query->row();
    }

    public function get_status_siswa_by_id($id)
    {
        $this->db->select('id,nama,no_pendaftaran,status');
        $this->db->where('id', $id);
        $query = $this->db->get($this->table_name);
        
        return $query->row();
    }

    public function update_status_siswa($id, $status)
    {
        $this->db->where('id', $id);
        $this->db->update($this->table_name, array('status' => $status));
    }

}
