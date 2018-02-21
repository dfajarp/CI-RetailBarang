<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function index(){
		$d['title'] = 'Login Logout CodeIgniter dengan Mysql &minus; Ryan';
		$d['judul'] = 'Login Logout CodeIgniter dengan Mysql';
		$this->load->view('admin/login', $d);
	}

	function masuk()
	{
				$username = $_POST['username'];
				$password = md5($_POST['password']);

		$cek = $this->model_login->cek($username, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['username'] = $data->username;
				$this->session->set_userdata($sess_data);
			}

			redirect('welcome');
		}
		else
		{
			$this->session->set_flashdata('pesan', '<center style="color:red;">Maaf, Kombinasi username dengan password salah</center>');
			redirect('login');
		}
	}

	function keluar()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
