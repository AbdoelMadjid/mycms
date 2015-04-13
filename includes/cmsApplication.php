<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase{
	//semua kode yang ada disini dapat diakses melalui fungsi utama dalam cms
	function run(){
		//di sini akan dibuat kode,
		//untuk mengatur seluruh proses dalam cmsApplication.
		//Fungsi ini akan dipanggil dari modul TemplateFunctions
		if(isset($_REQUEST['taks']))
{
	$taks=$_REQUEST['taks'];
	switch ($taks) 
	{
		case 'addcontent':$this->addcontent();break;
		case 'anyothertaks':$this->anyothertaks();break;
		default: $this->display();break;
	}
}
else
{
	//jika tidak quary string akan dipanggil fungsi viewContent()
	$this->display();
}
	}
	function addcontent()
	{
		echo'Di sini akan dibuat fungsi menambah kontain';
	}
	function display()
	{
		echo'Di sini akan dibuat fungsi untuk menampilkan kontain';
	}
	function anyothertaks()
	{
		echo'Disini akan ditulis fungsi yang lainnya';
	}
}

?>