<?php

		$conn = mysqli_connect('localhost','root','','dbank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
