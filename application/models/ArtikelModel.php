<?php 

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

    public function update_data($data, $id) {
        $this->db->set($data, FALSE);
        $this->db->where('id_artikel', $id);
        return $this->db->update('tbl_artikel');
    }
}