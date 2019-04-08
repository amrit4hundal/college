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
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script src="/js/custom.js"></script>

	<style type="text/css">
		div.background {
		  background: url(images/gradient1.jpg)no-repeat center center fixed;
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		  height: 130vh;
		  
		  
		}

		div.transbox {
		  background-color: #fff;
		  opacity: 0.8;
		  font-weight: bold;
		  
		}

		div.transbox1{
			opacity: 0.9;
		}

		

		#searchBox{
			border-radius: 200px;
		}

		#footer{
			  opacity: 0.4;
			  border-radius: 50px;
			  margin: auto;



			  
			 
		}
		#footer p {
			  color: #000;
			 
		}

		

		#preloader{
			position: fixed;
			z-index: 9999;
			width: 100%;
			height: 100vh;
			background: #fff  url('images/loader2.svg') no-repeat center;
		}

		.navbar-start a {
			border: 1px dotted black;
			
			border-radius: 0px 10px 0px 10px;
			box-shadow: 5px 10px #888888;
			margin-right: 7px;

		}

		

		#sem4marquee img {
			border-radius: 0px 20px 0px 20px;

		}


		@media only screen and (max-width: 768px) {
  			#navbarTransbox{
  				margin-left: 50px;
  			}
  		}

  		.navbar-brand img{
  			box-shadow: 5px 10px #888888;
  		}

  		nav{
  			margin-bottom: 3px;
  			margin-top: -3px;
  		}



	</style>

	
</head>
<body  onload="preloader();" >
<div id="preloader">
	
</div>

<div class=" background  ">
	<div class="container">

		<div class="columns    ">
				<div class="transbox box column  " id="navbar" style="margin-top: 20px; border-radius: 0px 30px 0px 30px" >
					<nav class="   navbar animated  " id="navanimate" role="navigation" aria-label="main navigation">
						  <div class="navbar-brand">

						  		

							    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
							      <span aria-hidden="true"></span>
							      <span aria-hidden="true"></span>
							      <span aria-hidden="true"></span>
							    </a>
							  </div>

								  <div id="navbarBasicExample" class="navbar-menu">
								    <div class="navbar-start">
									
									<img src="images/logo.png" href='#' width="200" height="10" style="margin-right: 10px; border-radius: 0px 20px 0px 20px; box-shadow: 5px 10px #888888;">
									
								      <a  href="#" class="navbar-item is-active">
								        Home
								      </a>

								      <a class="navbar-item" onclick="showembededSYL()">
								        Syllabus 
								      </a>
								     
									  
									  	<marquee class="animated navbar-item" WIDTH=600px id="sem4marquee" behavior="" direction="right" scrollamount="5" style="visibility: visible;" onmouseover="this.stop();" onmouseout="this.start();">

								      &#9733; Dummy Notification &#9733; Dummy Notification &#9733; Dummy Notification &#9733;  Dummy Notification &#9733; 
									  </marquee>
								      

								      
								      
								    </div>
								    <div class="navbar-end">
								      <div class="navbar-item">
								        <div class="buttons">
								          <a class="button is-primary is-rounded is-size-7" onclick="showLogin()">
								            <strong>
								            <span class="icon is-small">
						      			<i class="fa fa-user-circle" aria-hidden="true"></i>
						    		   </span>&nbsp Admin</strong>
								          </a>
								          
								        </div>
								      </div>
								    </div>

					  
						   
						    
					   </div>

					</nav>
					 		
				
	 			</div><!-- column -->

	</div><!-- columns-->

	<div class="columns">
