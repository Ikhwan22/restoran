<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('m_menu');
    //     $this->load->model('m_customer');
    // }

    public function index()
    {
        $data['makanan'] = $this->m_menu->getMakanan();
        $data['minuman'] = $this->m_menu->getMinuman();
        $data['lokasi'] = $this->m_menu->getLokasi();
        $this->load->view('templates/header');
        $this->load->view('landingpage/home', $data);
        $this->load->view('templates/footer');
    }

    public function loginCustomer()
    {
      $username = $this->input->post('username', true);
      $password = $this->input->post('password', true);
      $result = $this->m_customer->auth($username);
      $data = $result->row_array();
      if($result->num_rows() > 0){
         foreach($result->result() as $data){
            if(password_verify($password, $data->password)){
               $newdata = array(
                   'nama'    => $data->nama,
                   'email'   => $data->email,
                   'no_telp' => $data->telepon,
                   'no_telp' => $data->telepon,

               );
               $this->session->set_userdata($newdata);
               redirect('c_customer/index');
            }
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
            'password'  => password_hash($password, PASSWORD_BCRYPT)
        );

        $this->m_customer->register('user', $data);
        redirect('auth/index');
    }
}
