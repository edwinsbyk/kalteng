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
                    $data = ['email' => $user['email'], 'role_id' => $user['role_id']];
                    $this->session->set_userdata($data);
                    redirect($user['role_id'] == 1 ? 'admin' : 'user');
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
}
