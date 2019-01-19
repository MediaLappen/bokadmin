<?php

class Error extends Controller
{
	function __construct()
	{
		parent::__construct();
		echo 'Det har blivit fel - Sidan finns inte <br>';

		$this->view->msg = "this page dosent exist";
		$this->view->render('error/index');
	}

}

?>