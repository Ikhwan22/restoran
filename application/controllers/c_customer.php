<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_customer extends CI_Controller
{
     function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') !== 'customer') {
			redirect('auth/index');
		}
    }

    public function index()
    {
        $data['makanan'] = $this->m_menu->getmenu("makanan");
        $data['minuman'] = $this->m_menu->getMenu("minuman");
        $data['lokasi'] = $this->m_menu->getLokasi();
        $this->load->view('templates/header');
        $this->load->view('user/w_customer', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $password = $this->input->post('password', true);
        $data = array(
            'nama'      => $this->input->post('nama', true),
            'email'     => $this->input->post('email', true),
            'telepon'   => $this->input->post('no_telp', true),
            'username'  => $this->input->post('username', true),
            'password'  => password_hash($password, PASSWORD_BCRYPT)
        );
        if($this->input->post('gambar') != null){
            $url = $this->m_customer->uploadGambar();
            $data['foto']  = $url;
        } 
        if($this->input->post('password') == null){
            $data['password'] = $this->session->userdata('password');
        } else {
            $data['password'] = password_hash($password, PASSWORD_BCRYPT);
        }
        $where = array('id' => $this->session->userdata('id'));
        $this->m_customer->updateCustomer($where, $data, 'user');
        redirect('c_customer/index');
    }
}
