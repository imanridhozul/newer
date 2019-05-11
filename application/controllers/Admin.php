<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ad');
		if ($this->session->userdata('login_status') != TRUE) {
			redirect('Auth');
		}
	}
	public function index()
	{

		$data['title'] = 'Beranda Admin';
		$this->load->view('admin/bagianStatic/v_head', $data);
		$this->load->view('admin/bagianStatic/v_sidebar');
		$this->load->view('admin/v_homeAdmin');
	}	
	public function step()
	{

		$data['title'] = 'step';
		$this->load->view('admin/bagianStatic/v_head', $data);
		$this->load->view('admin/bagianStatic/v_sidebar');
		$this->load->view('admin/step');
	}	
	public function addData()
	{
		$data['foto'] = $this->input->post('dk');
		// $data['foto'] = "data/foto/".$_FILES["dokumen"]['name'];	
		// move_uploaded_file($_FILES["dokumen"]["tmp_name"], "data/proposal/" . $_FILES["dokumen"]["name"]);		
		echo $data['foto'];
		
	}
	public function ad()
	{
		// $data['foto'] = $this->input->post('dokumen');
		$data['foto'] = "data/foto/".$_FILES["dokumen"]['name'];	
		move_uploaded_file($_FILES["dokumen"]["tmp_name"], "data/proposal/" . $_FILES["dokumen"]["name"]);		
		echo $data['foto'];
		
	}
	
}
