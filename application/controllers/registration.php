<?php

/**
 * Description of registration
 *
 * @author agasi
 */
class Registration extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('registration_model', 'program_keahlian_model'));
//        $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $data['view'] = "frontend/index";
        $this->load->view('template', $data);
    }

    public function show_registration()
    {
        $this->load->model(array('agama_model', 'pekerjaan_model', 'sekolah_model', 'mapel_model'));
        $data = array(
            'program_keahlian' => $this->program_keahlian_model->get_all_program_keahlian(),
            'agamas' => $this->agama_model->get_all_agama(),
            'pekerjaans' => $this->pekerjaan_model->get_all_pekerjaan(),
            'sekolahs' => $this->sekolah_model->get_all_sekolah(),
            'mapels' => $this->mapel_model->get_all_mapel(),
            'view' => 'frontend/registration',
            'js' => 'frontend/registration_js'
        );

        $this->load->view('template', $data);
    }

    public function do_registration()
    {
        $last_id = $this->registration_model->get_last_id();
        $no_pendaftaran = null;

        switch ($this->input->post('program_keahlian'))
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

        if ($this->input->post('sekolah') == 4)
        {
            $data['siswa']['sekolah_asal'] = $this->input->post('asal_sekolah');
            $data['siswa']['npsn'] = $this->input->post('npsn');
            $data['siswa']['sekolah_alamat'] = $this->input->post('alamat_sekolah');
            $data['siswa']['sekolah_status'] = $this->input->post('status_sekolah');
        }

        $this->registration_model->save_registration($data);
        $this->session->set_flashdata('no_pendaftaran', $no_pendaftaran);
        
        $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

        redirect('registration/show_success_registration');
    }

    public function show_success_registration()
    {
        if ($this->session->flashdata('no_pendaftaran') == FALSE)
        {
            redirect('registration');
        }

        $this->load->model(array('bobot_nilai_model'));
        $no_pendaftaran = $this->session->flashdata('no_pendaftaran');
        $siswa = $this->registration_model->get_calon_siswa_by_no_pendaftaran($no_pendaftaran);
        $bobot_nilai = $this->bobot_nilai_model->get_bobot_nilai_by_program_keahlian($siswa->program_keahlian_id);
//        print_r($siswa);exit;
        $data = array(
            'siswa' => $siswa,
            'un' => $this->registration_model->get_nilai_un_by_id($siswa->id),
            'prestasi' => $this->registration_model->get_prestasi_by_id($siswa->id),
            'bobot' => $bobot_nilai,
            'view' => 'frontend/registration_success'
        );

        $this->load->view('template', $data);
    }

    public function search_registration()
    {
        $this->load->model(array('bobot_nilai_model'));
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $siswa = $this->registration_model->get_calon_siswa_by_no_pendaftaran($no_pendaftaran);
        $bobot_nilai = $this->bobot_nilai_model->get_bobot_nilai_by_program_keahlian($siswa->program_keahlian_id);
        
        if (empty($siswa))
        {
            $data = array(
                'no_pendaftaran' => $no_pendaftaran,
                'view' => 'frontend/registration_success'
            );
        }
        else
        {
            $data = array(
                'siswa' => $siswa,
                'un' => $this->registration_model->get_nilai_un_by_id($siswa->id),
                'prestasi' => $this->registration_model->get_prestasi_by_id($siswa->id),
                'bobot' => $bobot_nilai,
                'view' => 'frontend/registration_success'
            );
        }

        $this->load->view('template', $data);
    }

    public function list_registration()
    {
//        $this->load->library(array('pagination'));
        $this->load->model(array('registration_model'));
//        $config['base_url'] = site_url('registration/list_registration');
//        $config['per_page'] = 20;


        if ($this->input->post('program_keahlian') == FALSE)
        {
            if ($this->session->userdata('program_keahlian') == FALSE)
            {
                $this->session->set_userdata('program_keahlian', 1);
                $config['total_rows'] = $this->registration_model->get_count_calon_siswa(date("Y"));
//                $this->pagination->initialize($config);
                $registration = $this->registration_model->get_calon_siswa(date("Y"));
            }
            else
            {
//                $this->session->set_userdata('program_keahlian', $this->input->post('program_keahlian'));
                $config['total_rows'] = $this->registration_model->get_count_calon_siswa(date("Y"), $this->session->userdata('program_keahlian'));
//                $this->pagination->initialize($config);
                $registration = $this->registration_model->get_calon_siswa(date("Y"), $this->session->userdata('program_keahlian'));
            }
        }
        else
        {
            $this->session->set_userdata('program_keahlian', $this->input->post('program_keahlian'));
            $config['total_rows'] = $this->registration_model->get_count_calon_siswa(date("Y"), $this->session->userdata('program_keahlian'));
//            $this->pagination->initialize($config);
            $registration = $this->registration_model->get_calon_siswa(date("Y"), $this->session->userdata('program_keahlian'));
        }

        $data = array(
            'registration' => $registration,
            'program_keahlian' => $this->program_keahlian_model->get_all_program_keahlian(),
            'program_keahlian_id' => $this->session->userdata('program_keahlian'),
            'view' => 'frontend/registration_list',
            'js' => 'frontend/registration_list_js',
            'css' => 'frontend/registration_list_css',
        );
//        print_r($data);exit;

        $this->load->view('template', $data);
    }

    public function list_registration_json()
    {
        $length = (int) $this->input->post('length');
        $tart = (int) $this->input->post('start');
        $registration = $this->registration_model->get_calon_siswa("2014", $length, $tart);
        $count_registration = $this->registration_model->get_count_calon_siswa("2014");

        $reg = array();
        foreach ($registration as $value)
        {
//            $data = array();
            foreach ($value as $v)
            {
//                array_push($data, $v);
            }
            array_push($reg, $value);
        }

        if ($this->input->post('program_keahlian') == FALSE)
        {
            $json = array(
                'draw' => (int) $this->input->post('draw'),
                'recordsTotal' => $count_registration,
                'recordsFiltered' => $count_registration,
                'data' => $reg
            );

            $this->output->set_content_type('application/json')->set_output(json_encode($json));
        }
        else
        {
            $$data['registration'] = $this->registration_model->get_calon_siswa("2014", $length, $tart, $this->input->post('program_keahlian'));
        }
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
        }

        return $NoTrans;
    }

}
