<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bidang_model extends CI_Model
{
	public function getBidang()
    {
       $query = "SELECT * FROM tbl_bidang ";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



      return $this->db->query($query)->result_array();
    }

    public function tambahdataBidang($bidang , $alamat_kantor)
    {

        $hasil = $this->db->query("INSERT INTO `tbl_bidang`(`id_bidang`, `bidang`, `alamat_kantor`) VALUES (NULL,'$bidang','$alamat_kantor')");
        return $hasil;
    }

    public function editdataBidang($id, $bidang , $alamat_kantor)
    {

          $hasil = $this->db->query("UPDATE `tbl_bidang` SET `bidang`='$bidang',`alamat_kantor`='$alamat_kantor' WHERE id_bidang='$id'");
    }

    public function deletedataBidang($id)
    {
        $hasil = $this->db->query("DELETE FROM `tbl_bidang` WHERE `tbl_bidang`.`id_bidang` = '$id'");
        return $hasil;
    }
}