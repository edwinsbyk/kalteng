<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_model extends CI_Model {
    public function getAgenda()
    {
        return $this->db->get("tbl_agenda")->result_array();
    }

    public function get_data_by_index($id)
    {
        return $this->db->get_where("tbl_agenda", array('id_agenda' => $id))->result_array();
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