<?php
    class ModelAuth extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}
		function cekLoginAdmin($id,$pass)
        {
			 return $this->db->query("select * from admin where nama='$id' and password='$pass'")->result();
		}
		function cekLoginUser($id,$pass)
        {
			 return $this->db->query("select * from user where nama='$id' and password='$pass'")->result();
		}
}

?>