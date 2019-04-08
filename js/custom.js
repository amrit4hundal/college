var i;


	function validateForm(){
		var sem = document.getElementById("sem").value ;
		
		//alert('sem'+sem);
			if(sem == ""){
				alert(' Please Select Semeter');
				return false;
				exit();
			}

			var rollNumber = document.getElementById('roll');
				for (var i = 10721601941 ; i <= 10721601996; i++){
					if(rollNumber.value == i){
						var x = true;
						
						}
					}
					
						

					if(x != true){
						alert("Invalid Roll Number Range (Valid is 10721601942-96)");
						return false;
					}

					if(x == true){
						var xxx = document.getElementById("searchBtn").classList.add("is-loading");
						setTimeout(function(){
								var xxx = document.getElementById("searchBtn").classList.remove("is-loading");
								var xhttp = new XMLHttpRequest();
								var rolll = document.getElementById("roll").value;
							    xhttp.onreadystatechange = function() {
							    if (this.readyState == 4 && this.status == 200) {
							      document.getElementById("TableInModal").innerHTML = this.responseText;
							     
							    }
							  };
							  xhttp.open("POST", "fetch.php", true);
							  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
							  xhttp.send("rollNumber="+rolll);
							  var x = document.getElementsByClassName("modal");
							 x[0].style.display='block';
							}, 800);
					}
							
									
			}

	function showModal(){
			var x = document.getElementsByClassName("modal");
			x[0].style.display='block';
		  }

		  function closeModal(){
			var x = document.getElementsByClassName("mymodal");
			x[0].classList.remove("flipInY");
			x[0].classList.add("flipOutY");
			
			
			
			setTimeout(function(){
				var x = document.getElementsByClassName("modal");
				var y = document.getElementsByClassName("mymodal");
				x[0].style.display='none';
				y[0].classList.remove("flipOutY");
				y[0].classList.add("flipInY");
			}, 800);
			
		  }
		
	
	


	function showLogin(){
		//alert('works');
		var x = document.getElementsByClassName("modal");
		x[1].style.display='block';
	}

	function closeLogin(){
		//alert('works');
		var x = document.getElementsByClassName("modal");
		x[1].style.display='none';
	}

	function adminLogin(){
		//alert('works');

		var xhttp = new XMLHttpRequest();
						var user = document.getElementById("user").value;
						var pass = document.getElementById("pass").value;
								  xhttp.onreadystatechange = function() {
								    if (this.readyState == 4 && this.status == 200) {
								       window.open("admin.php");
								       //var headers = xhttp.getResponseHeader(LoggedIn);
									   //alert(header);
								    }
								  };
							  xhttp.open("POST", "login.php", true);
							  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
							  xhttp.send("user="+user+"&"+"pass="+pass);
		
	}

	
	function setsem(i){
		//alert('works'+i);
		i=i-1;
		var x = document.getElementsByClassName("navbar-item");
		x[i].classList.add("is-primary");
		x[i].classList.add("is-active");

		
		if(i == 3){document.getElementById("sem4marquee").style.visibility = 'visible';}
		
		var sem = document.getElementById("sem").value = i;
		//alert('Sem '+i);
		for (var j=0; j<6; j++) {
			if(j != i){
				x[j].classList.remove("is-primary");
				x[j].style.color = '#000';
				
				
			}
			
		}
	}

	function SetSem(i){
		//alert('works'+i);
		i=i-1;
		var x = document.getElementsByClassName("ulli");
		x[i].classList.add("is-active");
		/*x[i].style.color = '#fff';*/
		x[i].style.opacity = '1';

		
		if(i == 0){document.getElementById("listUnderSem1").style.display = 'block';}
		if(i == 1){document.getElementById("listUnderSem2").style.display = 'block';}
		if(i == 2){document.getElementById("listUnderSem3").style.display = 'block';}
		if(i == 3){document.getElementById("listUnderSem4").style.display = 'block';}
		if(i == 4){document.getElementById("listUnderSem5").style.display = 'block';}
		if(i == 5){document.getElementById("listUnderSem6").style.display = 'block';}

		
		var sem = document.getElementById("sem").value = i;
		//alert('Sem '+i);
		for (var j=0; j<6; j++) {
			if(j != i){
				x[j].classList.remove("is-active");
				x[j].style.color = '#000';
				var j=j+1;
				var listUnderSem = "listUnderSem"+j;
				document.getElementById(listUnderSem).style.display = 'none';
				var j=j-1;
				
			}
			
		}
	}



	function OpacityAdd(){
		document.getElementById("searchBox").style.opacity = '0.8';
	}

	function OpacityMinus(){
		document.getElementById("searchBox").style.opacity = '0.45';
	}


	function preloader(){
		

		setTimeout(function(){
				var preloader = document.getElementById('preloader');
				preloader.style.display = 'none';
				document.getElementById("search").classList.add("fadeInDown");
				document.getElementById("navanimate").classList.add("fadeIn");
				document.getElementById("sem4marquee").classList.add("fadeIn");
				document.getElementById("tabs").classList.add("fadeInDown");
				document.getElementById("listUnderSem4").classList.add("fadeInDown");
				
				setTimeout(function(){
					if (screen.width <= 768){alert(" Mobile Site Under Construction");}
					},1000)
			
	
			}, 1000);
			

	}
	
			
			
			


	function showembededSYL(){
		
		document.getElementById("embededSYL").style.display='block';
	}

	function closeembededSYL(){
			document.getElementById("embededSYL").style.display='none';
		}

	


