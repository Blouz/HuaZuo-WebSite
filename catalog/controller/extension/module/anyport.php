<?php
class ControllerExtensionModuleAnyport extends Controller {
	
	private $module_path;
	public function __construct($registry){
		parent::__construct($registry);		
		$this->load->config('isenselabs/anyport');
		$this->module_path = $this->config->get('anyport_path');		
	}
		
	public function dropbox()
	{
		header('Access-Control-Allow-Origin: *');  
		$settings = $this->config->get('AnyPort');
		$settings = unserialize(base64_decode($settings));
		$adminFolder = $settings['AutoBackup']['AdminFolder'];
		$url = HTTPS_SERVER.$adminFolder.'/index.php?route='.$this->module_path.'/dropbox&code='.$_GET['code'].'&page=callback'.'&user_token='.$this->session->data['user_token'];
		
		header("Location: ".$url);
	}

	public function googleDrive()
	{
		
		header('Access-Control-Allow-Origin: *');  
		$settings = $this->config->get('AnyPort');

		$settings = unserialize(base64_decode($settings));
		$adminFolder = $settings['AutoBackup']['AdminFolder'];
	
		$url = HTTPS_SERVER.$adminFolder.'/index.php?route='.$this->module_path.'/googleDrive&code='.$_GET['code'].'&page=callback'.'&user_token='.$this->session->data['user_token'];

		header("Location: ".$url);
	}
}