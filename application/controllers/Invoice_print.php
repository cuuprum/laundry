<?php
defined('BASEPATH') or exit('No direct script acess allowed.');

class Invoice_print extends CI_Controller{
    public function index(){
        $this->load->view('invoice_print');
    } 
}
?>