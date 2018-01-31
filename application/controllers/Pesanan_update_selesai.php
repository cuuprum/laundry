<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Pesanan_update_selesai extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('pesanan_model');
    }

    public function index(){
        if($this->session->userdata('isLogin') == FALSE){
            $this->session->set_userdata('errorMsg','Silahkan login terlebih dahulu.');
            redirect(base_url('login'));
        }else{        
            $level = $this->session->userdata('level');
            // 1 = admin, 2 konsumen

            if($level == 1){
                $data['id'] = $this->session->userdata('id');
                $data['username'] = $this->session->userdata('username');
                $data['level'] = $level;

                $data['listPesanan'] = $this->pesanan_model->getAllPesanan();
                $this->load->view('pesanan_update_selesai', $data);   

            }else{
                $this->session->set_userdata('errorMsg','Tidak ada hak akses.');
                redirect(base_url('home'));
            }    
        } 
    }

    public function updateStatus(){
        $data['status'] = $this->input->post('status_modal_update');
        $condition['id_order'] = $this->input->post('id_order_update');

        $this->pesanan_model->updateStatus($data, $condition);

        redirect(base_url('pesanan_update_selesai'));
    }

    public function deletePesanan(){
        $id = $this->input->post('id_order_delete');
        
        $this->pesanan_model->deletePesanan($id);

        redirect(base_url('pesanan_update_selesai'));
    }
}
?>