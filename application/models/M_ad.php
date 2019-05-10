<?php
class M_ad extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}
	//----------------------------Komentar---------------------------	
	function admin()
	{
		return  $this->db->query(" SELECT * FROM kategori_penelitian")->result();		
	}
	function addKategoriPenelitian($d)
	{
		return $this->db->insert('kategori_penelitian', $d);	
	}
}

?>