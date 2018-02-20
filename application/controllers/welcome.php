<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller{
	public function index()
	{
		$this->load->view('home');
	}

	public function login()
	{
		$this->load->view("admin/login");
	}
		public function beranda()
	{
		$this->load->view("home");
	}
		public function pemesanan()
	{
		$this->load->view("pemesanan");
	}
			public function konten()
	{
		$this->load->view("konten");
	}




}
