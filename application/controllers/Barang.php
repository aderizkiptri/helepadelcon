<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('username') == FALSE ) {
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login');
		}

		$this->load->model('Model_data');
	}

	function index(){
		$data['menu'] = $this->Model_data->tampil_data()->result();
		$this->load->view('menu/menu', $data);
	}

	public function barangmasuk(){
		$data['barangmasuk'] = $this->Model_data->barang_masuk()->result();
		$this->load->view('barang/barangmasuk', $data);
	}

	public function barangkeluar(){
		$data['barangmasuk'] = $this->Model_data->barang_keluar()->result();
		$this->load->view('barang/barangkeluar', $data);
	}

	public function tambah(){
		$this->load->view('menu/tambahmenu');
	}

	function tambah_menu(){
        $data=array(
            'id_menu'=>$this->input->post('id_menu'),
            'menu'=>$this->input->post('menu'),
            'harga'=>$this->input->post('harga'),
        );
        $this->Model_data->insertData('menu',$data);
        redirect("Barang");
    }

    public function edit(){
	}

    function edit_menu(){
        $id['id_menu'] = $this->input->post('id_menu');
        $data=array(
            'menu'=>$this->input->post('menu'),
            'harga'=>$this->input->post('harga'),
        );
        $this->Model_data->updateData('menu',$data,$id);
        
		$this->load->view('menu/editmenu');
        redirect("Barang");
    }

    function hapus_menu(){
        $id['id_menu'] = $this->uri->segment(3);
        $this->Model_data->deleteData('menu',$id);
        redirect("Barang");
    }
}
?>