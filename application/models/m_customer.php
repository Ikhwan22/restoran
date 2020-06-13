<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_customer extends CI_model
{

    public function auth($username, $password)
    {
      $this->db->select('*');
		  $this->db->from('user');
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $this->db->limit(1);
      $query = $this->db->get();
      return $query;
    }

    public function register($table, $data)
    {
      $this->db->insert($table, $data);
    }

    public function uploadGambar()
    {
      $type = explode('.', $_FILES["gambar"]["name"]);
      $type = $type[count($type)-1];
      $url = "gambar/".uniqid(rand()).'.'.$type;
      if(in_array($type, array("jpg", "jpeg", "gif", "png")))
        if(is_uploaded_file($_FILES["gambar"]["tmp_name"]))
          if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $url))
            return $url;
      return "";
    }

    public function updateCustomer($where, $data, $table)
    {
      $this->db->where($where);
      $this->db->update($table, $data);
    }

    public function reservasi($table, $data)
    {
      $this->db->insert($table, $data);
    }

    public function storeKritikSaran($table, $data)
    {
      $this->db->insert($table, $data);
    }

}
