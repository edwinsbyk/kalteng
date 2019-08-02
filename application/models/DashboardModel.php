<?php 

defined("BASEPATH") or exit("Access forbidden");

class DashboardModel extends CI_Model {
    public function get_dashboard_info() {
        $sql = "SELECT
                (select count(*) from tbl_artikel) as artikel,
                (select count(*) from tbl_berita b) as berita,
                (select count(*) from tbl_pegawai) as pegawai,
                (select count(*) from tbl_bidang) as bidang
            from dual";
        $data = $this->db->query($sql)->result_array();
        // $fixed_data = array();
        // foreach ($data as $key => $val) {
        //     $recent_data = array();
        //     $recent_data["data"] = $val;
        //     $recent_data["color"] = "#FFFFFF";
        //     $recent_data["name"] = $key;
        //     $fixed_data[$key] = $recent_data;
        // }
        // var_dump($fixed_data);
        // // var_dump($data);
        // die();
        return $data;
    }
}