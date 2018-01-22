<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');
class M_login extends CI_Model
{ public function ambilPengguna($username,$password, $status, $level){
  $this->db->select('*');
  $this->db->from('assets_user');
  $this->db->where('username', $username);
  $this->db->where('password', $password);
  $this->db->where('status', $status);
  $this->db->where('level_login', $level);
  $query = $this->db->get();
  return $query->num_rows();
}

  public function dataPengguna($username){
  $this->db->select('username');
  $this->db->select('nama');
  $this->db->select('foto');
  $this->db->select('status');
  $this->db->select('id');
  $this->db->select('level_login');
  $this->db->select('username', $username);
  $query = $this->db->get('assets_user');
  return $query->row();}
}
