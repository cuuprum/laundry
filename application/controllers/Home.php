<?php
defined('BASEPATH') OR exit('Direct access not allowed.');

class Home extends CI_Controller{
    public function index(){

        $data = array();
        $data["main_template"] = "body"; 
        $this->load->view('Home');
    }
}
?>