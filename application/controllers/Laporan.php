<?php
class Laporan extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('username') == FALSE ) {
            $this->session->set_flashdata('error','Sorry, you are not logged in!');
            redirect('login');
        }
        $this->load->model('Model_data');
        $this->load->model('Model_penjualan');
        $this->load->helper('currency_format_helper');
    }

function index(){
        $data=array(
            'title'=>'Penjualan Barang',
            'active_penjualan'=>'active',
            'data_penjualan'=>$this->Model_data->getAllDataPenjualan(),
        );
        $this->load->view('laporan/laporan',$data);

        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
    }

}
