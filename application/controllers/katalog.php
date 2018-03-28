<?php

class Katalog extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->helper('url');
    }

    function katalog() {
        $data['menu_aktif'] = array("katalog");
        $data['katalog'] = $this->m_katalog->tampil()->result();
        $this->load->view("/katalog/katalog", $data);
    }

    function vtambah() {
        $data['menu_aktif'] = array("katalog");
        $this->load->view("/katalog/vtambah", $data);
    }

    function tambah_aksi() {
        $id_barang = $this->input->post('id_barang');
        $harga_jual = $this->input->post('harga_jual');
        $s = $this->input->post('status');
        $status = ($s != "") ? $s : 0;

        if ($status == 1){
            $where = array(
                'id_barang' => $id_barang
            );
            $this->m_katalog->update_status($where);
        }

        $data = array(
            'id_barang' => $id_barang,
            'harga_jual' => $harga_jual,
            'status' => $status
        );

        $this->m_katalog->input_data($data, "katalog");
        redirect('katalog/katalog');
    }
}