<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_awal extends CI_Controller
{
   public function kritik()
   {
       $data = array(
           'nama'              => $this->input->post('nama', true),
           'email'             => $this->input->post('email', true),
           'kritik_dan_saran'  => $this->input->post('kritik_saran', true),
       );
       $this->m_customer->storeKritikSaran('kritik_saran', $data);
       redirect('auth/index');
   }
}