<<<<<<< HEAD
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
	  
	  	$this->db->where($this->primary_key,$id); 
	  
	  	return $this->db->get($this->table_name)->row();
	
	}
	function input_data($data, $table){
		$this->db->insert($table, $data);
	}
}
=======
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_barang extends CI_Model {

    private $primary_key = 'id_barang';
    private $table_name = 'barang';

    public function __construct() {

        parent::__construct();
    }

    public function get() {

        $this->db->select('id_barang,nama_brg');

        return $this->db->get($this->table_name)->result();
    }

    public function get_by_id($id) {

        $this->db->where($this->primary_key, $id);

        return $this->db->get($this->table_name)->row();
    }

}
>>>>>>> 4b1daea9a8ec58ff97eb663442f0eeabe259cd71
