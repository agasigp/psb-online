<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of group
 *
 * @author agasi
 */
class Group extends CI_Controller {

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            redirect('admin/group/show_group');
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_group()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'groups' => $this->ion_auth->groups()->result(),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'group'
                ),
                'view' => 'admin/group/index'
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_group()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'view' => 'admin/group/show_add_group',
                'action' => 'admin/group/do_add_group',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'group'
                ),
                'title' => 'Tambah User',
                'groups' => $this->ion_auth->groups()->result()
            );
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_edit_group($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'group' => $this->ion_auth->group($id)->row(),
                'view' => 'admin/group/show_add_group',
                'action' => 'admin/group/do_edit_group',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'group'
                ),
                'title' => 'Edit User',
                'groups' => $this->ion_auth->groups()->result()
            );
//        print_r($data);exit;
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_edit_group()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $group = $this->input->post('groupname');
            $description = $this->input->post('description');

            if ($this->ion_auth->update_group($id, $group, $description))
            {
                $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');
                redirect('admin/group/show_group');
            }
            else
            {

                $this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');
                redirect('admin/group/show_add_group');
            }
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_group()
    {
        if ($this->ion_auth->logged_in())
        {
            $group = $this->input->post('groupname');
            $description = $this->input->post('description');

            if ($this->ion_auth->create_group($group, $description) == FALSE)
            {

                $this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

                redirect('admin/group/show_add_group');
            }
            else
            {

                $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');
                redirect('admin/group/show_group');
            }
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
