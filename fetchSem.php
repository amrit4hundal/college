<?php
session_start();


if($_SESSION['user'] == 'admin' ){
	header('LoggedIn: True');
	$adminLoggedIn = true;

	require("db.php");
	$query  =  "SELECT * FROM sem_iv ";
	$result = mysqli_query($conn, $query );

	echo "<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel='stylesheet' type='text/css' href='css/bulma.min.css'>
	</head>
	<body>

	</body>
	</html>";

	echo "
	<html>
	<head>
	</head>
	<body>
	<div id='semUpdateModal'></div>
	<table id='iframeDbtable' class='table  is-bordered is-striped is-narrow is-hoverable is-scrollable' >
	<tr class='tr'><th class='th'>Student Name</th><th class='th'>Roll No</th><th class='th'>Subject</th><th class='th'>Marks</th><th class='th'>Max</th><th class='th'>Update</th><th class='th'>Delete</th></tr>";

	$i=0;
	while($row = mysqli_fetch_assoc($result)){
		echo "


		<tr class='tr'>
		<td class='td' style='width:200px;'> <input  id='studentname".$i."'  name='studentname'   class='input' type='text' value='".$row['studentname']."'      />    </td>
		<td class='td' style='width:140px;'> <input  id='rollNumber".$i."'   name='rollNumber'    class='input' type='text' value='".$row['rollNumber']."'         />     </td>
		<td class='td' style='width:440px;'> <input  id='subject".$i."' 	   name='subject'       class='input' type='text' value='".$row['subject']."'         />        </td>
		<td class='td' style='width:50px;'>  <input  id='studentMarks".$i."' name='studentMarks'   class='input' type='text' value='".$row['studentMarks']."'   />  </td>
		<td class='td'  style='width:70px;'> <input  id='Max_Marks".$i."'    name='Max_Marks'     class='input' type='text' value='".$row['Max_Marks']."'       />      </td>


														
		<td class='td' ><button   onclick='update(".$i.");' id='Update".$i."' class='button is-primary'  >Update</button>	 </td>
		<td class='td' ><button   onclick='deletetable(".$i.");' id='delete".$i."' class='button is-primary'  >Delete</button>	 </td>
		
		</tr>
		";
		$i=$i+1;
	}

	echo "</table>
	<script type='text/javascript' >
	function update(i){
		var userConfirmOk = confirm('Confirm Update ?')	;

		if(userConfirmOk == true){
			var studentname = 'studentname' + i;
			var rollNumber = 'rollNumber' + i;
			var subject = 'subject' + i;
			var studentMarks = 'studentMarks' + i;
			var Max_Marks = 'Max_Marks' + i;

			var studentname = document.getElementById(studentname).value;
			var rollNumber = document.getElementById(rollNumber).value;
			var subject = document.getElementById(subject).value;
			var studentMarks = document.getElementById(studentMarks).value;
			var Max_Marks = document.getElementById(Max_Marks).value;

			var payload = 'studentname';

		
								var xhttp = new XMLHttpRequest();
							    xhttp.onreadystatechange = function() {
							    if (this.readyState == 4 && this.status == 200) {
							     console.log(this.response);
							    	document.getElementById('semUpdateModal').innerHTML = this.response;
							    	//document.getElementById('semUpdateModal').style.display='block';

							     
							    }
							  };
							  xhttp.open('POST', 'updateTables.php', true);
							  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							  xhttp.send(
							  'studentname='+studentname+
							  '&rollNumber='+rollNumber+
							  '&subject='+escape(subject)+
							  '&studentMarks='+studentMarks+
							  '&Max_Marks='+Max_Marks+'&Query=update'  );


		}
		

							  					
	}


	function deletetable(i)
	{
		
		var userConfirmOk = confirm('Confirm delete ?')	;

		if(userConfirmOk == true){

			var studentname = 'studentname' + i;
			var rollNumber = 'rollNumber' + i;
			var subject = 'subject' + i;
			var studentMarks = 'studentMarks' + i;
			var Max_Marks = 'Max_Marks' + i;

			var studentname = document.getElementById(studentname).value;
			var rollNumber = document.getElementById(rollNumber).value;
			var subject = document.getElementById(subject).value;
			var studentMarks = document.getElementById(studentMarks).value;
			var Max_Marks = document.getElementById(Max_Marks).value;

			var payload = 'studentname';

		
								var xhttp = new XMLHttpRequest();
							    xhttp.onreadystatechange = function() {
							    if (this.readyState == 4 && this.status == 200) {
							     console.log(this.response);
							    	document.getElementById('semUpdateModal').innerHTML = this.response;
							    	//document.getElementById('semUpdateModal').style.display='block';

							     
							    }
							  };
							  xhttp.open('POST', 'updateTables.php', true);
							  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							  xhttp.send(
							  'studentname='+studentname+
							  '&rollNumber='+rollNumber+
							  '&subject='+escape(subject)+
							  '&studentMarks='+studentMarks+
							  '&Max_Marks='+Max_Marks+'&Query=delete'  );



		}
							  								
	}



	</script>
	</body></htmL>";
		
	 
}

else{
	echo "Error Log In  or Fetching data";
}

						

?>