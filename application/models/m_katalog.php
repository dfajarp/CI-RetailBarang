<?php

class M_katalog extends CI_Model{
	function tampil()
	{	
		$this->db->select('katalog.*, barang.nama_brg, barang.harga_brg, barang.deskripsi_barang, barang.gambar_barang');
		$this->db->from('katalog');
		$this->db->join('barang', 'barang.id_barang = katalog.id_barang');
		return $this->db->get();
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

}