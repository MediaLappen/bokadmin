<?php

class Help extends Controller{
	
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->render('help');

	}


	public function other($argu = false){
		
		echo 'we ar inside other <br>';
		echo 'Optional: ' . $argu. '<br>';
		
	}
}

?>