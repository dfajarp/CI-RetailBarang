<?php

class Laporan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_jual');
        $this->load->helper('url');
        if (empty($_SESSION['username'])) {
            redirect(base_url());
        }
    }

    function laporbeli() {
        $data['menu_aktif'] = array("laporbeli");
        $data['beli_barang_pending'] = $this->m_pemesanan->tampil_data(array("status" => 0));
        $data['beli_barang_sukses'] = $this->m_pemesanan->tampil_data(array("status" => 1));
        $this->load->view("/barang/laporbeli", $data);
    }
<<<<<<< HEAD
   function detail($id_jual_barang) {
        $data['menu_aktif'] = array("detail");
        $data['detail'] = 'Detail Penjualan';
        $data['data_penjualan'] = $this->m_jual->detail_penjualan($id_jual_barang);
        $data['data_barang'] = $this->m_jual->detail_barang($id_jual_barang);
        $this->load->view('manajemen/vdetlapor', $data);
    }
=======

    function detail($id_pembelian) {
        $data['detail'] = 'Detail Pembelian';
        $data['data_pembelian'] = $this->m_pemesanan->detail_pembelian($id_pembelian);
        $data['data_barang'] = $this->m_pemesanan->detail_barang($id_pembelian);
        $this->load->view('barang/vdetlapor', $data);
    }

>>>>>>> 4b1daea9a8ec58ff97eb663442f0eeabe259cd71
    function listpenjualan() {
        $data['menu_aktif'] = array("listpenjualan");
        $data['djb'] = $this->m_jual->tampil_data()->result();
        $this->load->view("/supplier/listpenjualan", $data);
    }
<<<<<<< HEAD
    function tambah_aksi() {
        $id_jual_brg = $this->input->post('id_jual_brg');
        $tgl = $this->input->post('tgl');
        $member_no = $this->input->post('member_no');

        $data = array(
            'id_jual_brg' => $id_jual_brg,
            'tgl' => $tgl,
            'member_no' => $member_no,
        );
        $this->m_jual->input_data($data, "jual_barang");
        redirect('laporan/listpenjualan');
    }

}
=======

}
>>>>>>> 4b1daea9a8ec58ff97eb663442f0eeabe259cd71
