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

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('siswa_model'));
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/siswa/show_siswa');
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
            $this->load->library(array('pagination'));
            $config['base_url'] = site_url('admin/siswa/show_siswa');
            $config['per_page'] = 10;
            $config['total_rows'] = $this->siswa_model->get_count_siswa();
            $this->pagination->initialize($config);

            $data = array(
                'siswas' => $this->siswa_model->get_siswa($config['per_page'], $this->uri->segment('4')),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'siswa'
                ),
                'view' => 'admin/siswa/index'
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_siswa()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'view' => 'admin/siswa/show_add_siswa',
                'action' => 'admin/siswa/do_add_siswa',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'siswa'
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

    public function show_edit_siswa($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'siswa' => $this->siswa_model->get_siswa_by_id($id),
                'view' => 'admin/siswa/show_add_siswa',
                'action' => 'admin/siswa/do_edit_siswa',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'siswa'
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

    public function do_edit_siswa()
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

            redirect('admin/siswa/show_siswa');
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
            $siswa = $this->input->post('siswa');
            $npsn = $this->input->post('npsn');
            $alamat = $this->input->post('alamat');
            $status = $this->input->post('status');

            $this->siswa_model->save_siswa($siswa, $npsn, $alamat, $status);
            $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

            redirect('admin/siswa/show_siswa');
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
