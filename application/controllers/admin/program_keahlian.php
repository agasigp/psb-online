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
class Program_keahlian extends CI_Controller {

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('program_keahlian_model'));
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/program_keahlian/show_program_keahlian');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_program_keahlian()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->library(array('pagination'));
            $config['base_url'] = site_url('admin/mapel/show_program_keahlian');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->program_keahlian_model->get_count_program_keahlian();
            $this->pagination->initialize($config);

            $data = array(
                'program_keahlians' => $this->program_keahlian_model->get_program_keahlian($config['per_page'], $this->uri->segment('4')),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'program_keahlian'
                ),
                'view' => 'admin/program_keahlian/index'
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_program_keahlian()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'view' => 'admin/program_keahlian/show_add_program_keahlian',
                'action' => 'admin/program_keahlian/do_add_program_keahlian',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'program_keahlian'
                ),
                'title' => 'Tambah program_keahlian'
            );
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_edit_program_keahlian($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'program_keahlian' => $this->program_keahlian_model->get_program_keahlian_by_id($id),
                'view' => 'admin/program_keahlian/show_add_program_keahlian',
                'action' => 'admin/program_keahlian/do_edit_program_keahlian',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'program_keahlian'
                ),
                'title' => 'Edit program_keahlian',
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_edit_program_keahlian()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $program_keahlian = $this->input->post('nama');
            $kode = $this->input->post('kode');

            $this->program_keahlian_model->update_program_keahlian($id, $program_keahlian, $kode);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/program_keahlian/show_program_keahlian');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_program_keahlian()
    {
        if ($this->ion_auth->logged_in())
        {
            $program_keahlian = $this->input->post('nama');
            $kode = $this->input->post('kode');

            $this->program_keahlian_model->save_program_keahlian($program_keahlian, $kode);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/program_keahlian/show_program_keahlian');
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
