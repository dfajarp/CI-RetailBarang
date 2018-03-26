<?php

class M_Jual extends CI_Model {

    function tampil_data() {
        return $this->db->get('jual_brg');
    }
    function detail_penjualan($id_jual_brg) {
        // $this->db->select('djb.*, jual_brg.nama_brg');
        // $this->db->from('djb');
        // $this->db->join('jual_brg', 'jual_brg.id_jual_brg = djb.id_jual_brg');
        $data = $this->db->get('jual_brg');
        if ($data->num_rows() == 1) {
            return $data->row();
    }
}

    function detail_barang($id_jual_brg)
    {
    $this->db->select('barang.id_barang,barang.nama_brg')
    ->join('jual_brg','jual_brg.id_jual_brg = barang.harga_brg')
    ->join('djb','djb.id_jual_brg = jual_brg.id_jual_brg');
    return $this->db->get('barang')->result();
    }
    function input_data($data, $table) {
        $this->db->insert($table, $data);
    }
}