<?php
defined('BASEPATH') OR exit('Not allowed access direct script.');

class Customer_order extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('customer_model');
    }

    public function index(){        
        $this->load->view('customer_order');
    }

    function insertOrderLaundry(){
        $isiLaundrySatuan = array(
            "Baju" => "0",
            "Celana" => "0",
            "Jas" => "0",
            "Selimut" => "0",
            "Bed Cover" => "0"
          );
        
        $isiLaundrySatuanJSON = json_encode($isiLaundrySatuan);
        $id_konsumen = "3"; // #TODO nanti pakai session
        $id_pegawai = "1"; // #TODO nanti pakai session // $this->input->post('id_pegawai')
        $data = array(
            'id_order' => $this->customer_model->getNewId(),
            'tanggal_order' => $this->input->post('tanggal_order'),
            'jenis_laundry' => $this->input->post('jenis_laundry'),
            'isi_laundry_satuan' => $isiLaundrySatuanJSON,
            'total_berat_kiloan' => '0',
            'total_harga' => '0',
            'tanggal_selesai' => '0000-00-00 00:00:00',
            'status' => 'Baru',
            'id_konsumen' => $id_konsumen,
            'id_pegawai' => $id_pegawai 
        );
        
        $result = $this->customer_model->insertOrderLaundry($data);
        if($result != 0)
            echo "<script type='text/javascript'>alert('Order Berhasil! Silahkan tunggu pegawai kami ke rumah anda.');</script>";
        else
            echo "<script type='text/javascript'>alert('Mohon maaf order gagal.');</script>";
        
        redirect('customer');
    }
}
?>