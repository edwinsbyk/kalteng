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

        $keterangan = $this->input->post('keterangan');

        //jika ada gambar yang akan di upload
        $upload_file = $_FILES['file_name']['name'];


        if ($upload_file) {
            $config['allowed_types'] = 'plaintext|text|gif|jpg|png|zip|rar|pdf|doc|docx|xlsx|xls|csv|tar';
            // $config['allowed_types'] = '*';
            $config['max_size']     = 0;
            $config['upload_path'] = './assets/download/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_name')) {

                $file = $this->upload->data('file_name');
                $this->db->set('nama_file', $file);


                $this->db->set('keterangan', $keterangan);
                $this->db->insert('tbl_file_download');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated.</div>');
                redirect('admin/download');

                // var_dump($this->upload->data());
                // die;
            } else {

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Extensi ini tidak di izinkan untuk di upload</div>');
                // echo $this->upload->display_errors();
                redirect('admin/download');
            }
        }
    }

    public function download($id = null)
    {
        $this->load->helper('download');
        $this->load->model('File_model', 'file');


        if ($id) {
            $nama_file = $this->file->filename($id);
            force_download(FCPATH . 'assets/download/' . $nama_file[0]["nama_file"], NULL);
            redirect('admin/download');
        } else {
            redirect('admin/download');
        }
    }

    public function file_delete()
    {

        $this->load->model('File_model', 'file');
        $id = $this->input->post('id');
        $nama_file = $this->file->filename($id);

        unlink(FCPATH . 'assets/download/'  . $nama_file[0]["nama_file"]);

        $this->db->where('id_file', $id);
        $this->db->delete('tbl_file_download');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">File berhasil di hapus</div>');

        redirect('admin/download');
    }
}
