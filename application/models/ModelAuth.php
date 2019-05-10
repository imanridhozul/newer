<?php
    class ModelAuth extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}
		function cekLogin1($nama,$pass)
        {
			 return $this->db->query("select * from admins where username='$nama' and password='$pass'")->result();
		}
		function cekLoginPeneliti($nidn,$idsinta)
        {
			 return $this->db->query("select * from peneliti where nidn='$nidn' and sinta_id='$idsinta'")->result();
		}
}

?>