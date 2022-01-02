<?php
	$conn=mysqli_connect("localhost", "root", "", "pengguna");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>