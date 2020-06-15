<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_admin extends CI_model {

  public function getData($qry){
    $query = $this->db->query($qry);
    return $query->result();
  }

  public function getDataMenu($jenis){
    $this->db->where('jenis', $jenis);
    $query = $this->db->get('menu');
    $output = '';
    $no = 1;
    foreach ($query->result() as $row) {
      $output .= '<tr>';
      $output .= '<td>"'.$no.'"</td>';
      $output .= '<td>"'.$row->nama.'"</td>';
      $output .= '<td>"'.$row->harga.'"</td>';
      $output .= '<td>"'.$row->jenis.'"</td>';
      $output .= '<button class="btn btn-warning">Edit</button>';
      $output .= '</tr>';
      $no++;
    }
    return $output;
  }

  public function simpan($tabel, $data){    
    $this->db->insert($tabel, $data);

    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  } 

  public function hapus($id_column, $id, $tabel){
    $this->db->where($id_column, $id);
    $this->db->delete($tabel);
    if($this->db->affected_rows()>0){
      return true;
    }else{
      return false;
    }
  }

  public function ambil_jenis($jenis){
      $query = $this->db->query("SELECT * FROM menu WHERE enum = '$jenis'");
      return $query->result();
  }

  public function getTotalLaporan($tgl1, $tgl2){//ambil total laporan
        $query = $this->db->query("SELECT SUM(total) AS totalSemuanya FROM laporan_harian WHERE tanggal BETWEEN '$tgl1%' AND '$tgl2%'");
        return $query->result();
    }

  public function getLaporan($tgl1, $tgl2)
    {
        $query = $this->db->query("SELECT tanggal, total FROM laporan_harian WHERE tanggal BETWEEN '$tgl1%' AND '$tgl2%'");
        return $query->result();
    }

  public function getReservasi($tgl1){
    $query = $this->db->query(
        "SELECT * FROM reservasi WHERE tanggal BETWEEN '$tgl1'"
    );
    return $query->result();
  }

  public function masukkan_menu($data){
    $this->db->insert('menu', $data);
  } 

  public function hapus_menu($id){
    $this->db->where('id', $id);
    $this->db->delete('menu');
  }

  public function ambil_satu_menu($id){
    $this->db->where('id', $id);
    $data = $this->db->get('menu');
    if($data->num_rows()>0){
      return $data->result();
    }else{
      return false;
    }
  }

  public function ubah_menu($id, $data){
    $id = $this->db->where('id', $id);
    $this->db->update("menu", $data);
  }

  public function getDataEvent(){
    $data = $this->db->get('event');
    if($data->num_rows()>0){
      return $data->result();
    }else{
      return false;
    }
  }

  public function getDataReservasi(){
    $data = $this->db->get('reservasi');
    if($data->num_rows()>0){
      return $data->result();
    }else{
      return false;
    }
  }

  public function masukkan_event($data){
    $this->db->insert('event', $data);
  } 

  public function hapus_event($id){
    $this->db->where('id', $id);
    $this->db->delete('event');
  }

  public function ambil_satu_event($id){
    $this->db->where('id', $id);
    $data = $this->db->get('event');
    if($data->num_rows()>0){
      return $data->result();
    }else{
      return false;
    }
  }

  public function ubah_event($id, $data){
    $id = $this->db->where('id', $id);
    $this->db->update("event", $data);
  }

  function getLaporanByTanggal($tanggalharian){
    $this->db->like('tanggal', $tanggalharian);
    return $this->db->get('reservasi');
  }

  public function konfirmasi($id, $data){
    $id = $this->db->where('id', $id);
    $this->db->update("reservasi", $data);
  }
}
