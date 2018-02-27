<?php 

class Member extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_member');
        $this->load->helper('url');
	}

	function vmember()
	{
		$data['member'] = $this->m_member->tampil_data()->result();
		$this->load->view("/member/vmember",$data);
	}


	function vtambah()
	{
		$this->load->view("/member/vtambah");
	}

		function tambah_aksi(){
	$member_no = $this->input->post('member_no');
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');
	$no_telepon = $this->input->post('no_telepon');
	$valid_date = $this->input->post('valid_date');
 
		$data = array(
			'member_no'  => $member_no,
			'nama' => $nama,
			'email' => $email,
			'no_telepon' => $no_telepon,
			'valid_date' => $valid_date,
			);
		$this->m_member->input_data($data,"member");
		redirect('member/vmember');
	}

			function hapus($member_no){
		$where = array('member_no' => $member_no);
		$this->m_member->hapus_data($where,'member');
		redirect('member/vmember');
	}

		function edit($member_no){
	$where = array('member_no' => $member_no);
	$data['member'] = $this->m_member->edit_data($where,'member')->result();
	$this->load->view('member/vedit',$data);
	}

	function update(){
	$member_no = $this->input->post('member_no');
	$nama = $this->input->post('nama');
	$email = $this->input->post('email');
	$no_telepon = $this->input->post('no_telepon');
	$valid_date = $this->input->post('valid_date');
	$data = array(
			'member_no'  => $member_no,
			'nama' => $nama,
			'email' => $email,
			'no_telepon' => $no_telepon,
			'valid_date' => $valid_date,
	);

	$where = array(
		'member_no' => $member_no
	);

	$this->m_member->update_data($where,$data,'member');
	redirect('member/vmember');
}
}