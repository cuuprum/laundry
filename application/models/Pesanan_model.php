<?php

    Class Pesanan_model extends CI_Model{
        function __construct(){
            parent::__construct();            
        }

        function getAllPesananBaru(){
            $condition = "status = 'Baru' ORDER BY tanggal_order DESC";
            $this->db->select('*');
            $this->db->from('pesanan_laundry');
            $this->db->where($condition);

            return $this->db->get();
        }

        function getNewId(){

            $this->db->select("MAX(`id_order`) AS 'lastId'");
            $this->db->from('pesanan_laundry');  

            return $this->db->get()->row()->lastId + 1;
        }

        function getAllPesanan(){
            $this->db->select('*');
            $this->db->from('pesanan_laundry');

            return $this->db->get();
        }

        function insertPesanan($_data){
            // Insert data to table pesanan_laundry using array $_data
            // #TODO nanti bikin return status insert data nya ya
            $this->db->insert('pesanan_laundry',$_data);
        }
    }
?>