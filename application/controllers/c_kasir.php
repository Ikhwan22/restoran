<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_kasir extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('user/w_kasir');
        $this->load->view('templates/footer');
    }
}
