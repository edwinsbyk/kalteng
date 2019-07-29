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

        $this->load->model("Menu_model", "menu");

        $this->load->model('Menu_model', 'menu');

        $data = [
            "title" => "Dashboard",
            "active" => "active",
            "menu" => $this->menu->__getMenu(),
            "list_css_plugins" => array(
                'assets/admin/css/font-face.css',
                'assets/admin/css/style.css',
                'assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css',
                'assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css',
                'assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css',
                'assets/admin/vendor/bootstrap-4.1/bootstrap.min.css',
                'assets/admin/vendor/animsition/animsition.min.css',
                'assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css',
                'assets/admin/vendor/wow/animate.css',
                'assets/admin/vendor/css-hamburgers/hamburgers.min.css',
                'assets/admin/vendor/slick/slick.css',
                'assets/admin/vendor/select2/select2.min.css',
                'assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css',
                'assets/admin/css/theme.css',
            ),
            "list_js_plugins" => array(
                'assets/admin/vendor/jquery-3.2.1.min.js',
                'assets/admin/vendor/bootstrap-4.1/popper.min.js',
                'assets/admin/vendor/bootstrap-4.1/bootstrap.min.js',
                'assets/admin/vendor/slick/slick.min.js',
                'assets/admin/vendor/wow/wow.min.js',
                'assets/admin/vendor/animsition/animsition.min.js',
                'assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js',
                'assets/admin/vendor/counter-up/jquery.waypoints.min.js',
                'assets/admin/vendor/counter-up/jquery.counterup.min.js',
                'assets/admin/vendor/circle-progress/circle-progress.min.js',
                'assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js',
                'assets/admin/vendor/chartjs/Chart.bundle.min.js',
                'assets/admin/vendor/select2/select2.min.js',
                'assets/admin/js/main.js'
            ),
            "path" => $param["path"]
        ];
        $data = isset($param["data"]) ? array_merge($data, $param["data"]) : $data;


        // var_dump($data);
        // die();
        // $this->load->view('admin/admin_header');
        // $this->load->view('admin/header');
        $this->load->view("/admin/v_main", $data);
        // $this->load->view('admin/admin_footer');
    }
    public function index()
    {

        $this->loadAsset(["path" => "admin/index"]);
    }

    public function pegawai()
    {

        $this->loadAsset(["path" => "admin/pegawai/pegawai"]);
    }


    public function pegawaibidang()
    {
        $this->loadAsset(["path" => "admin/pegawaibidang/tab"]);
    }

    public function berita()
    {
        // $this->load->view('admin/header');
        // $this->load->view('admin/admin_header');
        // $this->load->view('admin/warta/tab');
        $this->loadAsset(["path" => "admin/warta/tab"]);
        // $this->load->view('admin/admin_footer');
    }

    public function artikel()
    {
        $this->loadAsset(["path" => "admin/testimoni"]);
    }

    public function agenda()
    {
        $this->loadAsset(["path" => "admin/agenda"]);
    }

    public function testimoni()
    {
        $this->loadAsset(["path" => "admin/testimoni"]);
    }

    public function rup()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getDataRUP();
        $this->loadAsset(["path" => "admin/pengumuman/rup", "data" => $data]);
    }

    public function pengumuman_lelang()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getPengumumanLelang();
        $this->loadAsset(["path" => "admin/pengumuman/pengumuman_lelang", "data" => $data]);
    }
    public function tambahpengumuman()
    {
        $this->loadAsset(["path" => "admin/pengumuman/tambahpengumuman"]);
    }

    public function pemenang_lelang()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getPemenangLelang();
        $this->loadAsset(["path" => "admin/pengumuman/pemenang_lelang", "data" => $data]);
    }

    public function tambah_pemenang_lelang()
    {
        $this->load->model('Pengumuman_model');
        $no_sk = $this->input->post('no_sk');
        $nama_paket = $this->input->post('nama_paket');
        $pemenang = $this->input->post('pemenang');
        $hps = $this->input->post('hps');



        $tambahrup =  $this->Pengumuman_model->tambah_pemenang_lelang($no_sk, $nama_paket, $pemenang, $hps);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User profile sudah diubah. </div>');
        redirect('admin/pemenang_lelang');
    }

    //

    public function datapuJalan()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataJalan();
        $this->loadAsset(["path" => "admin/datapu/jalan", "data" => $data]);

        $this->load->view('admin/datapu/editdatapu-jalan-modal');
    }
    public function datapuJembatan()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataJembatan();
        $this->loadAsset(["path" => "admin/datapu/jembatan", "data" => $data]);
        // $this->loadAsset(["path" => "admin/datapu/jalan", "data" => $data]);
    }
    // public function datapuJembatan()
    // {
    //     $this->loadAsset(["path" => "admin/datapu/jembatan"]);
    //     // $this->load->view('admin/header');
    //     // $this->load->view('admin/datapu/jembatan');
    // }
    public function datapuEmbung()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataEmbung();
        $this->loadAsset(["path" => "admin/datapu/embung", "data" => $data]);
        $this->loadAsset(["path" => "admin/datapu/embung"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/embung');
    }
    public function datapuSumurBor()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $this->loadAsset(["path" => "admin/datapu/sumur-bor", "data" => $data]);
        $this->loadAsset(["path" => "admin/datapu/sumur-bor"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/sumur-bor');
    }
    /////
    public function datapuBlackSpot()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataBlackSpot();
        $this->loadAsset(["path" => "admin/datapu/black-spot", "data" => $data]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/black-spot');
    }

    public function datapuSpam()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSpam();
        $this->loadAsset(["path" => "admin/datapu/spam", "data" => $data]);
        $this->loadAsset(["path" => "admin/datapu/spam"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/spam');
    }
    public function datapuPotensiDanau()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataDanau();
        $this->loadAsset(["path" => "admin/datapu/potensi-danau", "data" => $data]);
        $this->loadAsset(["path" => "admin/datapu/potensi-danau"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-danau');
    }
    public function datapuPotensiRawa()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataRawa();
        $this->loadAsset(["path" => "admin/datapu/potensi-rawa", "data" => $data]);
        $this->loadAsset(["path" => "admin/datapu/potensi-rawa"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-rawa');
    }
    public function datapuPotensiSumurBor()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $this->loadAsset(["path" => "admin/datapu/potensi-sumur-bor", "data" => $data]);
        $this->loadAsset(["path" => "admin/datapu/potensi-sumur-bor"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-sumur-bor');
    }

    public function tambahpegawai()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $this->loadAsset(["path" => "admin/pegawai/tambahpegawai", "data" => $data]);
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
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambah. </div>');
        redirect('admin/datapujalan');
        $this->loadAsset(["path" => "admin/datapu/jalan"]);
    }
    function editdataJalan()
    {
        $this->load->model('Datapu_model', 'data_edit');
        $ruas = $this->input->post('ruas');
        $kota = $this->input->post('kota');
        $stat = $this->input->post('stat');
        $panjang = $this->input->post('panjang');
        $lebar = $this->input->post('lebar');
        $id = $this->input->post('id');
        $this->data_edit->editDatajalan($id, $ruas, $kota, $stat, $panjang, $lebar);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/datapujalan');
        $this->loadAsset(["path" => "admin/datapu/jalan"]);
    }

    public function tambah_rup()
    {

        $this->load->model('Pengumuman_model');
        $kegiatan = $this->input->post('kegiatan');
        $lokasi = $this->input->post('lokasi');
        $pagu = $this->input->post('pagu');
        $metode_lelang = $this->input->post('metode_lelang');



        $tambahrup =  $this->Pengumuman_model->tambahrup($kegiatan, $lokasi, $pagu, $metode_lelang);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User profile sudah diubah. </div>');
        redirect('admin/rup');
    }
}
