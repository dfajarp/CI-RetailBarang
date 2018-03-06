<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{
	public function index()
	{
		$this->load->view('home');
	}

	public function login()
	{
		$this->load->view("admin/login");
	}
		public function gudang()
	{
		$this->load->view("home");
	}
		public function kasir()
	{
		$this->load->view("kasir");
	}
		public function manajemen()
	{
		$this->load->view("manajemen");
	}
		public function coba()
	{
		$konten['menu_aktif'] = array("coba");
		$this->load->view("home", $konten);
	}
}
