<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function getBerita()
    {
        return $this->db->get("tbl_berita")->result();
    }

    public function getDataByIndex($id)
    {
        return $this->db->get_where("tbl_berita", array('idberita' => $id))->result_array();
    }

    function input_data($data){
		return $this->db->insert('tbl_berita', $data);
	}
}

?>