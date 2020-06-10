<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_customer extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
    }

    public function index()
    {
        $data['makanan'] = $this->m_menu->getMakanan();
        $data['minuman'] = $this->m_menu->getMinuman();
        $data['lokasi'] = $this->m_menu->getLokasi();
        $this->load->view('templates/header');
        $this->load->view('user/w_customer', $data);
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/index');
    }
}
