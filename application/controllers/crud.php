<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	function vtampil()
	{
		$data['supplier'] = $this->m_data->tampil_data()->result();
		$this->load->view("vtampil",$data);
	}
}