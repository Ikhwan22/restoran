<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['makanan'] = $this->m_menu->getMenu("makanan");
        $data['minuman'] = $this->m_menu->getMenu("minuman");
        $data['lokasi'] = $this->m_menu->getLokasi();
        $data['event'] = $this->m_menu->getEvent();
        $this->load->view('templates/header');
        $this->load->view('landingpage/home', $data);
        $this->load->view('templates/footer');
    }

    public function loginCustomer()
    {
      $username = $this->input->post('username', true);
      $password = $this->input->post('password', true);
      $result = $this->m_customer->auth($username, $password);
      if($result->num_rows() > 0){
        $data = $result->row_array();
        $newdata = array(
            'id'       => $data['id'],
            'nama'     => $data['nama'],
            'email'    => $data['email'],
            'no_telp'  => $data['telepon'],
            'username' => $data['username'],
            'gambar'   => $data['foto'],
            'password' => $data['password'],
            'status'   => $data['status']
        );
        $this->session->set_userdata($newdata);

        if($data['status'] == "customer"){
            redirect('c_customer/index');
        }elseif($data['status'] == "kasir"){
            redirect('c_kasir/index');
        }elseif($data['status'] == "admin"){
            redirect('c_admin/index');
        }
        
      } else {
        $this->session->set_flashdata('loginError','Username atau password salah!'); 
        redirect('auth/index');
      }
    }

    public function registerCustomer()
    {
        // $url = $this->m_customer->uploadGambar();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == true) {
            $data = array(
                'nama'      => $this->input->post('nama'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password'),
                'status'    => "customer"
            );
            $this->m_customer->register('user', $data);
            redirect('auth/index');

        } else {
            $this->session->set_flashdata('registerError','Data gagal ditambahkan! pastikan username kamu unik'); 
            redirect('auth/index');
        }
        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/index');
    }

    public function kritik(){
       $data = array(
           'nama'              => $this->input->post('nama', true),
           'email'             => $this->input->post('email', true),
           'kritik_dan_saran'  => $this->input->post('kritik_saran', true),
       );
       $this->m_customer->storeKritikSaran('kritik_saran', $data);
       redirect('auth/index');
   }
}
