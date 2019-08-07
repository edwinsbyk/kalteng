<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Files extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        ini_set('memory_limit', '200M');
        ini_set('upload_max_filesize', '200M');
        ini_set('post_max_size', '200M');
        ini_set('max_input_time', 3600);
        ini_set('max_execution_time', 3600);
    }

    public function artikel_img_acceptor()
    {
        $this->image_acceptor("file", "artikel");
    }

    public function agenda_img_acceptor()
    {
        $this->image_acceptor("file", "agenda");
    }

    public function berita_img_acceptor()
    {
        $this->image_acceptor("file", "berita");
    }

    public function image_acceptor($file, $path)
    {
        $config['upload_path'] = './assets/img/' . $path . '/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 20480;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
            $this->output->set_header('HTTP/1.0 500 Server Error');
            exit;
        } else {
            $file = $this->upload->data();
            $this->output
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode(['location' => base_url() . 'assets/img/' . $path . '/' . $file['file_name']]))
                ->_display();
            exit;
        }
    }


    public function do_upload()
    {
        $keterangan = $this->input->post('keterangan');
        $upload_file = $_FILES['file_name']['name'];
        if ($upload_file) {
            // $config['allowed_types'] = 'text|gif|jpg|jpeg|png|zip|rar|pdf|doc|docx|xlsx|xls|csv|tar|mkv';
            $config['allowed_types'] = '*';
            $config['max_size'] = 0;
            $config['upload_path'] = './assets/download/';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('file_name')) {
                $file = $this->upload->data();
                $this->db->set('nama_file', $file["file_name"]);
                $this->db->set('keterangan', $keterangan);
                $this->db->set('size', $file["file_size"]);
                $this->db->insert('tbl_file_download');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated.</div>');
                redirect('admin/download');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Extensi ini tidak di izinkan untuk di upload</div>');
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
