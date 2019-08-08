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

function hex_to_rgb($hex) {
    return implode(", ", sscanf($hex, "#%02x%02x%02x"));
}

function throw_flash_redirect($message, $status, $url)
{
    $self = get_instance();
    $self->session->set_flashdata('message', '<div class="alert alert-' . $status . '" role="alert">' . $message . '</div>');
    redirect($url);
}

function generate_slug_string($string, $tail) {
    return implode($tail, array_filter(preg_split('/\s{1,}|-|\||:|\[|\]|\<|\>|\?|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\~/', strtolower($string)), function($x){ return !!$x; }));
}

function select_img_f_index(&$data) {
    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $data->isi, $image);
    if (count($image) == 0) {
        $data->image = base_url("assets/img/berita/") . "default.jpg";
    } else {
        $data->image = count(explode("../", $image["src"])) > 1 
            ? base_url().explode("../", $image["src"])[1] 
            : $image["src"];
    }
}

function cut_string($string) {
    return substr(strip_tags($string), 0, 145)."...";
}

function create_pagination($limit, $row, $page) {
    $page*$limit > $row && redirect(base_url(uri_string()));
    $cari = get_instance()->input->get("cari");
    $cari = isset($cari) ? "&cari=".$cari : "";
    $prev_href = $page == 0 || !isset($page) ? "#" : base_url(uri_string())."?page=".($page-1).$cari;
    $prev_disabled = $page == 0 || !isset($page) ? "style='visibility: hidden;' disabled" : "";
    $next_disabled = ($page+1) * $limit >= $row ? "style='visibility: hidden;' disabled" : "";
    $next_href = ($page+1) * $limit >= $row ? "#" :  base_url(uri_string())."?page=".($page+1).$cari;
    $data = "<a class='btn btn-white mb-8' $prev_disabled href='$prev_href'><i class='ti-arrow-left fs-9 mr-2'></i>Newer</a>
             <a class='btn btn-white mb-8' $next_disabled href='$next_href'>Older <i class='ti-arrow-right fs-9 ml-2'></i></a>";
    return $data;
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
