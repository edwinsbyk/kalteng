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
        $query = "SELECT * FROM tbl_pemenang_lelang  JOIN tbl_pengumuman_lelang ON tbl_pemenang_lelang.id_pengumuman_lelang=tbl_pengumuman_lelang.id_pengumuman_lelang ORDER BY  pemenang DESC ";
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
}
