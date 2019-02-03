<?php

class Index extends Controller{
	function __construct()
	{
		parent::__construct();	
		//$this->cal = new Calender();
	}

	function index()
	{

		$homepage = file_get_contents('http://localhost/bokadmin/calender/calenderInit');
		//echo $homepage;
		require 'views/header.php'; 
		require 'views/navigation.php'; 
		echo $homepage;
		
		//require 'calender/calenderInit';
		$this->view->render('index',1);
		require 'views/footer.php'; 
		
		//$this->loadCalender();
		
	}
}

?>