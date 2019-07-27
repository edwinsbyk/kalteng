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

    public function tambahrup($kegiatan, $lokasi, $pagu, $metode_lelang)
    {
        $hasil = $this->db->query("INSERT INTO `tbl_rup`(`id_rup`, `kegiatan`, `lokasi`, `pagu`, `metode`) VALUES (NULL,'$kegiatan','$lokasi','$pagu','$metode_lelang');");
        return $hasil;
    }

    public function tambah_pemenang_lelang($no_sk, $nama_paket, $pemenang, $hps)
    {
        $hasil = $this->db->query("INSERT INTO `tbl_pemenang_lelang`(`id_pengumuman_lelang`, `no_sk`, `nama_paket`, `pemenang`, `hps`) VALUES ('','$no_sk','$nama_paket','$pemenang','$hps')");
        return $hasil;
    }
}
