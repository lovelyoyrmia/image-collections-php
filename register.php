<?php
	require_once 'conn.php';
	if(isset($_POST['register'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		mysqli_query($conn, "INSERT INTO `login` VALUES('$username', '$password')") or die(mysqli_error());
		echo "<center><h4 class='text-success'>Successfully registered!</h4></center>";
	}
?>