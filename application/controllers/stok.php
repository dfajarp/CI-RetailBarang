<?php

class Stok extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_stok');
        $this->load->helper('url');
    }

    function vbarang() {
        $data['barang'] = $this->m_stok->tampil();
        $this->load->view("/barang/vbarang", $data);
    }

}
