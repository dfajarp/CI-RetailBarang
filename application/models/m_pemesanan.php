<?php

class M_pemesanan extends CI_Model{
	function tampil_data($where)
	{
		//$this->db->select('beli_barang.*, supplier.nama_supplier');
		//$this->db->from('beli_barang');
		//$this->db->join('supplier', 'supplier.id_supplier = beli_barang.id_supplier', 'left');
		//$data = $this->db->get();
		//return $data->result();
		return $this->db->get_where('beli_barang', $where);
	}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}