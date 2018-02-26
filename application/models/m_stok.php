<?php

class M_stok extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	//function datastok()
	//{
		function tampil(){
			$this->db->select('barang.*, kategori.nama_kategori');
			$this->db->from('barang');
			$this->db->join('kategori', 'kategori.id_kategori = barang.id_kategori', 'left');
			$data = $this->db->get();
			return $data->result();
		}
		//return $this->db->get('barang');
	
	}