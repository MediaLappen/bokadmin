<?php

Class Controller
{
	function __construct(){
		//echo "Main Controller <br>";
		$this->view = new View();
		//$this->cal = new Calender();
		
		
	}
	

	public function loadModel ($name)
	{
		$path = 'models/'.$name.'_model.php';

		if (file_exists($path))
		{
			require 'models/'.$name.'_model.php';
			$modelName = $name . '_Model';
			$this->model = new $modelName;

		}

	}
}

?>