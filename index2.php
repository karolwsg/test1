<?php require_once "session_check.php"; ?>

<!DOCTYPE html> 
<html lang="pl">
<head>
	<title>Test</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="Stylesheet" type="text/css" href="pit.css" />
</head>

<body>

<header>
  <?php
    echo $_SESSION['username']." ".'<a href="logout.php">Logout</a>';
 ?>
</header>

<nav>
  <ul>
	<li><a href="index2.php?id=hosts">Hosts</a></li>
	<li><a href="index2.php?id=tests">Tests</a></li>
	<li><a href="index2.php?id=login_logs">Logs</a></li>
 </ul>
</nav> 
 
<article>
 <br>
   <?php
	if (isset($_GET['id'])) { include ($_GET['id'].'.php');} else { include ('hosts.php'); }
   ?>
</article>
   
<footer>  
Stopka :)
</footer>

</body>
</html>
