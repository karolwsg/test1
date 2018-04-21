<?php	            
	session_start();
	if ((isset($_SESSION['loggedin'])) && ($_SESSION['loggedin']==true))
	{
		header('Location: index2.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<link rel="Stylesheet" type="text/css" href="pit.css" />
	<title>Login</title>
</head>
<body>
	<H2>Podaj dane logowania</H2>
	<form method="post">
		Username: <br /> <input type="text" 	name="username" maxlength="20" size="20" /> <br />
		Password: <br /> <input type="password" name="password" maxlength="20" size="20" /> <br /><br />
		<input type="submit" value="Log in" />
	</form>

<?php
	if ((isset($_POST ['username'])) && (isset($_POST ['password'])))
	{
		session_start();
		$username = $_POST ['username']; 
		$password = $_POST ['password']; 
		require_once "connect.php"; 										// DB parameters, connection, error messages 
		$result_1 = mysqli_query($connection, "SELECT * FROM users WHERE username='$username'")
					or die ("SQL query error: $db_name");
		$db_raw = mysqli_fetch_array($result_1); 
		if(!$db_raw) 														// no user with such username
		{
			mysqli_close($connection); 
			echo "Invalid username or password!!!"; 
		}
		else
		{ 
			if($db_raw['password']==$password) 
			{	
				$_SESSION ['loggedin'] = true;
				$_SESSION ['username']  = $db_raw ['username'];
				unset ($_SESSION ['error']);
				// username -> BD/login_logs (begining)
				$username = $db_raw ['username'];
				$result_3 = mysqli_query ($connection,"INSERT INTO login_history (username) VALUES ('$username')")
							or die ("SQL query error: $db_name");
				mysqli_close($connection);
				header ('Location: index2.php');
			}
			else
			{
				mysqli_close($connection);
				echo "Invalid username or password.";  // only username is correct, but password not !!
			}
		}
	}
?>

</body>
</html>