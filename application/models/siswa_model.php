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
		sk.nama AS sekolah,
		cs.waktu_daftar,
                cs.status,
		(SELECT GROUP_CONCAT(un.nilai SEPARATOR ',') FROM nilai_un un WHERE un.calon_siswa_id = @id ORDER BY un.mata_pelajaran_id) AS nilai,
                (SELECT GROUP_CONCAT(b.bobot SEPARATOR ',') FROM bobot b WHERE b.program_keahlian_id = @pk_id ORDER BY b.mata_pelajaran_id) AS bobot
                FROM calon_siswa cs JOIN program_keahlian pk ON cs.program_keahlian_id = pk.id
                JOIN sekolah sk ON cs.sekolah_id = sk.id
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
		sk.nama AS sekolah,
		cs.waktu_daftar,
                cs.status,
		(SELECT GROUP_CONCAT(un.nilai SEPARATOR ',') FROM nilai_un un WHERE un.calon_siswa_id = @id ORDER BY un.mata_pelajaran_id) AS nilai,
                (SELECT GROUP_CONCAT(b.bobot SEPARATOR ',') FROM bobot b WHERE b.program_keahlian_id = @pk_id ORDER BY b.mata_pelajaran_id) AS bobot
                FROM calon_siswa cs JOIN program_keahlian pk ON cs.program_keahlian_id = pk.id
                JOIN sekolah sk ON cs.sekolah_id = sk.id
                WHERE YEAR(cs.waktu_daftar) = ?";

        $query = $this->db->query($sql, array($tahun));
        return $query->result();
    }

    public function get_all_siswa()
    {
        $this->db->select('s.id, s.nama, k.kelas, pk.program_keahlian');
        $this->db->from('siswa s');
        $this->db->join('program_keahlian pk', 's.program_keahlian_id = pk.id');
        $this->db->join('kelas k', 's.kelas_id = k.id');
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
            'program_keahlian_id' => $siswa->program_keahlian_id,
            'no_pendaftaran' => $siswa->no_pendaftaran,
            'kelas_id' => $kelas,
            'nama' => $siswa->nama,
            'nisn' => $siswa->nisn,
            'tempat_lahir' => $siswa->tempat_lahir,
            'tgl_lahir' => $siswa->tgl_lahir,
            'jenis_kelamin' => $siswa->jenis_kelamin,
            'agama_id' => $siswa->agama_id,
            'alamat' => $siswa->alamat_jogja,
            'alamat_jogja' => $siswa->alamat_jogja,
            'no_telepon' => $siswa->no_telepon,
            'ayah' => $siswa->ayah,
            'ibu' => $siswa->ibu,
            'alamat_ortu' => $siswa->alamat_ortu,
            'pekerjaan_ayah' => $siswa->pekerjaan_ayah,
            'pekerjaan_ibu' => $siswa->pekerjaan_ibu,
            'no_telepon_ortu' => $siswa->no_telepon_ortu,
            'wali' => $siswa->wali,
            'pekerjaan_wali' => $siswa->pekerjaan_wali,
            'alamat_wali' => $siswa->alamat_wali,
            'no_telepon_wali' => $siswa->no_telepon_wali,
            'sekolah_id' => $siswa->sekolah_id,
            'sekolah_asal' => $siswa->sekolah_asal,
            'npsn' => $siswa->npsn,
            'sekolah_status' => $siswa->sekolah_status,
            'sekolah_alamat' => $siswa->sekolah_alamat
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
		ag.agama,
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
