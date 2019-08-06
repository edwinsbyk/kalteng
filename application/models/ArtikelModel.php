<?php 
error_reporting();
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
    public function get_list_artikel_for_visitor() {
        $this->db->limit(9);
        $data = $this->db->get("tbl_artikel")->result();
        foreach ($data as $d) {
            preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $d->isi, $image);
            $d->image = count($image) == 0 
                ? base_url("assets/img/artikel/")."default.jpg" 
                : base_url().explode("../", $image["src"])[1];
        }
        return $data;
    }
     public function get_data_by_index($id)
    {
        $sql = "SELECT b.*, u.name FROM tbl_artikel b LEFT JOIN user u ON b.iduser = u.id WHERE b.id_artikel = '$id'";
        return $this->db->query($sql)->result_array();
    }
}