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
				        <input type="text" class="form-control reset" id="harga_barang" name="harga_barang" 
				        	value="'.number_format( $barang->harga_brg, 0 ,
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
		foreach ($this->cart->contents() as $value):
				echo '<tr>';
				echo '<th>' . $no . '</th>';
				echo '<th>' . $value['name'] . '</th>';
				echo '<th>' . $value['qty'] . '</th>';
				echo '<th>' . $value['qty'] * $value['price'] . '</th>';
				echo '<th>' . date("Y-m-d") . '</th>';
				echo '<th><button type="button" name="delete" data-id="'.$value['rowid'].'" class=" btn btn-danger btn-xs delete">Hapus</button></th>';
				echo '</tr>';
			$no++; endforeach;
        
   //      foreach ($this->cart->contents() as $items){
        	
			// $row = array();
			// $row[] = $no;
			// $row[] = $items["id"];
			// $row[] = $items["name"];
			// $row[] = 'Rp. ' . number_format( $items['price'], 
   //                  0 , '' , '.' ) . ',-';
			// $row[] = $items["qty"];
			// $row[] = 'Rp. ' . number_format( $items['subtotal'], 
			// 		0 , '' , '.' ) . ',-';

			// //add html for action
			// $row[] = '<a 
			// 	href="javascript:void()" style="color:rgb(255,128,128);
			// 	text-decoration:none" onclick="deletebarang('
			// 		."'".$items["rowid"]."'".','."'".$items['subtotal'].
			// 		"'".')"> <i class="fa fa-close"></i> Delete</a>';
		
			// $data[] = $row;
			// $no++;

   //      }
		// $output = array(
		// 				"data" => $data,
		// 		);
		// //output to json format
		// echo json_encode($output);
	}

	public function addbarang()
	{

		$data = array(
				'id' => $this->input->post('id_barang'),
				'name' => $this->input->post('nama_barang'),
				'price' => str_replace('.', '', $this->input->post(
					'harga_barang')),
				'qty' => $this->input->post('qty'),
				'kategori' => $this->input->post('nama_barang')
			);
		$insert = $this->cart->insert($data);
		echo json_encode(array("status" => TRUE));
	}

	function delete($id){
		$this->cart->remove($id);
	}
	function savebarang()
    {
        $data = array(
                'id_jual_brg' => $this->input->post('id_jual_brg'),
                'tgl' => $this->input->post('tgl'),
                'member_no' => str_replace('.', '', $this->input->post(
                    'member_no')),
            );
        $insert = $this->view->insert($data);
        echo json_encode(array("status" => TRUE));
    }
}