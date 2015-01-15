<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of siswa
 *
 * @author agasi
 */
class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('siswa_model'));
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/siswa/show_calon_siswa');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_calon_siswa()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->model(array('registration_model'));
            $config['total_rows'] = $this->registration_model->get_count_calon_siswa(date("Y"));

            $data = array(
                'siswas' => $this->siswa_model->get_all_calon_siswa(date("Y")),
                'active' => array(
                    'menu' => 'psb',
                    'submenu' => 'calon-siswa'
                ),
                'view' => 'admin/siswa/index',
                'js' => 'frontend/registration_list_js',
                'css' => 'frontend/registration_list_css'
            );
//            print_r($data['siswas']);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_tes_kesehatan($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $count = $this->siswa_model->get_count_bobot_kesehatan($id);
            if ($count == 0)
            {
                $data = array(
                    'siswa' => $this->siswa_model->get_siswa_by_id($id),
                    'view' => 'admin/siswa/show_add_tes_kesehatan',
                    'action' => 'admin/siswa/do_add_tes_kesehatan',
                    'active' => array(
                        'menu' => 'psb',
                        'submenu' => 'calon-siswa'
                    ),
                    'title' => 'Hasil Tes Kesehatan'
                );
                $this->load->view('admin/template', $data);
            }
            else
            {
                $data = array(
                    'siswa' => $this->siswa_model->get_siswa_by_id($id),
                    'tes_kesehatan' => $this->siswa_model->get_tes_kesehatan($id),
                    'view' => 'admin/siswa/show_add_tes_kesehatan',
                    'action' => 'admin/siswa/do_update_tes_kesehatan',
                    'active' => array(
                        'menu' => 'psb',
                        'submenu' => 'calon-siswa'
                    ),
                    'title' => 'Hasil Tes Kesehatan'
                );
                $this->load->view('admin/template', $data);
            }
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_edit_calon_siswa($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'siswa' => $this->siswa_model->get_siswa_by_id($id),
                'view' => 'admin/siswa/show_add_siswa',
                'action' => 'admin/siswa/do_edit_calon_siswa',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'calon-siswa'
                ),
                'title' => 'Edit Sekolah',
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_siswa()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'siswa' => $this->siswa_model->get_all_siswa(),
                'active' => array(
                    'menu' => 'psb',
                    'submenu' => 'siswa'
                ),
                'view' => 'admin/siswa/show_siswa'
            );
//            print_r($data['siswas']);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_siswa($id)
    {
        $this->load->model(array('kelas_model'));
        $data = array(
            'active' => array(
                'menu' => 'psb',
                'submenu' => 'calon-siswa'
            ),
            'kelas' => $this->kelas_model->get_all_kelas(),
            'action' => 'admin/siswa/do_add_siswa',
            'siswa' => $this->siswa_model->get_status_siswa_by_id($id),
            'view' => 'admin/siswa/show_add_siswa'
        );
        $this->load->view('admin/template', $data);
    }

    public function do_edit_calon_siswa()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $siswa = $this->input->post('siswa');
            $npsn = $this->input->post('npsn');
            $alamat = $this->input->post('alamat');
            $status = $this->input->post('status');

            $this->siswa_model->update_siswa($id, $siswa, $npsn, $alamat, $status);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/siswa/show_calon_siswa');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_siswa()
    {
        if ($this->ion_auth->logged_in())
        {
            $calon_siswa = $this->siswa_model->get_calon_siswa_by_id2($this->input->post('id_siswa'));
            $kelas = $this->input->post('kelas');
            $this->siswa_model->save_siswa($kelas, $calon_siswa);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/siswa/show_siswa');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_tes_kesehatan()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'calon_siswa_id' => $this->input->post('id_siswa'),
                'tinggi_badan' => $this->input->post('tinggi_badan'),
                'berat_badan' => $this->input->post('berat_badan'),
                'cacat_fisik' => $this->input->post('cacat_fisik'),
                'penglihatan' => $this->input->post('penglihatan'),
                'buta_warna' => $this->input->post('buta_warna'),
                'pendengaran' => $this->input->post('pendengaran'),
                'pendengaran_telinga_kanan' => $this->input->post('pendengaran_telinga_kanan'),
                'pendengaran_telinga_kiri' => $this->input->post('pendengaran_telinga_kiri'),
                'motivasi' => $this->input->post('motivasi'),
                'kesimpulan' => $this->input->post('kesimpulan'),
                'penguji1' => $this->input->post('penguji1'),
                'penguji2' => $this->input->post('penguji2'),
            );

            $this->siswa_model->save_tes_kesehatan($data);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/siswa/show_calon_siswa');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_update_tes_kesehatan()
    {
        if ($this->ion_auth->logged_in())
        {
            $calon_siswa_id = $this->input->post('id_siswa');
            $data = array(
                'tinggi_badan' => $this->input->post('tinggi_badan'),
                'berat_badan' => $this->input->post('berat_badan'),
                'cacat_fisik' => $this->input->post('cacat_fisik'),
                'penglihatan' => $this->input->post('penglihatan'),
                'buta_warna' => $this->input->post('buta_warna'),
                'pendengaran' => $this->input->post('pendengaran'),
                'pendengaran_telinga_kanan' => $this->input->post('pendengaran_telinga_kanan'),
                'pendengaran_telinga_kiri' => $this->input->post('pendengaran_telinga_kiri'),
                'motivasi' => $this->input->post('motivasi'),
                'kesimpulan' => $this->input->post('kesimpulan'),
                'penguji1' => $this->input->post('penguji1'),
                'penguji2' => $this->input->post('penguji2'),
            );

            $this->siswa_model->update_tes_kesehatan($calon_siswa_id, $data);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/siswa/show_calon_siswa');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_detail_calon_siswa($id)
    {
        $this->load->model(array('registration_model', 'bobot_nilai_model'));
        $siswa = $this->siswa_model->get_calon_siswa_by_id($id);
        $bobot_nilai = $this->bobot_nilai_model->get_bobot_nilai_by_program_keahlian($siswa->program_keahlian_id);
//        print_r($siswa);exit;
        $data = array(
            'siswa' => $siswa,
            'un' => $this->registration_model->get_nilai_un_by_id($siswa->id),
            'prestasi' => $this->registration_model->get_prestasi_by_id($siswa->id),
            'bobot' => $bobot_nilai,
            'view' => 'admin/siswa/show_detail_calon_siswa',
            'active' => array(
                'menu' => 'psb',
                'submenu' => 'calon-siswa'
            ),
            'title' => 'Edit Sekolah',
        );

        $this->load->view('admin/template', $data);
    }

    public function show_edit_status_calon_siswa($id)
    {
        $data = array(
            'active' => array(
                'menu' => 'psb',
                'submenu' => 'siswa'
            ),
            'action' => 'admin/siswa/do_edit_status_calon_siswa',
            'siswa' => $this->siswa_model->get_status_siswa_by_id($id),
            'view' => 'admin/siswa/show_edit_status_calon_siswa'
        );
        $this->load->view('admin/template', $data);
    }

    public function do_edit_status_calon_siswa()
    {
        if ($this->ion_auth->logged_in())
        {
            $calon_siswa_id = $this->input->post('id_siswa');
            $status = $this->input->post('status');

            $this->siswa_model->update_status_siswa($calon_siswa_id, $status);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/siswa/show_calon_siswa');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_delete($id)
    {
        
    }

}
