<?php

class Pemesanan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pemesanan');
        $this->load->helper('url');
        if (empty($_SESSION['username'])){
            redirect(base_url());
        }
    }

    function belibarang() {
        $data['menu_aktif'] = array("barang", "belibarang");
        $data['beli_barang_pending'] = $this->m_pemesanan->tampil_data(array("status" => 0));
        $data['beli_barang_sukses'] = $this->m_pemesanan->tampil_data(array("status" => 1));
        $this->load->view("/barang/belibarang", $data);
    }
    function laporbeli() {
        $data['menu_aktif'] = array("laporan", "laporbeli");
        $data['beli_barang_pending'] = $this->m_pemesanan->tampil_data(array("status" => 0));
        $data['beli_barang_sukses'] = $this->m_pemesanan->tampil_data(array("status" => 1));
        $this->load->view("/barang/laporbeli", $data);
    }

    function vtambah() {
        $data['menu_aktif'] = array("vtambah");
        $data['data_beli_barang'] = $this->m_pemesanan->tampil();
        $this->load->view("/barang/vtambah", $data);
    }

    function add_barang() {
        $data['menu_aktif'] = array("ad_brng");
        $data['data_kategori'] = $this->m_pemesanan->get_kategori();
        $this->load->view("ad_brng", $data);
    }

    function tambah_aksi() {

        $id_supplier = $this->input->post('id_supplier');
        $tanggal_beli = $this->input->post('tanggal_beli');  

        $data = array(
             'id_supplier' => $id_supplier,
             'tanggal_beli' => $tanggal_beli,
             'username' => $this->session->username
         );
         $this->m_pemesanan->input_data($data, 'beli_barang');

         $id_bb = $this->db->insert_id();

        $jml = count($_POST['id_barang']);
        $result = array();
        $config['upload_path']          = './assets/images/gambar barang/';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);

         for ($i = 0; $i < $jml; $i++) {
            $_FILES['gambar']['name'] = $_FILES['gambar_barang']['name'][$i];
            $_FILES['gambar']['type'] = $_FILES['gambar_barang']['type'][$i];
            $_FILES['gambar']['tmp_name'] = $_FILES['gambar_barang']['tmp_name'][$i];
            $_FILES['gambar']['error'] = $_FILES['gambar_barang']['error'][$i];
            $_FILES['gambar']['size'] = $_FILES['gambar_barang']['size'][$i];
            if ($this->upload->do_upload('gambar'))
            {
                 $result[] = array(
                    "id_bb" => $id_bb,
                    "id_brg" => $_POST['id_barang'][$i],
                    "id_kategori" => $_POST['id_kategori'][$i],
                    "nama_brg" => $_POST['nama_barang'][$i],
                    "harga_brg" => $_POST['harga_barang'][$i],
                    "jumlah_brg" => $_POST['jumlah_barang'][$i],
                    "deskripsi_barang" => $_POST['deskripsi_barang'][$i],
                    "gambar_barang" => base_url("assets/images/gambar barang/" . $_FILES['gambar_barang']['name'][$i])
                );

            } else {
                $error = array('error' => $this->upload->display_errors());
            }
         }
         $this->db->insert_batch('dbb', $result);
         redirect('/pemesanan/belibarang');
    }

    function edit($id_pembelian) {
        $where = array('id_pembelian' => $id_pembelian);
        $data['beli_barang'] = $this->m_pemesanan->edit_data($where, 'beli_barang')->result();
        $this->load->view('barang/belibarang', $data);
    }

    function hapus($id_pembelian)
    {
        $where = array('id_bb' => $id_pembelian);
        $this->m_pemesanan->hapus_data($where, 'dbb');
        $where = array('id_pembelian' => $id_pembelian);
        $this->m_pemesanan->hapus_data($where, 'beli_barang');
        redirect('pemesanan/belibarang');
    }

    function detail($id_pembelian) {
        $data['menu_aktif'] = array("vdetbarang");
        $data['detail'] = 'Detail Pembelian';
        $data['data_pembelian'] = $this->m_pemesanan->detail_pembelian($id_pembelian);
        $data['data_barang'] = $this->m_pemesanan->detail_barang($id_pembelian);
        $this->load->view('barang/vdetbarang', $data);
    }

    function detail_lapor($id_pembelian) {
        $data['menu_aktif'] = array("vdetbaranglapor");
        $data['detail'] = 'Detail Pembelian';
        $data['data_pembelian'] = $this->m_pemesanan->detail_pembelian($id_pembelian);
        $data['data_barang'] = $this->m_pemesanan->detail_barang($id_pembelian);
        $this->load->view('barang/vdetbaranglapor', $data);
    }

    function activebarang($id_pembelian) {
        $this->m_pemesanan->activebarang($id_pembelian);
        $where = array('id_bb' => $id_pembelian);
        $barang = $this->m_pemesanan->get_data_barang($where, 'dbb');
        foreach ($barang as $b) {
            $data['id_barang'] = $b->id_brg;
            $data['id_kategori'] = $b->id_kategori;
            $data['nama_brg'] = $b->nama_brg;
            $data['harga_brg'] = $b->harga_brg;
            $data['jumlah_brg'] = $b->jumlah_brg;
            $data['deskripsi_barang'] = $b->deskripsi_barang;
            $data['gambar_barang'] = $b->gambar_barang;

            $where = array('id_barang' => $b->id_brg);
            if($this->m_pemesanan->get_data_barang($where, 'barang')){
                $this->m_pemesanan->update($data);
            } else {
                $this->m_pemesanan->insert($data);
            }
        }


        redirect('pemesanan/belibarang');
    }
}