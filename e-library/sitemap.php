<?php 
	include_once('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
	 <head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome to E-library</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/e_library.css" rel="stylesheet" type="text/css">
	</head>
  
	<body style="padding-top: 50px">
		<nav class="navbar navbar-default navbar-fixed-top">	
			<div class="container-fluid"> 
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					<a class="navbar-brand" href="index.html">IT-Library</a>
				</div>
				<div class="collapse navbar-collapse" id="topFixedNavbar1">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
					  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Select from all</a></li>
							<li><a href="#">Big Data</a></li>
							<li><a href="#">Cloud Computing</a></li>
							<li><a href="#">Enterprise Content Management</a></li>
							<li><a href="#">GIS</a></li>
							<li><a href="#">IT and Hardware</a></li>
							<li><a href="#">Network Administration</a></li>
							<li><a href="#">Operating System</a></li>
							<li><a href="#">Security</a></li>
							<li><a href="#">DBMS</a></li>
							<li><a href="#">Programming Languages</a></li>
							<li><a href="#">Business Intelligence</a></li>                           
							<li><a href="#">Cloud Computing</a></li>
							<li><a href="#">Internet Fundamentals</a></li>
							<li><a href="#">Networking</a></li>
							<li><a href="#">Security</a></li>                 
						</ul>
					  </li>
					</ul>
					<div class="btn-toolbar" role="toolbar" id="btn-toolbar-login-signup">
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-default">Login</button>
						</div>
						<div class="btn-group" role="group">
						  <button type="button" class="btn btn-primary">Sign Up</button>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<ol class="breadcrumb">
  <li><a href="index.html">Home</a></li>
  <li><a href="#">Site Map</a></li>
 
</ol>
		<div class="container-fluid">
			<div class="row">                                       <!-- Code for Site Map (START) -->
				  <div class="col-lg-12">
				  	<ul class="ul-horizontal">
						
						<li><a href="#">A</a></li>
						<li><a href="#">B</a></li>
						<li><a href="#">C</a></li>
						<li><a href="#">D</a></li>
						<li><a href="#">E</a></li>
						<li><a href="#">F</a></li>
						<li><a href="#">G</a></li>
						<li><a href="#">H</a></li>
						<li><a href="#">I</a></li>
						<li><a href="#">J</a></li>
						<li><a href="#">K</a></li>
						<li><a href="#">L</a></li>
						<li><a href="#">M</a></li>
						<li><a href="#">N</a></li>
						<li><a href="#">O</a></li>
						<li><a href="#">P</a></li>
						<li><a href="#">Q</a></li>
						<li><a href="#">R</a></li>
						<li><a href="#">S</a></li>
						<li><a href="#">T</a></li>
						<li><a href="#">U</a></li>
						<li><a href="#">V</a></li>
						<li><a href="#">W</a></li>
						<li><a href="#">X</a></li>
						<li><a href="#">Y</a></li>
						<li><a href="#">Z</a></li>
						
					  </ul>
				</div>
			</div>
				 <?php
                       		 display_resources()
						?>
					                                           <!-- Code for Site Map (END) -->
			  
				<?php 


				//it will display de footer
				footer();
			?>
	</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="js/jquery-1.11.3.min.js"></script> 
		<script src="js/bootstrap.js"></script>
	</body>
</html>
