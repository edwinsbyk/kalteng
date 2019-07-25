<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // public function __construct()
    // {

    //     parent::__construct();

    //     // is_logged_in();
    // }
    public function loadAsset($func)
    {
        $this->load->view('admin/header');
        $this->load->view('admin/admin_header');
        foreach ($func as $key => $value) {
            # code...
            $this->load->view($value);
        }
        $this->load->view('admin/admin_footer');
    }
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/index');
    }


    public function pegawai()
    {
        $this->loadAsset(["admin/pegawai/pegawai"]);
    }


    public function bidang()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/bidang');
    }

    public function berita()
    {
        // $this->load->view('admin/header');
        // $this->load->view('admin/admin_header');
        // $this->load->view('admin/warta/tab');
        $this->loadAsset(["admin/warta/tab"]);
        // $this->load->view('admin/admin_footer');
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
        $this->loadAsset(["admin/testimoni"]);
    }

    public function rup()
    {
        
        $this->loadAsset(["admin/pengumuman/rup"]);
    }
    public function tambahrup()
    {
      
        $this->loadAsset(["admin/pengumuman/tambahrup"]);
    }

    public function pengumuman_lelang()
    {
        $this->loadAsset(["admin/pengumuman/pengumuman_lelang"]);
    }
    public function tambahpengumuman()
    {
        $this->loadAsset(["admin/pengumuman/tambahpengumuman"]);
    }

    public function pemenang_lelang()
    {
        $this->loadAsset(["admin/pengumuman/pemenang_lelang"]);
    }

    public function tambahpemenanglelang()
    {
        $this->loadAsset(["admin/pengumuman/tambahpemenanglelang"]);
    }

    //

    public function datapuJalan()
    {
        $this->loadAsset(["admin/datapu/jalan"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/jalan');
    }
    public function datapuJembatan()
    {
        $this->loadAsset(["admin/datapu/jembatan"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/jembatan');
    }
    public function datapuEmbung()
    {
        $this->loadAsset(["admin/datapu/embung"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/embung');
    }
    public function datapuSumurBor()
    {
        $this->loadAsset(["admin/datapu/sumur-bor"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/sumur-bor');
    }
    public function datapuBlackSpot()
    {
        $this->loadAsset(["admin/datapu/black-spot"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/black-spot');
    }

    public function datapuSpam()
    {
        $this->loadAsset(["admin/datapu/spam"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/spam');
    }
    public function dataPotensiDanau()
    {
        $this->loadAsset(["admin/datapu/potensi-danau"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-danau');
    }
    public function datapuPotensiRawa()
    {
        $this->loadAsset(["admin/datapu/potensi-rawa"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-rawa');
    }
    public function datapuPotensiSumurBor()
    {
        $this->loadAsset(["admin/datapu/potensi-sumur-bor"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-sumur-bor');
    }

    public function tambahpegawai()
    {
        $this->loadAsset(["admin/pegawai/tambahpegawai"]);
    }

}
