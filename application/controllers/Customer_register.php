<?php
defined('BASEPATH') OR exit('No direct script allowed.');

class Customer_register extends CI_Controller{
    public function index(){
        $this->load->view('customer_register');
    }
}

?>