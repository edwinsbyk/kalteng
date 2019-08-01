<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bidanghome_model extends CI_Model
{
	public function getdataBidang()
    {
       $query = "SELECT * FROM user  JOIN tbl_bidang ON user.id_bidang=tbl_bidang.id_bidang WHERE user.id_jabatan = '1' ORDER BY bidang ASC ";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



        return $this->db->query($query)->result_array();
    }
}