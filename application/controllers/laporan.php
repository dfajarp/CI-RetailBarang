<?php

class Laporan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pemesanan');
        $this->load->helper('url');
        if (empty($_SESSION['username'])){
            redirect(base_url());
        }
    }

    function laporbeli() {
        $data['beli_barang_pending'] = $this->m_pemesanan->tampil_data(array("status" => 0));
        $data['beli_barang_sukses'] = $this->m_pemesanan->tampil_data(array("status" => 1));
        $this->load->view("/barang/laporbeli", $data);
    }
   function detail($id_pembelian) {
        $data['detail'] = 'Detail Pembelian';
        $data['data_pembelian'] = $this->m_pemesanan->detail_pembelian($id_pembelian);
        $data['data_barang'] = $this->m_pemesanan->detail_barang($id_pembelian);
        $this->load->view('barang/vdetlapor', $data);
    }
}