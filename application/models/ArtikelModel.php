<?php 
error_reporting(1);
defined('BASEPATH') or exit('No direct script access allowed');

class ArtikelModel extends CI_Model {
    public function tambah_data($data) {
        return $this->db->insert("tbl_artikel", $data);
    }

    public function delete_data($id) {
        $sql = "DELETE FROM tbl_artikel WHERE id_artikel = '$id'";
        return $this->db->query($sql);
    }

    public function display_data() {
        $a = $this->session->userdata("role_id") != 1 ? " WHERE a.iduser=".$this->session->userdata("user_id") : "";
        $sql = "SELECT a.*, u.name FROM tbl_artikel a LEFT JOIN user u ON a.iduser = u.id${a}";
        return $this->db->query($sql)->result_array();
    }

    public function getDataByIndex($id)
    {
        $sql = "SELECT a.*, u.name FROM tbl_artikel a LEFT JOIN user u ON a.iduser = u.id WHERE a.id_artikel = '$id'";
        return $this->db->query($sql)->result_array();
    }

    public function increment_visitor() {
        $sql = "UPDATE tbl_artikel SET visitor = visitor + 1";
        $this->db->query($sql);
    }

    public function update_data($data, $id) {
        $this->db->set($data, FALSE);
        $this->db->where('id_artikel', $id);
        return $this->db->update('tbl_artikel');
    }
   public function get_list_artikel_for_visitor($page = 0, $limit = 0, $search = NULL) {
        $offset = $page*$limit;
        $a = $search ? "WHERE judul LIKE '%$search%' OR isi LIKE '%$search%'" : "";
        $sql = "SELECT tb.*, cnt.jml_row 
                FROM tbl_artikel tb
                JOIN (
                    SELECT count(*) 
                    AS jml_row 
                    FROM tbl_artikel 
                    ${a}
                ) AS cnt 
                ${a}
                ORDER BY tb.tanggal DESC
                LIMIT $limit 
                OFFSET $offset";
        $data = $this->db->query($sql)->result();
        foreach ($data as $d) {
            select_img_f_index($d);
        }
        return $data;
    }

    public function get_detail_artikel($slug) {
        $data = $this->db->get_where("tbl_artikel", array("slug" => $slug))->result();
        select_img_f_index($data[0]);
        return $data;
    }

    public function get_data_by_index($id)
    {
        $sql = "SELECT b.*, u.name FROM tbl_artikel b LEFT JOIN user u ON b.iduser = u.id WHERE b.id_artikel = '$id'";
        $data = $this->db->query($sql)->result_array();
        return $data;
    }
    public function searchartikel($search)
    {

        $sql = "SELECT* FROM tbl_artikel WHERE judul LIKE '%$search%' OR isi LIKE '%$search%'";
        return $this->db->query($sql)->result();
    }

}