<?php 

class Pemesanan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_pemesanan');
                $this->load->helper('url');
     }

     function belibarang()
	{
		$data['beli_barang'] = $this->m_pemesanan->tampil_data()->result();
		$this->load->view("/barang/belibarang",$data);
	}

     function vtambah()
     {
     	$this->load->view("/barang/vtambah");
     }

     function tembah_aksi()
     {
     	$id_pembelian = $this->input->post('id_pembelian');
     	$id_supplier = $this->input->post('id_supplier');
     	$tanggal_beli = $this->input->post('tanggal_beli');
     	$username = $this->input->post('username');
     	$status = $this->input->post('status');

     	$data = array(
     		'id_pembelian' => $id_pembelian,
     		'id_supplier' => $id_supplier,
     		'tanggal_beli' => $tanggal_beli,
     		'username' => $username,
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