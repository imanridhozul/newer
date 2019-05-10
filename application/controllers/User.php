<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class User extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
            $this->load->model('M_ad');
            if($this->session->userdata('loginUser') != TRUE)
			{
				redirect('Auth');
			}
		}
		public function index()
		{	$data['title'] = 'Beranda User';
			$this->load->view('admin/bagianStatic/v_head', $data);
			$this->load->view('user/bagianStatic/v_sidebar');
			$this->load->view('user/DashUser');
			
        }	
       
	}
