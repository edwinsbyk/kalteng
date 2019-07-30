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
        
	$query = "SELECT * FROM tbl_pemenang_lelang  JOIN tbl_pengumuman_lelang ON tbl_pemenang_lelang.id_pengumuman_lelang=tbl_pengumuman_lelang.id_pengumuman_lelang ORDER BY  pemenang DESC ";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



        return $this->db->query($query)->result_array();
    }

    public function tambahrup($kegiatan, $lokasi, $pagu, $metode_lelang)
    {
        $hasil = $this->db->query("INSERT INTO `tbl_rup`(`id_rup`, `kegiatan`, `lokasi`, `pagu`, `metode`) VALUES (NULL,'$kegiatan','$lokasi','$pagu','$metode_lelang');");
        return $hasil;
    }

    public function tambah_pemenang_lelang($id_pengumuman_lelang, $pemenang, $hps)
    {

        $hasil = $this->db->query("INSERT INTO `tbl_pemenang_lelang`(`id_pemenang_lelang`, `id_pengumuman_lelang`, `pemenang`, `hps`) VALUES (NULL,'$id_pengumuman_lelang','$pemenang','$hps')");
        return $hasil;
    }

     public function tambahpengumuman($tanggal, $batas, $no_sk, $nama_paket, $pagu)
    {
        $hasil = $this->db->query("INSERT INTO `tbl_pengumuman_lelang`(`id_pengumuman_lelang`, `tanggal`, `batas`, `no_sk`, `nama_paket`, `pagu`) VALUES (NULL,'$tanggal','$batas','$no_sk','$nama_paket','$pagu')");


        return $hasil;
    }

    public function editDataRUP($id , $kegiatan, $lokasi, $pagu, $metode)
    {

        $hasil = $this->db->query("UPDATE `tbl_rup` SET `kegiatan`='$kegiatan',`lokasi`='$lokasi',pagu='$pagu',metode='$metode' WHERE id_rup='$id'");
        return $hasil;


    }
    public function deletedataRUP($id)
    {
        $hasil = $this->db->query("DELETE FROM `tbl_rup` WHERE `tbl_rup`.`id_rup` = '$id'");
        return $hasil;
    }

    public function editdataPengumuman($id, $tanggal, $batas, $no_sk, $nama_paket, $pagu)
    {
        $hasil = $this->db->query("UPDATE `tbl_pengumuman_lelang` SET `tanggal`='$tanggal',`batas`='$batas',no_sk='$no_sk',nama_paket='$nama_paket',pagu='$pagu' WHERE id_pengumuman_lelang='$id'");
    }

    public function deletedataPengumuman($id)
    {
        $hasil = $this->db->query("DELETE FROM `tbl_pengumuman_lelang` WHERE `tbl_pengumuman_lelang`.`id_pengumuman_lelang` = '$id'");
        return $hasil;
    }
    public function editdataPemenang($id, $id_pengumuman_lelang, $pemenang, $hps)
    {
         $hasil = $this->db->query("UPDATE `tbl_pemenang_lelang` SET `id_pengumuman_lelang`='$id_pengumuman_lelang',`pemenang`='$pemenang',hps='$hps' WHERE id_pemenang_lelang='$id'");
    }

    public function deletedataPemenang($id){
         $hasil = $this->db->query("DELETE FROM `tbl_pemenang_lelang` WHERE `tbl_pemenang_lelang`.`id_pemenang_lelang` = '$id'");
        return $hasil;
    }
}
