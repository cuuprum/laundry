<?php
defined('BASEPATH') OR exit('No direct script accesss allowed');

class Db_model extends CI_Model {

    public function login($_username, $_password){
        $username = mysql_real_escape_string($_username);
        $password = md5(mysql_real_escape_string($_password));
        
        $login = $this->db->get_where('user', array(
            'username' => $username,
            'password' => $password
        ));

        if($login->num_rows() > 0){
            $result = $login->row();
            if($result->username == $username && $result->$password){
                if($result->role == 'admin')
                    header('location:'.base_url().'admin');
                elseif($result->role == 'user')
                    header('location:'.base_url().'user');
                else
                    $msg = 'Cannot identify your role.';
            }
            else
                $msg = 'Username or Password incorrect.';
        }
        else
            $msg = 'No result.';
    }
}
