<?php
defined('BASEPATH') OR exit('No direct script allowed.');

class User_register extends CI_Controller{
    public function index(){
        $this->load->view('user_register');
    }
}

?>