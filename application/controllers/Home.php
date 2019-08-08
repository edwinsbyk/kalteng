<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
    }
    public function inject_resources($param)
    {
        $data = array(
            "title" => isset($param["title"]) ? $param["title"] : "Home",
            "css_list" => array(
                "assets/css/page.min.css",
                "assets/admin/css/style.css",
                "assets/admin/css/fstyle.css",
                'assets/admin/css/datatables.css',
                "assets/plugin/carousel/css/owl.theme.default.min.css",
                "assets/vendor/fontawesome-free/css/all.css",
                "assets/plugin/carousel/css/owl.carousel.min.css",
            ),
            "js_list" => array(
                "assets/vendor/jquery-easing/jquery.easing.min.js",
                "assets/js/sb-admin-2.min.js",
                "assets/js/src/script.js",
                "assets/js/page.min.js",
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
                'assets/admin/js/bootstrap-datetimepicker.min.js',
                'assets/admin/js/swal.js',
                "assets/plugin/carousel/js/owl.carousel.js",
                "assets/plugin/carousel/js/owl.autoplay.js",
                "assets/plugin/carousel/js/owl.navigation.js",
            ),
            "path" => $param["path"]
        );
        $data = isset($param["data"]) ? array_merge($data, $param["data"]) : $data;
        $this->load->view("templates/layout_main", $data);
    }
    public function index()
    {
        $this->load->model('Bidang_model', 'data');
        $data['data'] = $this->data->getBidang();
        $this->inject_resources(["path" => 'home/index', "data" => $data]);
    }

    public function bidang()
    {   //Bidanghome_model.php
        $data['title'] = 'Bidang';
        $this->load->model('Bidanghome_model', 'data');
        $data['data'] = $this->data->getdataBidang();
        $this->inject_resources(["path" => "home/bidang", "data" => $data]);
    }
    public function datapu()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data PU';
        $this->inject_resources(["path" => "home/datapu", "data" => $data]);
    }
    public function berita($slug = null)
    {
        $limit = 4;

        $search = $this->input->get("cari");
        $page = $this->input->get("page");
        $page = isset($page) ? $page < 0 ? redirect("home/berita") : $this->input->get("page") : 0;
        $this->load->model("Berita_model");
        if (!$slug) {
            $data["data"] = $this->Berita_model->get_list_berita_for_visitor($page, $limit, $search);
            $data["limit"] = $limit;
            $this->inject_resources(["path" => 'home/berita', "data" => $data, "title" => "Berita"]);
        } else {
            $data["detail"] = $this->Berita_model->getDetailBerita($slug)[0];
            $this->inject_resources(["path" => 'home/baca', "data" => $data, "title" => "Berita"]);
        }
    }

    public function pengumumanRup()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getDataRUP();
        $this->inject_resources(["path" => 'pengumuman/rup', "data" => $data, "title" => "Pengumuman RUP"]);
    }
    public function datapujalan()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataJalan();
        $data['title'] = 'Data PU Jalan';
        $this->inject_resources(["path" => 'home/data-pu/jalan', "data" => $data]);
    }
    public function datapujembatan()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataJembatan();
        $data['title'] = 'Data PU Jembatan';
        $this->inject_resources(["path" => 'home/data-pu/jembatan', "data" => $data]);
    }
    public function datapuembung()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataEmbung();
        $data['title'] = 'Data PU Embung';
        $this->inject_resources(["path" => 'home/data-pu/embung', "data" => $data]);
    }
    public function datapusumurbor()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSumurBor();
        $data['title'] = 'Data PU Sumur Bor';
        $this->inject_resources(["path" => 'home/data-pu/sumurbor', "data" => $data]);
    }
    public function datapublackspot()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataBlackSpot();
        $data['title'] = 'Data PU Black Spot';
        $this->inject_resources(["path" => 'home/data-pu/black-spot', "data" => $data]);
    }
    public function datapuspam()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataSpam();
        $data['title'] = 'Data PU Spam';
        $this->inject_resources(["path" => 'home/data-pu/spam', "data" => $data]);
    }
    public function datapupotensidanau()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataDanau();
        $data['title'] = 'Data PU Potensi Danau';
        $this->inject_resources(["path" => 'home/data-pu/danau', "data" => $data]);
    }
    public function datapupotensirawa()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataRawa();
        $data['title'] = 'Data PU Potensi Rawa';
        $this->inject_resources(["path" => 'home/data-pu/rawa', "data" => $data]);
    }
    public function datapupotensisumurbor()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataPotensiSumurBor();
        $data['title'] = 'Data PU Potensi Sumur Bor';
        $this->inject_resources(["path" => 'home/data-pu/potensi-sumur-bor', "data" => $data]);
    }
    public function download()
    {
        $this->load->model('File_model', 'file');
        $data['data'] = $this->file->getFileList();
        $this->inject_resources(["path" => "home/download", "data" => $data, "title" => "Download"]);
    }
    public function pengumumanlelang()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getPengumumanLelang();
        $this->inject_resources(["path" => 'pengumuman/pengumumanlelang', "data" => $data, "title" => "Pengumuman Lelang"]);
    }
    public function pengumumanpemenanglelang()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getPemenangLelang();
        $this->inject_resources(["path" => 'pengumuman/pemenanglelang', "data" => $data, "title" => "Pemenang Lelang"]);
    }

    public function artikel($slug = null)
    {  
        $limit = 3;

        $search = $this->input->get("cari");
        $page = $this->input->get("page");
        $page = isset($page) ? $page < 0 ? redirect("home/artikel") : $this->input->get("page") : 0;
        $this->load->model("ArtikelModel");
        if (!$slug) {
            $data["data"] = $this->ArtikelModel->get_list_artikel_for_visitor($page, $limit, $search);
            $data["limit"] = $limit;
            $this->inject_resources(["path" => 'home/artikel', "data" => $data, "title" => "Artikel"]);
        } else {
            $data["detail"] = $this->ArtikelModel->get_detail_artikel($slug)[0];
            $this->inject_resources(["path" => 'home/baca', "data" => $data, "title" => "Artikel"]);
        }
    }

    public function agenda($slug = null)
    {
        $limit = 4;

        $search = $this->input->get("cari");
        $page = $this->input->get("page");
        $page = isset($page) ? $page < 0 ? redirect("home/agenda") : $this->input->get("page") : 0;
        $this->load->model("Agenda_model");
        if (!$slug) {
            $data["data"] = $this->Agenda_model->get_list_agenda_for_visitor($page, $limit, $search);
            $data["limit"] = $limit;
            $this->inject_resources(["path" => 'home/agenda', "data" => $data, "title" => "Agenda"]);
        } else {
            $data["data"] = $this->Agenda_model->get_detail_agenda($slug)[0];
            $this->inject_resources(["path" => array('templates/berita_header', 'agendademo/index'), "data" => $data, "title" => "Agenda"]);
        }
    }

    public function testimoni()
    {
        $this->load->model("Testimoni_model");
        $data["data"] = $this->Testimoni_model->get_list_testimoni_for_visitor();
        $this->inject_resources(["path" => 'home/testimoni', "data" => $data, "title" => "Testimoni"]);
    }
}
