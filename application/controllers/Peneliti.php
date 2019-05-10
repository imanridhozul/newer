<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Peneliti extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
            $this->load->model('M_ad');
            if($this->session->userdata('loginPeneliti') != TRUE)
			{
				redirect('Auth');
			}
		}
		public function index()
		{			
			
			$data['title']='Beranda Admin Simlim';
			$data['jpenelitian'] = $this->M_ad->getJumlahPenelitian();
			// echo $data['jpenelitian'];
			$this->load->view('admin/bagianStatic/v_head',$data);
			$this->load->view('peneliti/bagianStatic/v_sidebar'); 
			$this->load->view('peneliti/DashPeneliti');
			
			
        }	
       
	}
