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

	function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}