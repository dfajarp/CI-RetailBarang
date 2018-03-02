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

    function detail_barang($id_pembelian) {
        $this->db->select('beli_barang.*, supplier.nama_supplier');
        $this->db->from('beli_barang');
        $this->db->join('supplier', 'supplier.id_supplier = beli_barang.id_supplier');
        $this->db->where('id_pembelian', $id_pembelian);
        $data = $this->db->get();
        if ($data->num_rows() == 1) {
            return $data->row();
        }
    }

    function activebarang($id_pembelian) {
        $set = array('status' => 1);
        $where = array('id_pembelian' => $id_pembelian);
        $this->db->set($set);
        $this->db->where($where);
        $this->db->update('beli_barang');
    }

}
