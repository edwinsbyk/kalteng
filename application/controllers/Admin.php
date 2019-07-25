<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // public function __construct()
    // {

    //     parent::__construct();

    //     // is_logged_in();
    // }

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/index');
    }


    public function pegawai()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/pegawai');
    }


    public function bidang()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/bidang');
    }

    public function berita()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/berita');
    }

    public function artikel()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/artikel');
    }

    public function agenda()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/agenda');
    }

    public function testimoni()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/testimoni');
    }

    public function rup()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/rup');
    }
    public function pengumuman_lelang()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/pengumuman_lelang');
    }
    public function pemenang_lelang()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/pemenang_lelang');
    }
    //
    //
    //
    public function datapuJalan()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/datapu-jalan');
    }
    public function datapuJembatan()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/datapu-jembatan');
    }
    public function datapuEmbung()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/datapu-embung');
    }
    public function datapuSumurBor()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/datapu-sumur-bor');
    }
    public function datapuBlackSpot()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/datapu-black-spot');
    }

    public function datapuSpam()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/datapu-spam');
    }
    public function dataPotensiDanau()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/datapu-potensi-danau');
    }
    public function dataPotensiRawa()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/datapu-potensi-rawa');
    }
    public function dataPotensiSumurBor()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/datapu-potensi-sumur-bor');
    }
}
