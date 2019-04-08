<?php
error_reporting(0);
ini_set('display_errors', 0);

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/bulma.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Coiny|Concert+One|Exo+2|Gochi+Hand|Permanent+Marker|Play|Righteous|Russo+One|Viga|ZCOOL+KuaiLe|ZCOOL+QingKe+HuangYou" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<style type="text/css">
	#studentData,#dashboard,#templates,#Members,#addsem,#semDisplay{
		display: none;
	}
	</style>

 </head>
 <body>
 	<div class="column is-12 box has-text-centered " style="width: 90%; margin: auto;" >
 		 <?php  

			session_start();
			if(!empty($_SESSION['user'])){
				$user = $_SESSION['user'];
			}

			if(isset($_POST['logout']) && $_POST['logout'] == 'logout' ){

				echo " Not Logged In !!! ";
				session_destroy();
				header('Location:error.php');
				
				
			}
			else if(isset($user) && $user =='admin' ){
				header('LoggedIn: True');
				$adminLoggedIn = true;
				echo "Welcome :".$_SESSION['user'];
				 
			}
			else{
				echo "Error Log In ";
				header('Location:error.php');
			}
			





 		 ?>
 	</div>
 <div id="menuu" class=" box columns" style="width: 90%; margin: auto;" >
 	

 	<div  class=" box column is-2 ">
 		<aside class="menu">
			  <p class="menu-label">
			    General
			  </p>
			  <ul class="menu-list">
			    <!--<li><a id="a-dashboard" onclick="dashboard()">Dashboard</a></li>-->
			    <li><a id="a-studentData" onclick="studentData()">Student Data</a></li>
			    
			    
			  </ul>
			  <p class="menu-label">
			    Administration
			  </p>
			  <ul class="menu-list">
			   <!--
			    <li><a id="a-Members" onclick="Members()">Members</a></li>
			    <li>-->
			    <form action="admin.php" method="post" style="padding-left: 8px;">
			    	<input type="text" name="logout" style="display: none;" value="logout">
					  <input  class="button is-danger is-small" type="submit" value="Logout">
					
			    </form>
					  
				</li>

			  </ul>
			  
			 
		</aside>
 	</div>

 	<div id ="dashboard" class="column is-10 box ">
 		<p>dashboard</p>
 	</div>
 	
	<div id ="studentData" class="column is-10 box">

		 	<div class="tabs is-boxed is-small" style="margin-bottom: 15px;">
				  <ul>
				       <?php 
						require("db.php");
						$query  =  "SHOW TABLES FROM bcaresult like '%sem_%'";
						$result = mysqli_query($conn, $query );
						$table = mysqli_fetch_assoc($result);
						foreach ($table as $table) {
							echo "
							<li class='is-active' id='sem_ivLi' ><a   onclick='".$table."()'>".$table."</a></li>
							";
						}
						echo "<script type='text/javascript'>function ".$table."(){
							document.getElementById('semDisplay').style.display='block';
							document.getElementById('addsem').style.display='none';
							document.getElementById('sem_ivLi').classList.add('is-active');
							document.getElementById('addSemLi').classList.remove('is-active');
						}

						</script>";
			 			?>
				   <li  class="" id='addSemLi' ><a onclick="addSemester() ">Add Semester</a></li>
				  </ul>
				  
			</div>

			
			<div id="semDisplay" class="columns">
							
									<form action="fetchSem.php" method="post" target="iframee" style="margin: 0 0 5px 0; "   >
									<div class="box has-text-centered" style="padding: 2px 10px 2px 10px;width: 40%; margin: auto;">
									<button class="button is-small  is-info " type="submit" style=""  >Refresh</button>
									<button class="button is-small is-success " type="submit" style=""  >Update all</button>
									</form>

									<a class="button is-small  is-primary" onclick="showsddEntery()" style=""  >Add Entry</a>
			</div>
									

				
				<div id="undersemDisplay" class="column  box " style="width: 100%: margin:auto; display: none;" >
									<table id='iframeDbtable' class='animated fadeIn table  is-bordered is-striped is-narrow is-hoverable is-scrollable' >

									<tr class='tr'>
										<th class='th'>Student Name</th>
										<th class='th'>Roll No</th>
										<th class='th'>Subject</th>
										<th class='th'>Marks</th>
										<th class='th'>Max</th>
										<th class='th'>Modify</th>
									</tr>

									<tr class='tr'>
										<td class='td'><input id='inp1' class="input"></input></td>
										<td class='td'><input id='inp2' class="input"></input></td>
										<td class='td'><input id='inp3' class="input"></input></td>
										<td class='td'><input id='inp4' class="input"></input></td>
										<td class='td'><input id='inp5' class="input"></input></td>
										<td class='td'><button class='button is-primary' onclick="SendEntry()" >Add</button></td>
									</tr>

									</table>
				</div>

				<div class="box column ">
					
					<iframe  name="iframee" id="iframee" src="" width="100%" height="500px">
						
					</iframe>

					
				</div>
			</div>

					<div id="addsem" class="columns">
					<form>
							<div class="box   column is-5 field has-addons is-centered" style="margin: auto;">
							
							<label>Name:</label>
						  	<input  id="seminput" class="input is-small" type="text" placeholder="eg: sem_iv"></input>
						  	<button class="button is-small is-primary" type="submit" onclick="addsemedb();">Add</button>
						  	
						  	</div>
						
			 	 		</form>
					
					
					</div>
		 	 	   
	</div>

	<div id ="templates" class="column is-10 box">
		
	</div>

	<div id ="Members" class="column is-10 box">
		<p>members</p>
	</div>









 </div>
