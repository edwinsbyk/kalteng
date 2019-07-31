<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Files extends CI_Controller {
    public function image_acceptor(){
        $this->load->helper(array('form', 'url'));
        $config['upload_path'] = base_url("upload/images");
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload()) {
            echo json_encode(array('upload_data' => $this->upload->data()));
        } else {
            echo json_encode(array('error' => $this->upload->display_errors()));
        }
        // $this->load->helper(array('form', 'url'));
    }
}