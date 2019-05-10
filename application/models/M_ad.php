<?php
class M_ad extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}
	//----------------------------Komentar---------------------------
	function getJumlahPenelitian()
	{
		$a =  $this->db->query("SELECT COUNT(id_penelitian) AS jpenelitian FROM penelitian")->row();
		return $a->jpenelitian;
	}
	function getPengabdian()
	{
		$a =  $this->db->query("SELECT COUNT(id_pengabdian) AS jpengabdian FROM pengabdian")->row();
		return $a->jpengabdian;
		
	}
	function getPeneliti()
	{
		$a =  $this->db->query("SELECT COUNT(id_peneliti) AS jpeneliti FROM peneliti")->row();
		return $a->jpeneliti;
		
	}
	
	function dataPeneliti()
	{
		return  $this->db->query(" SELECT * FROM peneliti ORDER BY id_peneliti DESC")->result();		
	}
	function deletePeneliti($id)
	{
		return  $this->db->query("DELETE FROM peneliti WHERE id_peneliti='$id'");	
		
	}
	function addPeneliti($d)
	{
		return $this->db->insert('peneliti', $d);	
	}
	//program pnelitian
	function getProgramPenelitian($thn,$skema)
	{
		return  $this->db->query("SELECT nama_lengkap, nama_program, nama_skema, judul, anggota1, anggota2, anggota3, 
		anggota4, anggota5, tahun, dana, luaran_wajib, 
		luaran_tambahan, proposal, tanggal_input FROM peneliti INNER JOIN penelitian USING(id_peneliti) 
		INNER JOIN program USING(id_program) INNER JOIN skema USING(id_skema) 
		WHERE tahun = '$thn' AND id_skema = '$skema' ORDER BY id_penelitian")->result();		
	}
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