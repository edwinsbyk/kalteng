<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Files extends CI_Controller {
    public function image_acceptor(){
        // $this->load->helper(array('form', 'url'));
        $config['upload_path'] = './assets/img/berita/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 0;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $this->output->set_header('HTTP/1.0 500 Server Error');
            exit;
        } else {
            $file = $this->upload->data();
            $this->output
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode(['location' => base_url() . '/assets/img/berita/' . $file['file_name']]))
                ->_display();
            exit;
        }
        // $this->load->helper(array('form', 'url'));
    }
}