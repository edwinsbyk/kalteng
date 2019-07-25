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

    public function loadAsset($param)
    {
        $this->load->view('admin/header');
        $this->load->view('admin/admin_header');
        foreach ($param as $key => $value) {
            $this->load->view($value['path'], isset($value["data"]) ? $value["data"] : '');
        }
        $this->load->view('admin/admin_footer');
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
        $data = "wlw";
        $lp = [
            ["path" => "admin/warta/tab.php"]
        ];
        $this->loadAsset($lp);
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
        $lp = [
            ["path" => "admin/pengumuman/rup"]
        ];
        $this->loadAsset($lp);
    }
    public function tambahrup()
    {
        $lp = [
            ["path" => "admin/pengumuman/tambahrup"]
        ];
        $this->loadAsset($lp);
    }

    public function pengumuman_lelang()
    {
        $lp = [
            ["path" => "admin/pengumuman/lelang"]
        ];
        $this->loadAsset($lp);
    }
    public function tambahpengumuman()
    {
        $lp = [
            ["path" => "admin/pengumuman/tambahpengumuman"]
        ];
        $this->loadAsset($lp);
    }

    public function pemenang_lelang()
    {
        $lp = [
            ["path" => "admin/pengumuman/pememang_lelang"]
        ];
        $this->loadAsset($lp);
    }

    public function tambahpemenanglelang()
    {
        $lp = [
            ["path" => "admin/pengumuman/tambahpemenanglelang"]
        ];
        $this->loadAsset($lp);
    }

    //

    public function datapuJalan()
    {
        $this->loadAsset(["path" => "admin/datapu/jalan"]);
        // $this->load->view('path" => "admin/header');
        // $this->load->view('path" => "admin/datapu/jalan');
    }
    public function datapuJembatan()
    {
        $this->loadAsset(["path" => "admin/datapu/jembatan"]);
        // $this->load->view('path" => "admin/header');
        // $this->load->view('path" => "admin/datapu/jembatan');
    }
    public function datapuEmbung()
    {
        $this->loadAsset(["path" => "admin/datapu/embung"]);
        // $this->load->view('path" => "admin/header');
        // $this->load->view('path" => "admin/datapu/embung');
    }
    public function datapuSumurBor()
    {
        $this->loadAsset(["path" => "admin/datapu/sumur-bor"]);
        // $this->load->view('path" => "admin/header');
        // $this->load->view('path" => "admin/datapu/sumur-bor');
    }
    public function datapuBlackSpot()
    {
        $this->loadAsset(["path" => "admin/datapu/black-spot"]);
        // $this->load->view('path" => "admin/header');
        // $this->load->view('path" => "admin/datapu/black-spot');
    }

    public function datapuSpam()
    {
        $this->loadAsset(["path" => "admin/datapu/spam"]);
        // $this->load->view('path" => "admin/header');
        // $this->load->view('path" => "admin/datapu/spam');
    }
    public function dataPotensiDanau()
    {
        $this->loadAsset(["path" => "admin/datapu/potensi-danau"]);
        // $this->load->view('path" => "admin/header');
        // $this->load->view('path" => "admin/datapu/potensi-danau');
    }
    public function datapuPotensiRawa()
    {
        $this->loadAsset(["path" => "admin/datapu/potensi-rawa"]);
        // $this->load->view('path" => "admin/header');
        // $this->load->view('path" => "admin/datapu/potensi-rawa');
    }
    public function datapuPotensiSumurBor()
    {
        $this->loadAsset(["path" => "admin/datapu/potensi-sumur-bor"]);
        // $this->load->view('path" => "admin/header');
        // $this->load->view('path" => "admin/datapu/potensi-sumur-bor');
    }
}
