<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bobot_nilai
 *
 * @author agasi
 */
class Bobot_nilai extends CI_Controller {

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('mapel_model', 'program_keahlian_model', 'bobot_nilai_model'));
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/bobot_nilai/show_bobot_nilai');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_bobot_nilai()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->library(array('pagination'));
            $config['base_url'] = site_url('admin/bobot_nilai/show_bobot_nilai');
            $config['per_page'] = 10;
            $config['uri_segment'] = 4;
            $config['total_rows'] = $this->bobot_nilai_model->get_count_bobot_nilai();
            $this->pagination->initialize($config);

            $data = array(
                'bobot_nilais' => $this->bobot_nilai_model->get_bobot_nilai($config['per_page'], $this->uri->segment('4')),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'bobot_nilai'
                ),
                'view' => 'admin/bobot_nilai/index'
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_bobot_nilai()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->model(array('program_keahlian_model', 'mapel_model'));

            $data = array(
                'view' => 'admin/bobot_nilai/show_add_bobot_nilai',
                'action' => 'admin/bobot_nilai/do_add_bobot_nilai',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'bobot_nilai'
                ),
                'program_keahlian' => $this->program_keahlian_model->get_program_keahlian(10, 0),
                'mata_pelajaran' => $this->mapel_model->get_mapel(10, 0),
                'title' => 'Tambah Bobot Nilai'
            );

            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_edit_bobot_nilai($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'bobot_nilai' => $this->bobot_nilai_model->get_bobot_nilai_by_id($id),
                'program_keahlian' => $this->program_keahlian_model->get_program_keahlian(10, 0),
                'mata_pelajaran' => $this->mapel_model->get_mapel(10, 0),
                'view' => 'admin/bobot_nilai/show_add_bobot_nilai',
                'action' => 'admin/bobot_nilai/do_edit_bobot_nilai',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'bobot_nilai'
                ),
                'title' => 'Edit Bobot Nilai',
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_edit_bobot_nilai()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $bobot_nilai = $this->input->post('bobot');
            $program_keahlian = $this->input->post('program_keahlian');
            $mata_pelajaran = $this->input->post('mapel');

            $this->bobot_nilai_model->update_bobot_nilai($id, $program_keahlian, $mata_pelajaran, $bobot_nilai);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/bobot_nilai/show_bobot_nilai');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_bobot_nilai()
    {
        if ($this->ion_auth->logged_in())
        {
            $bobot_nilai = $this->input->post('bobot');
            $program_keahlian = $this->input->post('program_keahlian');
            $mapel = $this->input->post('mapel');

            $this->bobot_nilai_model->save_bobot_nilai($program_keahlian, $mapel, $bobot_nilai);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/bobot_nilai/show_bobot_nilai');
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
