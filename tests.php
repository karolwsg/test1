<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<title> Testy </title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="Stylesheet" type="text/css" href="pit.css" />
</head>

<body>
<H2>Testy wykrywania rozdzielczości</H2>


<?php
	$screen_width = "<script>document.write(screen.width); </script>";
	$screen_height = "<script>document.write(screen.height); </script>";
	$window_inner_width = "<script>document.write(window.innerWidth); </script>";
	$window_inner_height = "<script>document.write(window.innerHeight); </script>";
	echo $screen_width."x".$screen_height." Inner: ".$window_inner_width."x".$window_inner_height;
?>

</body>
</html>