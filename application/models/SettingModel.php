<?php 

defined("BASEPATH") or exit("Access Forbidden");

class SettingModel extends CI_Model {
    public function update_data($data, $id) {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('user');
    }
}