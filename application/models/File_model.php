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

    function downloadfile($download)
    {

        $query = "SELECT * FROM `tbl_file_download` WHERE `nama_file`='$download'
        ";
        return $this->db->query($query)->result_array();
    }
}
