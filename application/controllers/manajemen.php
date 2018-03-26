<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen extends CI_Controller {

    function index() {
        $data['menu_aktif'] = array("manajemen");
        $this->load->view('manajemen');
    }

}
