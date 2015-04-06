<?php
require_once('includes/cmsApplication.php');

$app = new CmsApplication();
if(isset($_REQUEST['taks']))
{
	$taks=$_REQUEST['taks'];
	switch ($taks) 
	{
		case 'addcontent':$app->addcontent();break;
		case 'anyothertaks':$app->anyothertaks();break;
		default: $app->viewcontent();break;
	}
}
else
{
	//jika tidak quary string akan dipanggil fungsi viewContent()
	$app->viewcontent();
}
?>