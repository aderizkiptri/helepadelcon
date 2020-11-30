<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Model_export extends CI_Model {
 
    public function tu()
    {
        $query= $this->db->query("SELECT * from barang where kode_ruang='06'");
		return $query->result();
    }

    public function ksekolah()
    {
        $query= $this->db->query("SELECT * from barang where kode_ruang='01'");
		return $query->result();
    }

    public function ks()
    {
        $query= $this->db->query("SELECT * from barang where kode_ruang='02'");
		return $query->result();
    }

    public function ak()
    {
        $query= $this->db->query("SELECT * from barang where kode_ruang='03'");
		return $query->result();
    }

    public function tbsm()
    {
        $query= $this->db->query("SELECT * from barang where kode_ruang='04'");
		return $query->result();
    }

    public function tamu()
    {
        $query= $this->db->query("SELECT * from barang where kode_ruang='05'");
		return $query->result();
    }
}
?>