<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Database Connection</title>
</head>

<body>
	<?php
		//define all required information
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname ="hpsf_booking";

	//create a connection with mySQL
	$connect = mysqli_connect($hostname, $username, $password, $dbname) or DIE ("Connection Failed");
	?>
</body>
</html>