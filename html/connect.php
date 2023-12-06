
<?php
	$servername = "final-project-db.cfnogwc70mx8.us-east-1.rds.amazonaws.com";
	$username = "admin";
	$password = "G0n3Phi\$hing";
	$dbname = "final-project-db";
	
	//Connect to database
	$conn = mysqli_connect($servername, $username, $password, $dbname)
		or die("bad connection: " . mysqli_connect_error());
	return $conn;
?>
