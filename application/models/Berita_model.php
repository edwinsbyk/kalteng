<?php
error_reporting();
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function getBerita()
    {
        $a = $this->session->userdata("role_id") != 1 ? " WHERE b.iduser=" . $this->session->userdata("user_id") : "";
        $sql = "SELECT b.*, u.name FROM tbl_berita b LEFT JOIN user u ON b.iduser = u.id";
        return $this->db->query($sql)->result();
    }

    public function get_data_by_index($id)
    {
        $sql = "SELECT b.*, u.name FROM tbl_berita b LEFT JOIN user u ON b.iduser = u.id WHERE b.idberita = '$id'";
        return $this->db->query($sql)->result_array();
    }

    public function input_data($data)
    {
        return $this->db->insert('tbl_berita', $data);
    }

    public function delete_data_by_id($id)
    {
        return $this->db->delete('tbl_berita', array('idberita' => $id));
    }

    public function update_data($data, $id)
    {
        $this->db->set($data, FALSE);
        $this->db->where('idberita', $id);
        return $this->db->update('tbl_berita');
    }

    public function getberitadetail($idberita)
    {
        $query = "SELECT * FROM tbl_berita WHERE idberita = $idberita) ";
    }

    public function get_list_berita_for_visitor($page = 0, $limit = 0)
    {
        $offset = $page*$limit;
        $sql = "SELECT tb.*, cnt.jml_row 
                FROM tbl_berita tb 
                JOIN (
                    SELECT count(*) 
                    AS jml_row 
                    FROM tbl_berita
                ) AS cnt 
                LIMIT $limit 
                OFFSET $offset";
        $data = $this->db->query($sql)->result();
        foreach ($data as $d) {
            select_img_f_index($d);
        }
        return $data;
    }

    // public function getdetailberita($idberita)
    // {
    //     $data = array();
    //     $options = array('idberita' => $idberita);
    //     $Q = $this->db->get_where('tbl_berita', $options, 1);
    //     if ($Q->num_rows() > 0) {
    //         $data = $Q->row_array();
    //     }
    //     $Q->free_result();
    //     return $data;
    // }


    public function getDetailBerita($slug = null)
    {
        if (!$slug) {
            $sql = "SELECT * FROM `tbl_berita`";
        } else {
            $sql = "SELECT * FROM `tbl_berita` WHERE `slug`='$slug'";
        }
        $data = $this->db->query($sql)->result();
        select_img_f_index($data[0]);
        return $data;
    }

    public function searchrberita($search)
    {

        $sql = "SELECT* FROM tbl_berita WHERE judul LIKE '%$search%' OR isi LIKE '%$search%' ";
        return $this->db->query($sql)->result();
    }
}
