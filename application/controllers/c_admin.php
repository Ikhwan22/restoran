<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
        $this->load->model('m_admin');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('user/w_admin');
        $this->load->view('templates/footer');
    }
    public function tambah_menu()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/tambah_menu');
        $this->load->view('templates/footer');
    }
    public function tambah_event()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/tambah_event');
        $this->load->view('templates/footer');
    }

    public function laporan_reservasi()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/laporan_reservasi');
        $this->load->view('templates/footer');
    }
    public function laporan_bulanan()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/laporan_bulanan');
        $this->load->view('templates/footer');
    }
    public function ambil_laporan()
    {   
        $tgl1 = $this->input->post('tgl1');
        $tgl2 = $this->input->post('tgl2');

        echo $this->show_laporan($tgl1,$tgl2);
    }

    public function show_laporan($tgl1,$tgl2)
    {        
        $output = '';
        $no = 1;
        
        $data= $this->m_admin->getLaporan($tgl1,$tgl2);            
        $total = $this->m_admin->getTotalLaporan($tgl1,$tgl2);
        foreach ($data as $items) {

            $output .='
                <tr>
                    <td>'.$no.'</td>
                    <td>'.$items->nama.'</td>                    
                    <td>'.$items->tanggal.'</td>
                    <td>Rp. '.$items->total.'</td>
                </tr>
            ';
            $no++;
        }

        foreach ($total as $items) {

            $output .='
                <tr>
                    <td></td>
                    <td></td>                    
                    <td>Total Pendapatan</td>
                    <td>Rp. '.$items->totalSemuanya.'</td>
                </tr>
            ';
        }
        return $output;
    }

    public function ambil_menu(){
        $jenis = $this->input->post('jenis');

        echo $this->getDataMenu($jenis);

    }

    public function getDataMenu($jenis){
        $output = '';
        $no = 1;
        
        $data= $this->m_admin->ambil_jenis($jenis);            
        
        foreach ($data as $items) {
            $output .= '<tr>';
            $output .= '<td>'.$no.'</td>';
            $output .= '<td>'.$items->nama.'</td>';
            $output .= '<td>'.$items->harga.'</td>';
            $output .= '<td>'.$items->enum.'</td>';
            $output .= '<td><button class="btn btn-warning edit" id="'.$items->id.'">Edit</button>&nbsp';
            $output .= '<button class="btn btn-danger delete" id="'.$items->id.'">Delete</button></td>';
            $output .= '</tr>';
            $no++;
        }
        return $output; 
    }

    public function insert_menu(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'enum' => $this->input->post('jenis')
        );
        $post1 = $this->input->post('submit');
        if($post1 == "submit"){
            $this->m_admin->masukkan_menu($data);
        }else if($post1 == "update"){
            $id = $this->input->post("singleID");
            $this->m_admin->ubah_menu($id, $data);
        }
    }

    public function delete_menu(){
        $id = $this->input->post('delID');

        $this->m_admin->hapus_menu($id);
    }

    public function fetch_single_menu(){
        $id = $this->input->post('edID');
        $data = $this->m_admin->ambil_satu_menu($id);
        echo json_encode($data);
    }

    public function getDataReservasi(){
        $data = $this->m_admin->getDataReservasi();
        echo json_encode($data);
    }

    public function getDataEvent(){
        $data = $this->m_admin->getDataEvent();
        echo json_encode($data);
    }

    public function insert_event(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'diskon' => $this->input->post('harga'),
        );
        $post1 = $this->input->post('submit');
        if($post1 == "submit"){
            $this->m_admin->masukkan_event($data);
        }else if($post1 == "update"){
            $id = $this->input->post("singleID");
            $this->m_admin->ubah_event($id, $data);
        }
    }

    public function delete_event(){
        $id = $this->input->post('delID');

        $this->m_admin->hapus_event($id);
    }

    public function fetch_single_event(){
        $id = $this->input->post('edID');
        $data = $this->m_admin->ambil_satu_event($id);
        echo json_encode($data);
    }

    public function getLaporanByTanggal(){
        $tanggalHarian = $this->input->post('tanggalHarian');
        $detail = $this->m_admin->getLaporanByTanggal($tanggalHarian)->result();
        
        echo json_encode(array("detail" =>$detail));
    }

    public function konfirmasi(){
        $id = $this->input->post('konfID');
        $data = array(
            'konfirmasi' => '1'
        );
        $this->m_admin->konfirmasi($id, $data);
    }

    public function tolak(){
        $id = $this->input->post('tolakID');
        $data = array(
            'konfirmasi' => '2',
            'alasan_penolakan' => $this->input->post('alasan_penolakan'),
        );
        $this->m_admin->konfirmasi($id, $data);
    }

    public function insert_tolak(){
        $id = $this->input->post('tolakID');
        $data = array(
            'konfirmasi' => '2',
            'alasan_penolakan' => $this->input->post('alasan'),
        );

        $this->m_admin->konfirmasi($id, $data);
    }
}
