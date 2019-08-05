<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userdata_model extends CI_Model
{
	public function getUser()
    {
        $query = "SELECT * FROM user ";
        return $this->db->query($query)->result_array();
    }

   

    public function tambahdataUser($email ,$name ,$password, $image , $role_id , $is_active ,$date_created)
    {

        $hasil = $this->db->query("INSERT INTO `user`(`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES (NULL,'$name','$email','$image','$password','$role_id','$is_active','$date_created');");
        return $hasil;
    }
    public function editdataUser($id, $email ,$name ,$password, $image , $role_id , $is_active)
   	{

        $hasil = $this->db->query("UPDATE `user` SET `name`='$name',`email`='$email',`image`='$image',`password`='$password',`role_id`='$role_id',`is_active`='$is_active',`date_created`='' WHERE id='$id'");

        return $hasil;
   	}
   	public function deletedataUser($id) {

   		 $hasil = $this->db->query("DELETE FROM `user` WHERE `user`.`id` = '$id'");
        return $hasil;
   	}

    public function editpasswordUser($id, $email ,$name ,$password, $image , $role_id , $is_active ,$date_created)
    {
     $hasil = $this->db->query("UPDATE `user` SET `name`='$name',`email`='$email',`image`='$image',`password`='$password',`role_id`='$role_id',`is_active`='$is_active',`date_created`='$date_created' WHERE id='$id'");

        return $hasil; 
    }

   


}