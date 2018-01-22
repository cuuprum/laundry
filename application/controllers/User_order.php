<?php
defined('BASEPATH') OR exit('Not allowed access direct script.');

class User_order extends CI_Controller{
    public function index(){
        $this->load->view('user_order');
    }
}
?>