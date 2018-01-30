<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Pesanan_update_selesai extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('pesanan_model');
    }

    public function index(){
        $data['listPesanan'] = $this->pesanan_model->getAllPesanan();
        $this->load->view('pesanan_update_selesai', $data);
    }

    public function updateStatus(){
        $data['status'] = $this->input->post('status_modal_update');
        $condition['id_order'] = $this->input->post('id_order_update');

        $this->pesanan_model->updateStatus($data, $condition);

        redirect('pesanan_update_selesai');
    }
}
?>