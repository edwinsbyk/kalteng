<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
	public function getPegawai()
    {
       $query = "SELECT * FROM tbl_pegawai  JOIN tbl_bidang ON tbl_pegawai.id_bidang=tbl_bidang.id_bidang ORDER BY nama DESC ";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



        return $this->db->query($query)->result_array();
    }

    public function getPegawaibidang()
    {
        $query = "SELECT u.*, tb.*, tj.* FROM tbl_pegawai u 
            LEFT JOIN tbl_bidang tb 
                ON u.id_bidang=tb.id_bidang
            LEFT JOIN tbl_jabatan tj
                ON tj.id_jabatan=u.id_jabatan WHERE u.id_jabatan = '1'";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



        return $this->db->query($query)->result_array();
    }

    public function tambahdataPegawai($id_bidang , $jabatan, $nip ,$nama, $alamat)
    {

        $hasil = $this->db->query("INSERT INTO `tbl_pegawai`(`id_pegawai`, `id_bidang`, `id_jabatan`, `nip`, `nama`, `alamat`) VALUES (NULL,'$id_bidang','$jabatan','$nip','$nama','$alamat');");
        return $hasil;
    }
    public function editdataPegawai($id_pegawai, $id_bidang , $jabatan, $nip ,$nama, $alamat)
   	{

        $hasil = $this->db->query("UPDATE `tbl_pegawai` SET `id_bidang`='$id_bidang',`id_jabatan`='$jabatan',`nip`='$nip',`nama`='$nama',`alamat`='$alamat' WHERE id_pegawai='$id_pegawai'");

        return $hasil;
   	}
   	public function deletedataPegawai($id_pegawai) {

   		 $hasil = $this->db->query("DELETE FROM `tbl_pegawai` WHERE `tbl_pegawai`.`id_pegawai` = '$id_pegawai'");
        return $hasil;
   	}

    public function getPegawaiJabatan()
    {
       $query = "SELECT * FROM tbl_pegawai  JOIN tbl_jabatan ON tbl_pegawai.id_jabatan=tbl_jabatan.id_jabatan ORDER BY jabatan DESC ";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



        return $this->db->query($query)->result_array();
    }

}