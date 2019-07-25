<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // public function __construct()
    // {

    //     parent::__construct();

    //     // is_logged_in();
    // }
    public function loadAsset($func) 
    { 
        $this->load->view('admin/header');
         $this->load->view('admin/admin_header');
         foreach ($func as $key => $value) {
             # code...
            $this->load->view($value);
         }
          $this->load->view('admin/admin_footer');
    }
    public function index()
    {
    	$this->load->view('admin/header');
        $this->load->view('admin/index');
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
        // $this->load->view('admin/header');
        // $this->load->view('admin/admin_header');
        // $this->load->view('admin/warta/tab');
        $this->loadAsset(["admin/warta/tab"]);
        // $this->load->view('admin/admin_footer');
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
              $this->loadAsset(["admin/pengumuman/rup"]);

    }
           public function tambahrup()
    {
        $this->loadAsset(["admin/pengumuman/tambahrup"]);
    }

        public function pengumuman_lelang()
    {
         $this->loadAsset(["admin/pengumuman/pengumuman_lelang"]);
    }
    public function tambahpengumuman()
    {
        $this->loadAsset(["admin/pengumuman/tambahpengumuman"]);
    }

        public function pemenang_lelang()
    {
         $this->loadAsset(["admin/pengumuman/pemenang_lelang"]);
    }

       public function tambahpemenanglelang()
    {
        $this->loadAsset(["admin/pengumuman/tambahpemenanglelang   "]);
    }

    



}
