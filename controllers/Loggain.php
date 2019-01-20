<?php

class LoggaIn extends Controller{
	
	function __construct()
	{
		parent::__construct();
	}	

	function index()
	{
		
		$this->view->render('loggain');

	}

	function run()
	{
		$this->model->run();
	}


}
?>