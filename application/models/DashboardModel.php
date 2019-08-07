<?php 

defined("BASEPATH") or exit("Access forbidden");

class DashboardModel extends CI_Model {
    public function get_dashboard_info() {
        $sql = "SELECT
                (select count(*) from user) as user,
                (select count(*) from tbl_pegawai) as pegawai,
                (select count(*) from tbl_artikel) as artikel,
                (select count(*) from tbl_berita b) as berita,
                (select count(*) from tbl_bidang) as bidang,
                (select count(*) from tbl_file_download) as file,
                (select count(*) from tbl_rup) as RUP,
                (select sum(size) from tbl_file_download) as size
            from dual";
        $data = $this->db->query($sql)->result_array();
        $data[0]["size"] = $data[0]["size"] ? number_format((float)$data[0]['size']/1024, 0, '.', '')." MB" : "0 MB";
        $data[0]["tambahan"] = array(
            "user"          => array(
                "icon"  => '<i class="fas fa-users"></i>',
                "color" =>  hex_to_rgb("#e53935")
            ),
            "pegawai"       => array(
                "icon"  => '<i class="fas fa-user-tie"></i>',
                "color" => hex_to_rgb("#5F39E6")
            ),
            "artikel"       => array(
                "icon"  => '<i class="fas fa-file"></i>',
                "color" => hex_to_rgb("#43a047")
            ),
            "berita"        => array(
                "icon"  => '<i class="far fa-newspaper"></i>',
                "color" => hex_to_rgb("#fb8c00")
            ),
            "bidang"        => array(
                "icon"  => '<i class="fas fa-layer-group"></i>',
                "color" => hex_to_rgb("#00acc1")
            ),
            "file"          => array(
                "icon"  => '<i class="fas fa-download"></i>',
                "color" => hex_to_rgb("#009975")
            ),
            "size"          => array(
                "icon"  => '<i class="fas fa-server"></i>',
                "color" => hex_to_rgb("#1b7fbd")
            ),
            "RUP"           => array(
                "icon"  => '<i class="fas fa-coins"></i>',
                "color" => hex_to_rgb("#d527b7")
            )
        );
        return $data;
    }
}