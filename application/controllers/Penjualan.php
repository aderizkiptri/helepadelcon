<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('username') == FALSE ) {
            $this->session->set_flashdata('error','Sorry, you are not logged in!');
            redirect('login');
        }
        $this->load->model('Model_penjualan');
        $this->load->helper('currency_format_helper');
    }

    function index(){
        $data=array(
            'nota'=>$this->Model_penjualan->getKodePenjualan(),
            'data_menu'=>$this->Model_penjualan->getBarangJual(),
        );
        $this->load->view('layout/header', $data);
        $this->load->view('penjualan/transaksi');

    }


//    INSERT DATA
    function tambah_penjualan_to_cart(){
        $data = array(
            'id'    => $this->input->post('nota'),
            'qty'   => $this->input->post('qty'),
            'price' => $this->input->post('harga'),
            'name'  => $this->input->post('menu'),
        );
        $this->cart->insert($data);
        redirect('penjualan');
    }

    function get_detail_menu(){
        $id['id_menu']=$this->input->post('id_menu');
        $data=array(
            'detail_menu'=>$this->Model_data->getSelectedData('menu',$id)->result(),
        );
        $this->load->view('penjualan/ajax_detail_menu',$data);
    }

    function simpan_penjualan(){
        $data = array(
            'nota'=>$this->input->post('nota'),
            'total_harga'=>$this->input->post('total_harga'),
            'tanggal_penjualan'=>date("Y-m-d",strtotime($this->input->post('tanggal_penjualan'))),
            'kd_pegawai'=>$this->session->userdata('ID'),
        );
        $this->Model_penjualan->insertData("penjualan",$data);

        foreach($this->cart->contents() as $items){
            $nota = $items['id'];
            $qty = $items['qty'];
            $data_detail = array(
                'nota' => $this->input->post('nota'),
                'nota'=> $nota,
                'qty'=>$qty,
            );
            $this->Model_penjualan->insertData("penjualan_detail",$data_detail);

            $update['stok'] = $this->Model_penjualan->getKurangStok($nota,$qty);
            $key['nota'] = $nota;
            $this->Model_penjualan->updateData("menu",$update,$key);
        }
        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
        redirect('penjualan');
    }


//    DELETE
    function hapus_menu(){
        $id= $this->uri->segment(3);
        $bc=$this->Model_penjualan->getSelectedData("penjualan",$id);
        foreach($bc->result() as $dph){
            $sess_data['nota'] = $dph->nota;
            $this->session->set_userdata($sess_data);
        }

        $kode = explode("/",$_GET['kode']);
        if($kode[0]=="tambah")
        {
            $data = array(
                'rowid' => $kode[1],
                'qty'   => 0
            );
            $this->cart->update($data);
        }
        else if($kode[0]=="edit")
        {
            $data = array(
                'rowid' => $kode[1],
                'qty'   => 0
            );
            $this->cart->update($data);
            $hps['nota'] = $kode[2];
            $hps['nota'] = $kode[3];
            $this->Model_penjualan->deleteData("penjualan_detail",$hps);

            $key_menu['nota'] = $hps['nota'];
            $d_u['stok'] = $kode[4]+$kode[5];
            $this->Model_penjualan->updateData("menu",$d_u,$key_menu);
        }
        redirect('penjualan/pages_edit/'.$this->session->userdata('nota'));
    }

    function hapus(){
        $hapus['nota'] = $this->uri->segment(3);
        $q = $this->Model_penjualan->getSelectedData("penjualan_detail",$hapus);
        foreach($q->result() as $d){
            $d_u['stok'] = $this->Model_penjualan->getTambahStok($d->nota,$d->qty);
            $key['nota'] = $d->nota;
            $this->Model_penjualan->updateData("menu",$d_u,$key);
        }
        $this->Model_penjualan->deleteData("penjualan",$hapus);
        $this->Model_penjualan->deleteData("penjualan_detail",$hapus);
        redirect('penjualan');
    }
}