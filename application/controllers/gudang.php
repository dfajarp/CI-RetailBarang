<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller{
	public function index()
	{
		$data['menu_aktif'] = array("beranda");
		$this->load->view("home", $data);
	}
		public function beranda()
	{
		$this->load->view("home");
	}
}
