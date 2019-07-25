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
        $this->load->view('admin/header');
        $this->load->view('admin/testimoni');
    }

        public function rup()
    {
              $this->loadAsset(["admin/rup"]);

    }
           public function tambahrup()
    {
         $this->load->view('admin/admin_header');
        $this->load->view('admin/header');
        $this->load->view('admin/tambahrup');
        $this->load->view('admin/admin_footer');
    }

        public function pengumuman_lelang()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/pengumuman_lelang');
    }
    public function tambahpengumuman()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/tambahpengumuman');
    }

        public function pemenang_lelang()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/pemenang_lelang');
    }

       public function tambahpemenanglelang()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/tambahpemenanglelang');
    }

    



}
