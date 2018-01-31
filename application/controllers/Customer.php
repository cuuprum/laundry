<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('customer_model');
    }

    public function index(){

        if($this->session->userdata('isLogin') == FALSE){
            $this->session->set_userdata('errorMsg','Silahkan login terlebih dahulu.');
            redirect('login');
        }else{
            /*
            $level = $this->session->userdata('level');
            // 1 = admin, 2 konsumen

            if($level == 2){
                $id = $this->session->userdata('id');
                $data['listPesananCustomer'] = $this->customer_model->getAllPesananCustomer('3');
                $data['username'] = $this->session->userdata('username');
                $data['data'] = $level;
 
                $this->load->view('customer', $data);     

            }else{
                $this->session->set_userdata('errorMsg','Tidak ada hak akses.');
                redirect('home');
            }   
            */
            $data['listPesananCustomer'] = $this->customer_model->getAllPesananCustomer('3');
            $this->load->view('customer', $data);   
        }   
    }
}