<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahan extends CI_Controller {

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
		$data['bahan'] = $this->Model_data->tampil_bahan()->result();
		$this->load->view('bahan/barangmasuk', $data);
	}

	public function barangmasuk(){
		$data['barangmasuk'] = $this->Model_data->barang_masuk()->result();
		$this->load->view('bahan/barangmasuk', $data);
	}

	public function barangkeluar(){
		$data['barangmasuk'] = $this->Model_data->barang_keluar()->result();
		$this->load->view('bahan/barangkeluar', $data);
	}

	public function tambah(){
		$this->load->view('bahan/tambahbahan');
	}

	function tambah_bahan(){
        $data=array(
            'id_bahan'=>$this->input->post('id_bahan'),
            'nama_bahan'=>$this->input->post('nama_bahan'),
            'stock'=>$this->input->post('stock'),
            'satuan'=>$this->input->post('satuan'),
        );
        $this->Model_data->insertData('bahan',$data);
        redirect("Bahan");
    }

    public function edit(){
	}

    function edit_bahan(){
        $id['id_bahan'] = $this->input->post('id_bahan');
        $data=array(
            'bahan'=>$this->input->post('bahan'),
            'stock'=>$this->input->post('stock'),
            'satuan'=>$this->input->post('satuan'),
        );
        $this->Model_data->updateData('bahan',$data,$id);
        
		$this->load->view('bahan/editbahan');
        redirect("Barang");
    }

    function hapus_bahan(){
        $id['id_bahan'] = $this->uri->segment(3);
        $this->Model_data->deleteData('bahan',$id);
        redirect("Bahan");
    }
}
?>