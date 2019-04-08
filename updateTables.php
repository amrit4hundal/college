<?php
session_start();

if($_SESSION['user'] == 'admin' )
	{
		header('LoggedIn: True');
		$adminLoggedIn = true;
		require("db.php");
		
		$studentname	=mysqli_real_escape_string($conn,$_POST['studentname']);
		$rollNumber		=mysqli_real_escape_string($conn,$_POST['rollNumber']);
		$subject		=mysqli_real_escape_string($conn,$_POST['subject']);
		$studentMarks	=mysqli_real_escape_string($conn,$_POST['studentMarks']);
		$Max_Marks		=mysqli_real_escape_string($conn,$_POST['Max_Marks']);
		$PostQuery		=mysqli_real_escape_string($conn,$_POST['Query']);

		if(isset($PostQuery) && $PostQuery == "insert" )
			{
				//echo "insert </br>";
				$insert_query  = "INSERT INTO  `sem_iv` (`rollNumber`,`studentname`,`subject`,`studentMarks`,`Max_Marks`) VALUES ('$rollNumber','$studentname','$subject','$studentMarks','$Max_Marks')";
				//echo $insert_query;

				$insert_query_result = mysqli_query($conn, $insert_query ) or die('Error! Please Recheck Data. INSERT query Not Sent');



			}


		if(isset($PostQuery) && $PostQuery == "update")
			{
				$query  = "UPDATE `sem_iv` SET `rollNumber`='$rollNumber',`studentname`='$studentname',`subject`='$subject',`studentMarks`='$studentMarks',`Max_Marks`='$Max_Marks' WHERE `subject` = '$subject' AND `rollNumber`='$rollNumber'	";

				$query1 = "SELECT * FROM sem_iv WHERE rollNumber = $rollNumber ";
				$result = mysqli_query($conn, $query );
				$result1 = mysqli_query($conn, $query1 );

						if (mysqli_num_rows($result1) > 0)
						 	{
								$row = mysqli_fetch_array($result1);
								echo "<table id='nameplate' class='table is-size-6 is-bordered is-striped is-narrow is-hoverable'>
								<tr class='tr'><th class='th'>Subject</th><th class='th'>Marks</th><th class='th'>Max</th></tr>";
								echo "<tr class='tr '><td class='td'>".$row['subject']."</td><td class='td'>". $row['studentMarks']."</td><td class='td'>".$row['Max_Marks']."</td></tr>";
								
								 while($row = mysqli_fetch_array($result1))
								 	{
								 	//echo $row['studentMarks'];
								 	echo "<tr class='tr '><td class='td'>".$row['subject']."</td><td class='td'>". $row['studentMarks']."</td><td class='td'>".$row['Max_Marks']."</td></tr>";
							 		}
					    		echo "</table>";
							}
		
		
				
			}

			if(isset($PostQuery) && $PostQuery == "delete")
			{
				//echo "delete </br>";

				$delete_query  = "DELETE FROM `sem_iv` WHERE `rollNumber`='$rollNumber' AND `studentname`='$studentname'AND `subject`='$subject' AND `studentMarks`='$studentMarks' AND `Max_Marks`='$Max_Marks'";

				echo $delete_query;

				$delete_query_result = mysqli_query($conn, $delete_query ) or die('Error! Please Recheck Data. delete query Not Sent');


			}
			
			if(isset($PostQuery) && $PostQuery == "addsem")
			{
				
				
				echo "Sem added successfully";

				//$delete_query_result = mysqli_query($conn, $delete_query ) or die('Error! Please Recheck Data. delete query Not Sent');


			}

	}
else
	{
		echo "Error Log In  or Fetching data";
	}


?>