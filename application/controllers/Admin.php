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

        $this->loadAsset([["path" => "admin/pengumuman/rup"]]);
    }
    public function tambahrup()
    {

        $this->loadAsset([["path" => "admin/pengumuman/tambahrup"]]);
    }

    public function pengumuman_lelang()
    {
        $this->loadAsset([["path" => "admin/pengumuman/pengumuman_lelang"]]);
    }
    public function tambahpengumuman()
    {
        $this->loadAsset([["path" => "admin/pengumuman/tambahpengumuman"]]);
    }

    public function pemenang_lelang()
    {
        $this->loadAsset([["path" => "admin/pengumuman/pemenang_lelang"]]);
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

        $this->load->view('admin/datapu/editdatapu-jalan-modal');
    }
    public function datapuJembatan()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataJembatan();
        $this->loadAsset([["path" => "admin/datapu/jembatan", "data" => $data]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/jembatan');
    }
    public function datapuEmbung()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataEmbung();
        $this->loadAsset([["path" => "admin/datapu/embung", "data" => $data]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/embung');
    }
    public function datapuSumurBor()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $this->loadAsset([["path" => "admin/datapu/sumur-bor", "data" => $data]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/sumur-bor');
    }
    /////
    public function datapuBlackSpot()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataBlackSpot();
        $this->loadAsset([["path" => "admin/datapu/black-spot", "data" => $data]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/black-spot');
    }

    public function datapuSpam()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSpam();
        $this->loadAsset([["path" => "admin/datapu/spam", "data" => $data]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/spam');
    }
    public function datapuPotensiDanau()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataDanau();
        $this->loadAsset([["path" => "admin/datapu/potensi-danau", "data" => $data]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-danau');
    }
    public function datapuPotensiRawa()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataRawa();
        $this->loadAsset([["path" => "admin/datapu/potensi-rawa", "data" => $data]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-rawa');
    }
    public function datapuPotensiSumurBor()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $this->loadAsset([["path" => "admin/datapu/potensi-sumur-bor", "data" => $data]]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-sumur-bor');
    }

    public function tambahpegawai()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $this->loadAsset([["path" => "admin/pegawai/tambahpegawai", "data" => $data]]);
    }


    function tambahdataJalan()
    {
        $this->load->model('Datapu_model', 'data_edit');
        $ruas = $this->input->post('ruas');
        $kota = $this->input->post('kota');
        $stat = $this->input->post('stat');
        $panjang = $this->input->post('panjang');
        $lebar = $this->input->post('lebar');
        $this->data_edit->addDatajalan($ruas, $kota, $stat, $panjang, $lebar);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User profile sudah diubah. </div>');
        redirect('admin/datapujalan');
    }
}
