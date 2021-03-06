<?php

    Class Customer_model extends CI_Model{
        function __construct(){
            parent::__construct();            
        }

        function getAllPesananCustomer($_id){
            $condition = "id_konsumen = '$_id' AND status = 'Baru' ORDER BY tanggal_order DESC";
            $this->db->where($condition);
            $this->db->select('id_order, tanggal_order, jenis_laundry, isi_laundry_satuan, total_berat_kiloan, tanggal_selesai, status');
            $this->db->from('pesanan_laundry');

            return $this->db->get();
        }

        function getNewId(){

            $this->db->select("MAX(`id_order`) AS 'lastId'");
            $this->db->from('pesanan_laundry');  

            return $this->db->get()->row()->lastId + 1;
        }

        function insertOrderLaundry($_data){
            $this->db->insert('pesanan_laundry', $_data);

            return $this->db->affected_rows();
        }
    }

?>