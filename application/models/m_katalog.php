<?php

class M_katalog extends CI_Model{
	function tampil()
	{
		//$data = $this->db->get('katalog');
		//return $data->result();
		return $this->db->get('katalog');
	}

}