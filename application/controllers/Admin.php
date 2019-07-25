<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // public function __construct()
    // {

    //     parent::__construct();

    //     // is_logged_in();
    // }

    public function index()
    {
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_sidebar');
        $this->load->view('admin/admin_header_desktop');
        $this->load->view('admin/index');
        $this->load->view('admin/admin_footer');
    }
}
