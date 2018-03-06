<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen extends CI_Controller {

    function index() {
        $this->load->view('manajemen');
    }

}