<div class="  column  is-12  " style="padding-top: 5px;">
		<div id="navbarTransbox" class=" box transbox  is-hidden-mobile is-medium" style="border-radius: 0px 50px 0px 50px;padding-top: 5px;padding-bottom: 5px;padding-left: 10px;padding-right: 10px; margin-bottom: 5px;">
			<div id="tabs" class="  tabs animated  is-centered is-toggle is-toggle-rounded " style="margin-bottom: 0px;" >
			   <ul class="transbox1">
			    <li class="ulli" style="color: rgb(0, 0, 0);">
			      <a onclick="SetSem(1);">
			        <span class="icon is-small"><i class="fas fa-graduation-cap"></i></span>
			        <span>Semester I 2016</span>
			      </a>
			    </li>
			    <li class="ulli" style="opacity: 1; color: rgb(0, 0, 0);">
			      <a onclick="SetSem(2);">
			        <span class="icon is-small"><i class="fas fa-graduation-cap"></i></span>
			        <span>Semester II 2016</span>
			      </a>
			    </li>
			    <li class="ulli " style="color: rgb(0, 0, 0); opacity: 1;">
			      <a onclick="SetSem(3);">
			        <span class="icon is-small"><i class="fas fa-graduation-cap"></i></span>
			        <span>  Semester III 2017</span>
			      </a>
			    </li>
			    <li class="ulli" style="color: rgb(0, 0, 0);">
			      <a onclick="SetSem(4);">
			        <span class="icon is-small"><i class="fas fa-graduation-cap"></i></span>
			        <span> Semester IV 2017</span>
			      </a>
			    </li>
			     <li class="ulli" style="color: rgb(0, 0, 0);">
			      <a onclick="SetSem(5);">
			        <span class="icon is-small"><i class="fas fa-graduation-cap"></i></span>
			        <span> Semester V  2018</span>
			      </a>
			    </li>
			     <li class="ulli" style="color: rgb(0, 0, 0);">
			      <a onclick="SetSem(6);">
			        <span class="icon is-small"><i class="fas fa-graduation-cap"></i></span>
			        <span> Semester VI 2019</span>
			      </a>
			    </li>
			  </ul>
		    </div>

		    <div id="listUnderSem1" class="column is-4 is-offset-4 " style="display: none;">
		    	<table class="table   is-bordered is-striped is-narrow is-hoverable is-fullwidth animated fadeIn">
		    	<tr><td>Introduction to Programming – C</td></tr>
		    	<tr><td>Intro to Information Technology</td></tr>
		    	<tr><td>Applied & Discrete Mathematics</td></tr>
		    	<tr><td>Communication Skills in English – I</td></tr>
		    	<tr><td>Punjabi / Mudli Punjabi (Compulsory)</td></tr>
		    	<tr><td> (MS Office 2010 C Programming)</td></tr>
		    	 
				</table>

		    </div>
		    <div id="listUnderSem2" class="  column is-4 is-offset-4 " style="display: none;">
		    	<table class="table   is-bordered is-striped is-narrow is-hoverable is-fullwidth animated fadeIn">
		    	<tr><td>Introduction to Programming – C ++</td></tr>
		    	<tr><td>Principles of Digital Electronics</td></tr>
		    	<tr><td>Numerical Methods & Statistical Techniques</td></tr>
		    	<tr><td>Communication Skills in English – II (Th.35+Pr.15)</td></tr>
		    	<tr><td>Punjabi / Mudli Punjabi (Compulsory)</td></tr> 
		    	<tr><td>Practical (Advanced C++ Programming)</td></tr>  

				</table>

		    </div>
		    <div id="listUnderSem3" class=" column is-4 is-offset-4" style="display: none;">
		    	<table class="table   is-bordered is-striped is-narrow is-hoverable is-fullwidth animated fadeIn">
		    	<tr><td>Computer Architecture</td></tr>
		    	<tr><td>Database Management System</td></tr>
		    	<tr><td>Computational Problem Solving Using Python</td></tr>
		    	<tr><td>Environmental Studies – I (Compulsory)</td></tr>
		    	<tr><td>Programming Lab – Python</td></tr>
		    	<tr><td>Programming Lab – Oracle</td></tr> 
				</table>

		    </div>
		    <div id="listUnderSem4" class=" column is-4 is-offset-4" style="">
		    	<table class="table   is-bordered is-striped is-narrow is-hoverable is-fullwidth animated fadeIn">
		    	<tr><td>Data Structure & File Processing</td></tr>
		    	<tr><td>Information Systems</td></tr>
		    	<tr><td>Internet Applications</td></tr>
		    	<tr><td>System Software</td></tr>
		    	<tr><td>Lab – Data Structures Implementation using C++</td></tr> 
		    	<tr><td>Lab – Web Designing and use of Internet</td></tr> 
				</table>

		    </div>
		    <div id="listUnderSem5" class=" column is-4 is-offset-4" style="display: none;">
		    	<table class="table   is-bordered is-striped is-narrow is-hoverable is-fullwidth animated fadeIn">
		    	<tr><td>Computer Networks</td></tr>
		    	<tr><td>Web Technologies</td></tr>
		    	<tr><td>Operating System</td></tr>
		    	<tr><td>JAVA Programming Language </td></tr>
		    	<tr><td>Lab based on JAVA Programming Language</td></tr>  
		    	<tr><td>Lab based on ASP.NET</td></tr>  
				</table>

		    </div>
		    <div id="listUnderSem6" class=" column is-4 is-offset-4" style="display: none;">
		    	<table class="table   is-bordered is-striped is-narrow is-hoverable is-fullwidth animated fadeIn">
		    	<tr><td>Computer Graphics</td></tr>
		    	<tr><td>Software Engineering</td></tr>
		    	<tr><td>Lab. Implementation of Applications of Computer
