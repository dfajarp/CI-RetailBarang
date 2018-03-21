<?php

class Katalog extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_katalog');
        $this->load->helper('url');
    }

    function katalog() {
        $data['katalog'] = $this->m_katalog->tampil()->result();
        $this->load->view("/katalog/katalog", $data);
    }

    function vtambah() {
        $this->load->view("/katalog/vtambah");
    }

    function tambah_aksi() {
        $id_supplier = $this->input->post('id_supplier');
        $nama_supplier = $this->input->post('nama_supplier');
        $alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');

        $data = array(
            'id_supplier' => $id_supplier,
            'nama_supplier' => $nama_supplier,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon
        );
        $this->m_data->input_data($data, "supplier");
        redirect('crud/vsupplier');
    }

    function hapus($id_supplier) {
        $where = array('id_supplier' => $id_supplier);
        $this->m_data->hapus_data($where, 'supplier');
        redirect('crud/vsupplier');
    }

    function edit($id_supplier) {
        $where = array('id_supplier' => $id_supplier);
        $data['supplier'] = $this->m_data->edit_data($where, 'supplier')->result();
        $this->load->view('supplier/vedit', $data);
    }

    function update() {
        $id_supplier = $this->input->post('id_supplier');
        $nama_supplier = $this->input->post('nama_supplier');
        $alamat = $this->input->post('alamat');
        $no_telepon = $this->input->post('no_telepon');
        $data = array(
            'id_supplier' => $id_supplier,
            'nama_supplier' => $nama_supplier,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon
        );

        $where = array(
            'id_supplier' => $id_supplier
        );

        $this->m_data->update_data($where, $data, 'supplier');
        redirect('crud/vsupplier');
    }
}