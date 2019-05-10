<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_ad');
		// if ($this->session->userdata('login_status') != TRUE) {
		// 	redirect('Auth');
		// }
	}
	public function index()
	{

		$data['title'] = 'Beranda Admin Simlim';
		$data['jpenelitian'] = $this->M_ad->getJumlahPenelitian();
		$data['jpengabdian'] = $this->M_ad->getPengabdian();
		$data['jpeneliti'] = $this->M_ad->getPeneliti();
		$this->load->view('admin/bagianStatic/v_head', $data);
		$this->load->view('admin/bagianStatic/v_sidebar');
		$this->load->view('admin/v_homeAdmin');
	}
	
	public function deletePeneliti($id)
	{
		echo $this->M_ad->deletePeneliti($id);
		$this->session->set_flashdata('msg', '<div id="success-alert" class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			 <center>Data berhasil dihapus</center>
		  </div>');
		redirect('Admin/dataPeneliti');
	}
	
}
