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
                'assets/admin/css/datatables.css',
            ),
            "list_js_plugins" => array(
                'assets/admin/vendor/jquery-3.2.1.min.js',
                'assets/admin/vendor/bootstrap-4.1/popper.min.js',
                'assets/admin/vendor/bootstrap-4.1/bootstrap.min.js',
                'assets/plugin/thesaas/js/vendors/datatables.js',
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
                'assets/admin/js/main.js',
                'assets/admin/js/tambahan.js',
                'assets/admin/js/datatables.js',
            ),
            "path" => $param["path"]
        ];
        $data = isset($param["data"]) ? array_merge($data, $param["data"]) : $data;
        $this->load->view("/admin/v_main", $data);
    }
    public function index()
    {
        $this->loadAsset(["path" => "admin/index"]);
    }

    public function artikel()
    {
        $this->load->model("ArtikelModel");
        $this->loadAsset(["path" => "admin/warta/artikel", "data" => ["data" => $this->ArtikelModel->display_data()]]);
    }

    public function add_article()
    {
        $judul = $this->input->post("judul_artikel");
        $isi = $this->input->post("isi_artikel");
        $tanggal = $this->input->post("tanggal_pembuatan");
        $this->load->model("ArtikelModel");
        $this->ArtikelModel->tambah_data($judul, $isi, $tanggal) 
            ? throw_flash_redirect("Data berhasil ditambahkan", "success", "admin/artikel") 
            : throw_flash_redirect("Gagal menambahkan data", "danger", "admin/artikel");
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
        $this->loadAsset(["path" => "admin/warta/tab"]);
    }

    // public function artikel()
    // {
    //     $this->loadAsset(["path" => "admin/testimoni"]);
    // }

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

        $this->load->view('admin/pengumuman/editdataRUP-modal');
    }

    public function pengumuman_lelang()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getPengumumanLelang();
        $this->loadAsset(["path" => "admin/pengumuman/pengumuman_lelang", "data" => $data]);
    }
    public function tambahpengumuman()
    {
        $this->load->model('Pengumuman_model');
        $tanggal = $this->input->post('tanggal');
        $batas = $this->input->post('batas');
        $no_sk = $this->input->post('no_sk');
        $nama_paket = $this->input->post('nama_paket');
        $pagu = $this->input->post('pagu');
        $tambahpengumuman =  $this->Pengumuman_model->tambahpengumuman($tanggal, $batas, $no_sk, $nama_paket, $pagu);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> User profile sudah diubah. </div>');
        redirect('admin/pengumuman_lelang');
    }

    public function pemenang_lelang()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getPemenangLelang();
        $data['data_pengumuman'] = $this->data->getPengumumanLelang();

        $this->loadAsset(["path" => "admin/pengumuman/pemenang_lelang", "data" => $data]);
    }

    public function tambah_pemenang_lelang()
    {
        $this->load->model('Pengumuman_model');
        $id_pengumuman_lelang = $this->input->post('id_pengumuman_lelang');
        $pemenang = $this->input->post('pemenang');
        $hps = $this->input->post('hps');
        $tambah_pemenang_lelang =  $this->Pengumuman_model->tambah_pemenang_lelang($id_pengumuman_lelang, $pemenang, $hps);
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
    }
    public function datapuSumurBor()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $this->loadAsset(["path" => "admin/datapu/sumur-bor", "data" => $data]);
    }

    public function datapuBlackSpot()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataBlackSpot();
        $this->loadAsset(["path" => "admin/datapu/black-spot", "data" => $data]);
    }

    public function datapuSpam()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSpam();
        $this->loadAsset(["path" => "admin/datapu/spam", "data" => $data]);
    }

    public function datapuPotensiDanau()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataDanau();
        $this->loadAsset(["path" => "admin/datapu/potensi-danau", "data" => $data]);
    }

    public function datapuPotensiRawa()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataRawa();
        $this->loadAsset(["path" => "admin/datapu/potensi-rawa", "data" => $data]);
    }

    public function datapuPotensiSumurBor()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $this->loadAsset(["path" => "admin/datapu/potensi-sumur-bor", "data" => $data]);
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

    function deletedataJalan()
    {
        $this->load->model('Datapu_model', 'data_delete');
        $id = $this->input->post('id');
        $this->data_delete->deleteDatajalan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
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

    function editdataRup()
    {
        $this->load->model('Pengumuman_model', 'data_edit');
        $id = $this->input->post('id_rup');
        $kegiatan = $this->input->post('kegiatan');
        $lokasi = $this->input->post('lokasi');
        $pagu = $this->input->post('pagu');
        $metode = $this->input->post('metode');
        
        $this->data_edit->editDataRUP($id, $kegiatan, $lokasi, $pagu, $metode);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/rup');
        $this->loadAsset(["path" => "admin/pengumuman/rup"]);
    }

    function deletedataRUP()
    {
        $this->load->model('Pengumuman_model' , 'delete_data');
        $id = $this->input->post('id');

        $this->delete_data->deletedataRUP($id);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/rup');
        $this->loadAsset(["path" => "admin/pengumuman/rup"]);

    }
    function editdataPengumuman()
    {
         $this->load->model('Pengumuman_model', 'data_edit');
        $id = $this->input->post('id_pengumuman_lelang');
        $tanggal = $this->input->post('tanggal');
        $batas = $this->input->post('batas');
        $no_sk = $this->input->post('no_sk');
        $nama_paket = $this->input->post('nama_paket');
        $pagu = $this->input->post('pagu');

        $this->data_edit->editdataPengumuman($id, $tanggal, $batas, $no_sk, $nama_paket, $pagu);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/pengumuman_lelang');
        $this->loadAsset(["path" => "admin/pengumuman/pengumuman_lelang"]);

    }
    function deletedataPengumuman()
    {
        $this->load->model('Pengumuman_model' , 'delete_data');
        $id = $this->input->post('id');

        $this->delete_data->deletedataPengumuman($id);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/pengumuman_lelang');
        $this->loadAsset(["path" => "admin/pengumuman/pengumuman_lelang"]);

    }
    function editdataPemenang()
    {
        $this->load->model('Pengumuman_model', 'data_edit');
        $id = $this->input->post('id_pemenang_lelang');
        $id_pengumuman_lelang = $this->input->post('id_pengumuman_lelang');
        $pemenang = $this->input->post('pemenang');
        $hps = $this->input->post('hps');


        $this->data_edit->editdataPemenang($id, $id_pengumuman_lelang, $pemenang, $hps);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/pemenang_lelang');
        $this->loadAsset(["path" => "admin/pengumuman/pemenang_lelang"]);


    }
    function deletedataPemenang()
    {

         $this->load->model('Pengumuman_model' , 'delete_data');
        $id = $this->input->post('id');

        $this->delete_data->deletedataPemenang($id);
         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/pemenang_lelang');
        $this->loadAsset(["path" => "admin/pengumuman/pemenang_lelang"]);
    }
}
