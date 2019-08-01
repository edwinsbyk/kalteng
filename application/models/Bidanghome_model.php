<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bidanghome_model extends CI_Model
{
	public function getdataBidang()
    {
       $query = "SELECT * FROM tbl_pegawai  JOIN tbl_bidang ON tbl_pegawai.id_bidang=tbl_bidang.id_bidang WHERE id_jabatan = '1' ORDER BY bidang ASC ";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



        return $this->db->query($query)->result_array();
    }
}