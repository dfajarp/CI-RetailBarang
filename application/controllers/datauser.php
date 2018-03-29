<?php

class Datauser extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_datauser');
        $this->load->helper('url');
        if (empty($_SESSION['username'])) {
            redirect(base_url());
        }
    }
    function vlistuser() {
        $data['menu_aktif'] = array("user");
        $data['user'] = $this->m_datauser->tampil_user()->result();
        $this->load->view("/manajemen/listuser", $data);
    }
    function vtambah() {
        $data['menu_aktif'] = array("vtambah");
        $this->load->view("/manajemen/vtambah", $data);
    }

    function tambah_aksi() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_lengkap = $this->input->post('Nama Lengkap');
        $alamat = $this->input->post('Alamat');
        $email = $this->input->post('Email');

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama_lengkap' => $nama_lengkap,
            'alamat' => $alamat,
            'email' => $email
        );
        $this->m_datauser->input_data($data, "user");
        redirect('datauser/vlistuser');
    }

    function hapus($username) {
        $where = array('username' => $username);
        $this->m_datauser->hapus_data($where, 'user');
        redirect('datauser/vlistuser');
    }

    function edit($username) {
        $data['menu_aktif'] = array("edit");
        $where = array('username' => $username);
        $data['user'] = $this->m_datauser->edit_data($where, 'user')->result();
        $this->load->view('manajemen/vedit', $data);
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
