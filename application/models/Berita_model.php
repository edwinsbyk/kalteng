<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function getBerita()
    {
        return $this->db->get("tbl_berita")->result();
    }

    function input_data($data){
		$this->db->insert('tbl_berita', $data);
	}
}

?>