<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
		$this->load->helper('url');
		$this->load->database();
		if (empty($_SESSION['username'])){
            redirect(base_url());
        }
	}
	public function index()
	{
		$data['menu_aktif'] = array("transaksi");
		$this->load->model('M_barang');

		$data['barang'] = $this->M_barang->get();

		$this->load->view('transaksi',$data);
	}
    public function savepenjualan() 
    {
    	$tr = array(
    		"tgl" => date("Y-m-d"),
    		"username" => $_SESSION['username'],
    		"member_no" => ($this->input->post('member_no') != "") ? $this->input->post('member_no') : NULL,
    		"nilai_transaksi" => $this->input->post('total'),
    		"bayar" => $this->input->post('bayar'),
    		"kembalian" => $this->input->post('kembali')
    	);
    	
    	$this->db->insert('jual_brg', $tr); 

    	$idjb = $this->db->insert_id();
    	$djb = array();
    	$i = 0;
    	foreach ($this->cart->contents() as $value) {
    		$djb[$i]['id_barang'] = $value['id'];
    		$djb[$i]['id_jual_brg'] = $idjb;
    		$djb[$i]['harga'] = $value['price'];
    		$djb[$i]['unit'] = $value['qty'];
    		$djb[$i]['sub_total'] = $value['qty'] * $value['price'];
    		$i++;
    	}
    	
        $this->db->insert_batch('djb', $djb);
        
        $this->cart->destroy();
        redirect(base_url('transaksi'));
    }	
	public function getbarang($id)
	{

		$this->load->model('M_barang');

		$barang = $this->M_barang->get_by_id($id);

		if ($barang) {

			if ($barang->jumlah_brg == '0') {
				$disabled = 'disabled';
				$info_stok = '<span class="help-block badge" id="reset" 
					          style="background-color: #d9534f;">
					          stok habis</span>';
			}else{
				$disabled = '';
				$info_stok = '<span class="help-block badge" id="reset" 
					          style="background-color: #5cb85c;">stok : '
					          .$barang->jumlah_brg.'</span>';
			}

			echo '<div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="nama_barang">Nama </label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="nama_barang" id="nama_barang" 
				        	value="'.$barang->nama_brg.'"
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="harga_barang">Harga </label>
				      <div class="col-md-8">
				         <input type="text" class="form-control reset" id="harga_brg" name="harga_brg" 
				        	value="'.number_format( $barang->harga_jual, 0 ,
				        	 '' , '.' ).'" readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="qty">Quantity </label>
				      <div class="col-md-4">
				        <input type="number" class="form-control reset" 
				        	name="qty" placeholder="Isi qty..." autocomplete="off" 
				        	id="qty" onchange="subTotal(this.value)" 
				        	onkeyup="subTotal(this.value)" min="0"  
				        	max="'.$barang->jumlah_brg.'" '.$disabled.'>
				      </div>'.$info_stok.'
				    </div>';
	    }else{

	    	echo '<div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="nama_barang">Nama </label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="nama_barang" id="nama_barang" 
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="harga_barang">Harga </label>
				      <div class="col-md-8">
				        <input type="text" class="form-control reset" 
				        	name="harga_barang" id="harga_barang" 
				        	readonly="readonly">
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="control-label col-md-3" 
				      	for="qty">Quantity </label>
				      <div class="col-md-4">
				        <input type="number" class="form-control reset" 
				        	autocomplete="off" onchange="subTotal(this.value)" 
				        	onkeyup="subTotal(this.value)" id="qty" min="0"  
				        	name="qty" placeholder="Isi qty...">
				      </div>
				    </div>';
	    }

	}

	public function ajax_list_transaksi()
	{

		// $data = array();

		// $no = 1; 
		// $this->cart->remove('90f700cd5fd417d11a13db731ae92461');
		$no=1; 
		$total = 0;
		foreach ($this->cart->contents() as $value):
				echo '<tr>';
				// echo '<th>' . $no . '</th>';
				// echo '<th>' . $value['id'];
				echo '<th>' . $value['name'] . '</th>';
				echo '<th>' . $value['qty'] . '</th>';
				echo '<th>' . $value['qty'] * $value['price'] . '</th>';
				// echo '<th>' . date("Y-m-d") . '</th>';
				echo '<th><button type="button" name="delete" data-id="'.$value['rowid'].'" class=" btn btn-danger btn-xs delete">Hapus</button></th>';
				echo '</tr>';
				$total += ($value['qty'] * $value['price']);
	$no++; endforeach;
		echo '<tr>';
		echo '<th colspan="2">Total Belanja : </th>';
		echo '<th>Rp. ' . number_format($total) . '</th>'; 
		echo '<th></th>';
		echo '</tr>';

	}

	public function addbarang()
	{

		$data = array(
				'id' => $this->input->post('id_barang'),
				'member_no' => $this->input->post('member_no'),
				'name' => $this->input->post('nama_barang'),
				'price' => str_replace('.', '', $this->input->post(
					'harga_brg')),
				'qty' => $this->input->post('qty'),
				'kategori' => $this->input->post('nama_barang')
			);
		$insert = $this->cart->insert($data);
		echo json_encode(array("status" => TRUE));
	}

	function delete($id){
		$this->cart->remove($id);
	}
}