<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        if (empty($_SESSION['username'])) {
            redirect(base_url());
        }
    }

    public function index() {
        $this->load->view('home');
    }

    public function login() {
        $this->load->view("admin/login");
    }

    public function gudang() {
        $data['menu_aktif'] = array("beranda");
        $data_penjualan = $this->M_statistik->penjualanPerTanggal();
        $data['statistik_penjualan'] = json_encode($data_penjualan);

        $nilai_penjualan = $this->M_statistik->NilaiTransaksiPerTanggal();
        $data['nilai_transaksi'] = json_encode($nilai_penjualan);

        $pembelian_barang = $this->M_statistik->PembelianBarangPerTanggal();
        $data['pembelian_barang'] = json_encode($pembelian_barang);

        $pms = $this->M_statistik->percentageMemberSupplier();
        $data['pms'] = json_encode($pms);
        $this->load->view("home", $data);
    }

    public function kasir() {
        $data['menu_aktif'] = array("kasir");
        $data_penjualan = $this->M_statistik->penjualanPerTanggal();
        $data['statistik_penjualan'] = json_encode($data_penjualan);

        $nilai_penjualan = $this->M_statistik->NilaiTransaksiPerTanggal();
        $data['nilai_transaksi'] = json_encode($nilai_penjualan);

        $pembelian_barang = $this->M_statistik->PembelianBarangPerTanggal();
        $data['pembelian_barang'] = json_encode($pembelian_barang);

        $pms = $this->M_statistik->percentageMemberSupplier();
        $data['pms'] = json_encode($pms);
        $this->load->view("kasir", $data);
    }

    public function manajemen() {
        $data['menu_aktif'] = array("manajemen");
        $data_penjualan = $this->M_statistik->penjualanPerTanggal();
        $data['statistik_penjualan'] = json_encode($data_penjualan);

        $nilai_penjualan = $this->M_statistik->NilaiTransaksiPerTanggal();
        $data['nilai_transaksi'] = json_encode($nilai_penjualan);

        $pembelian_barang = $this->M_statistik->PembelianBarangPerTanggal();
        $data['pembelian_barang'] = json_encode($pembelian_barang);

        $pms = $this->M_statistik->percentageMemberSupplier();
        $data['pms'] = json_encode($pms);

        $this->load->view("manajemen", $data);
    }

}
