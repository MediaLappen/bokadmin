<?php

class Index extends Controller{
	function __construct()
	{
		parent::__construct();	
	}

	function index()
	{
		echo "inside index";
		$this->view->render('index');
	}
}

?>