<!DOCTYPE html> 
<html lang="pl">
<head>
	<title>Hosts</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="refresh" content="5" />
	<link rel="Stylesheet" type="text/css" href="pit.css" />
</head>
<body>

<?php
	require_once "session_check.php";
	require_once "connect.php";				// DB parameters, connection, error messages 
	print "<TABLE>";
	print "<TR><TD>id</TD><TD>Name</TD><TD>Address</TD><TD>Port</TD><TD>Status</TD></TR>\n";
	$result_1 = mysqli_query ($connection, "SELECT * FROM hosts Order by id") 
				or die ("SQL query error: $db_name");
	while ($db_raw = mysqli_fetch_array ($result_1)) 
	{
		$idt   			= $db_raw [0];
		$friendly_name 	= $db_raw [1];
		$address 		= $db_raw [2];
		$port  			= $db_raw [3];
		$fp = @fsockopen ($address, $port, $errno, $errstr, 30);
		if ($fp) { $status = 'Ok'; } else { $status = 'Offline'; }
		print "<TR><TD>$idt</TD><TD>$friendly_name</TD><TD>$address</TD><TD>$port</TD><TD>$status</TD></TR>\n";
	}
	print "</TABLE>";		
?>
		
</body>
</html>
