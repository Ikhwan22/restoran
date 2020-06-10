<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_menu extends CI_model
{

    public function getMakanan()
    {
        $query = $this->db->query("SELECT * FROM menu_makanan");
        return $query->result();
    }

    public function getMinuman()
    {
        $query = $this->db->query("SELECT * FROM menu_minuman");
        return $query->result();
    }

    //info item pesanan
    function getItemMakanan($id){//Item makanan tiap satuannya
        $this->db->where('id',$id);
        return $this->db->get('menu_makanan');
    }

    function getItemMinuman($id){//Item minuman tiap satuannya
        $this->db->where('id',$id);
        return $this->db->get('menu_minuman');
    }

    //keranjang
    function getKeranjang(){
        return $this->db->get('keranjang');
    }
    function addToCart($data){
        $this->db->insert('keranjang', $data);
    }
    function deleteItemPesanan($id){
        $this->db->where('id', $id);
		$this->db->delete('keranjang');
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
}
