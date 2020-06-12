<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_laporanHarian extends CI_model{

    function getTotalLaporanByTanggal($tanggalharian){//ambil total laporan
        $this->db->select('SUM(total) AS total, SUM(bayar) AS bayar, SUM(kembalian) AS kembalian, DATE_FORMAT(tanggal , "%d %M %Y") AS tanggal');
        return $this->getLaporanByTanggal($tanggalharian);
    }

    function getLaporanByTanggal($tanggalharian){//ambil detail laporan (select * from)
        $this->db->like('tanggal', $tanggalharian);
        return $this->db->get('kasir');
    }
}