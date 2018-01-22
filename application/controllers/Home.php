<?php
defined('BASEPATH') OR exit('Direct access not allowed.');

class Home extends CI_Controller{
    public function index(){
        $this->load->view('Home');
    }
}
?>