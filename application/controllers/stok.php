<?php

class Stok extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_stok');
        $this->load->helper('url');
        if (empty($_SESSION['username'])){
            redirect(base_url());
        }
    }

    function vbarang() {
        $data['menu_aktif'] = array("barang", "stok", "belibarang");
        $data['barang'] = $this->m_stok->tampil();
        $this->load->view("/barang/vbarang", $data);
    }
    function vstok() {
        $data['menu_aktif'] = array("laporan","vstok");
        $data['barang'] = $this->m_stok->tampil();
        $this->load->view("/barang/vstok", $data);
    }

}
