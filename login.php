<?php
error_reporting(0);
ini_set('display_errors', 0);

?>

<?php 
require('db.php');
session_start();

if(isset($_POST['user']) && !empty($_POST['pass']) ){
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$query      =  "SELECT * FROM users WHERE username = '$username' and password = '$password' ";
	$result      = mysqli_query($conn, $query );

	if (mysqli_num_rows($result) == 1) {
					while($rowArray = mysqli_fetch_assoc($result)){
							$_SESSION['user'] = 'admin';
							$user = $_SESSION['user'];
							header('Location: admin.php');
							
						
					}

				}
	else{
		echo "Wrong Username or Password !";
		header('Location: error.php');
	}

	}
?>

