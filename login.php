<?php
session_start();
		if(!isset($_SESSION['firstname']))
		{
    	header('Location: DriveEasy/login.php');
		exit; 
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Auto Car an Auto Mobile Category Bootstrap Responsive Website Template | Codes :: w3layouts</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Auto Car Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link href="css/logincss.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Jockey+One&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
<style>
	
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
	.button {
	  background-color: #4CAF50; /* Green */
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  cursor: pointer;
	  -webkit-transition-duration: 0.4s; /* Safari */
	  transition-duration: 0.4s;
	}
	
	.button1 {
	  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}
	
	.button2:hover {
	  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	}
	</style>
</head>
	
<body>
<!-- banner -->
<div class="banner wthree">
	<div class="container">
		<div class="banner_top">
			<div class="logo wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<h1><a href="index.html"><span>A</span>uto Car</a></h1>
			</div>
			<div class="banner_top_right wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
				<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
					
				<!-- Main -->

				<br><br><br><br><br>
<!-- Codes -->
<div class="container">
	<!-- Button to open the modal login form -->
	<button onclick="document.getElementById('id01').style.display='block'">Login</button>
	
	<!-- The Modal -->
	<div id="id01" class="modal">
	  <span onclick="document.getElementById('id01').style.display='none'"
	class="close" title="Close Modal">&times;</span>
	
	  <!-- Modal Content -->
	  <form class="modal-content animate">
		<div class="imgcontainer">
		  <img src="login.jpg" alt="Avatar" class="avatar">
		</div>
	
		<div class="container">
		  <label for="uname"><b>Username</b></label>
		  <input type="text" placeholder="Enter Username" name="uname" required>
	
		  <label for="psw"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="psw" required>

		  <i class="fa-fa-facebook"></i>
		  
          <button class= button button1>
		  <a href="index.html" class="button">Login</a>
		  </button>
		  
	
	     <br>
		  
		  <label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		  </label>
		</div>

		<i class="fa-fa-facebook"></i>
	
		<div class="container" style="background-color:#f1f1f1">
		  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		  <span class="psw">Forgot <a href="#">password?</a></span>
		</div>
	  </form>
	</div>
	
	
	
		  
          <button class= button button1>
		  <a href="SignIn.html" class="button">SignUp</a>
		  </button>
		  
	
	     <br>
		  
		  
	  </form>
	</div>
	</div>
	</div>
			</nav>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- banner -->
		
		</div>
	</div>
<!-- //banner -->


 
<!-- Footer -->	
<script>
	// Get the modal
	var modal = document.getElementById('id01');
	
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
		modal.style.display = "none";
	  }
	}
</script>
<!-- js-scripts -->						
		<!-- js -->
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
		<!-- //js -->
		<script src="js/jzBox.js"></script>
<!-- //js-scripts -->
</body>
</html>