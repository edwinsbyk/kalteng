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
        $data = [
            "title" => "Dashboard",
            "active" => "active",
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
            )
        ];
        $data = array_merge($data, $param);
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

        $this->loadAsset(["path" => "admin/pengumuman/rup"]);
    }
    public function tambahrup()
    {

        $this->loadAsset(["path" => "admin/pengumuman/tambahrup"]);
    }

    public function pengumuman_lelang()
    {
        $this->loadAsset(["path" => "admin/pengumuman/pengumuman_lelang"]);
    }
    public function tambahpengumuman()
    {
        $this->loadAsset(["path" => "admin/pengumuman/tambahpengumuman"]);
    }

    public function pemenang_lelang()
    {
        $this->loadAsset(["path" => "admin/pengumuman/pemenang_lelang"]);
    }

    public function tambahpemenanglelang()
    {
        $this->loadAsset(["path" => "admin/pengumuman/tambahpemenanglelang"]);
    }

    //

    public function datapuJalan()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataJalan();
        $this->loadAsset(["path" => "admin/datapu/jalan", "data" => $data]);
    }
    public function datapuJembatan()
    {
        $this->loadAsset(["path" => "admin/datapu/jembatan"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/jembatan');
    }
    public function datapuEmbung()
    {
        $this->loadAsset(["path" => "admin/datapu/embung"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/embung');
    }
    public function datapuSumurBor()
    {
        $this->loadAsset(["path" => "admin/datapu/sumur-bor"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/sumur-bor');
    }
    public function datapuBlackSpot()
    {
        $this->loadAsset(["path" => "admin/datapu/black-spot"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/black-spot');
    }

    public function datapuSpam()
    {
        $this->loadAsset(["path" => "admin/datapu/spam"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/spam');
    }
    public function dataPotensiDanau()
    {
        $this->loadAsset(["path" => "admin/datapu/potensi-danau"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-danau');
    }
    public function datapuPotensiRawa()
    {
        $this->loadAsset(["path" => "admin/datapu/potensi-rawa"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-rawa');
    }
    public function datapuPotensiSumurBor()
    {
        $this->loadAsset(["path" => "admin/datapu/potensi-sumur-bor"]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-sumur-bor');
    }

    public function tambahpegawai()
    {
        $this->loadAsset(["path" => "admin/pegawai/tambahpegawai"]);
    }
}
