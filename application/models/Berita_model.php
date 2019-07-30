<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function getBerita()
    {
        return $this->db->get("tbl_berita")->result();
    }

    public function get_data_by_index($id)
    {
        return $this->db->get_where("tbl_berita", array('idberita' => $id))->result_array();
    }

    public function input_data($data) {
		return $this->db->insert('tbl_berita', $data);
    }

    public function delete_data_by_id($id) {
        return $this->db->delete('tbl_berita', array('idberita' => $id));
    }
    
    public function update_data($data, $id) {
        $this->db->set($data, FALSE);
        $this->db->where('idberita', $id);
        return $this->db->update('tbl_berita');
    }
}

?>