<?php

    Class Customer_model extends CI_Model{
        function __construct(){
            parent::__construct();            
        }

        function getAllPesananCustomer($_id){
            $this->db->where('id_konsumen', $_id);
            $this->db->select('id_order, tanggal_order, jenis_laundry, isi_laundry_satuan, total_berat_kiloan, tanggal_selesai, status');
            $this->db->from('pesanan_laundry');

            return $this->db->get();
        }
    }

?>