<?php

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('home');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $email = $ci->session->userdata('email');
        $queryMenu = $ci->db->get_where('user', ['email' => $email])->row_array();
        $user_id =  $queryMenu['id'];
        $userAccess = $ci->db->get_where('user', ['role_id' => $role_id, 'id' => $user_id]);
        if ($userAccess->num_rows() < 1) {
            redirect('404');
        }
    }
}

function throw_flash_redirect($message, $status, $url)
{
    $self = get_instance();
    $self->session->set_flashdata('message', '<div class="alert alert-' . $status . '" role="alert">' . $message . '</div>');
    redirect($url);
}


function check_access($role_id, $menu_id)
{

    $ci =  get_instance();
    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_access_menu');

    if ($result->num_rows() > 0) {
        return "checked ='checked'";
    }
}
