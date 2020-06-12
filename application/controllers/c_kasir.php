<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_kasir extends CI_Controller
{
//start halaman pesan menu    
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('user/kasir/pesanMenu');
        $this->load->view('templates/footer');
    }

    function getMenu(){
        $jenisMenu = $this->input->post('jenisMenu');
        $data = $this->m_menu->getMenu($jenisMenu);
        $output="";
        foreach ($data as $dt) {
            $output .= '<option value="'.$dt->id.'">' . $dt->nama . '</option>';
        }
        
        echo ($output);
    }

    function getHarga(){
        $jenisMenu = $this->input->post('jenisMenu');
        $kodeMenu = $this->input->post('kodeMenu');
        $data = $this->m_menu->getItemMenu($kodeMenu)->result();
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

        $pesan = "Data Telah dimasukkan dalam Keranjang";
        $this->pesan($pesan);
    }

    function getKeranjang(){
        $data['keranjang'] = $this->m_menu->getkeranjang()->result();
        echo json_encode($data['keranjang']);
    }

    function deleteItemPesanan($id){
        $this->m_menu->deleteItemPesanan($id);
        $pesan = "Data Telah dihapus dari Keranjang";
        $this->pesan($pesan);
    }

    function totalHargaPesanan(){
        $data = $this->m_menu->totalHargaPesanan()->result();
        echo json_encode($data);
    }

    function tambahDataKasir(){
        $tanggal  = date("Y-m-d H:i:s", strtotime("+5 hours"));
        $data = array(
            'nama'      => $this->input->post('namaPemesan'),
            'meja'      => $this->input->post('meja'),
            'total'     => $this->input->post('seluruhHargaPesanan'),
            'bayar'     => $this->input->post('pembayaran'),
            'kembalian' => $this->input->post('kembalianPembayaran'),
            'tanggal'   => $tanggal
        );

        $this->m_menu->tambahDataKasir($data);
        $this->m_menu->deleteKeranjang();

        $pesan = "Data Telah disimpan";
        $this->pesan($pesan);
    }

    function pesan($pesan){
        $output = '<div class="alert alert-success alert-dismissible fade show" role="alert">'.
                ''.$pesan.''.
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'.
                        '<span aria-hidden="true">&times;</span>'.
                    '</button>'.
                '</div>';
        echo ($output);
    }
//end halaman pesan menu

// start halaman laporan harian
    function laporanHarian(){
        $this->load->view('templates/header');
        $this->load->view('user/kasir/laporanHarian');
        $this->load->view('templates/footer');
    }
// end halaman laporan harian

// start halaman laporan bulanan
    function laporanBulanan(){
        $this->load->view('templates/header');
        $this->load->view('user/kasir/laporanBulanan');
        $this->load->view('templates/footer');
    }
// end halaman laporan bulanan

}
