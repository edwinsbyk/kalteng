<?php

class Home extends CI_Controller
{

    public function inject_resources($param)
    {
        $data = array(
            "title" => isset($param["title"]) ? $param["title"] : "Home",
            "css_list" => array(
                "assets/css/page.min.css",
                "assets/admin/css/style.css",
                'assets/admin/css/datatables.css',
            ),
            "js_list" => array(
                'assets/admin/vendor/jquery-3.2.1.min.js',
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
                'assets/admin/js/swal.js'
            ),
            "path" => $param["path"]
        );
        $data = isset($param["data"]) ? array_merge($data, $param["data"]) : $data;
        $this->load->view("templates/layout_main", $data);
    }
    public function index()
    {
        $this->inject_resources(["path" => 'home/index']);
    }

    public function bidang()
    {
        $data['title'] = 'Bidang';
        $this->inject_resources(["path" => 'home/bidang', "data" => $data]);
    }

    public function berita()
    {
        $this->inject_resources(["path" => array('templates/berita_header', 'home/berita')]);
    }
    public function newsdemo()
    {
        $this->inject_resources(["path" => array('templates/berita_header', 'newsdemo/index')]);
    }
    public function pengumumanRup()
    {
        $this->inject_resources(["path" => 'pengumuman/rup']);
    }
    public function datapujalan()
    {

        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataJalan();
        $this->inject_resources(["path" => 'data-pu/jalan', "data" => $data]);
    }
    public function download()
    {
        $this->inject_resources(["path" => 'home/download']);
    }
}
