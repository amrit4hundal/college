<?php
error_reporting(0);
ini_set('display_errors', 0);

?>


<?php 

session_start();
if(!empty($_SESSION['user'])){
	$user = $_SESSION['user'];
}


if(isset($_POST['logout']) && $_POST['logout'] == 'logout' ){

	echo "Logged Out  :".$_SESSION['user'];
	session_destroy();

	//echo "</br>LoggedIn as :".$_SESSION['user'];
}
else if(isset($user) && $user =='admin' ){
	header('LoggedIn: True');
	echo "LoggedIn as :".$_SESSION['user'];
}
else{
	echo "Error Log In ";
}



 ?>