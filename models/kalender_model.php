<?php 

class Kalender_Model extends Model
{
	public function __construct()
	{
		parent::__construct();	
		
		//var_dump( $this->holidays());

	}


	public function getHolidays()
	{
		$holidays = Array();

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
			"SELECT * FROM boka_stangt");
        
		
		//if query found == succeed
		if (mysqli_num_rows($query) > 0) 
		{	
				
    				while($row = mysqli_fetch_assoc($query)) {
						$holidays[] = $row['dagar'];
					}
					$this->dayarray = $holidays;

					//var_dump($holidays);
		}
		else
		{
			echo "Användaren finns inte";
		}
		
		return $this->dayarray;

	}

}
?>