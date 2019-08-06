<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function getBerita()
    {
        $a = $this->session->userdata("role_id") != 1 ? " WHERE b.iduser=" . $this->session->userdata("user_id") : "";
        $sql = "SELECT b.*, u.name FROM tbl_berita b LEFT JOIN user u ON b.iduser = u.id${a}";
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
    public function getListBerita()
    {
        $sql = "SELECT * FROM `tbl_berita`";
        return $this->db->query($sql)->result_array();
    }

    public function getDetailBerita($slug = null)
    {
        if (!$slug) {
            $sql = "SELECT * FROM `tbl_berita`";
        } else {
            $sql = "SELECT * FROM `tbl_berita` WHERE `slug`='$slug'";
        }
        return $this->db->query($sql)->result();
    }
}
