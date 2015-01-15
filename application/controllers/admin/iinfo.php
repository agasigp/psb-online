<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of agama
 *
 * @author agasi
 */
class Agama extends CI_Controller {

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('agama_model'));
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/agama/show_agama');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_agama()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->library(array('pagination'));
            $config['per_page'] = 10;
            $config['total_rows'] = $this->agama_model->get_count_agama();
            $this->pagination->initialize($config);

            $data = array(
                'agamas' => $this->agama_model->get_agama($config['per_page'], $this->uri->segment('4')),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'agama'
                ),
                'view' => 'admin/agama/index'
            );

            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_agama()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'view' => 'admin/agama/show_add_agama',
                'action' => 'admin/agama/do_add_agama',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'agama'
                ),
                'title' => 'Tambah Agama'
            );
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_edit_agama($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'agama' => $this->agama_model->get_agama_by_id($id),
                'view' => 'admin/agama/show_add_agama',
                'action' => 'admin/agama/do_edit_agama',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'agama'
                ),
                'title' => 'Edit Agama',
            );

            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_edit_agama()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $agama = $this->input->post('nama');

            $this->agama_model->update_agama($id, $agama);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/agama/show_agama');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_agama()
    {
        if ($this->ion_auth->logged_in())
        {
            $agama = $this->input->post('nama');

            $this->agama_model->save_agama($agama);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/agama/show_agama');
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
