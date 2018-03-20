<?php

class Laporan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_jual');
        $this->load->helper('url');
        if (empty($_SESSION['username'])){
            redirect(base_url());
        }
    }

    function laporbeli() {
        $data['menu_aktif'] = array("laporbeli");
        $data['beli_barang_pending'] = $this->m_pemesanan->tampil_data(array("status" => 0));
        $data['beli_barang_sukses'] = $this->m_pemesanan->tampil_data(array("status" => 1));
        $this->load->view("/barang/laporbeli", $data);
    }
    function detail($id_pembelian) {
        $data['detail'] = 'Detail Pembelian';
        $data['data'] = $this->m_pemesanan->detail_barang($id_pembelian);
        $this->load->view('barang/vdetlapor', $data);
    }
        function listpenjualan() {
        $data['menu_aktif'] = array("listpenjualan");
        $data['djb'] = $this->m_jual->tampil_data()->result();
        $this->load->view("/supplier/listpenjualan", $data);
    }
}