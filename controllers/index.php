<?php

class Index extends Controller{
	function __construct()
	{


		parent::__construct();	
		
		
	}

	function index()
	{

		require 'views/header.php'; 
		require 'views/navigation.php'; 
		$this->cal->calenderInit();
		//$this->view->render('index',1);
		require 'views/footer.php'; 
		
		//$this->loadCalender();
		
	}
}

?>