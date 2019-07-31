<?php

class Home extends CI_Controller
{

    public function inject_resources($param) {
        $data = array(
            "title" => isset($param["title"]) ? $param["title"] : "Home",
            "css_list" => array(
                "assets/css/page.min.css",
                "assets/admin/css/style.css",
                "assets/plugin/carousel/css/owl.carousel.min.css",
                "assets/plugin/carousel/css/owl.theme.default.min.css",

            ),
            "js_list" => array(
                "assets/vendor/jquery-easing/jquery.easing.min.js",
                "assets/js/sb-admin-2.min.js",
                "assets/js/src/script.js",
                "assets/js/page.min.js",
                "assets/plugin/carousel/js/owl.carousel.js",
                "assets/plugin/carousel/js/owl.autoplay.js"
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
    {   //Bidanghome_model.php
        $data['title'] = 'Bidang';
         $this->load->model('Bidanghome_model', 'data');
        $data['data'] = $this->data->getdataBidang();
        $this->inject_resources(["path" => "home/bidang", "data" => $data]);
        $this->load->view('home/bidang');
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
        $this->inject_resources(["path" => 'data-pu/jalan']);
    }
    public function download()
    {
        $this->inject_resources(["path" => 'home/download']);
    }
}
