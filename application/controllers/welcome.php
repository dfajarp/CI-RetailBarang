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
        $this->load->view("home", $data);
    }

    public function kasir() {
        $data['menu_aktif'] = array("kasir");
        $this->load->view("kasir", $data);
    }

    public function manajemen() {
        $data['menu_aktif'] = array("manajemen");
        $this->load->view("manajemen", $data);
    }

}
