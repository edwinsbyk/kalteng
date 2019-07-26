<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        // is_logged_in();
    }
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
        $this->loadAsset([['path' => 'admin/index']]);
    }


    public function pegawai()
    {
        $this->loadAsset([["path" => "admin/pegawai/pegawai"]]);
    }


    public function bidang()
    {
        $this->loadAsset([['path' => 'admin/bidang']]);
    }

    public function berita()
    {
        $this->loadAsset([["path" => "admin/warta/tab"]]    );
    }

    public function artikel()
    {
        $this->loadAsset([["path" => "admin/testimoni"]]    );
    }

    public function agenda()
    {
        $this->loadAsset([["path" => "admin/agenda"]]   );
    }

    public function testimoni()
    {
        $this->loadAsset([["path" => "admin/testimoni"]]    );
    }

    public function rup()
    {
        
        $this->loadAsset([["path" => "admin/pengumuman/rup"]]   );
    }
    public function tambahrup()
    {
      
        $this->loadAsset([["path" => "admin/pengumuman/tambahrup"]] );
    }

    public function pengumuman_lelang()
    {
        $this->loadAsset([["path" => "admin/pengumuman/pengumuman_lelang"]] );
    }
    public function tambahpengumuman()
    {
        $this->loadAsset([["path" => "admin/pengumuman/tambahpengumuman"]]  );
    }

    public function pemenang_lelang()
    {
        $this->loadAsset([["path" => "admin/pengumuman/pemenang_lelang"]]   );
    }

    public function tambahpemenanglelang()
    {
        $this->loadAsset([["path" => "admin/pengumuman/tambahpemenanglelang"]]  );
    }

    //

    public function datapuJalan()
    {
        $this->loadAsset([["path" => "admin/datapu/jalan"]] );
    }
    public function datapuJembatan()
    {
        $this->loadAsset([["path" => "admin/datapu/jembatan"]]  );
    }
    public function datapuEmbung()
    {
        $this->loadAsset([["path" => "admin/datapu/embung"]]    );
    }
    public function datapuSumurBor()
    {
        $this->loadAsset([["path" => "admin/datapu/sumur-bor"]] );
    }
    public function datapuBlackSpot()
    {
        $this->loadAsset([["path" => "admin/datapu/black-spot"]]    );
    }

    public function datapuSpam()
    {
        $this->loadAsset([["path" => "admin/datapu/spam"]]  );
    }
    public function dataPotensiDanau()
    {
        $this->loadAsset([["path" => "admin/datapu/potensi-danau"]] );
    }
    public function datapuPotensiRawa()
    {
        $this->loadAsset([["path" => "admin/datapu/potensi-rawa"]]  );
    }
    public function datapuPotensiSumurBor()
    {
        $this->loadAsset([["path" => "admin/datapu/potensi-sumur-bor"]] );
    }
    public function tambahpegawai()
    {
        $this->loadAsset([["path" => "admin/pegawai/tambahpegawai"]]    );
    }

}
