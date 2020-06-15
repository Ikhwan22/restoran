<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

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
        redirect('auth/index');
      }
    }

    public function registerCustomer()
    {
        $url = $this->m_customer->uploadGambar();
        $password = $this->input->post('password', true);
        $data = array(
            'nama'      => $this->input->post('nama', true),
            'email'     => $this->input->post('email', true),
            'telepon'   => $this->input->post('no_telp', true),
            'foto'      => $url,
            'username'  => $this->input->post('username', true),
            'password'  => $password,
            'status'    => "customer"
        );

        $this->m_customer->register('user', $data);
        redirect('auth/index');
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
