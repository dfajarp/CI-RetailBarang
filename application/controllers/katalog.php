<?php 

class Katalog extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_katalog');
                $this->load->helper('url');
     }

     function katalog()
     {
          $data['katalog_pending'] = $this->m_katalog->tampil(array("status" => 0))->result();
          $data['katalog_sukses'] = $this->m_katalog->tampil(array("status" => 1))->result();
          $this->load->view("/barang/katalog",$data);
     }
  }
