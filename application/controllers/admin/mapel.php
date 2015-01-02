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
class Mapel extends CI_Controller {

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('mapel_model'));
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/mapel/show_mapel');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_mapel()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->library(array('pagination'));
            $config['base_url'] = site_url('admin/mapel/show_mapel');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->mapel_model->get_count_mapel();
            $this->pagination->initialize($config);

            $data = array(
                'mapels' => $this->mapel_model->get_mapel($config['per_page'], $this->uri->segment('4')),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'mapel'
                ),
                'view' => 'admin/mapel/index'
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_mapel()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'view' => 'admin/mapel/show_add_mapel',
                'action' => 'admin/mapel/do_add_mapel',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'mapel'
                ),
                'title' => 'Tambah mapel'
            );
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_edit_mapel($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'mapel' => $this->mapel_model->get_mapel_by_id($id),
                'view' => 'admin/mapel/show_add_mapel',
                'action' => 'admin/mapel/do_edit_mapel',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'mapel'
                ),
                'title' => 'Edit mapel',
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_edit_mapel()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $mapel = $this->input->post('nama');

            $this->mapel_model->update_mapel($id, $mapel);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/mapel/show_mapel');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_mapel()
    {
        if ($this->ion_auth->logged_in())
        {
            $mapel = $this->input->post('nama');

            $this->mapel_model->save_mapel($mapel);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/mapel/show_mapel');
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
