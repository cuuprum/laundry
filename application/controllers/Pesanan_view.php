<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Pesanan_view extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('pesanan_model');
    }

    public function index(){
        $data['listPesanan'] = $this->pesanan_model->getAllPesananBaru();
        $this->load->view('Pesanan_view', $data);
    }
}
?>