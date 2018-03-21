<?php

class Katalog extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->helper('url');
    }

    function katalog() {
        $data['katalog'] = $this->m_katalog->tampil()->result();
        $this->load->view("/katalog/katalog", $data);
    }
}