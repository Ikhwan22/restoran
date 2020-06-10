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

    function getMenu(){
        $jenisMenu = $this->input->post('jenisMenu');
        if($jenisMenu== "1"){
            $data = $this->m_menu->getMakanan();
        }else{
            $data = $this->m_menu->getMinuman();
        }
        $output="";
        foreach ($data as $dt) {
            $output .= '<option value="'.$dt->id.'">' . $dt->nama . '</option>';
        }
        
        echo ($output);
    }

    function getHarga(){
        $jenisMenu = $this->input->post('jenisMenu');
        $kodeMenu = $this->input->post('kodeMenu');

        if($jenisMenu== "1"){
            $data = $this->m_menu->getItemMakanan($kodeMenu)->result();
        }else{
            $data = $this->m_menu->getItemMinuman($kodeMenu)->result();
        }
        foreach ($data as $dt) {
            $harga = $dt->harga;
        }
        echo ($harga);
    }

    function addToCart(){
        $data = array(
            'nama_pesanan'      => $this->input->post('namaPesanan'),
            'jumlah_pesanan'    => $this->input->post('jumlahPesan'),
            'harga_pesanan'     => $this->input->post('totalHarga')
        );
        
        $this->m_menu->addToCart($data);

        $pesan = "Data Telah dimasukkan dalam keranjang";

        echo json_encode($pesan);
    }

    function getKeranjang(){
        $data['keranjang'] = $this->m_menu->getkeranjang()->result();
        echo json_encode($data['keranjang']);
    }

    function deleteItemPesanan($id){
        $this->m_menu->deleteItemPesanan($id);
        $pesan = "Data Telah dihapus keranjang";

        echo json_encode($pesan);
    }
}
