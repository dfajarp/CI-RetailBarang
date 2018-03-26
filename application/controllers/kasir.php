<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
	    function __construct() {
        parent::__construct();
        $this->load->model('m_jual');
        $this->load->helper('url');
        if (empty($_SESSION['username'])){
            redirect(base_url());
        }
    }

    function index() {
		$data['menu_aktif'] = array("kasir");
		$this->load->view("kasir");
	}
	function listpenjualan() {
        $data['menu_aktif'] = array("listpenjualan");
        $data['djb'] = $this->m_jual->tampil_data()->result();
        $this->load->view("/kasir/listpenjualan", $data);
    }
    function detail($id_jual_barang) {
        $data['menu_aktif'] = array("listdetail");
        $data['detail'] = 'Detail Penjualan';
        $data['data_penjualan'] = $this->m_jual->detail_penjualan($id_jual_barang);
        $data['data_barang'] = $this->m_jual->detail_barang($id_jual_barang);
        $this->load->view('kasir/vdetlist', $data);
    }
    function savepenjualan() 
    {
        $this->db->insert_batch('djb', $result);
    }

}
