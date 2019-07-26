<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function __getMenu()
    {
        $menu = $this->db->query("SELECT * FROM tbl_menu ORDER BY module_order ASC")->result_array();
        $list_menu = array();
        foreach ($menu as $m) {
            $sql = "SELECT * FROM tbl_sub_menu WHERE module_parent='".$m['module_parent']."' ORDER BY module_order ASC";
            $sub_menu = $this->db->query($sql)->result_array();
            $m["sub_menu"] = $sub_menu;
            array_push($list_menu, $m);
        }
        return json_decode(json_encode($list_menu), FALSE);
    }
}
