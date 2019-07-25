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
        $data = "wlw";
        $lp = [
            ["path" => "admin/index"]
        ];
        $this->loadAsset($lp);
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
        $lp = [
            ["path" => "admin/datapu/jalan"]
        ];
        $this->loadAsset($lp);
    }
    public function datapuJembatan()
    {
        $lp = [
            ["path" => "admin/datapu/jembatan"]
        ];
        $this->loadAsset($lp);
    }
    public function datapuEmbung()
    {
        $lp = [
            ["path" => "admin/datapu/embung"]
        ];
        $this->loadAsset($lp);
    }
    public function datapuSumurBor()
    {
        $lp = [
            ["path" => "admin/datapu/sumurbor"]
        ];
        $this->loadAsset($lp);
    }
    public function datapuBlackSpot()
    {
        $lp = [
            ["path" => "admin/datapu/black-spot"]
        ];
        $this->loadAsset($lp);
    }

    public function datapuSpam()
    {
        $lp = [
            ["path" => "admin/datapu/spam"]
        ];
        $this->loadAsset($lp);
    }
    public function datapuPotensiDanau()
    {
        $lp = [
            ["path" => "admin/datapu/potensi-danau"]
        ];
        $this->loadAsset($lp);
    }
    public function datapuPotensiRawa()
    {
        $lp = [
            ["path" => "admin/datapu/potensi-rawa"]
        ];
        $this->loadAsset($lp);
    }
    public function datapuPotensiSumurBor()
    {
        $lp = [
            ["path" => "admin/datapu/potensi-sumur-bor"]
        ];
        $this->loadAsset($lp);
    }
}
