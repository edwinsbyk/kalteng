<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
	public function getPegawai()
    {
       $query = "SELECT * FROM user  JOIN tbl_bidang ON user.id_bidang=tbl_bidang.id_bidang ORDER BY name DESC ";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



        return $this->db->query($query)->result_array();
    }

    public function editdataPegawai($id_bidang, $username , $name , $email , $image , $password_hash , $role_id , $is_active , $jabatan)
    {

        $hasil = $this->db->query("INSERT INTO `user`(`id`, `id_bidang`, `username`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `jabatan`) VALUES (NULL,'$id_bidang','$username','$name','$email','$image','$password_hash','$role_id','$is_active','','$jabatan');");
        return $hasil;
    }
}