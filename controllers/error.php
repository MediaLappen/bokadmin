<?php

class Error extends Controller
{
	function __construct()
	{
		parent::__construct();	

	}

	function index()
	{
		$this->view->msg = "Denna sida finns inte";
		$this->view->render('error');	
	}


}

?>