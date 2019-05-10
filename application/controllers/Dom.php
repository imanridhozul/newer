<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dom extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'form'));
    }
    public function index()
    {


        // $data = array(
        //     "dataku" => array(
        //         "nama" => "Petani Kode",
        //         "url" => "http://petanikode.com"
        //     )
        // );
        $data['dt'] = $this->db->get('admin')->result();        
        // $this->load->view('laporan_pdf', $data);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('laporan_pdf', $data);
        // echo var_dump($data['dt']);

    }
}
