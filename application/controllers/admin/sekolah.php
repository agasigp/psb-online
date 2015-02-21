<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sekolah
 *
 * @author agasi
 */
class Sekolah extends CI_Controller {

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('sekolah_model'));
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/sekolah/show_sekolah');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_sekolah()
    {
        if ($this->ion_auth->logged_in())
        {
            $this->load->library(array('pagination'));
            $config['base_url'] = site_url('admin/mapel/show_sekolah');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->sekolah_model->get_count_sekolah();
            $this->pagination->initialize($config);

            $data = array(
                'sekolahs' => $this->sekolah_model->get_sekolah($config['per_page'], $this->uri->segment('4')),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'sekolah'
                ),
                'view' => 'admin/sekolah/index'
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_sekolah()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'view' => 'admin/sekolah/show_add_sekolah',
                'action' => 'admin/sekolah/do_add_sekolah',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'sekolah'
                ),
                'title' => 'Tambah Sekolah'
            );
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_edit_sekolah($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'sekolah' => $this->sekolah_model->get_sekolah_by_id($id),
                'view' => 'admin/sekolah/show_add_sekolah',
                'action' => 'admin/sekolah/do_edit_sekolah',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'sekolah'
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

    public function do_edit_sekolah()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $sekolah = $this->input->post('sekolah');
            $npsn = $this->input->post('npsn');
            $alamat = $this->input->post('alamat');
            $status = $this->input->post('status');

            $this->sekolah_model->update_sekolah($id, $sekolah, $npsn, $alamat, $status);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/sekolah/show_sekolah');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_sekolah()
    {
        if ($this->ion_auth->logged_in())
        {
            $sekolah = $this->input->post('sekolah');
            $npsn = $this->input->post('npsn');
            $alamat = $this->input->post('alamat');
            $status = $this->input->post('status');

            $this->sekolah_model->save_sekolah($sekolah, $npsn, $alamat, $status);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/sekolah/show_sekolah');
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
