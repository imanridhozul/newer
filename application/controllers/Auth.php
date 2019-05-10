<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelAuth');
	}
	public function index()
	{
		$data['title'] = 'Simlimtabmas';
		$this->load->view('login');
		$this->load->view('admin/bagianStatic/v_head');
	}
	public function login()
	{

		$id = $this->input->post('id');
		$pass = md5($this->input->post('password'));
		$result = $this->ModelAuth->cekLoginUser($id, $pass);
		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'nama' => $row->nama,
					'email' => $row->email,
					'password' => $row->password,
					'loginUser' => true,
				);
			}
			$this->session->set_userdata($sess_array);
			$this->session->set_flashdata('msg', '<div id="success-alert" class="alert alert-success alert-dismissable">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                 <center>Selamat Datang peneliti!</center>
				  </div>');
			echo "success";
		}

		$result = $this->ModelAuth->cekLoginAdmin($id, $pass);
		if ($result) {
			$sess_array = array();
			foreach ($result as $row) {
				//create the session
				$sess_array = array(
					'nama' => $row->nama,
					'email' => $row->email,
					'password' => $row->password,
					'login_status' => true					
				);
			}
		
			$this->session->set_userdata($sess_array);
			$this->session->set_flashdata('msg', '<div id="success-alert" class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			 <center>Selamat Datang !</center>
		  </div>');
		  echo "successAdmin";
			
		}
		if (!$result) {
			echo "gagagl";
			// $this->session->set_flashdata('notif','password salah');
			// redirect('Auth','refresh');
		}
	}

	function logout()
	{

		$this->session->unset_userdata('login_status');
		$this->session->unset_userdata('loginUser');
		$this->session->set_flashdata('notif', 'berhasil logout');
		redirect('Auth'); // bisa langsung pake ke CDaftarUser cuman bisa juga ke CUser tapi tetep di direc ke CDaftarUser karena loginstatus false atau unset
	}
}
