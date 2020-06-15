<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_customer extends CI_Controller
{
    public function __construct()
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

        //ambil list reservasi berdasarkan id user
        $id = $this->session->userdata('id');
        $data['reservasi'] = $this->m_customer->getReservasi($id)->result();

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

    public function reservasi()
    {
        $newDate = date("Y-m-d",strtotime($this->input->post('tanggal')));
        $data = array(
            'nama'      => $this->input->post('nama', true),
            'email'     => $this->input->post('email', true),
            'telepon'   => $this->input->post('no_telp', true),
            'meja'      => $this->input->post('meja', true),
            'tanggal'   => $newDate,
            'waktu'     => $this->input->post('waktu', true),
            'konfirmasi'=> 0
        );
        $this->m_customer->reservasi('reservasi', $data);
        redirect('c_customer/index');
    }

    function uploadBuktiTransfer(){
        $id = $this->input->post('idReservasi');

        $foto   = $_FILES['foto'];
        if($foto=''){}else{
            $config['upload_path']      = './assets/uploads/transfer/';
            $config['allowed_types']    = 'jpg|jpeg|gif|png';
            $config['max_size']         = 4096;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if(!$this->upload->do_upload('foto')){
                $this->session->set_flashdata('transfer','Silahkan Upload Foto Transfer');
                redirect('c_customer/index');
                die();
            }else{
                $foto = $this->upload->data('file_name');
                $data= array(
                    'foto_transfer'     => $foto
                );
    
                $this->m_customer->updateReservasi($id,$data);
                $this->session->set_flashdata('transfer','Upload Transfer Telah Berhasil dilakukan');
                redirect('c_customer/index');
            }

            
        }
    }
}
