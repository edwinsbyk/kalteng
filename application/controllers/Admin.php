<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function loadAsset($param)
    {
        $this->load->model("Menu_model", "menu");
        $data = [
            "title" => isset($param["title"]) ? $param["title"] : "Dashboard",
            "active" => "active",
            "menu" => $this->menu->__getMenu(),
            "list_css_plugins" => array(
                'assets/admin/css/font-face.css',
                'assets/admin/css/style.css',
                'assets/vendor/fontawesome-free/css/all.min.css',
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
                'assets/admin/css/datetimepicker.min.css',
                'assets/admin/css/datatables.css',
            ),
            "list_js_plugins" => array(
                'assets/admin/vendor/bootstrap-4.1/popper.min.js',
                'assets/admin/vendor/bootstrap-4.1/bootstrap.min.js',
                'assets/plugin/thesaas/js/vendors/datatables.js',
                'assets/admin/vendor/animsition/animsition.min.js',
                'assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js',
                'assets/admin/vendor/circle-progress/circle-progress.min.js',
                'assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js',
                'assets/admin/vendor/chartjs/Chart.bundle.min.js',
                'assets/admin/vendor/select2/select2.min.js',
                'assets/admin/js/main.js',
                'assets/admin/js/moment.min.js',
                'assets/admin/js/datetimepicker.min.js',
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
        $this->load->model("DashboardModel");
        $this->loadAsset(["path" => "admin/index", "data" => ["data" => $this->DashboardModel->get_dashboard_info()[0]]]);
    }
    public function artikel()
    {
        $this->load->model("ArtikelModel");
        $this->loadAsset(["path" => "admin/warta/artikel", "data" => ["data" => $this->ArtikelModel->display_data()], "title" => "Artikel"]);
    }
    public function setting()
    {
        $this->load->model("SettingModel");
        $data["data"] = $this->SettingModel->get_data($this->session->userdata("user_id"));
        $this->loadAsset(["path" => "admin/setting/setting", "data" => $data, "title" => "Settings"]);
    }
    public function change_account_password()
    {
        $p2 = $this->input->post("newpassword");
        $p3 = $this->input->post("rnewpassword");
        if ($p3 != $p2) {
            throw_flash_redirect("Password tidak sinkron", "danger", "admin/setting");
            return false;
        }
        $this->load->model("User_model");
        $password = $this->User_model->__getUserWithEmail($this->session->userdata('email'))["password"];
        if (!password_verify($this->input->post("oldpassword"), $password)) {
            throw_flash_redirect("Password lama tidak cocok", "danger", "admin/setting");
            return false;
        }
        $p3 = password_hash($p3, PASSWORD_DEFAULT);
        $this->load->model("SettingModel");
        $this->SettingModel->update_data(["password" => $p3], $this->session->userdata("user_id"))
            ? throw_flash_redirect("Password berhasil diubah", "success", "admin/setting")
            : throw_flash_redirect("Tidak dapat mengubah password", "danger", "admin/setting");
    }
    public function change_account_setting()
    {
        $upload_file = $_FILES['setting-image']['name'];
        $file_size = $_FILES['setting-image']['size'];

        // MAX FILE SIZE
        $max_file_size = 2500; // in KiloBytes

        if(($file_size / 1024) > $max_file_size)
        {
            throw_flash_redirect("Ukuran file melebihi batas!", "danger", "admin/setting");
            return false;
        }

        $this->load->model("SettingModel");
        if ($upload_file) {
            $this->load->model("User_model");
            $user_data = $this->User_model->__getUserWithEmail($this->session->userdata("email"));
            $user_data["image"] != "default.png" && unlink(FCPATH . "assets/admin/images/user_profile/" . $user_data["image"]);
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = $max_file_size;
            $config['upload_path'] = './assets/admin/images/user_profile/';
            $ext = end(explode(".", $upload_file));
            $image_file_name = "user" . "-" . $user_data["id"] . "-profile." . $ext;
            $config['file_name'] = $image_file_name;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            !$this->upload->do_upload("setting-image") && throw_flash_redirect($this->upload->display_errors(), "danger", "admin/setting");
        }
        $email = $this->input->post("setting-email");
        $name = $this->input->post("setting-nama");
        $data = array(
            "name" => $name,
            "email" => $email,
        );
        
        $data = $upload_file ? array_merge($data, ["image" => $file = $this->upload->data('file_name')]) : $data;
        $email && $this->session->set_userdata(array("email" => $email));
        $name && $this->session->set_userdata(array("user_name" => $name));
        $upload_file && $this->session->set_userdata(array("user_image"=> $image_file_name));

        $this->SettingModel->update_data($data, $this->session->userdata("user_id"))
            ? throw_flash_redirect("Data berhasil diubah", "success", "admin/setting")
            : throw_flash_redirect("Gagal mengubah data", "danger", "admin/setting");
    }
    public function rup()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getDataRUP();
        $this->loadAsset(["path" => "admin/pengumuman/rup", "data" => $data,"title" => "RUP"]);
        $this->load->view('admin/pengumuman/editdataRUP-modal');
    }
    public function get_data_article_by_id()
    {
        $this->load->model("ArtikelModel");
        $data = $this->ArtikelModel->getDataByIndex($this->input->get("id"));
        echo json_encode($data);
    }
    public function add_article()
    {
        $j = $this->input->post("judul_artikel")."-".strrev(date("dmHis"));
        $t = generate_slug_string($j, "-");
        $data = array(
            "judul" => $this->input->post("judul_artikel"),
            "isi" => $this->input->post("isi_artikel"),
            "tanggal" => date("Y/m/d H:i:s"),
            
            "slug" => $t,
            "iduser" => $this->session->userdata("user_id")
        );
        $this->load->model("ArtikelModel");
        $this->ArtikelModel->tambah_data($data)
            ? throw_flash_redirect("Artikel berhasil ditambahkan", "success", "admin/artikel")
            : throw_flash_redirect("Gagal menambahkan artikel", "danger", "admin/artikel");
    }
    public function edit_artikel()
    {
        // $date = DateTime::createFromFormat('d-m-Y', $this->input->post("tanggal"));
        $data = array(
            "judul" => $this->input->post("edit-judul"),
            "isi" => $this->input->post("edit-isi"),
            "tanggal" => date("Y/m/d H:i:s"),
            "image" => $this->input->post("edit-image"),
        );
        $this->load->model("ArtikelModel");
        echo $this->ArtikelModel->update_data($data, $this->input->post("edit-id_artikel"))
            ? throw_flash_redirect("Artikel berhasil diubah", "success", "admin/artikel")
            : throw_flash_redirect("Gagal merubah artikel", "danger", "admin/artikel");
    }
    public function delete_article()
    {
        $this->load->model("ArtikelModel");
        echo $this->ArtikelModel->delete_data($this->input->post("id"));
    }
    public function agenda()
    {
        $this->load->model("Agenda_model");
        $data['wk'] = $this->Agenda_model->getAgenda();
        $this->loadAsset(["path" => "admin/warta/agenda", "data" => $data, "title" => "Agenda"]);
    }
    public function tambah_agenda()
    {
        $j = $this->input->post("judul_agenda")."-".strrev(date("His"));
        $t = generate_slug_string($j, "-");
        $data = array(
            "judul"               => $this->input->post("judul_agenda"),
            "isi"                 => $this->input->post("isi_agenda"),
            "tanggal_mulai"       => DateTime::createFromFormat("d/m/Y H:i", $this->input->post("tanggal_mulai"))->format("Y/m/d H:i"),
            "tanggal_selesai"     => DateTime::createFromFormat("d/m/Y H:i", $this->input->post("tanggal_selesai"))->format("Y/m/d H:i"),
           
            "slug"                => $t,
            "iduser"              => $this->session->userdata("user_id")
        );
        $this->load->model("Agenda_model");
        $this->Agenda_model->input_data($data)
            ? throw_flash_redirect("Agenda berhasil ditambahkan", "success", "admin/agenda")
            : throw_flash_redirect("Gagal menambahkan agenda", "danger", "admin/agenda");
    }
    public function get_data_agenda_by_id()
    {
        $this->load->model("Agenda_model");
        $data = $this->Agenda_model->get_data_by_index($this->input->get("id"));
        $data[0]["tanggal_mulai"] = DateTime::createFromFormat("Y-m-d H:i:s", $data[0]["tanggal_mulai"])->format("d/m/Y H:i");
        $data[0]["tanggal_selesai"] = DateTime::createFromFormat("Y-m-d H:i:s", $data[0]["tanggal_selesai"])->format("d/m/Y H:i");
        echo json_encode($data);
    }
    public function edit_agenda()
    {
        $data = array(
            "iduser"            => 1,
            "judul"             => $this->input->post("edit_judul_agenda"),
            "isi"               => $this->input->post("edit_isi_agenda"),
            "tanggal_mulai"     => DateTime::createFromFormat("d/m/Y H:i", $this->input->post("edit_dtp_tgl_mulai"))->format("Y/m/d H:i"),
            "tanggal_selesai"   => DateTime::createFromFormat("d/m/Y H:i", $this->input->post("edit_dtp_tgl_selesai"))->format("Y/m/d H:i"),
            "image"             => $this->input->post("edit_image"),
        );
        $this->load->model("Agenda_model");
        echo $this->Agenda_model->update_data($data, $this->input->post("edit_id_agenda"))
            ? throw_flash_redirect("Agenda berhasil diubah", "success", "admin/agenda")
            : throw_flash_redirect("Gagal merubah agenda", "danger", "admin/agenda");
    }
    public function delete_agenda()
    {
        $this->load->model("Agenda_model");
        echo $this->Agenda_model->delete_data_by_id($this->input->post("id"));
    }
    public function testimoni()
    {
        $this->load->model("Testimoni_model");
        $data["data"] = $this->Testimoni_model->display_data();
        $this->loadAsset(["path" => "admin/warta/testimoni", "data" => $data, "title" => "Testimoni"]);
    }
    public function get_data_testimoni_by_id()
    {
        $this->load->model("Testimoni_model");
        $data = $this->Testimoni_model->getDataByIndex($this->input->get("id"));
        echo json_encode($data);
    }
    public function tambah_testimoni()
    {
        $data = array(
            "nama"  => $this->input->post("nama"),
            "email"   => $this->input->post("email"),
            "isi"   => $this->input->post("isi"),
            
        );
        $this->load->model("Testimoni_model");
        echo $this->Testimoni_model->tambah_data($data)
            ? throw_flash_redirect("Testimoni berhasil ditambahkan", "success", "admin/testimoni")
            : throw_flash_redirect("Gagal menambahkan data", "danger", "admin/testimoni");
    }
    public function edit_testimoni()
    {
        $data = array(
            "nama"      => $this->input->post("edit_nama"),
            "email"     => $this->input->post("edit_email"),
            "isi"       => $this->input->post("edit_isi")
        );
        $this->load->model("Testimoni_model");
        echo $this->Testimoni_model->update_data($data, $this->input->post("edit_id_testimoni"))
            ? throw_flash_redirect("Testimoni berhasil diubah", "success", "admin/testimoni")
            : throw_flash_redirect("Gagal merubah berita", "danger", "admin/testimoni");
    }
    public function delete_testimoni()
    {
        $this->load->model("Testimoni_model");
        echo $this->Testimoni_model->delete_data($this->input->post("id"));
    }
    public function pegawai()
    {
        $this->load->model('Pegawai_model', 'data');
        $this->load->model('Jabatan_model', 'jabatan');
        $data['data'] = $this->data->getPegawai();
        $data['data_jabatan'] = $this->jabatan->getJabatan();
        $this->load->model('Bidang_model', 'bidang');
        $data['data_pegawai'] = $this->bidang->getBidang();
        $this->load->model('Pegawai_model', 'datajabatan');
        $data['datajabatan'] = $this->data->getPegawaiJabatan();
        $this->load->model('Pegawai_model', 'data');
        $data['data'] = $this->data->getPegawai();
        $this->load->model('Bidang_model', 'bidang');
        $data['data_pegawai'] = $this->bidang->getBidang();
        $this->loadAsset(["path" => "admin/pegawai/pegawai", "data" => $data, "title" => "Pegawai"]);
    }
    public function pegawaibidang()
    {
        $this->load->model('Pegawai_model', 'data');
        $data['data'] = $this->data->getPegawaibidang();
        $this->loadAsset(["path" => "admin/pegawaibidang/bidang", "data" => $data, "title" => "Pegawai Bidang"]);
    }
    public function bidang()
    {
        $this->load->model('Bidang_model', 'data');
        $data['data'] = $this->data->getBidang();
        $this->loadAsset(["path" => "admin/bidang/bidang", "data" => $data, "title" => "Bidang"]);
    }
    public function berita()
    {
        $this->load->model("Berita_model");
        $data["data"] = $this->Berita_model->getBerita();
        $this->loadAsset(["path" => "admin/warta/tab", "data" => $data, "title" => "Berita"]);
    }
    public function get_data_berita_by_id()
    {
        $this->load->model("Berita_model");
        $data = $this->Berita_model->get_data_by_index($this->input->get("id"));
        echo json_encode($data);
    }
    public function delete_berita()
    {
        $this->load->model("Berita_model");
        echo $this->Berita_model->delete_data_by_id($this->input->post("id"));
    }
    public function edit_berita()
    {
        // $date = DateTime::createFromFormat('d-m-Y', $this->input->post("tanggal"));
        $data = array(
            "judul" => $this->input->post("judul-berita"),
            "isi" => $this->input->post("isi-berita"),
            "tanggal" => date("Y/m/d H:i:s"),
            "image" => $this->input->post("image"),
        );
        $this->load->model("Berita_model");
        echo $this->Berita_model->update_data($data, $this->input->post("edit_idberita"))
            ? throw_flash_redirect("Berita berhasil diubah", "success", "admin/berita")
            : throw_flash_redirect("Gagal merubah berita", "danger", "admin/berita");
    }
    public function tambah_berita()
    {
        $j = $this->input->post("judul-berita")."-".strrev(date("dmHis"));
        $t = generate_slug_string($j, "-");

        $data = array(
            'judul'     => $this->input->post("judul-berita"),
            'isi'       => $this->input->post("isi-berita"),
            'slug'      => $t,
            'tanggal'   => date("Y/m/d H:i:s"),
            
            "iduser"    => $this->session->userdata("user_id")
        );
        $this->load->model("Berita_model");
        $this->Berita_model->input_data($data)
            ? throw_flash_redirect("Berhasil menambah berita", "success", "admin/berita")
            : throw_flash_redirect("Gagal menambah berita", "danger", "admin/berita");
    }
    public function pengumuman_lelang()
    {
        $this->load->model('Pengumuman_model', 'data');
        $data['data'] = $this->data->getPengumumanLelang();
        $this->loadAsset(["path" => "admin/pengumuman/pengumuman_lelang", "data" => $data, "title" => "Pengumuman Lelang"]);
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
        $this->loadAsset(["path" => "admin/pengumuman/pemenang_lelang", "data" => $data, "title" => "Pemenang Lelang"]);
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
    public function user()
    {
        $this->session->userdata("role_id") != 1 && redirect("admin");
        $this->load->model('Userdata_model', 'data');
        $data['data'] = $this->data->getUser();
        $this->loadAsset(["path" => "admin/user/user", "data" => $data, "title" => "User"]);
    }
    public function datapuJalan()
    {
        $this->load->model('Datapu_model', 'data');
        $data['data'] = $this->data->getDataJalan();
        $this->loadAsset(["path" => "admin/datapu/jalan/jalan", "data" => $data, "title" => "Data PU Jalan"]);
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
        $this->loadAsset(["path" => "admin/datapu/jembatan/jembatan", "data" => $data, "title" => "Data PU Jembatan"]);
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
        $this->loadAsset(["path" => "admin/datapu/embung/embung", "data" => $data , "title" => "Data PU Embung"]);
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
        $this->loadAsset(["path" => "admin/datapu/sumur-bor/sumur-bor", "data" => $data, "title" => "Data PU Sumur Bor"]);
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
        $this->loadAsset(["path" => "admin/datapu/black-spot/black-spot", "data" => $data, "title" => "Data PU Black Spot"]);
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
        $this->loadAsset(["path" => "admin/datapu/spam/spam", "data" => $data, "title" => "Data PU Spam"]);
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
        $this->loadAsset(["path" => "admin/datapu/potensi-danau/potensi-danau", "data" => $data, "title" => "Data PU Potensi Danau"]);
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
        $this->loadAsset(["path" => "admin/datapu/potensi-rawa/potensi-rawa", "data" => $data, "title" => "Data PU Potensi Rawa"]);
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
        $this->loadAsset(["path" => "admin/datapu/potensi-sumur-bor/potensi-sumur-bor", "data" => $data, "title" => "Data PU Potensi Sumur Bor"]);
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
    function Tambah_bidang()
    {
        $this->load->model('Bidang_model', 'data');
        $bidang = $this->input->post('bidang');
        $alamat_kantor = $this->input->post('alamat_kantor');
        $this->data->tambahdataBidang($bidang, $alamat_kantor);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/bidang');
        $this->loadAsset(["path" => "admin/bidang/bidang"]);
    }
    function editdataBidang()
    {
        $this->load->model('Bidang_model', 'data');
        $id = $this->input->post('id_bidang');
        $bidang = $this->input->post('bidang');
        $alamat_kantor = $this->input->post('alamat_kantor');
        $this->data->editdataBidang($id, $bidang, $alamat_kantor);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/bidang');
        $this->loadAsset(["path" => "admin/bidang/bidang"]);
    }
    function deletedataBidang()
    {
        $this->load->model('Bidang_model', 'delete_data');
        $id = $this->input->post('id_bidang');
        $this->delete_data->deletedataBidang($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/bidang');
        $this->loadAsset(["path" => "admin/bidang/bidang"]);
    }
    function tambah_pegawai()
    {
        $this->load->model('Pegawai_model', 'data');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $id_bidang = $this->input->post('id_bidang');
        $jabatan = $this->input->post('jabatan');
        $this->data->tambahdataPegawai($id_bidang, $jabatan, $nip, $nama, $alamat);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambahkan. </div>');
        redirect('admin/pegawai');
        $this->loadAsset(["path" => "admin/pegawai/pegawai"]);
    }
    public function editPegawai()
    {
        $this->load->model('Pegawai_model', 'data');
        $id_pegawai = $this->input->post('id_pegawai');
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $id_bidang = $this->input->post('id_bidang');
        $jabatan = $this->input->post('jabatan');
        $this->data->editdataPegawai($id_pegawai, $id_bidang, $jabatan, $nip, $nama, $alamat);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/pegawai');
        $this->loadAsset(["path" => "admin/pegawai/pegawai"]);
    }
    public function deletedataPegawai()
    {
        $this->load->model('Pegawai_model', 'delete_data');
        $id_pegawai = $this->input->post('id_pegawai');
        $this->delete_data->deletedataPegawai($id_pegawai);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/pegawai');
        $this->loadAsset(["path" => "admin/pegawai/pegawai"]);
    }
    public function jabatan()
    {
        $this->load->model('Jabatan_model', 'data');
        $data['data'] = $this->data->getJabatan();
        $this->loadAsset(["path" => "admin/jabatan/jabatan", "data" => $data, "title" => "Jabatan"]);
    }
    public function Tambah_jabatan()
    {
        $this->load->model('Jabatan_model', 'data');
        $jabatan = $this->input->post('jabatan');
        $this->data->tambahdataJabatan($jabatan);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah ditambahkan. </div>');
        redirect('admin/jabatan');
        $this->loadAsset(["path" => "admin/jabatan/jabatan"]);
    }
    public function editdataJabatan()
    {
        $this->load->model('Jabatan_model', 'data');
        $id_jabatan = $this->input->post('id_jabatan');
        $jabatan = $this->input->post('jabatan');
        $this->data->editdataJabatan($id_jabatan, $jabatan);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/jabatan');
        $this->loadAsset(["path" => "admin/jabatan/jabatan"]);
    }
    public function deletedataJabatan()
    {
        $this->load->model('Jabatan_model', 'data');
        $id_jabatan = $this->input->post('id_jabatan');
        $this->data->deletedataJabatan($id_jabatan);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/jabatan');
        $this->loadAsset(["path" => "admin/jabatan/jabatan"]);
    }
    public function download()
    {
        $this->load->model('File_model', 'data');
        $data['data'] = $this->data->getfileList();
        $this->loadAsset(["path" => "admin/download/download", "data" => $data, "title" => "Files"]);
    }

    public function edit_file() {
        $this->load->model("File_model");
        $data = array(
            "keterangan"    => $this->input->post("keterangan"),
            "publik"        => $this->input->post("public_mode") == "on" ? 1 : 0,
        );
        $this->File_model->update_data($data, $this->input->post("id_file")) 
            ? throw_flash_redirect("Berhasil update data", "success", "admin/download") 
            : throw_flash_redirect("Tidak dapat mengupdate data", "danger", "admin/download");
    }

    public function edituser()
    {
        $this->load->model('Userdata_model', 'data');
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        $image = $this->input->post('image');
        $role_id = $this->input->post('role_id');
        $is_active = $this->input->post('is_active');
        $this->data->editdataUser($id, $email, $name, $password, $image, $role_id, $is_active);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/user');
        $this->loadAsset(["path" => "admin/user/user"]);
    }
    public function tambah_user()
    {
        $this->load->model('Userdata_model', 'data');


        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $image = $this->input->post('image');
        $role_id = $this->input->post('role_id');
        $is_active = $this->input->post('is_active');
        $date_created = time();
        $this->data->tambahdataUser($email, $name, $password, $image, $role_id, $is_active, $date_created);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/user');
        $this->loadAsset(["path" => "admin/user/user"]);
    }
    public function editPassword()
    {
        $this->load->model('Userdata_model', 'data');
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $image = $this->input->post('image');
        $role_id = $this->input->post('role_id');
        $is_active = $this->input->post('is_active');
        $date_created = $this->input->post('date_created');
        $this->data->editpasswordUser($id, $email, $name, $password, $image, $role_id, $is_active, $date_created);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diubah. </div>');
        redirect('admin/user');
        $this->loadAsset(["path" => "admin/user/user"]);
    }
    public function deletedataUser()
    {
        $this->load->model('Userdata_model', 'delete_data');
        $id = $this->input->post('id');
        $this->delete_data->deletedataUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah dihapus. </div>');
        redirect('admin/user');
        $this->loadAsset(["path" => "admin/user/user"]);
    }
}