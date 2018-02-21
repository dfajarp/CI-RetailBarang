<?php
definied('BASEPATH') or exit('No irect script access allowed');

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('username'))
		{
			redirect('login');
		}
	}

	public function index(){
		$d['title'] = 'Login Logout CodeIgniter dengan Mysql &minus; Ryan';
		$d['judul'] = 'Login Logout CodeIgniter dengan Mysql';
		$d['username'] = $this->session->userdata('username');
		$this->load->view('admin/login', $d);
	}
}