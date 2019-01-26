<?php

class Index extends Controller{
	function __construct()
	{
		

		parent::__construct();	
		$this->cal->calenderInit();
		
	}

	function index()
	{
		$this->view->render('index');
		//$this->loadCalender();
		
	}
}

?>