<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_model extends CI_Model {
    public function getAgenda()
    {
        $a = $this->session->userdata("role_id") != 1 ? " WHERE a.iduser=".$this->session->userdata("user_id") : "";
        $sql = "SELECT a.*, u.name FROM tbl_agenda a LEFT JOIN user u ON a.iduser=u.id${a}";
        return $this->db->query($sql)->result_array();
    }

    public function get_data_by_index($id)
    {
        $sql = "SELECT a.*, u.name FROM tbl_agenda a LEFT JOIN user u ON a.iduser = u.id WHERE a.id_agenda = '$id'";
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
}