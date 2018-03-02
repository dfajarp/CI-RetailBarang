<?php

class M_katalog extends CI_Model{
	function tampil($where)
	{
		//$data = $this->db->get('katalog');
		//return $data->result();
		return $this->db->get_where('katalog', $where);
	}

	function input($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function hapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}