Graphics in C++/C</td></tr>
		    	<tr><td> Project</td></tr>  
				</table>

		    </div>
		    
		

		</div>
		
		<div id="searchBox"  class="box transbox "  style="margin-left: 10%;margin-right: 10%;margin-bottom: 2px;margin-top: 2px; border-radius: 0px 30px 0px 30px">
		<div id="search"  onmouseover="OpacityAdd();" class="animated   has-text-centered  " >
		
			<label class="label">Enter Roll Number Here</label>
			<input id="roll" class="  input has-text-centered is-size-6 " name="rollNumber" type="text" placeholder="10721601941-97" style="width: 50%; border: 1px solid black;"></input><br>
			<button id ="searchBtn" class=" button is-info is-focused is-rounded    has-text-centered " style="margin-top: 5px; margin-bottom: -3%;"  onclick="validateForm()">&nbsp<span class="icon is-large"><i class="fas  fa-search"></i></span>&nbsp</button>
			
		
		</div>
			
		</div>
		
		 
			<div  class="modal" >
			 <div class="modal-background transbox1 "></div>
				  <div class="modal-content  mymodal animated flipInY  " >
				     <div class="box  has-text-centered ">
				      <button class="delete is-medium" aria-label="close" onclick="closeModal()"  ></button>
				     								  
						<div id="TableInModal" style="margin: 0 5% 0 5%;" >
								
								
						</div>
									   
					</div>						 
				    
				  </div>

		    </div><!-- class="modal"-->
	
	
</div><!-- column -->
			

	</div><!-- columns-->

	
	<div  class="modal" >
	 	<div class="modal-background"></div>
		  <div class="modal-content animated fadeIn" >
				     
				<div class="box has-text-centered ">
				<button class="delete is-medium" aria-label="close" onclick="closeLogin()" style= "margin-left: 0%;margin-top: -3%;"></button>
				<form action="login.php" target="_blank" method="POST">

						<p class="control has-icons-left">
	                    <input id="user" class="input" name="user" type="text" placeholder="Userame">
	                    <span class="icon is-small is-left">
					      <i class="fas fa-user"></i>
					    </span>
	          		</p>

	              <p class="control has-icons-left">
	                <input id="pass" class="input"  name="pass" type="password" placeholder="Password">
	                <span class="icon is-small is-left">
				      <i class="fas fa-lock"></i>
				    </span>
	              </p>

	            <p class="control">
	              <label class="checkbox">
	                <input type="checkbox">
	                Remember me
	              </label>
	            </p>

	            <p class="control">
	            
	            	<button type="submit" class="button is-primary is-medium is-fullwidth" >
	                <i class="fa fa-user"></i>
	               &nbsp Login
	              </button>
	           
	              
	            </p>			 

	           </form>
				</div> 
		  </div>
	</div><!-- class="modal"-->
	<div class="column " >
		<marquee class="animated " id="sem4marquee" behavior="alternate" direction="left" scrollamount="6" style="visibility: visible;" onmouseover="this.stop();" onmouseout="this.start();">

	    <img src="images/4/1.jpg" width="130" height="50" alt="Natural" />
	    <img src="images/4/2.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/3.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/4.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/5.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/1.jpg" width="130" height="50" alt="Natural" />
	    <img src="images/4/2.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/3.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/4.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/5.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/1.jpg" width="130" height="50" alt="Natural" />
	    <img src="images/4/2.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/3.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/4.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/5.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/1.jpg" width="130" height="50" alt="Natural" />
	    <img src="images/4/2.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/3.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/4.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/5.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/1.jpg" width="130" height="50" alt="Natural" />
	    <img src="images/4/2.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/3.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/4.jpg" width="130" height="90" alt="Natural" />
	    <img src="images/4/5.jpg" width="130" height="90" alt="Natural" />
	   

	  </marquee>
	</div >
	<div class="modal" id="embededSYL">
		<div class="modal-background transbox1 ">
			
		</div>

			<div class="modal-content  mymodal animated fadeIn  " >
				<div class=" has-text-centered"><button class="delete is-medium" aria-label="close" onclick="closeembededSYL()"  ></button></div>
				<div class=" box has-text-centered ">

					<embed src="images/BCA.pdf" width="600px" height="600px" />	
				</div>
			</div>

		
	</div>
					




<div  id="footer" class=" transbox  has-text-centered subtitle is-7"   >
	<footer > <p >(BCA VI Project 2019: Government Collage Gurdaspur)</p></footer>
</div>


	

</div>		

</div>




</div> 

<div>
	<input type="text" id="sem"  name="sem" value=""  style="display: none;"></input>
</div>

			


</body>
</html>