<?php
error_reporting(0);
ini_set('display_errors', 0);

?>




<?php 

 if(isset($_POST["rollNumber"])){
	$rollNumber = $_POST["rollNumber"];
	$correct = "";
	for ($i=10721601941; $i<10721601997 ; $i++)
    {
	   	if($rollNumber == $i )
	   	{
	   	 $correct = "true";
	   	}
    }

    if($correct == "true"){
    	    $servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "bcaresult";
			$total = 0;
			$gtotal  = 0;

			// Create connection
			$conn = mysqli_connect($servername, $username, $password,$dbname);

			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			//echo "DB Connected successfully".  "<br>";

			$query  = "SELECT * FROM sem_iv WHERE rollNumber = $rollNumber ";
			$result = mysqli_query($conn, $query );

				if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);

			    	//var_dump($row);
					echo "<table id='nameplate' class='table is-size-6 is-bordered is-striped is-narrow is-hoverable' >
						
							<tr class='tr'><th class='th'>Name:</th><th class='th'>".$row['studentname']."</th></tr>
							<tr class='tr'><th class='th'>Roll No:</th><th class='th'>".$rollNumber."</th></tr>
						 
					 </table>
					 <table id='nameplate' class='table is-size-6 is-bordered is-striped is-narrow is-hoverable'>
					<tr class='tr'><th class='th'>Subject</th><th class='th'>Marks</th><th class='th'>Max</th></tr>";
					echo "<tr class='tr '><td class='td'>".$row['subject']."</td><td class='td'>". $row['studentMarks']."</td><td class='td'>".$row['Max_Marks']."</td></tr>";

					$i=2;
					$total  =  $total + $row['studentMarks'];
				    $gtotal =  $gtotal + $row['Max_Marks'];
				    while($row = mysqli_fetch_assoc($result)) {

				    	//var_dump($row['studentMarks']);
				    	//var_dump($row['Max_Marks']);
				    	if($i!=5){

				    		$total =  $total + $row['studentMarks'];
				    		$gtotal =  $gtotal + $row['Max_Marks'];
				    	}
			
				    	
				    	
				    	//echo $i;

				    	echo "<tr class='tr '><td class='td'>".$row['subject']."</td><td class='td'>". $row['studentMarks']."</td><td class='td'>".$row['Max_Marks']."</td></tr>";

				    	$i=$i+1;
	    
				    }

				    echo "<tr class='tr'><th class='th'>Total:</th><th class='th'>".$total."</th>
				    <th class='th'>".$gtotal."</th></tr>";

			    	echo "</table>";
			    	
				} else {
				    echo "Result Not Availabel";
				}

			mysqli_close($conn);
    }

}

?>