<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mapel
 *
 * @author agasi
 */
class Kelas extends CI_Controller {

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('kelas_model'));
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/kelas/show_kelas');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_kelas()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->library(array('pagination'));
            $config['base_url'] = site_url('admin/mapel/show_kelas');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->kelas_model->get_count_kelas();
            $this->pagination->initialize($config);

            $data = array(
                'kelas' => $this->kelas_model->get_kelas($config['per_page'], $this->uri->segment('4')),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'kelas'
                ),
                'view' => 'admin/kelas/index'
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_kelas()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->model(array('program_keahlian_model'));
            $data = array(
                'view' => 'admin/kelas/show_add_kelas',
                'action' => 'admin/kelas/do_add_kelas',
                'program_keahlian' => $this->program_keahlian_model->get_all_program_keahlian(),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'kelas'
                ),
                'title' => 'Tambah Kelas'
            );
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_edit_kelas($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->model(array('program_keahlian_model'));
            $data = array(
                'kelas' => $this->kelas_model->get_kelas_by_id($id),
//                'program_keahlian' => $this->program_keahlian_model->get_all_program_keahlian(),
                'view' => 'admin/kelas/show_add_kelas',
                'action' => 'admin/kelas/do_edit_kelas',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'kelas'
                ),
                'title' => 'Edit Kelas',
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_edit_kelas()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $kelas = $this->input->post('kelas');
//            $program_keahlian_id = $this->input->post('program_keahlian');

//            $this->kelas_model->update_kelas($id, $program_keahlian_id, $kelas);
            $this->kelas_model->update_kelas($id, $kelas);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/kelas/show_kelas');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_kelas()
    {
        if ($this->ion_auth->logged_in())
        {
            $kelas = $this->input->post('kelas');
//            $program_keahlian_id = $this->input->post('program_keahlian');

//            $this->kelas_model->save_kelas($program_keahlian_id, $kelas);
            $this->kelas_model->save_kelas($kelas);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/kelas/show_kelas');
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
