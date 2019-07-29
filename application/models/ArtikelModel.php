<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class ArtikelModel extends CI_Model {
    public function tambah_data($judul, $isi, $tanggal) {
        $sql = "INSERT INTO tbl_artikel VALUES(NULL, '0', '$judul', '$isi', '$tanggal', '')";
        return $this->db->query($sql);
    }

    public function display_data() {
        return $this->db->get("tbl_artikel")->result_array();
    }
}