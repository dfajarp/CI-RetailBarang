<?php

class M_Jual extends CI_Model {

    function tampil_data() {
        return $this->db->get('jual_brg');
    }
    function tampil_user() {
        return $this->db->get('user');
    }
    function detail_penjualan($id_jual_brg) {
        $this->db->select('jual_brg.*');
        $this->db->from('jual_brg');
        $this->db->where('jual_brg.id_jual_brg', $id_jual_brg);
        $data = $this->db->get();
        if ($data->num_rows() == 1) {
        return $data->row();
    }
}

    function detail_barang($id_jual_brg) {
     $this->db->select('*');
     $this->db->from('barang');
     $this->db->join('katalog', 'barang.id_barang = katalog.id_barang and katalog.status = 1');
     $this->db->join('djb', 'katalog.id_barang = djb.id_barang');
     $this->db->join('jual_brg', 'djb.id_jual_brg = jual_brg.id_jual_brg');
     $this->db->where('djb.id_jual_brg',$id_jual_brg);
     $query = $this->db->get();
     return $query->result();
    }
    function input_data($data, $table) {
        $this->db->insert($table, $data);
    }
}