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
        $this->load->model(array('registration_model', 'program_keahlian_model', 'info_model'));
//        $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $data['view'] = "frontend/index";
        $this->load->view('template', $data);
    }

    public function show_registration()
    {
        $this->load->helper('captcha');
        $vals = array(
            'img_path' => './captcha/',
            'img_url' => base_url() . 'captcha/',
            'img_width' => '150',
            'font_path' => './system/fonts/texb.ttf',
            'img_height' => 30,
            'expiration' => 7200
        );
//        var_dump($vals);exit;
        $cap = create_captcha($vals);
        $capdata = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']
        );

        $this->load->model(array('pekerjaan_model', 'sekolah_model', 'mapel_model'));
        $this->registration_model->get_captcha($capdata);

        $data = array(
            'program_keahlian' => $this->program_keahlian_model->get_all_program_keahlian(),
            'pekerjaans' => $this->pekerjaan_model->get_all_pekerjaan(),
            'mapels' => $this->mapel_model->get_all_mapel(),
            'view' => 'frontend/registration',
            'js' => 'frontend/registration_js',
            'capdata' => $cap
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
                'sekolah_asal' => $this->input->post('asal_sekolah'),
                'npsn' => $this->input->post('npsn'),
                'sekolah_alamat' => $this->input->post('alamat_sekolah'),
                'sekolah_status' => $this->input->post('status_sekolah'),
                'nama' => $this->input->post('nama'),
                'nisn' => $this->input->post('nisn'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'alamat' => $this->input->post('alamat'),
                'alamat_kelurahan' => $this->input->post('alamat_kelurahan'),
                'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
                'alamat_kabupaten' => $this->input->post('alamat_kabupaten'),
                'alamat_provinsi' => $this->input->post('alamat_provinsi'),
                'alamat_jogja' => $this->input->post('alamat_jogja'),
                'alamat_jogja_kelurahan' => $this->input->post('alamat_jogja_kelurahan'),
                'alamat_jogja_kecamatan' => $this->input->post('alamat_jogja_kecamatan'),
                'alamat_jogja_kabupaten' => $this->input->post('alamat_jogja_kabupaten'),
                'no_telepon' => $this->input->post('no_telepon'),
                'ayah' => $this->input->post('ayah'),
                'ibu' => $this->input->post('ibu'),
                'alamat_ortu' => $this->input->post('alamat_ortu'),
                'alamat_kelurahan_ortu' => $this->input->post('alamat_kelurahan_ortu'),
                'alamat_kecamatan_ortu' => $this->input->post('alamat_kecamatan_ortu'),
                'alamat_kabupaten_ortu' => $this->input->post('alamat_kabupaten_ortu'),
                'alamat_provinsi_ortu' => $this->input->post('alamat_provinsi_ortu'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'wali' => $this->input->post('wali'),
                'pekerjaan_wali' => $this->input->post('pekerjaan_wali'),
                'alamat_wali' => $this->input->post('alamat_wali'),
                'alamat_kelurahan_wali' => $this->input->post('alamat_kelurahan_wali'),
                'alamat_kecamatan_wali' => $this->input->post('alamat_kecamatan_wali'),
                'alamat_kabupaten_wali' => $this->input->post('alamat_kabupaten_wali'),
                'alamat_provinsi_wali' => $this->input->post('alamat_provinsi_wali'),
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

        $check_captcha = $this->registration_model->check_captcha($this->input->post('captcha'));
        if ($check_captcha == 0)
        {
            echo "You must submit the word that appears in the image";
        }
        else
        {
            $this->registration_model->save_registration($data);
            $this->session->set_flashdata('no_pendaftaran', $no_pendaftaran);

            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');
            redirect('registration/show_success_registration');
        }
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
        $this->load->model(array('registration_model'));

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

//        print_r($registration);exit;
        foreach ($registration as $key => $value)
        {
//            echo $registration[$key]->nama;
//            echo $key." : ".$value->nama."<br>";
            $registration[$key]->nama = $value->nama;
        }
//        exit;
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

    public function show_info()
    {
        $data = array(
            'view' => 'frontend/registration_info',
            'info' => $this->info_model->get_info_by_id(1)
        );
        $this->load->view('template', $data);
    }

    public function show_visi_misi()
    {
        $data = array(
            'view' => 'frontend/registration_info',
            'info' => $this->info_model->get_info_by_id(2)
        );
        $this->load->view('template', $data);
    }

    public function show_info_jurusan()
    {
        $data = array(
            'view' => 'frontend/registration_info',
            'info' => $this->info_model->get_info_by_id(3)
        );
        $this->load->view('template', $data);
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