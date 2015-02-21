<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author agasi
 */
class User extends CI_Controller {

    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('user_model'));
        $this->load->library('ion_auth');
    }

    public function index()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'view' => 'admin/index'
            );
            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user/show_login');
        }
    }

    public function do_login()
    {

        if ($this->ion_auth->login($this->input->post('username'), $this->input->post('password')))
        {
            redirect('admin/user');
        }
        else
        {
            redirect('admin/user/show_login');
        }
    }

    public function do_logout()
    {
        $this->ion_auth->logout();
        redirect('admin/user');
    }

    public function show_login()
    {
        $this->load->view('admin/login');
    }

    public function show_user()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'users' => $this->user_model->get_user(),
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'user'
                ),
                'view' => 'admin/user/index'
            );

            $this->load->view('admin/template', $data);
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function show_add_user()
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'view' => 'admin/user/show_add_user',
                'action' => 'admin/user/do_add_user',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'user'
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

    public function show_edit_user($id)
    {
        if ($this->ion_auth->logged_in())
        {
            $data = array(
                'user' => $this->ion_auth->user($id)->row(),
                'view' => 'admin/user/show_add_user',
                'action' => 'admin/user/do_edit_user',
                'active' => array(
                    'menu' => 'master',
                    'submenu' => 'user'
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

    public function do_edit_user()
    {
        if ($this->ion_auth->logged_in())
        {
            $id = $this->input->post('id');
            $password = $this->input->post('password');

            if (empty($password))
            {
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'nama' => array('first_name' => $this->input->post('nama')),
                    'group' => array($this->input->post('group'))
                );
            }
            else
            {
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'email' => $this->input->post('email'),
                    'first_name' => $this->input->post('nama'),
                    'group' => array($this->input->post('group'))
                );
            }


            if ($this->ion_auth->update($id, $data))
            {
                $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');
                redirect('admin/user/show_user');
            }
            else
            {

                $this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');
                redirect('admin/user/show_add_user');
            }
        }
        else
        {
            redirect('admin/user');
        }
    }

    public function do_add_user()
    {
        if ($this->ion_auth->logged_in())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            $nama = array('first_name' => $this->input->post('nama'));
            $group = array((string) $this->input->post('group'));
//        $this->ion_auth->register('depok', 'depok', 'depok@depok.com', array('1'));
//        print_r($group);exit;
            if ($this->ion_auth->register($username, $password, $email, $nama, $group) == FALSE)
            {

                $this->session->set_flashdata('info', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');

                redirect('admin/user/show_add_user');
            }
            else
            {

                $this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Data saved!</strong></div>');
                redirect('admin/user/show_user');
            }
        }
        else
        {
            redirect('admin/user');
        }
    }

}
