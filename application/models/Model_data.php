<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class Model_data extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	//Model Menu
	public function tampil_data()
	{
		return $this->db->get('menu');
	}

	//Model Bahan
	public function tampil_bahan()
	{
		return $this->db->get('bahan');
	}

	public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
    public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function insertData($table,$data)
    {
        $this->db->insert($table,$data);
    }
    function manualQuery($q)
    {
        return $this->db->query($q);
    }

      function getAllDataPenjualan(){
        return $this->db->query("SELECT
                a.nota,
                a.tgl_penjualan,
                a.total_harga,
                (select count(nota) as jum from penjualan_detail where nota=a.nota) as jumlah
                from penjualan a
                ORDER BY a.nota DESC
        ")->result();
    }
}