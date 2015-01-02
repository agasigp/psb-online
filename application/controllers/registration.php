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
            'view' => 'frontend/registration'
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

        $data1 = array(
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

        $this->registration_model->save_registration($data1);
        $this->session->set_flashdata('no_pendaftaran', $no_pendaftaran);
        $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');
        
        redirect('registration/show_success_registration');
    }

    public function show_success_registration()
    {
        $no_pendaftaran = $this->session->flashdata('no_pendaftaran');
        $siswa = $this->registration_model->get_calon_siswa_by_no_pendaftaran($no_pendaftaran);
//        print_r($siswa);exit;
        $data = array(
            'siswa' => $siswa,
            'un' => $this->registration_model->get_nilai_un_by_id($siswa->id),
            'prestasi' => $this->registration_model->get_prestasi_by_id($siswa->id),
            'view' => 'frontend/registration_success'
        );

        $this->load->view('template', $data);
    }

    public function search_registration()
    {
        $no_pendaftaran = $this->input->post('no_pendaftaran');
        $siswa = $this->registration_model->get_calon_siswa_by_no_pendaftaran($no_pendaftaran);

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
                'view' => 'frontend/registration_success'
            );
        }
        
        $this->load->view('template', $data);
    }

    public function list_registration()
    {
        $this->load->library(array('pagination'));
        $this->load->model(array('registration_model'));
        $config['base_url'] = site_url('registration/list_registration');
        $config['per_page'] = 10;
        $config['total_rows'] = $this->registration_model->get_count_result();
        $this->pagination->initialize($config);
        
        $data = array(
            'registration' => $this->registration_model->get_result($config['per_page'], (int)$this->uri->segment('3')),
            'program_keahlian' => $this->program_keahlian_model->get_all_program_keahlian(),
            'view' => 'frontend/registration_list'
        );
//        print_r($data);exit;

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
