<?php

class M_stok extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function tampil() {
        $this->db->select('barang.*, kategori.nama_kategori');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.id_kategori', 'left');
        $data = $this->db->get();
        return $data->result();
    }

    function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $result, $table) {
        $this->db->set($result);
        $this->db->where($where);
        $this->db->update($table);
    }

    function gambar($id_barang) {
        $this->db->where('id_barang', $id_barang);
        return $this->db->get('barang')->row();
    }

}
