<?php
$con=mysqli_connect("localhost","root","","bookyourshow");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

	$show_id=$_POST['show_id'];
	$seat_id=$_POST['seat_id'];
	$timing=$_POST['timing'];
	
	if(mysqli_query($con, "INSERT INTO bookings (`show_id`, `timing_id`, `seat_id`) VALUES ($show_id, $timing, $seat_id)")){
			
		$result = mysqli_query($con,"SELECT * FROM bookings WHERE show_id=".$show_id." AND timing_id=".$timing." AND seat_id=".$seat_id);
	
		$row = mysqli_fetch_all($result);
		
		if(count($row)>0){
			echo $row[0][0];
		}
	}else{
		echo "error";
	}
	
	
mysqli_close($con); 	
?>