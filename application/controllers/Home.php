<?php

class Home extends CI_Controller
{
    public function index()
    {
        // $data['title'] = 'Welcome';
        $this->load->view('templates/navbar');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function bidang()
    {
        $data['title'] = 'Bidang';
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/bidang');
        $this->load->view('templates/footer');
    }

    public function berita()
    {
        $this->load->view('templates/navbar');
        $this->load->view('templates/berita_header');
        $this->load->view('home/berita');
        $this->load->view('templates/footer');
    }
    public function newsdemo()
    {
        $this->load->view('templates/navbar');
        $this->load->view('templates/berita_header');
        $this->load->view('newsdemo/index');
        $this->load->view('templates/footer');
    }
    public function pengumumanRup()
    {
        $this->load->view('templates/navbar');
        $this->load->view('pengumuman/rup');
        $this->load->view('templates/footer');
    }
    public function datapujalan()
    {
        $this->load->view('templates/navbar');
        $this->load->view('data-pu/jalan');
        $this->load->view('templates/footer');
    }
    public function download()
    {
        $this->load->view('templates/navbar');
        $this->load->view('home/download');
        $this->load->view('templates/footer');
    }
}
