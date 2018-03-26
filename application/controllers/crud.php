<?php

class Crud extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        if (empty($_SESSION['username'])) {
            redirect(base_url());
        }
    }

    function vsupplier() {
        $data['menu_aktif'] = array("supplier");
        $data['supplier'] = $this->m_data->tampil_data()->result();
        $this->load->view("/supplier/vsupplier", $data);
    }

    function vtambah() {
        $this->load->view("/supplier/vtambah");
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
        $data['menu_aktif'] = array("edit");
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
