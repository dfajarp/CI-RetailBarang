<?php

class Katalog extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->helper('url');
        if (empty($_SESSION['username'])){
            redirect(base_url());
        }
    }

    function katalog() {
        $data['menu_aktif'] = array("katalog");
        $data['katalog'] = $this->m_katalog->tampil()->result();
        $this->load->view("/katalog/katalog", $data);
    }

    function vtambah() {
        $this->load->view("/katalog/vtambah");
    }

    function tambah_aksi() {
        $id_barang = $this->input->post('id_barang');
        $harga_jual = $this->input->post('harga_jual');
        $status = $this->input->post('status');

        $data = array(
            'id_barang' => $id_barang,
            'harga_jual' => $harga_jual,
            'status' => ($status != "") ? $status : 0
        );
        $this->m_katalog->input_data($data, "katalog");
        redirect('katalog/katalog');
    }

}
