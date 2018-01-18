<?php
define('BASE_PATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index(){
        $this->load->view('admin');
    }
}