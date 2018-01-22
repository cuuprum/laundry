<?php
defined('BASEPATH') OR exit('No direct script allowed.');

class Register_user extends CI_Controller{
    public function index(){
        $this->load->view('register_user');
    }
}

?>