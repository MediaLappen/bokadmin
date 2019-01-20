<?php
class DbConnection{

	//function __construct(){
		
	//}
	
	function conn(){

		$db_user = "root";
		$db_pass = "";
		$db_host = "localhost";
		$db_name = "bokadmin";

		$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

		return $conn;

	}
	
}
?>