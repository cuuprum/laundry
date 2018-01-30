<?php
defined('BASEPATH') OR exit('Not allowed access direct script.');

class Customer_order extends CI_Controller{
    public function index(){
        $this->load->view('customer_order');
    }
}
?>