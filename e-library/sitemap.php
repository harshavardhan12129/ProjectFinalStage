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
				<div class="row" id="index_content">
				  <div class="col-md-4">
				  	<ul>
                    	<php? display_site_maps_values() ?>
                        <li><a href="#">testfghdfg</a></li>
						<li><a href="#">Advanced Topics in Computer Networks</a></li>
						<li><a href="#">Advanced and Distributed Operating Systems</a></li>
						<li><a href="#">Advanced Software Modelling</a></li>
						<li><a href="#">Applying Network Security</a></li>
						<li><a href="#">Business Intelligence</a></li>
						<li><a href="#">Business Requirements Modelling</a></li>
						<li><a href="#">Business Systems Design</a></li>
						<li><a href="#">Cloud Computing and Software as a Service</a></li>
						<li><a href="#">Cloud Computing Infrastructure</a></li>
						<li><a href="#">Collaborative Business Processes</a></li>
						<li><a href="#">Computer Game Design</a></li>
							
					
				  	</ul>
				  </div>
				  <div class="col-md-4">
				  		<li><a href="#">Computer Graphics Rendering Techniques</a></li>
						<li><a href="#">Contemporary Telecommunications</a></li>
						<li><a href="#">Data Mining and Visualisation</a></li>
						<li><a href="#">Database Fundamentals</a></li>
						<li><a href="#">Digital Media Technologies</a></li>
						<li><a href="#">e-Business Trading</a></li>
						<li><a href="#">e-Commerce </a></li>
						<li><a href="#">e-Market Trading Technology </a></li>
						<li><a href="#">Enabling Enterprise Information Systems</a></li>
						<li><a href="#">Enterprise Business Requirements</a></li>
						<li><a href="#">Enterprise Software Architecture and Middleware</a></li>
						<li><a href="#">Enterprise Software Testing</a></li>
						
				  </div>
				  <div class="col-md-4">
				  	    <li><a href="#">Finance and IT Professionals</a></li>
						<li><a href="#">Fundamentals of Data Analytics</a></li>
						<li><a href="#">Fundamentals of Software Development</a></li>
						<li><a href="#">Game Programming</a></li>
						<li><a href="#">Global Information Systems</a></li>
						<li><a href="#">Human-Centred Design Methods</a></li>
						<li><a href="#">Information System Development Methodologies</a></li>
						<li><a href="#">Information Systems Strategy</a></li>
						<li><a href="#">Infrastructure for Cloud Computing</a></li>
						<li><a href="#">IT Professional Experience 1</a></li>
						<li><a href="#">IT Professional Experience 2</a></li>
						<li><a href="#">IT Professional Experience 3</a></li>
					
				  </div>
			  </div>                                                           <!-- Code for Site Map (END) -->
			  
		<div class="row">
	  	<footer class="col-md-12" >
			   		<div class="row" id="row1FooterContent" >
			      		
			      		<div class="col-md-2 footer-links">
			     			<h4>Quick Links </h4>
		     		  </div>
			     		 <div class="col-md-2  footer-links">
			     		 	<h4>About us</h4>
			     		 	<a href="#">About Us</a>
			     		 	<a href="#">Subscribe as a teacher</a>
			     		 </div>
			      		<div class="col-md-2 footer-links">
			      			<h4>Support</h4>
			      			<a href="#">Support</a>
			      			<a href="#">Help</a>
			      			<a href="#">Contact Us</a>
			      			<a href="#">Give us Feedback</a>

			      		</div>
			     		 
			     		 <div class="col-md-2 footer-links">
							 <h4>Social Networking</h4>
                             <!-- Add font awesome icons -->
					<a href="#" class="fa fa-facebook"></a>	
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a>
					<a href="#" class="fa fa-linkedin"></a>
					<a href="#" class="fa fa-youtube"></a>
					<a href="#" class="fa fa-instagram"></a>
                
                    <style>
.fa {
   padding: 20px;
  font-size: 15px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  
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

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
 </style>

			     		 </div>
			     		
			     		 
		       		</div>
  	</footer>				
		  </div>
	</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="js/jquery-1.11.3.min.js"></script> 
		<script src="js/bootstrap.js"></script>
	</body>
</html>
