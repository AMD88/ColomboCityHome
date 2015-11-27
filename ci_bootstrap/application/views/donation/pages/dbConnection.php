<!DOCTYPE HTML>
<html>
	<head>
	  	<title>
	  		Database Connection
	  	</title>
	</head>

	<body>
		<?php

			$hosatname = "mysql.hostinger.co.uk";
			$username = "u547568786_root";
			$password = "ucsc1234";

			$conn = mysqli_connect($hosatname, $username, $password);

			if(!$conn){
				die("Error!");
			}else{
				//echo "Database connection is succeeded!";
			}

			mysqli_select_db($conn, "donors") or die("NO Database exists!");
		?>
	</body>
</html>