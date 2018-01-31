<?php
defined('BASEPATH') OR exit('Direct access not allowed.');

class Home extends CI_Controller{
    public function index(){

        if($this->session->userdata('isLogin')){
       
            $level = $this->session->userdata('level');
            // 1 = admin, 2 konsumen

            if($level == 1){
                redirect(base_url('admin'));
            }
            elseif($level == 2){
                redirect(base_url('customer'));     
            }else{
                $this->session->set_userdata('errorMsg','Tidak ada hak akses.');
                $this->view->load('Home');
            }    
        } 
        $this->load->view('home');
    }
}
?>