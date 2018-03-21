<?php

class M_katalog extends CI_Model{
	function tampil()
	{
		//$data = $this->db->get('katalog');
		//return $data->result();
		return $this->db->get('katalog');
	}

	function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}