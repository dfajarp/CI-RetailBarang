<?php 

class Pemesanan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pemesanan');
                $this->load->helper('url');
     }

     function belibarang()
	{
		$data['beli_barang_pending'] = $this->m_pemesanan->tampil_data(array("status" => 0))->result();
		$data['beli_barang_sukses'] = $this->m_pemesanan->tampil_data(array("status" => 1))->result();
		$this->load->view("/barang/belibarang",$data);
	}

     function vtambah()
     {
     	$this->load->view("/barang/vtambah");
     }

     function add_barang()
     {
          $this->load->view("ad_brng");
     }

     function tembah_aksi()
     {
     	$id_pembelian = $this->input->post('id_pembelian');
     	$id_supplier = $this->input->post('id_supplier');
     	$tanggal_beli = $this->input->post('tanggal_beli');
     	$status = $this->input->post('status');

     	$data = array(
     		'id_pembelian' => $id_pembelian,
     		'id_supplier' => $id_supplier,
     		'tanggal_beli' => $tanggal_beli,
     		'status' => $status
     		);
     	$this->m_pemesanan->input_data($data, "beli_barang");
     	redirect('barang/belibarang');
     }

     function hapus($id_pembelian)
     {
     	$where = array('id_pembelian' => $id_pembelian);
     	$this->m_pemesanan->hapus_data($where, 'beli_barang');
     	redirect('belibarang/belibarang');
     }

     function edit($id_pembelian)
     {
     	$where = array('id_pembelian' => $id_pembelian);
     	$data['beli_barang'] = $this->m_pemesanan->edit_data($where, 'beli_barang')->result();
     	$this->load->view('barang/belibarang', $data);
     }
}