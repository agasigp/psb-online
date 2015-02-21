<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of info
 *
 * @author agasi
 */
class Info extends CI_Controller {

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('info_model'));
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/info/show_info');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_info()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->library(array('pagination'));
            $config['per_page'] = 10;
            $config['total_rows'] = $this->info_model->get_count_info();
            $this->pagination->initialize($config);

            $data = array(
                'info' => $this->info_model->get_info($config['per_page'], $this->uri->segment('4')),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'info'
                ),
                'view' => 'admin/info/index'
            );

            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_info()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'view' => 'admin/info/show_add_info',
                'action' => 'admin/info/do_add_info',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'info'
                ),
                'title' => 'Tambah Info',
                'css' => 'admin/info/info_css',
                'js' => 'admin/info/info_js'
            );
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_edit_info($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'info' => $this->info_model->get_info_by_id($id),
                'view' => 'admin/info/show_add_info',
                'action' => 'admin/info/do_edit_info',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'info'
                ),
                'title' => 'Edit Info',
                'css' => 'admin/info/info_css',
                'js' => 'admin/info/info_js'
            );

            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_edit_info()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $info = $this->input->post('info');
            $title = $this->input->post('title');

            $this->info_model->update_info($id, $title, $info);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/info/show_info');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_info()
    {
        if ($this->ion_auth->logged_in())
        {
            $info = $this->input->post('info');
            $title = $this->input->post('title');
            
            $this->info_model->save_info($title, $info);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/info/show_info');
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
