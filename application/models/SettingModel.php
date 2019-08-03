<?php 

defined("BASEPATH") or exit("Access Forbidden");

class SettingModel extends CI_Model {
    public function update_data($data, $id) {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('user');
    }
    public function get_data($id) {
        $data = $this->db->get_where("user", array("id" => $id))->result_array()[0];
        $data["image"] = base_url("assets/admin/images/user_profile/".$data["image"]);
        $data["role_id"] = $data["role_id"] == 1 ? "Administrator" : "Operator";
        $data["date_created"] = date("d M Y, H:i:s", $data["date_created"]);
        return $data;
    }
}