<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Admin extends CI_Controller
{
    // public function __construct()
    // {

    //     parent::__construct();

    //     // is_logged_in();
    // }


    public function loadAsset($param)
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/header');
        foreach ($param as $key => $value) {
            $this->load->view($value['path'], isset($value["data"]) ? $value["data"] : '');
        }
        $this->load->view('admin/admin_footer');
    }
    public function index()
    {

        $this->loadAsset([["path" => "admin/index"]]);
    }


    public function pegawai()
    {

        $this->loadAsset([["path" => "admin/pegawai/pegawai"]]);
    }


    public function pegawaibidang()
    {
        $this->loadAsset([["path" => "admin/pegawaibidang/tab"]]);
    }

    public function berita()
    {
        // $this->load->view('admin/header');
        // $this->load->view('admin/admin_header');
        // $this->load->view('admin/warta/tab');
        $this->loadAsset([["path" => "admin/warta/tab"]]);
        // $this->load->view('admin/admin_footer');
    }

    public function artikel()
    {
        $this->loadAsset([["path" => "admin/testimoni"]]);
    }

    public function agenda()
    {
        $this->loadAsset([["path" => "admin/agenda"]]);
    }

    public function testimoni()
    {
        $this->loadAsset([["path" => "admin/testimoni"]]);
    }

    public function rup()
    {
         $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getDataRUP();
        $this->loadAsset([["path" => "admin/pengumuman/rup", "data" => $data]]);

    
    }
    public function tambahrup()
    {

        $this->loadAsset([["path" => "admin/pengumuman/tambahrup"]]);
    }

    public function pengumuman_lelang()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getPengumumanLelang();
        $this->loadAsset([["path" => "admin/pengumuman/pengumuman_lelang", "data" => $data]]);
    }
    public function tambahpengumuman()
    {
        $this->loadAsset([["path" => "admin/pengumuman/tambahpengumuman"]]);
    }

    public function pemenang_lelang()
    {
         $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getPemenangLelang();
        $this->loadAsset([["path" => "admin/pengumuman/pemenang_lelang", "data" => $data]]);
    }

    public function tambahpemenanglelang()
    {
        $this->loadAsset([["path" => "admin/pengumuman/tambahpemenanglelang"]]);
    }

    //

    public function datapuJalan()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataJalan();
        $this->loadAsset([["path" => "admin/datapu/jalan", "data" => $data]]);
    }
    public function datapuJembatan()
    {
        $this->loadAsset([["path" => "admin/datapu/jembatan"]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/jembatan');
    }
    public function datapuEmbung()
    {
        $this->loadAsset([["path" => "admin/datapu/embung"]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/embung');
    }
    public function datapuSumurBor()
    {
        $this->loadAsset([["path" => "admin/datapu/sumur-bor"]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/sumur-bor');
    }
    public function datapuBlackSpot()
    {
        $this->loadAsset([["path" => "admin/datapu/black-spot"]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/black-spot');
    }

    public function datapuSpam()
    {
        $this->loadAsset([["path" => "admin/datapu/spam"]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/spam');
    }
    public function dataPotensiDanau()
    {
        $this->loadAsset([["path" => "admin/datapu/potensi-danau"]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-danau');
    }
    public function datapuPotensiRawa()
    {
        $this->loadAsset([["path" => "admin/datapu/potensi-rawa"]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-rawa');
    }
    public function datapuPotensiSumurBor()
    {
        $this->loadAsset([["path" => "admin/datapu/potensi-sumur-bor"]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-sumur-bor');
    }

    public function tambahpegawai()
    {
        $this->loadAsset([["path" => "admin/pegawai/tambahpegawai"]]);
    }
}
