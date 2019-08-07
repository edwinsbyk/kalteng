<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File_model extends CI_Model
{
    function getFileList()
    {

        $query = "SELECT * FROM `tbl_file_download`
        ";

        return $this->db->query($query)->result_array();
    }

    function update_data($data, $id) {
        $this->db->set($data);
        $this->db->where('id_file', $id);
        return $this->db->update('tbl_file_download');
    }

    function filename($id)
    {

        $query = "SELECT `nama_file` FROM `tbl_file_download` WHERE `id_file`='$id'
        ";
        return $this->db->query($query)->result_array();
    }
}
