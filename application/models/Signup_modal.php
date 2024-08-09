<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_modal extends CI_Model {
    public function __construct{

    }

    public function updateSignup($email, $password){
        $data=array(
            'email'=>$email,
            'password'=>$password
        )

        $this->db->insert('signup_master', $data);
    }
}