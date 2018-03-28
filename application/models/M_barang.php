<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_barang extends CI_Model{

	private $primary_key = 'id_barang';
	private $table_name	= 'barang';

	public function __construct()
	{
	
		parent::__construct();
	
	}

	public function get() 
	{
	  	
	  	$this->db->select('id_barang,nama_brg');

		return $this->db->get($this->table_name)->result();
	
	}

	public function get_by_id($id)
	{
     $this->db->select('barang.*, katalog.harga_jual');
     $this->db->from('barang');
     $this->db->join('katalog', 'barang.id_barang = katalog.id_barang and katalog.status = 1');
     $this->db->where('barang.id_barang',$id);
     $query = $this->db->get();
     return $query->row();
    }	function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	function get_member() {
        $data = $this->db->query("SELECT * FROM member");
        return $data->result();
    }
    function get_stok($kode)
	{
		return $this->db
			->select('nama_barang, total_stok')
			->where('id_barang', $kode)
			->limit(1)
			->get('barang');
	}
}