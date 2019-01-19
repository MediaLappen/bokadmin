<?php

class Error extends Controller
{
	function __construct()
	{
		parent::__construct();
		echo 'This is en Error - Page does not exist';

		$this->view->msg = "this page dosent exist";
		$this->view->render('error/index');
	}

}

?>