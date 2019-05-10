<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Auth extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('ModelAuth');
		}
		public function index()
		{			
			$data['title']='Simlimtabmas';			
			$this->load->view('login');
		
			
		}			
		public function login()
		{
		  
			$nama = $this->input->post('username');
			$pass = $this->input->post('password');		
			$result = $this->ModelAuth->cekLoginPeneliti($nama, $pass);
			//login peneliti		
			if($result) {
				$sess_array = array();
				foreach($result as $row) {					
					//create the session
					$sess_array = array(
						'nama' => $row->nama_lengkap,
						'email' => $row->email,
						'nidn' => $row->nidn,
						'alamat' => $row->alamat,						
						'password'=>$row->password,
						'foto' => $row->photo,
						'loginPeneliti'=>true,
						'acc' => 0						
					);
					//set session with value from database
					$this->session->set_userdata($sess_array);	
					$this->session->set_flashdata('msg', '<div id="success-alert" class="alert alert-success alert-dismissable">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                 <center>Selamat Datang peneliti!</center>
	              </div>');					
					redirect('Peneliti','refresh');
				}				
			}
			
			//admin
			$result = $this->ModelAuth->cekLogin1($nama, $pass);
			if($result) {
				$sess_array = array();
				foreach($result as $row) {					
					//create the session
					$sess_array = array(
						'nama' => $row->nama_lengkap,
						'username' => $row->username,	
						'password'=>$row->password,
						'status'=>$row->status,
						'login_status'=>true,	
						 'acc' => 1					
					);
					//set session with value from database
					$this->session->set_userdata($sess_array);	
					$this->session->set_flashdata('msg', '<div id="success-alert" class="alert alert-success alert-dismissable">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                 <center>Selamat Datang !</center>
	              </div>');					
					redirect('Admin','refresh');
				}
				
			}			
			if(!$result)
			{
				$this->session->set_flashdata('notif','password salah');
				redirect('Auth','refresh');
			}
			
		}
	
		function logout() {		
				
				$this->session->unset_userdata('login_status');	
				$this->session->unset_userdata('loginPeneliti');				
				$this->session->set_flashdata('notif','berhasil logout');
				redirect('Auth'); // bisa langsung pake ke CDaftarUser cuman bisa juga ke CUser tapi tetep di direc ke CDaftarUser karena loginstatus false atau unset
		}
		
		
		
	}


?>