<div class="box has-text-centered" style="width: 90%; margin: auto;">
	<footer > (BCA VI Project 2019 : Government Collage Gurdaspur)</footer>
</div>

 </body>
<script type="text/javascript">
	function studentData(){
		document.getElementById("studentData").style.display='block';
		document.getElementById("dashboard").style.display='none';
		
		document.getElementById("Members").style.display='none';

		document.getElementById("a-studentData").classList.add("is-active");
		document.getElementById("a-dashboard").classList.remove("is-active");
		
		document.getElementById("a-Members").classList.remove("is-active");
		
	}

	function dashboard(){
		document.getElementById("dashboard").style.display='block';
		document.getElementById("studentData").style.display='none';
		
		document.getElementById("Members").style.display='none';

		document.getElementById("a-dashboard").classList.add("is-active");
		document.getElementById("a-studentData").classList.remove("is-active");
		
		document.getElementById("a-Members").classList.remove("is-active");
	}

	

	function Members(){
		document.getElementById("Members").style.display='block';
		document.getElementById("dashboard").style.display='none';
		document.getElementById("studentData").style.display='none';
		

		document.getElementById("a-Members").classList.add("is-active");
		document.getElementById("a-dashboard").classList.remove("is-active");
		
		document.getElementById("a-studentData").classList.remove("is-active");

	}

 	function addSemester(){
 		document.getElementById("addsem").style.display='block';
 		document.getElementById("addSemLi").classList.add("is-active");
		document.getElementById("sem_ivLi").classList.remove("is-active");			
 		document.getElementById("semDisplay").style.display='none';
 		
 		
 	}
	
	function addsemedb(){
		
		
		var sem = document.getElementById("seminput").value;
		confirm("Add Semester:   "+sem);
		var xhttp = new XMLHttpRequest();
							    xhttp.onreadystatechange = function() {
							    if (this.readyState == 4 && this.status == 200) {
							     console.log(this.response);
								 alert(this.response);
							    	//document.getElementById('undersemDisplay').innerHTML = this.response;
							    	//document.getElementById('undersemDisplay').style.display='block';
							    }
							  };
				xhttp.open('POST', 'updateTables.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('sem='+sem +
				'&Query=addsem');
			
	}
	
 		function showsddEntery(){
 			document.getElementById('undersemDisplay').style.display='block';
	
	}

	function SendEntry(){

		var studentname = document.getElementById('inp1').value;
		var rollNumber = document.getElementById('inp2').value;
		var subject = document.getElementById('inp3').value;
		var studentMarks = document.getElementById('inp4').value;
		var Max_Marks = document.getElementById('inp5').value;

		

		

		
								var xhttp = new XMLHttpRequest();
							    xhttp.onreadystatechange = function() {
							    if (this.readyState == 4 && this.status == 200) {
							     console.log(this.response);
							    	//document.getElementById('undersemDisplay').innerHTML = this.response;
							    	//document.getElementById('undersemDisplay').style.display='block';

							     
							    }
							  };
							  xhttp.open('POST', 'updateTables.php', true);
							  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							  xhttp.send(
							  'studentname='+studentname+
							  '&rollNumber='+rollNumber+
							  '&subject='+escape(subject)+
							  '&studentMarks='+studentMarks+
							  '&Max_Marks='+Max_Marks+'&Query=insert');
							

		document.getElementById('undersemDisplay').style.display='none';

	}






</script>
 </html>