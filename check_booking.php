<?php
$con=mysqli_connect("localhost","root","","bookyourshow");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

	$show_id=$_POST['show_id'];
	$timing=$_POST['timing'];
	$seats_taken=array();
						
	$result = mysqli_query($con,"SELECT * FROM bookings WHERE show_id=".$show_id." AND timing_id=".$timing);
	
	$row = mysqli_fetch_all($result);
	
	if(count($row)>0){
		
		foreach ($row as $r) {
			
			$seats_taken[]=$r[3];
			
		}
		
		$disable1=(in_array(1, $seats_taken))?'disabled':'';
		$disable2=(in_array(2, $seats_taken))?'disabled':'';
		$disable3=(in_array(3, $seats_taken))?'disabled':'';
		$disable4=(in_array(4, $seats_taken))?'disabled':'';
		$disable5=(in_array(5, $seats_taken))?'disabled':'';
		$disable6=(in_array(6, $seats_taken))?'disabled':'';
		
		$style1=(in_array(1, $seats_taken))?' class="taken" ':' class="available" ';
		$style2=(in_array(2, $seats_taken))?' class="taken" ':' class="available" ';
		$style3=(in_array(3, $seats_taken))?' class="taken" ':' class="available" ';
		$style4=(in_array(4, $seats_taken))?' class="taken" ':' class="available" ';
		$style5=(in_array(5, $seats_taken))?' class="taken" ':' class="available" ';
		$style6=(in_array(6, $seats_taken))?' class="taken" ':' class="available" ';
						
		
			$seats='<br /><br /><p class="para">Select your seat: </p>
			
			<div id="select_seats'.$show_id.'" style="border: 2px solid; width: 60%; padding: 5%; margin: 5% auto; display: block;">
				
				<br />
				<button id="seat_1" value="1" '.$style1.' style="width: 75px; margin: 2% 5%; " '.$disable1.' onclick="bookseats('.$show_id.',this.value);"  > Seat C1 </button>
				<button id="seat_2" value="2" '.$style2.' style="width: 75px; margin: 2% 5%; " '.$disable2.' onclick="bookseats('.$show_id.',this.value);" >Seat B1</button>
				<button id="seat_3" value="3" '.$style3.' style="width: 75px; margin: 2% 5%; " '.$disable3.' onclick="bookseats('.$show_id.',this.value);" >Seat A1</button>
				<br />
				<button id="seat_4" value="4" '.$style4.' style="width: 75px; margin: 2% 5%; " '.$disable4.' onclick="bookseats('.$show_id.',this.value);" >Seat C2</button>
				<button id="seat_5" value="5" '.$style5.' style="width: 75px; margin: 2% 5%; " '.$disable5.' onclick="bookseats('.$show_id.',this.value);" >Seat B2</button>
				<button id="seat_6" value="6" '.$style6.' style="width: 75px; margin: 2% 5%; " '.$disable6.' onclick="bookseats('.$show_id.',this.value);" >Seat A2</button>
														
				<img src="images/screen.jpg" style="margin-top: -5%; margin-left: 10%;"/>
			</div>
				<div style="background-color: rgb(28, 184, 65); width:25px; height:25px; border: 1px solid; display:inline-block; margin-left:15%;"></div> <p class="para" style="display:inline;">Available</p>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<div style="background-color: rgb(223, 117, 20); width:25px; height:25px; border: 1px solid; display:inline-block;"></div> <p class="para" style="display:inline;"> Booked </p>';
						
		 

		echo $seats;
		

	}else{
		
		$disable1=(in_array(1, $seats_taken))?'disabled':'';
		$disable2=(in_array(2, $seats_taken))?'disabled':'';
		$disable3=(in_array(3, $seats_taken))?'disabled':'';
		$disable4=(in_array(4, $seats_taken))?'disabled':'';
		$disable5=(in_array(5, $seats_taken))?'disabled':'';
		$disable6=(in_array(6, $seats_taken))?'disabled':'';
		
		$style1=(in_array(1, $seats_taken))?' class="taken" ':' class="available" ';
		$style2=(in_array(2, $seats_taken))?' class="taken" ':' class="available" ';
		$style3=(in_array(3, $seats_taken))?' class="taken" ':' class="available" ';
		$style4=(in_array(4, $seats_taken))?' class="taken" ':' class="available" ';
		$style5=(in_array(5, $seats_taken))?' class="taken" ':' class="available" ';
		$style6=(in_array(6, $seats_taken))?' class="taken" ':' class="available" ';
						
		
			$seats='<br /><br /><p class="para">Select your seat: </p>
			
			<div id="select_seats'.$show_id.'" style="border: 2px solid; width: 60%; padding: 5%; margin: 5% auto; display: block;">
				
				<br />
				<button id="seat_1" value="1" '.$style1.' style="width: 75px; margin: 2% 5%; " '.$disable1.' onclick="bookseats('.$show_id.',this.value);"  > Seat C1 </button>
				<button id="seat_2" value="2" '.$style2.' style="width: 75px; margin: 2% 5%; " '.$disable2.' onclick="bookseats('.$show_id.',this.value);" >Seat B1</button>
				<button id="seat_3" value="3" '.$style3.' style="width: 75px; margin: 2% 5%; " '.$disable3.' onclick="bookseats('.$show_id.',this.value);" >Seat A1</button>
				<br />
				<button id="seat_4" value="4" '.$style4.' style="width: 75px; margin: 2% 5%; " '.$disable4.' onclick="bookseats('.$show_id.',this.value);" >Seat C2</button>
				<button id="seat_5" value="5" '.$style5.' style="width: 75px; margin: 2% 5%; " '.$disable5.' onclick="bookseats('.$show_id.',this.value);" >Seat B2</button>
				<button id="seat_6" value="6" '.$style6.' style="width: 75px; margin: 2% 5%; " '.$disable6.' onclick="bookseats('.$show_id.',this.value);" >Seat A2</button>
														
				<img src="images/screen.jpg" style="margin-top: -5%; margin-left: 10%;"/>
			</div>
				<div style="background-color: rgb(28, 184, 65); width:25px; height:25px; border: 1px solid; display:inline-block; margin-left:15%;"></div> <p class="para" style="display:inline;">Available</p>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<div style="background-color: rgb(223, 117, 20); width:25px; height:25px; border: 1px solid; display:inline-block;"></div> <p class="para" style="display:inline;"> Booked </p>';
						
		 

		echo $seats;
	}
	

mysqli_close($con); 

?>