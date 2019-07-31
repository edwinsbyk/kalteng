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
        return $this->db->get("tbl_artikel")->result_array();
    }

    public function getDataByIndex($id)
    {
        return $this->db->get_where("tbl_artikel", array('id_artikel' => $id))->result_array();
    }

    public function update_data($data, $id) {
        $this->db->set($data, FALSE);
        $this->db->where('id_artikel', $id);
        return $this->db->update('tbl_artikel');
    }
}