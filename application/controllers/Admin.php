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
                'assets/admin/css/materialdate.min.css',
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
                'assets/admin/js/materialdate.min.js',
                'assets/admin/js/tambahan.js',
                'assets/admin/js/datatables.js',
                'assets/admin/js/swal.js'
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
        $date = DateTime::createFromFormat('d-m-Y', $this->input->post("tanggal_pembuatan"));
        // var_dump($this->input->post("tanggal_pembuatan"));
        // die();
        $data = array(
            "iduser" => 1,
            "judul" => $this->input->post("judul_artikel"),
            "isi" => $this->input->post("isi_artikel"),
            "tanggal" => $date->format("Y/m/d H:i:s"),
            "image" => "null"
        );
        $this->load->model("ArtikelModel");
        $this->ArtikelModel->tambah_data($data)
            ? throw_flash_redirect("Data berhasil ditambahkan", "success", "admin/artikel")
            : throw_flash_redirect("Gagal menambahkan data", "danger", "admin/artikel");
    }

    public function delete_article()
    {
        $this->load->model("ArtikelModel");
        echo $this->ArtikelModel->delete_data($this->input->post("artikel_id"));
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
        $this->loadAsset(["path" => "admin/datapu/jalan/jalan", "data" => $data]);
    }

    function tambahdataJalan()
    {
        $data = [
            'ruas' => $this->input->post('ruas'),
            'kota' => $this->input->post('kota'),
            'stat' => $this->input->post('stat'),
            'panjang' => $this->input->post('panjang'),
            'lebar' => $this->input->post('lebar')
        ];
        $this->db->insert('tbl_jalan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambah. </div>');
        redirect('admin/datapujalan');
        $this->loadAsset(["path" => "admin/datapu/jalan/jalan"]);
    }

    function editdataJalan()
    {
        $this->load->model('Datapu_model', 'data_edit');
        $id = $this->input->post('id');
        $data = [
            'ruas' => $this->input->post('ruas'),
            'kota' => $this->input->post('kota'),
            'stat' => $this->input->post('stat'),
            'panjang' => $this->input->post('panjang'),
            'lebar' => $this->input->post('lebar')
        ];
        $this->db->where('id_jalan', $id);
        $this->db->update('tbl_jalan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/datapujalan');
        $this->loadAsset(["path" => "admin/datapu/jalan/jalan"]);
    }
    function deletedataJalan()
    {
        $id = $this->input->post('id');
        $this->db->where('id_jalan', $id);
        $this->db->delete('tbl_jalan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/datapujalan');
        $this->loadAsset(["path" => "admin/datapu/jalan/jalan"]);
    }

    public function datapuJembatan()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataJembatan();
        $this->loadAsset(["path" => "admin/datapu/jembatan/jembatan", "data" => $data]);
        // $this->loadAsset(["path" => "admin/datapu/jalan", "data" => $data]);
    }

    public function tambahdataJembatan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'panjang' => $this->input->post('panjang'),
            'lebar' => $this->input->post('lebar')
        ];
        $this->db->insert('tbl_jembatan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambah. </div>');
        redirect('admin/datapujembatan');
        $this->loadAsset(["path" => "admin/datapu/jalan/jalan"]);
    }

    public function editdataJembatan()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'panjang' => $this->input->post('panjang'),
            'lebar' => $this->input->post('lebar')
        ];
        $id = $this->input->post('id');

        $this->db->where('id_jembatan', $id);
        $this->db->update('tbl_jembatan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/datapujembatan');
    }
    function deletedataJembatan()
    {
        $id = $this->input->post('id');

        $this->db->where('id_jembatan', $id);
        $this->db->delete('tbl_jembatan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/datapujembatan');
    }

    public function datapuEmbung()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataEmbung();
        $this->loadAsset(["path" => "admin/datapu/embung/embung", "data" => $data]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/embung');
    }
    public function tambahdataEmbung()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'kapasitas' => $this->input->post('kapasitas'),
            'penduduk' => $this->input->post('penduduk'),
            'ternak' => $this->input->post('ternak'),
            'irigasi' => $this->input->post('irigasi'),
        ];

        $this->db->insert('tbl_embung', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/datapuembung');
    }
    public function editdataEmbung()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'kapasitas' => $this->input->post('kapasitas'),
            'penduduk' => $this->input->post('penduduk'),
            'ternak' => $this->input->post('ternak'),
            'irigasi' => $this->input->post('irigasi'),
        ];
        $id = $this->input->post('id');

        $this->db->where('id_embung', $id);
        $this->db->update('tbl_embung', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/datapuembung');
    }

    function deletedataEmbung()
    {
        $id = $this->input->post('id');

        $this->db->where('id_embung', $id);
        $this->db->delete('tbl_embung');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/datapuEmbung');
    }
    public function datapuSumurBor()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $this->loadAsset(["path" => "admin/datapu/sumur-bor/sumur-bor", "data" => $data]);
    }
    public function tambahdataSumurBor()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'debit' => $this->input->post('debit'),
            'air_baku' => $this->input->post('air_baku'),
            'irigasi' => $this->input->post('irigasi')
        ];

        $this->db->insert('tbl_sumurbor', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambah. </div>');
        redirect('admin/datapuSumurBor');
    }
    public function editdataSumurBor()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'debit' => $this->input->post('debit'),
            'air_baku' => $this->input->post('air_baku'),
            'irigasi' => $this->input->post('irigasi')
        ];
        $id = $this->input->post('id');
        $this->db->where('id_sumurbor', $id);
        $this->db->update('tbl_sumurbor', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/datapuSumurBor');
    }

    public function deletedataSumurBor()
    {
        $id = $this->input->post('id');
        $this->db->where('id_sumurbor', $id);
        $this->db->delete('tbl_sumurbor');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/datapuSumurBor');
    }

    public function datapuBlackSpot()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataBlackSpot();
        $this->loadAsset(["path" => "admin/datapu/black-spot/black-spot", "data" => $data]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/black-spot');
    }
    function tambahdataBlackSpot()
    {
        $data = [
            'ruas' => $this->input->post('ruas'),
            'kota' => $this->input->post('kota'),
            'jenis_masalah' => $this->input->post('jenis_masalah'),
            'tingkat_masalah' => $this->input->post('tingkat_masalah'),
        ];
        $this->db->insert('tbl_black_spot', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambah. </div>');
        redirect('admin/datapuBlackSpot');
        $this->loadAsset(["path" => "admin/datapu/black-spot/black-spot"]);
    }
    function editdataBlackSpot()
    {
        $id = $this->input->post('id');
        $data = [
            'ruas' => $this->input->post('ruas'),
            'kota' => $this->input->post('kota'),
            'jenis_masalah' => $this->input->post('jenis_masalah'),
            'tingkat_masalah' => $this->input->post('tingkat_masalah')
        ];
        $this->db->where('id_black_spot', $id);
        $this->db->update('tbl_black_spot', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/datapuBlackSpot');
        $this->loadAsset(["path" => "admin/datapu/black-spot/black-spot"]);
    }
    function deletedataBlackSpot()
    {
        $id = $this->input->post('id');

        $this->db->where('id_black_spot', $id);
        $this->db->delete('tbl_black_spot');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/datapuBlackSpot');
        $this->loadAsset(["path" => "admin/datapu/black-spot/black-spot"]);
    }

    public function datapuSpam()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSpam();
        $this->loadAsset(["path" => "admin/datapu/spam/spam", "data" => $data]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/spam');
    }
    public function tambahdataSpam()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'kapasitas' => $this->input->post('kapasitas'),
            'pelayanan' => $this->input->post('pelayanan'),
        ];
        $this->db->insert('tbl_spam', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambah. </div>');
        redirect('admin/datapuSpam');
    }
    public function editdataSpam()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'kapasitas' => $this->input->post('kapasitas'),
            'pelayanan' => $this->input->post('pelayanan'),
        ];

        $id = $this->input->post('id');
        $this->db->where('id_spam', $id);
        $this->db->update('tbl_spam', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/datapuSpam');
    }

    public function deletedataSpam()
    {
        $id = $this->input->post('id');
        $this->db->where('id_spam', $id);
        $this->db->delete('tbl_spam');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/datapuSpam');
    }

    public function datapuPotensiDanau()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataDanau();
        $this->loadAsset(["path" => "admin/datapu/potensi-danau/potensi-danau", "data" => $data]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-danau');
    }
    public function tambahdataPotensiDanau()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'luas' => $this->input->post('luas'),
            'kedalaman' => $this->input->post('kedalaman'),
            'kapasitas' => $this->input->post('kapasitas'),
            'penduduk' => $this->input->post('penduduk'),
            'irigasi' => $this->input->post('irigasi')
        ];
        $this->db->insert('tbl_danau', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambah. </div>');
        redirect('admin/datapuPotensiDanau');
    }
    public function editdataPotensiDanau()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'luas' => $this->input->post('luas'),
            'kedalaman' => $this->input->post('kedalaman'),
            'kapasitas' => $this->input->post('kapasitas'),
            'penduduk' => $this->input->post('penduduk'),
            'irigasi' => $this->input->post('irigasi')
        ];

        $id = $this->input->post('id');
        $this->db->where('id_danau', $id);
        $this->db->update('tbl_danau', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/datapuPotensiDanau');
    }

    public function deletedataPotensiDanau()
    {

        $id = $this->input->post('id');
        $this->db->where('id_danau', $id);
        $this->db->delete('tbl_danau');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/datapuPotensiDanau');
    }

    public function datapuPotensiRawa()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataRawa();
        $this->loadAsset(["path" => "admin/datapu/potensi-rawa/potensi-rawa", "data" => $data]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-rawa');
    }

    public function tambahdataPotensiRawa()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'jenis' => $this->input->post('jenis'),
            'kota' => $this->input->post('kota'),
            'sudah_kembang' => $this->input->post('sudah_kembang'),
            'belum_kembang' => $this->input->post('belum_kembang'),
            'total' => $this->input->post('total'),
            'tahun' => $this->input->post('tahun')
        ];
        $this->db->insert('tbl_rawa', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambah. </div>');
        redirect('admin/datapuPotensiRawa');
    }

    public function editdataPotensiRawa()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'jenis' => $this->input->post('jenis'),
            'kota' => $this->input->post('kota'),
            'sudah_kembang' => $this->input->post('sudah_kembang'),
            'belum_kembang' => $this->input->post('belum_kembang'),
            'total' => $this->input->post('total'),
            'tahun' => $this->input->post('tahun')
        ];
        $id = $this->input->post('id');
        $this->db->where('id_rawa', $id);
        $this->db->update('tbl_rawa', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/datapuPotensiRawa');
    }
    public function deletedataPotensiRawa()
    {

        $id = $this->input->post('id');
        $this->db->where('id_rawa', $id);
        $this->db->delete('tbl_rawa');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/datapuPotensiRawa');
    }

    public function datapuPotensiSumurBor()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataPotensiSumurBor();
        $this->loadAsset(["path" => "admin/datapu/potensi-sumur-bor/potensi-sumur-bor", "data" => $data]);
        // $this->load->view('admin/header');
        // $this->load->view('admin/datapu/potensi-sumur-bor');
    }

    public function tambahdataPotensiSumurBor()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'swl' => $this->input->post('swl'),
            'debit' => $this->input->post('debit'),
            'airbaku' => $this->input->post('airbaku'),
            'irigasi' => $this->input->post('irigasi')
        ];
        $this->db->insert('tbl_potensi_sumur_bor', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambah. </div>');
        redirect('admin/datapuPotensiSumurBor');
    }
    public function editdataPotensiSumurBor()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'kota' => $this->input->post('kota'),
            'swl' => $this->input->post('swl'),
            'debit' => $this->input->post('debit'),
            'airbaku' => $this->input->post('airbaku'),
            'irigasi' => $this->input->post('irigasi')
        ];
        $id = $this->input->post('id');
        $this->db->where('id_sumur', $id);
        $this->db->update('tbl_potensi_sumur_bor', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambah. </div>');
        redirect('admin/datapuPotensiSumurBor');
    }
    public function deletedataPotensiSumurBor()
    {

        $id = $this->input->post('id');
        $this->db->where('id_sumur', $id);
        $this->db->delete('tbl_potensi_sumur_bor');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/datapuPotensiSumurBor');
    }

    public function tambahpegawai()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $this->loadAsset(["path" => "admin/pegawai/tambahpegawai", "data" => $data]);
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
        $this->load->model('Pengumuman_model', 'delete_data');
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
        $this->load->model('Pengumuman_model', 'delete_data');
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

        $this->load->model('Pengumuman_model', 'delete_data');
        $id = $this->input->post('id');

        $this->delete_data->deletedataPemenang($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/pemenang_lelang');
        $this->loadAsset(["path" => "admin/pengumuman/pemenang_lelang"]);
    }
}
