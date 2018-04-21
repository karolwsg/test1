<!DOCTYPE html> 
<html lang="pl">
<head>
	<title>Logs</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="Stylesheet" type="text/css" href="pit.css" />
</head>
<body>

<?php
	require_once "session_check.php";
	require_once "connect.php";			// DB parameters, connection, error messages
	$result_1 = mysqli_query ($connection, "SELECT * FROM login_history ORDER BY id DESC") 
				or die ("SQL query error: $db_name");
	print "Login History <br />";
	print "<TABLE CELLPADDING=10 BORDER=2 >";
	print "<TR><TD>ID</TD><TD>Date</TD><TD>Username</TD></TR>\n";
	while ($db_raw = mysqli_fetch_array ($result_1)) 
	{
		$id 		= $db_raw[0];
		$ip 		= $db_raw[1];
		$username	= $db_raw[2];
		print  "<TR><TD>$id</TD><TD>$ip</TD><TD>$username</TD></TR>\n";
	}
	print "</TABLE>";
?>
 </body>
</html>
