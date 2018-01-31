<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('isLogin') == FALSE){
            $this->session->set_userdata('errorMsg','Silahkan login terlebih dahulu.');
            redirect(base_url('login'));
        }else{        
            $level = $this->session->userdata('level');
            // 1 = admin, 2 konsumen

            if($level == 1){
                $id = $this->session->userdata('id');
                $data['username'] = $this->session->userdata('username');
                $data['level'] = $level;
 
                $this->load->view('admin', $data);     

            }else{
                $this->session->set_userdata('errorMsg','Tidak ada hak akses.');
                redirect(base_url('home'));
            }    
        }         
    }
}