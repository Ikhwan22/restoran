<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_menu extends CI_model
{

    public function getMenu($jenisMenu)//get menu berdasarkan enum makanan / minuman
    {
        $this->db->where('enum',$jenisMenu);
        return $this->db->get('menu')->result();
    }

    public function getEvent(){
        $data = $this->db->get('event');
        if($data->num_rows()>=0){
          return $data->result();
        }else{
          return false;
        }
    }

    //info item pesanan
    function getItemMenu($id){//Item menu tiap satuannya
        $this->db->where('id',$id);
        return $this->db->get('menu');
    }

    //keranjang
    function getKeranjang(){//read item
        return $this->db->get('keranjang');
    }
    function addToCart($data){//create item
        $this->db->insert('keranjang', $data);
    }
    function deleteItemPesanan($id){//delete item
        $this->db->where('id', $id);
		$this->db->delete('keranjang');
    }
    function totalHargaPesanan(){
        $this->db->select('SUM(harga_pesanan) AS jumlah');
        return $this->db->get('keranjang');
    }
    function deleteKeranjang(){//hapus seluruh item keranjang
        $this->db->query("DELETE FROM keranjang");
    }

    //insert dari keranjang ke tabel kasir
    function tambahDataKasir($data){
        $this->db->insert('kasir', $data);
    }


    public function getLokasi()
    {
        $query = $this->db->query("SELECT * FROM lokasi");
        return $query->result();
    }

    public function getUser($username)
    {
        $query = $this->db->query("SELECT * FROM user WHERE username = $username");
        return $query->result();
    }
    
    public function getMakanan()
    {
        $query = $this->db->query("SELECT * FROM menu");
        return $query->result();
    }
}
