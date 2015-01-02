<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pekerjaan
 *
 * @author agasi
 */
class Pekerjaan extends CI_Controller {

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('pekerjaan_model'));
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/pekerjaan/show_pekerjaan');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_pekerjaan()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->library(array('pagination'));
            $config['base_url'] = site_url('admin/mapel/show_pekerjaan');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->pekerjaan_model->get_count_pekerjaan();
            $this->pagination->initialize($config);

            $data = array(
                'pekerjaans' => $this->pekerjaan_model->get_pekerjaan($config['per_page'], $this->uri->segment('4')),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'pekerjaan'
                ),
                'view' => 'admin/pekerjaan/index'
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_pekerjaan()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'view' => 'admin/pekerjaan/show_add_pekerjaan',
                'action' => 'admin/pekerjaan/do_add_pekerjaan',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'pekerjaan'
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

    public function show_edit_pekerjaan($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'pekerjaan' => $this->pekerjaan_model->get_pekerjaan_by_id($id),
                'view' => 'admin/pekerjaan/show_add_pekerjaan',
                'action' => 'admin/pekerjaan/do_edit_pekerjaan',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'pekerjaan'
                ),
                'title' => 'Edit Agama',
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_edit_pekerjaan()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $pekerjaan = $this->input->post('nama');

            $this->pekerjaan_model->update_pekerjaan($id, $pekerjaan);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/pekerjaan/show_pekerjaan');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_pekerjaan()
    {
        if ($this->ion_auth->logged_in())
        {
            $pekerjaan = $this->input->post('nama');

            $this->pekerjaan_model->save_pekerjaan($pekerjaan);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/pekerjaan/show_pekerjaan');
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
