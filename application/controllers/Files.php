<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Files extends CI_Controller
{


    public function image_acceptor()
    {
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


    public function do_upload()
    {

        $alias = $this->input->post('alias');

        //jika ada gambar yang akan di upload
        $upload_file = $_FILES['file_name']['name'];


        if ($upload_file) {
            $config['allowed_types'] = 'gif|jpg|png|txt|zip|rar|pdf|doc|docx|xlsx|xls|csv|tar';
            $config['max_size']     = 0;
            $config['upload_path'] = './assets/download/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_name')) {

                $file = $this->upload->data('file_name');
                $this->db->set('nama_file', $file);


                $this->db->set('alias', $alias);
                $this->db->insert('tbl_file_download');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated.</div>');
                redirect('admin/download');

                // var_dump($this->upload->data());
                // die;
            } else {
                echo $this->upload->display_errors();
            }
        }
    }

    public function download($download)
    {

        $this->load->model('File_model', 'file');
        $file['file'] = $this->file->downloadfile($download);
        force_download('/assets/download/' . $download, NULL);

        // var_dump($file);
        // die;
        redirect('admin/download');
    }
}
