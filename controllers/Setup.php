<?php

class Setup extends Controller{
	
	function __construct()
	{
		parent::__construct();
		@Session::init();
		$loggin = Session::get('Inloggad');
		if ($loggin == false){
			Session::destroy();
			header('Location: loggain');
			exit;
		}
	}

	function index()
	{
		$this->view->render('setup');

	}
	
	function logout()
	{
		Session::destroy();
		header('Location: ../loggain');
		exit;
	}
}
?>