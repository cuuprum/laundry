<?php
class m_insert_pesanan extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('pembelian', $data);
}
}
?>
