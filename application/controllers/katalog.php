<?php 

class Katalog extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_katalog');
                $this->load->helper('url');
     }

     function katalog()
     {
      $data['menu_aktif'] = array("katalog");
          $data['katalog_pending'] = $this->m_katalog->tampil(array("status" => 0))->result();
          $data['katalog_sukses'] = $this->m_katalog->tampil(array("status" => 1))->result();
          $this->load->view("/barang/katalog",$data);
     }

       function edit($id_katalog)
     {
      $where = array('id_katalog' => $id_katalog);
      $data['katalog'] = $this->m_katalog->edit_data($where, 'katalog')->result();
      $this->load->view('katalog/katalog', $data);
     }

     function detail($id_pembelian)
     {
      $data['detail'] = 'Detail Pembelian';
      $data['data'] = $this->m_pemesanan->detail_barang($id_pembelian);
      $this->load->view('barang/vdetbarang', $data);
     }

     function activebarang($id_pembelian)
     {
          $this->m_pemesanan->activebarang($id_pembelian);
          redirect('pemesanan/belibarang');
     }
}
