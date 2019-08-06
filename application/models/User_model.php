<?php

class User_model extends CI_Model
{

    public function __getUserWithEmail($email)
    {
        return $this->db->get_where("user", array("email" => $email))->row_array();
    }
    public function __makeAuthRequest($email, $password)
    {
        if ($user = $this->__getUserWithEmail($email)) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email'         => $user['email'], 
                        'role_id'       => $user['role_id'], 
                        'user_id'       => $user["id"],
                        'user_name'     => $user["name"]
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    throw_flash_redirect('Wrong password', 'danger', 'auth');
                }
            } else {
                throw_flash_redirect('Account is not activated', 'danger', 'auth');
            }
        } else {
            throw_flash_redirect('Account is not registered', 'danger', 'auth');
        }
    }

    public function getUser()
    {
        $hasil = $this->db->query("SELECT * FROM `user`");
        return $hasil;
    }
}
