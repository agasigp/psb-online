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
class User_model extends CI_Model{
    //put your code here

    public function get_user()
    {
        return $this->ion_auth->users()->result();
    }
}
