<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase{
	//semua kode yang ada disini dapat diakses melalui fungsi utama dalam cms
	function addcontent()
	{
		echo'Di sini akan dibuat fungsi menambah kontain';
	}
	function viewcontent()
	{
		echo'Di sini akan dibuat fungsi untuk menampilkan kontain';
	}
	function anyothertaks()
	{
		echo'Disini akan ditulis fungsi yang lainnya';
	}
}

?>