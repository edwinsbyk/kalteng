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
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/index');
        $this->load->view('admin/admin_footer');
    }


    public function pegawai()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/pegawai');
        $this->load->view('admin/admin_footer');
    }


    public function bidang()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/bidang');
        $this->load->view('admin/admin_footer');
    }

    public function berita()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/berita');
        $this->load->view('admin/admin_footer');
    }

    public function artikel()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/artikel');
        $this->load->view('admin/admin_footer');
    }

    public function agenda()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/agenda');
        $this->load->view('admin/admin_footer');
    }

    public function testimoni()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/testimoni');
        $this->load->view('admin/admin_footer');
    }

    public function rup()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/rup');
        $this->load->view('admin/admin_footer');
    }
    public function pengumuman_lelang()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/pengumuman_lelang');
        $this->load->view('admin/admin_footer');
    }
    public function pemenang_lelang()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/pemenang_lelang');
        $this->load->view('admin/admin_footer');
    }
    //
    //
    //
    public function datapuJalan()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/datapu-jalan');
        $this->load->view('admin/admin_footer');
    }
    public function datapuJembatan()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/datapu-jembatan');
        $this->load->view('admin/admin_footer');
    }
    public function datapuEmbung()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/datapu-embung');
        $this->load->view('admin/admin_footer');
    }
    public function datapuSumurBor()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/datapu-sumur-bor');
        $this->load->view('admin/admin_footer');
    }
    public function datapuBlackSpot()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/datapu-black-spot');
        $this->load->view('admin/admin_footer');
    }

    public function datapuSpam()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/datapu-spam');
        $this->load->view('admin/admin_footer');
    }
    public function dataPotensiDanau()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/datapu-potensi-danau');
        $this->load->view('admin/admin_footer');
    }
    public function dataPotensiRawa()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/datapu-potensi-rawa');
        $this->load->view('admin/admin_footer');
    }
    public function dataPotensiSumurBor()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/datapu-potensi-sumur-bor');
        $this->load->view('admin/admin_footer');
    }
}
