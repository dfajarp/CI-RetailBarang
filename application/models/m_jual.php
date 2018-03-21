<?php

class M_Jual extends CI_Model {

    function tampil_data() {
        return $this->db->get('jual_brg');
    }

}
