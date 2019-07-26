<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman_model extends CI_Model
{
    public function getDataRUP()
    {
        $query = "SELECT * FROM `tbl_rup`
        ";

        return $this->db->query($query)->result_array();
    }
     public function getPengumumanLelang()
    {
        $query = "SELECT * FROM `tbl_pengumuman_lelang`
        ";

        return $this->db->query($query)->result_array();
    }


 public function getPemenangLelang()
    {
       // $query = "SELECT * FROM `tbl_pemenang_lelang`
        
	$query = "SELECT * FROM tbl_pemenang_lelang JOIN tbl_pengumuman_lelang ON tbl_pemenang_lelang.id_pengumuman_lelang=tbl_pengumuman_lelang.id_pengumuman_lelang";

        return $this->db->query($query)->result_array();

    }


}
