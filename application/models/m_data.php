<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('supplier');
	}
}