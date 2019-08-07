<?php 
error_reporting();
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_model extends CI_Model {
    public function getAgenda()
    {
        $a = $this->session->userdata("role_id") != 1 ? " WHERE a.iduser=".$this->session->userdata("user_id") : "";
        $sql = "SELECT a.*, u.name FROM tbl_agenda a LEFT JOIN user u ON a.iduser=u.id${a}";
        return $this->db->query($sql)->result_array();
    }

   

    public function input_data($data) {
		return $this->db->insert('tbl_agenda', $data);
    }

    public function delete_data_by_id($id) {
        return $this->db->delete('tbl_agenda', array('id_agenda' => $id));
    }
    
    public function update_data($data, $id) {
        $this->db->set($data, FALSE);
        $this->db->where('id_agenda', $id);
        return $this->db->update('tbl_agenda');
    }

     public function get_list_agenda_for_visitor() {
        $this->db->limit(9);
        $data = $this->db->get("tbl_agenda")->result();
        foreach ($data as $d) {
            select_img_f_index($d);
        }
        return $data;
    }
     public function get_data_by_index($id)
    {
        $sql = "SELECT b.*, u.name FROM tbl_agenda b LEFT JOIN user u ON b.iduser = u.id WHERE b.id_agenda = '$id'";
        return $this->db->query($sql)->result_array();
    }

    public function searchagenda($search)
    {
        $sql = "SELECT* FROM tbl_agenda WHERE judul LIKE '%$search%' OR isi LIKE '%$search%'";
        $data = $this->db->query($sql)->result();
        select_img_f_index($data[0]);
        return $data;
    }

}