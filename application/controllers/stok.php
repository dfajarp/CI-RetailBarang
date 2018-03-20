<?php

class Stok extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_stok');
        $this->load->helper('url');
        if (empty($_SESSION['username'])){
            redirect(base_url());
        }
    }

    function vbarang() {
        $data['menu_aktif'] = array("barang", "stok", "belibarang");
        $data['barang'] = $this->m_stok->tampil();
        $this->load->view("/barang/vbarang", $data);
    }
    function vstok() {
        $data['menu_aktif'] = array("laporan","vstok");
        $data['barang'] = $this->m_stok->tampil();
        $this->load->view("/barang/vstok", $data);
    }

    function edit($id_barang) {
        $where = array('id_barang' => $id_barang);
        $data['barang'] = $this->m_stok->edit_data($where, 'barang')->result();
        $this->load->view('barang/vedit', $data);
    }

    function update() {
        $id_barang = $this->input->post('id_barang');
        $nama_brg = $this->input->post('nama_brg');
        $deskripsi_barang = $this->input->post('deskripsi_barang');

        $result = array();
        $config['upload_path']          = './assets/images/gambar barang/';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar_barang')){
        	$result = array(
            	'nama_brg' => $nama_brg,
            	'deskripsi_barang' => $deskripsi_barang,
            	'gambar_barang' => base_url("assets/images/gambar barang/" . $_FILES['gambar_barang']['name'])
        	);
    	}else {
    		$error = array('error' => $this->upload->display_errors());
    	}

    	$where = array(
    		'id_barang' => $id_barang,
        );

        $this->m_stok->update_data($where, $result, 'barang');
        redirect('stok/vbarang');
    }

}