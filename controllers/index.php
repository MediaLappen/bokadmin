<?php

class Index extends Controller{
	function __construct()
	{
		parent::__construct();	
		//$this->cal = new Kalender();
	}

	function index()
	{

		$homepage = file_get_contents('http://localhost/bokadmin/kalender/calenderInit');
		//echo $homepage;
		require 'views/header.php'; 
		require 'views/navigation.php'; 
		echo $homepage;
		
		//require 'kalender/calenderInit';
		$this->view->render('index',1);
		require 'views/footer.php'; 
		
	}
}

?>