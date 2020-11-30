<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penjualan extends CI_Model {

	public function getKodePenjualan()
    {
        $q = $this->db->query("select MAX(RIGHT(nota,3)) as kd_max from penjualan");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }
        else
        {
            $kd = "001";
        }
        return "O-".$kd;
    }

    function getBarangJual(){
        return $this->db->query ("SELECT * from menu")->result();
    }

    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }

    public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
}