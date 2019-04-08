<?php
error_reporting(0);
ini_set('display_errors', 0);

?>


<?php

	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "root";
	$dbname = "bcaresult";
	
	$conn = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}


?>