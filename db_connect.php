<?php 
	// connect to the database
	$conn = mysqli_connect('localhost', 'root','', 'CC_Couriers',4306);
	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
?>	