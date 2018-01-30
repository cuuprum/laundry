<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('customer_model');
    }

    public function index(){
        $data['listPesananCustomer'] = $this->customer_model->getAllPesananCustomer('3');
        $this->load->view('customer', $data);        
    }
}