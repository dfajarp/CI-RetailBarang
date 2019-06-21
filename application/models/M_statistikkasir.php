
<?php

class M_statistikkasir extends CI_Model {

    function penjualanPerTanggal() {
        $query = $this->db->select("tgl, count(id_jual_brg) as jml")
            ->from("jual_brg")
            ->group_by("tgl")
            ->get();
        return $query->result();
    } 

    function NilaiTransaksiPerTanggal() {
        $query = $this->db->select("tgl, SUM(nilai_transaksi) as jml")
            ->from("jual_brg")
            ->group_by("tgl")
            ->get();
        return $query->result();
    } 

    function PembelianBarangPerTanggal() {
        $query = $this->db->select("tanggal_beli, count(id_pembelian) as jml")
            ->from("beli_barang")
            ->group_by("tanggal_beli")
            ->get();
        return $query->result();
    } 

    function percentageMemberSupplier(){
    	$query = $this->db->query("SELECT 'supplier' as name, count(id_supplier) as jml FROM supplier UNION SELECT 'member' as name, count(member_no) as jml FROM member");
    	return $query->result();
    }

}
