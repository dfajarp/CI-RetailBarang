<?php

class M_pemesanan extends CI_Model {

    function tampil_data($where) {
        $this->db->select('beli_barang.*, supplier.nama_supplier');
        $this->db->where($where);
        $this->db->from('beli_barang');
        $this->db->join('supplier', 'supplier.id_supplier = beli_barang.id_supplier');
        $data = $this->db->get();
        return $data->result();
    }

    function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    function detail_pembelian($id_pembelian) {
        $this->db->select('beli_barang.*, supplier.nama_supplier');
        $this->db->from('beli_barang');
        $this->db->join('supplier', 'supplier.id_supplier = beli_barang.id_supplier');
        $this->db->where('id_pembelian', $id_pembelian);
        $data = $this->db->get();
        if ($data->num_rows() == 1) {
            return $data->row();
        }
    }

    function detail_barang($id_pembelian)
    {
        $this->db->select('dbb.*, kategori.nama_kategori');
        $this->db->from('dbb');
        $this->db->join('kategori', 'kategori.id_kategori = dbb.id_kategori');
        $this->db->where('dbb.id_bb', $id_pembelian);
        $data = $this->db->get();
        return $data->result();
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function activebarang($id_pembelian) {
        $set = array('status' => 1);
        $where = array('id_pembelian' => $id_pembelian);
        $this->db->set($set);
        $this->db->where($where);
        $this->db->update('beli_barang');
    }

    function tampil() {
        $data = $this->db->query("SELECT * FROM supplier");
        return $data->result();
    }

    function get_kategori()
    {
        $data = $this->db->get('kategori');
        return $data->result();
    }

}
