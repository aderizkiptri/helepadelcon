<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Export extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
		if($this->session->userdata('username') == FALSE ) {
			$this->session->set_flashdata('error','Sorry, you are not logged in!');
			redirect('login');
        }
        $this->load->library('pdf_report');
		$this->load->model("model_export");
	}
    
    public function extu()
	{
		$data['tu'] = $this->model_export->tu();
		$this->load->view('laporan/ruang-tu', $data);
		
    }
    
    public function exksekolah()
	{
		$data['ksekolah'] = $this->model_export->ksekolah();
		$this->load->view('laporan/ruang-kepalasekolah', $data);
    }
    
    public function exks()
	{
		$data['ks'] = $this->model_export->ks();
		$this->load->view('laporan/ruang-ks', $data);
    }

    public function exak()
	{
		$data['ak'] = $this->model_export->ak();
		$this->load->view('laporan/ruang-ak', $data);
    }
    public function exlabtbsm()
	{
		$data['tbsm'] = $this->model_export->tbsm();
		$this->load->view('laporan/ruang-labtbsm', $data);
    }

    public function extamu()
	{
		$data['tamu'] = $this->model_export->tamu();
		$this->load->view('laporan/ruang-tamu', $data);
    }

    
}