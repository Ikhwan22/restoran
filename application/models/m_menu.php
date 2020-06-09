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
