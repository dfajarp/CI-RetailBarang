<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index() {
        $this->load->view('admin/login');
    }

    public function cek_login() {
        $data = array('username' => $this->input->post('username', TRUE),
                      'password' => md5($this->input->post('password', TRUE))
        );
        $this->load->model('model_user'); // load model_user
        $hasil = $this->model_user->cek_user($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['username'] = $sess->username;
                $sess_data['tipe_user'] = $sess->tipe_user;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('tipe_user') == 'gudang') {
                redirect('gudang');
            } else if ($this->session->userdata('tipe_user') == 'kasir') {
                redirect('kasir');
            }
              else if ($this->session->userdata('tipe_user') == 'manajemen') {
                redirect('manajemen');
            }
        } else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }

    function keluar() {

        $this->session->sess_destroy();
        redirect('auth');
    }

}

?>