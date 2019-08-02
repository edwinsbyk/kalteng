<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Files extends CI_Controller
{
    public function image_acceptor()
    {
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


    public function do_upload()
    {

        $alias = $this->input->post('alias');

        //jika ada gambar yang akan di upload
        $upload_file = $_FILES['file_name']['name'];


        if ($upload_file) {
            $config['allowed_types'] = 'gif|jpg|png|zip|rar|pdf|doc|xlsx|xls|csv|tar';
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



        // $alias = $this->input->post('alias');

        // $config['upload_path']          = './assets/download/';
        // $config['allowed_types']        = 'gif|jpg|png|zip|rar|pdf|doc|xlsx|xls|csv|tar';
        // $config['max_size']             = 0;

        // $this->load->library('upload', $config);
        // if (!$this->upload->do_upload('file')) {
        //     $error = array('error' => $this->upload->display_errors());
        // } else {
        //     $data = array('upload_data' => $this->upload->data());
        //     $this->db->set('file_name', $data);
        //     $this->db->set('alias', $alias);
        //     throw_flash_redirect('Data Sudah Di upload', 'success', 'admin/download');
        // }
    }
}
