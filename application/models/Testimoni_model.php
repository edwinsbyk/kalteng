<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni_model extends CI_Model {
    public function tambah_data($data) {
        return $this->db->insert("tbl_testimoni", $data);
    }

    public function delete_data($id) {
        $sql = "DELETE FROM tbl_testimoni WHERE id_testimoni = '$id'";
        return $this->db->query($sql);
    }

    public function display_data() {
        return $this->db->get("tbl_testimoni")->result_array();
    }

    public function getDataByIndex($id)
    {
        return $this->db->get_where("tbl_testimoni", array('id_testimoni' => $id))->result_array();
    }

    public function update_data($data, $id) {
        $this->db->set($data, FALSE);
        $this->db->where('id_testimoni', $id);
        return $this->db->update('tbl_testimoni');
    }
}