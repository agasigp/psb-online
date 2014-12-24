<?php

/**
 * Description of registration
 *
 * @author agasi
 */
class Registration extends CI_Controller {

    //put your code here
    public function index()
    {
        $data['view'] = "frontend/index";
        $this->load->view('template', $data);
    }

    public function show_register()
    {
        $this->load->model(array('program_keahlian_model', 'agama_model', 'pekerjaan_model', 'sekolah_model', 'mapel_model'));
        $data = array(
            'program_keahlian' => $this->program_keahlian_model->get_program_keahlian(),
            'agamas' => $this->agama_model->get_agama(),
            'pekerjaans' => $this->pekerjaan_model->get_pekerjaan(),
            'sekolahs' => $this->sekolah_model->get_sekolah(),
            'mapels' => $this->mapel_model->get_mapel(),
            'view' => 'frontend/register'
        );

        $this->load->view('template', $data);
    }

    public function do_register()
    {
        $this->load->model(array('registration_model', 'program_keahlian_model'));
        $last_id = empty($this->registration_model->get_last_id()->last_id) ? 0 : $this->registration_model->get_last_id()->last_id;
//        print_r($this->registration_model->get_last_id());exit;
        $no_pendaftaran = null;

        switch ($last_id)
        {
            case 1:
                $kode_jurusan = $this->program_keahlian_model->get_program_keahlian_by_id(1)->kode;
                $no_pendaftaran = $this->_format_no_pendaftaran($last_id) . "/" . $kode_jurusan . "/SMK/" . date("y");
                break;
            case 2:
                $kode_jurusan = $this->program_keahlian_model->get_program_keahlian_by_id(2)->kode;
                $no_pendaftaran = $this->_format_no_pendaftaran($last_id) . "/" . $kode_jurusan . "/SMK/" . date("y");
                break;
            case 3:
                $kode_jurusan = $this->program_keahlian_model->get_program_keahlian_by_id(3)->kode;
                $no_pendaftaran = $this->_format_no_pendaftaran($last_id) . "/" . $kode_jurusan . "/SMK/" . date("y");
                break;
            default:
                $kode_jurusan = $this->program_keahlian_model->get_program_keahlian_by_id(4)->kode;
                $no_pendaftaran = $this->_format_no_pendaftaran($last_id) . "/" . $kode_jurusan . "/SMK/" . date("y");
                break;
        }

        $data = array(
            'siswa' => array(
                'program_keahlian_id' => $this->input->post('program_keahlian'),
                'no_pendaftaran' => $no_pendaftaran,
                'sekolah_id' => $this->input->post('sekolah'),
                'nama' => $this->input->post('nama'),
                'nisn' => $this->input->post('nisn'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama_id' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'alamat_jogja' => $this->input->post('alamat_jogja'),
                'no_telepon' => $this->input->post('no_telepon'),
                'ayah' => $this->input->post('ayah'),
                'ibu' => $this->input->post('ibu'),
                'alamat_ortu' => $this->input->post('alamat_ortu'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'wali' => $this->input->post('wali'),
                'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
                'alamat_wali' => $this->input->post('alamat_wali'),
                'no_telepon_wali' => $this->input->post('no_telepon_wali')
            ),
            'mata_pelajaran' => array(
                'bhs_indo' => $this->input->post('bhs_indo'),
                'bhs_inggris' => $this->input->post('bhs_inggris'),
                'matematika' => $this->input->post('matematika'),
                'ipa' => $this->input->post('ipa')
            ),
            'prestasi' => array(
                'prestasi1' => $this->input->post('prestasi1'),
                'prestasi2' => $this->input->post('prestasi2'),
                'prestasi3' => $this->input->post('prestasi3'),
                'prestasi4' => $this->input->post('prestasi4')
            )
        );

        $this->registration_model->save_registration($data);
        
        $this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');
        redirect('registration/show_register');
    }

    function _format_no_pendaftaran($num)
    {
        $num++;
        switch (strlen($num))
        {
            case 1 : $NoTrans = "0000" . $num;
                break;
            case 2 : $NoTrans = "000" . $num;
                break;
            case 3 : $NoTrans = "00" . $num;
                break;
            case 4 : $NoTrans = "0" . $num;
                break;
            default: $NoTrans = $num;
        } return $NoTrans;
    }

}
