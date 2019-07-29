<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function getBerita()
    {
        return $this->db->get("tbl_berita")->result();
    }

    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}

?>