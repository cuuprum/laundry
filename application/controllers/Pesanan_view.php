<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Pesanan_view extends CI_Controller {

    public function index(){
        $data['listPesanan'] = $this->pesanan_model->getAllPesananBaru();
        $this->load->view('Pesanan_view', $data);
    }
}
?>