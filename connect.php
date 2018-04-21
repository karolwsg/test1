<?php
	$db_host	 = "localhost";
	$db_user 	 = "elux1995_baza1";
	$db_password 	= "Tumman123";
	$db_name 	 = "elux1995_baza1";
	$connection = mysqli_connect ($db_host, $db_user, $db_password, $db_name);
	if (!$connection) 
	{
		echo "MySQL connection problem. " . PHP_EOL;
		echo "Errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}
?>