<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{
	public function getJabatan()
    {
       $query = "SELECT * FROM tbl_jabatan ";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



      return $this->db->query($query)->result_array();
    }

    public function tambahdataJabatan($jabatan)
    {
    	 $hasil = $this->db->query("INSERT INTO `tbl_jabatan`(`id_jabatan`, `jabatan`) VALUES (NULL,'$jabatan');");
        return $hasil;
    }

    public function editdataJabatan($id_jabatan , $jabatan)
    {
    	$hasil = $this->db->query("UPDATE `tbl_jabatan` SET `jabatan`='$jabatan' WHERE id_jabatan='$id_jabatan'");
        return $hasil;
    }
    public function deletedataJabatan($id_jabatan)

    {
    	 $hasil = $this->db->query("DELETE FROM `tbl_jabatan` WHERE `tbl_jabatan`.`id_jabatan` = '$id_jabatan'");
        return $hasil;
    }
}