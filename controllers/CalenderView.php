<?php

 class CalenderView extends Controller
 {
 	function __construct()
	{
		parent::__construct();	



	}


	

	

	function index()
	{


		$months = array(
    	'januari',
    	'februari',
    	'mars',
    	'april',
    	'maj',
    	'juni',
    	'juli',
    	'augusti',
    	'september',
    	'oktober',
    	'november',
    	'december',
		);
		
		//Init, startmånad från i idag
		$yearnow=date("Y");
		$monthnow=date("n");
		
		//Antal månader som ska visas i kalendern
		$numbermonth=20;
		//$this->holidays();
		
		//Kopplar upp mot databasen från calenderview_model för att hämta stängda dagar
		$holidays = $this->holidays();
		
		$cal = $this->year2array($yearnow);
		
		$i=0;
		for ($x = 0; $x <= $numbermonth; $x++) 
		{
		
   			echo $months[($monthnow-1)+$i]." ".$yearnow;
			echo "<br>";
			echo $this->month2table($monthnow+$i,$cal,$yearnow, $holidays);
			
			if(($monthnow+$i)==12)
			{
				$monthnow=0;$i=0;$yearnow++;$cal = $this->year2array($yearnow);
			}
			
			$i=$i+1;
		} 
	
		date_default_timezone_set("Europe/Stockholm");
		echo date("Y");
		echo "<br>";
		echo "<br>The time is " . date("h:i:sa");





		$this->view->render('calenderview');
		//var_dump($this->model->holidays());	
	}

	public function holidays()
	{
		return $this->model->holidays();
	}	


	public function year2array($year) 
 	{
    	$res = $year >= 1970;
    	if ($res) 
    	{
      		// this line gets and sets same timezone, don't ask why :)
      		date_default_timezone_set(date_default_timezone_get());

      		$dt = strtotime("-1 day", strtotime("$year-01-01 00:00:00"));
      		$res = array();
      		$week = array_fill(1, 7, false);
      		$last_month = 1;
      		$w = 1;
      		do {
       				$dt = strtotime('+1 day', $dt);
        			$dta = getdate($dt);
        			$wday = $dta['wday'] == 0 ? 7 : $dta['wday'];
        			if (($dta['mon'] != $last_month) || ($wday == 1)) {
          			if ($week[1] || $week[7]) $res[$last_month][] = $week;
          			$week = array_fill(1, 7, false);
          			$last_month = $dta['mon'];
          		}
        		$week[$wday] = $dta['mday'];
        	}
      		while ($dta['year'] == $year);
      	}
    	return $res;
  	}

  	public function month2table($month, $calendar_array, $yearvalue, $stangt) 
	{
    	$monthvalue = $month;
		$ca = 'align="center"';
    	$res = "<table cellpadding=\"2\" cellspacing=\"1\" style=\"border:solid 1px #000000;font-family:tahoma;font-size:12px;background-color:#ababab\"><tr><td $ca>mon</td><td $ca>tis</td><td $ca>ons</td><td $ca>tor</td><td $ca>fre</td><td $ca>lör</td><td $ca>sön</td></tr>";
    	foreach ($calendar_array[$month] as $month=>$week) 
    	{
      		$res .= '<tr>';
      		foreach ($week as $day) 
      		{
        		if($day!='')
        		{
					$res .= '<td><button ';
			
			//--------------set class="closeday" if hollidays--------------------------
			$closestring = 'class="daybutton"';
			foreach ($stangt as $val) {
    			if ($val == ($day.'-'.$monthvalue.'-'.$yearvalue)) {
				$closestring = 'class="closeday"';
				
        		break;    /* You could also write 'break 1;' here. */
    			}
			}
			$res .= $closestring;
			//---------------------------------------------------------------------------
			
			
					$res .= ' id="'.$day.'-'.$monthvalue.'-'.$yearvalue.'">' . ($day ? $day : '&nbsp;') . '</button></td>';
				}
				else
				{
						$res .= '<td>' . ($day ? $day : '&nbsp;') . '</td>';
				}
        	}
      		$res .= '</tr>';
      	}
    	$res .= '</table>';
    	return $res;
    }

	
}
    

?>
    