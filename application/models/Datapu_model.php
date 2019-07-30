<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapu_model extends CI_Model
{
    public function getDataJalan()
    {
        $query = "SELECT * FROM `tbl_jalan`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataJembatan()
    {
        $query = "SELECT * FROM `tbl_jembatan`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getDataEmbung()
    {
        $query = "SELECT * FROM `tbl_embung`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataSumurBor()
    {
        $query = "SELECT * FROM `tbl_sumurbor`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getDataBlackSpot()
    {
        $query = "SELECT * FROM `tbl_black_spot`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataSpam()
    {
        $query = "SELECT * FROM `tbl_spam`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataDanau()
    {
        $query = "SELECT * FROM `tbl_danau`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataRawa()
    {
        $query = "SELECT * FROM `tbl_rawa`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataPotensiSumurBor()
    {
        $query = "SELECT * FROM `tbl_potensi_sumur_bor`
        ";

        return $this->db->query($query)->result_array();
    }

    public function addDatajalan($ruas, $kota, $stat, $panjang, $lebar)
    {
        $hasil = $this->db->query("INSERT INTO `tbl_jalan` (`id_jalan`, `ruas`, `kota`, `stat`, `panjang`, `lebar`) VALUES (NULL, '$ruas', '$kota', '$stat', '$panjang', '$lebar');");
        return $hasil;
    }
    public function editDatajalan($id, $ruas, $kota, $stat, $panjang, $lebar)
    {
        $hasil = $this->db->query("UPDATE `tbl_jalan` SET `ruas`='$ruas',`kota`='$kota',stat='$stat',panjang='$panjang',lebar='$lebar' WHERE id_jalan='$id'");
        return $hasil;
    }
    public function deleteDatajalan($id)
    {
        $hasil = $this->db->query("DELETE FROM `tbl_jalan` WHERE `tbl_jalan`.`id_jalan` = '$id'");
        return $hasil;
    }
}
