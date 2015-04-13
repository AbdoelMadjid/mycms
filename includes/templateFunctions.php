<?php
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase{
	var $templateName='default';

	function appOutput(){
		require_once('includes/cmsApplication.php');
		$app=new CmsApplication();
		$app->run();
	}
	function show(){
		require_once($this->getCurrentTemplatePath().'template.php');
	}
	function getCurrentTemplatePath(){
		return 'templates/'.$this->templateName.'/';
	}
	function setTemplate($templateName){
		$this->templateName = $templateName;
	}
}
?>