<?php

class Loggain_Model extends Model
{
	public function __construct()
	{
		parent::__construct();	
	}

	//Methods for Posting
	public function run(){
		
		//Recive the posted variables
		if (isset($_POST['email']))
			{
				$email = $_POST['email'];
			}
			else
			{
				header("Location: ../loggain");
			}
		

		if (isset($_POST['password']))
			{
				$password = $_POST['password'];
			}
			else
			{
				header("Location: ../loggain");
			}
		
		//make sure of connection
		if ($this->db->conn()->connect_errno) 
		{
			echo "Kunde inte koppla up till databasen <br>";
    		exit();
		}
		else
		{
			echo "uppkoppling till databas OK <br>";
		}

		$query = mysqli_query($this->db->conn(),
			"SELECT * FROM boka_anvandare WHERE email = '$email' AND password = '$password'");
        
		
		//if query found == succeed
		if (mysqli_num_rows($query) > 0) 
		{	
			header("Location: ../setup");

		}
		else
		{
			header("Location: ../loggain");
		}

	}


}
?>