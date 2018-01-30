<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Pesanan_insert extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('pesanan_model');
    }
    
    public function index(){
        $data['getNewId'] = $this->pesanan_model->getNewId();
        $this->load->view('Pesanan_insert', $data);
    }

    function insertPesanan(){
        
        $isiLaundrySatuan = array(
            "Baju" => $this->input->post('jumlah_baju'),
            "Celana" => $this->input->post('jumlah_celana'),
            "Jas" => $this->input->post('jumlah_jas'),
            "Selimut" => $this->input->post('jumlah_selimut'),
            "Bed Cover" => $this->input->post('jumlah_bed_cover')
          );
        
        $isiLaundrySatuanJSON = json_encode($isiLaundrySatuan);
        $tanggal_order = $this->input->post('tanggal_order');
        $tanggal_selesai = $this->input->post('tanggal_selesai');
        $data = array(
            'id_order' => $this->input->post('id_order'),
            'tanggal_order' => $tanggal_order,
            'jenis_laundry' => $this->input->post('jenis_laundry'),
            'isi_laundry_satuan' => $isiLaundrySatuanJSON,
            'total_berat_kiloan' => $this->input->post('total_berat_kiloan'),
            'total_harga' => 1000, // #TODO nanti hitung pakai if di jquery // $this->input->post('total_harga'),
            'tanggal_selesai' => $tanggal_selesai,
            'status' => $this->input->post('status'),
            'id_konsumen' => $this->input->post('id_konsumen'),
            'id_pegawai' => 1 // #TODO nanti pakai sesssion // $this->input->post('id_pegawai')
        ); 
        
        //print_r($data);
        // #TODO nanti bikin return status insert data nya ya
        $this->pesanan_model->insertPesanan($data);

        //redirect('Pesanan_view');
    }
}
?>