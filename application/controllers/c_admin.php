<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('user/w_admin');
        $this->load->view('templates/footer');
    }
    public function tambah_menu()
    {
        $data['makanan'] = $this->m_menu->getMenu("makanan");
        $data['minuman'] = $this->m_menu->getMenu("minuman");
        $this->load->view('templates/header');
        $this->load->view('admin/tambah_menu', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_event()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/tambah_event');
        $this->load->view('templates/footer');
    }
    public function laporan_reservasi()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/laporan_reservasi');
        $this->load->view('templates/footer');
    }
    public function laporan_bulanan()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/laporan_bulanan');
        $this->load->view('templates/footer');
    }
}
