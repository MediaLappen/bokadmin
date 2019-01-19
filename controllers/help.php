<?php

class Help extends Controller{
	
	function __construct(){
		parent::__construct();
		echo 'Vi är i hjälpsidan <br>';

	}


	public function other($argu = false){
		
		echo 'we ar inside other <br>';
		echo 'Optional: ' . $argu. '<br>';
		
		require 'models/help_model.php';
		$model = new Help_Model();
	}
}

?>