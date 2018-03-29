<?php

class M_statistik extends CI_Model {

    function penjualanPerTanggal() {
        $query = $this->db->select("tgl, count(id_jual_brg) as jml, count(id_jual_brg) + 2 as jml2")
            ->from("jual_brg")
            ->group_by("tgl")
            ->get();
        return $query->result();
    }

}
