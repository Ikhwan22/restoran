<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_customer extends CI_model
{

    public function auth($username)
    {
      $this->db->select('*');
		  $this->db->from('user');
      $this->db->where('username', $username);
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

}
