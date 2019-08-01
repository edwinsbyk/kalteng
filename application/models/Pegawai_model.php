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

    public function getPegawaibidang()
    {
        $query = "SELECT u.*, tb.*, tj.* FROM user u 
            LEFT JOIN tbl_bidang tb 
                ON u.role_id=tb.id_bidang
            LEFT JOIN tbl_jabatan tj
                ON tj.id_jabatan=u.role_id";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



        return $this->db->query($query)->result_array();
    }

    public function tambahdataPegawai($id_bidang, $username , $name , $email , $image , $password_hash , $role_id , $is_active , $jabatan)
    {

        $hasil = $this->db->query("INSERT INTO `user`(`id`, `id_bidang`, `username`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `id_jabatan`) VALUES (NULL,'$id_bidang','$username','$name','$email','$image','$password_hash','$role_id','$is_active','','$jabatan');");
        return $hasil;
    }
    public function editdataPegawai($id , $id_bidang, $username , $name , $email , $image , $password , $role_id , $is_active , $jabatan)
   	{

        $hasil = $this->db->query("UPDATE `user` SET `id_bidang`='$id_bidang',`username`='$username',name='$name',email='$email',image='$image',password='$password' ,role_id='$role_id' ,is_active='$is_active' ,date_created='' ,id_jabatan='$jabatan'  WHERE id='$id'");

        return $hasil;
   	}
   	public function deletedataPegawai($id) {

   		 $hasil = $this->db->query("DELETE FROM `user` WHERE `user`.`id` = '$id'");
        return $hasil;
   	}

    public function getPegawaiJabatan()
    {
       $query = "SELECT * FROM user  JOIN tbl_jabatan ON user.id_jabatan=tbl_jabatan.id_jabatan ORDER BY jabatan DESC ";

        // $query = "SELECT * FROM `tbl_pemenang_lelang`



        return $this->db->query($query)->result_array();
    }

}