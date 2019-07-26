<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapu_model extends CI_Model
{
    public function getDataJalan()
    {
        $query = "SELECT * FROM `tbl_jalan`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataJembatan()
    {
        $query = "SELECT * FROM `tbl_jalan`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataEmbung()
    {
        $query = "SELECT * FROM `tbl_jalan`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataSumurBor()
    {
        $query = "SELECT * FROM `tbl_jalan`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getDataBlackSpot()
    {
        $query = "SELECT * FROM `tbl_jalan`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataSpam()
    {
        $query = "SELECT * FROM `tbl_jalan`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataDanau()
    {
        $query = "SELECT * FROM `tbl_jalan`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataRawa()
    {
        $query = "SELECT * FROM `tbl_jalan`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getDataPotensiSumurBor()
    {
        $query = "SELECT * FROM `tbl_jalan`
        ";

        return $this->db->query($query)->result_array();
    }
}
