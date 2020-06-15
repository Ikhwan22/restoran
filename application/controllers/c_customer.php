<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
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
        $url = $this->m_customer->uploadGambar();
        $data = array(
            'nama'      => $this->input->post('nama', true),
            'email'     => $this->input->post('email', true),
            'telepon'   => $this->input->post('no_telp', true),
            'username'  => $this->input->post('username', true),
            'foto'      => $url
        ); 
        if($this->input->post('password') == null){
            $data['password'] = $this->session->userdata('password');
        } else {
            $data['password'] = $this->input->post('password');
        }
        $where = array('id' => $this->session->userdata('id'));
        $this->m_customer->updateCustomer($where, $data, 'user');
        redirect('c_customer/index');
    }

    public function reservasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_telp', 'telepon', 'required');
        $this->form_validation->set_rules('meja', 'meja', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('waktu', 'waktu', 'required');

        if($this->form_validation->run() == true) {
            $newDate = date("Y-m-d",strtotime($this->input->post('tanggal')));
            $data = array(
                'nama'      => $this->input->post('nama', true),
                'email'     => $this->input->post('email', true),
                'telepon'   => $this->input->post('no_telp', true),
                'meja'      => $this->input->post('meja', true),
                'tanggal'   => $newDate,
                'waktu'     => $this->input->post('waktu', true)
            );
            $this->m_customer->reservasi('reservasi', $data);

            $this->session->set_flashdata('pesanReservasi','Reservasi berhasil');
            redirect('c_customer/index');
        }
        

        

        // if($this->form_validation->run() == true) {
        //     $newDate = date("Y-m-d", strtotime($this->input->post('tanggal')));
        //     $data = array(
        //         'nama'      => $this->input->post('nama'),
        //         'email'     => $this->input->post('email'),
        //         'telepon'   => $this->input->post('no_telp'),
        //         'meja'      => $this->input->post('meja'),
        //         'tanggal'   => $newDate,
        //         'waktu'     => $this->input->post('waktu')
        //     );
        //     $this->m_customer->reservasi('reservasi', $data);
        //     // redirect('c_customer/index');
        //     $this->session->set_flashdata('resverasi', 'Reservasi Berhasil!'); 
        // }
    }
}
