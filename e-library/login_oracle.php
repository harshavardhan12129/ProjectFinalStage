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
					<button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					<a class="navbar-brand" href="index.html">IT-Library</a>
				</div>
				<div class="collapse navbar-collapse" id="topFixedNavbar1">
					<ul class="nav navbar-nav">
					  <li class="active"><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
					  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="Categories.html">Select from all</a></li>
							<li><a href="#">Big Data</a></li>
							<li><a href="#">Cloud Computing</a></li>
							<li><a href="#">Enterprise Content Management</a></li>
							<li><a href="#">GIS</a></li>
							<li><a href="#">IT and Hardware</a></li>
							<li><a href="#">Network Administration</a></li>
							<li><a href="#">Operating System</a></li>
							<li><a href="#">Security</a></li>
							<li><a href="#">DBMS</a></li>
							<li><a href="Programming.html">Programming Languages</a></li>
							<li><a href="Content.html">Business Intelligence</a></li>                           
							<li><a href="#">Cloud Computing</a></li>
							<li><a href="#">Internet Fundamentals</a></li>
							<li><a href="#">Networking</a></li>
							<li><a href="#">Security</a></li>                 
						</ul>
					  </li>
					</ul>
					<div class="btn-toolbar" role="toolbar" id="btn-toolbar-login-signup">
						<div class="btn-group" role="group">
							<a href="Login.html" type="button" class="btn btn-default">Login</a>
						</div>
						<div class="btn-group" role="group">
						  <a href="SignUp.html"  type="button" class="btn btn-primary">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
   
    <div class="container-fluid">
		<div class="row">
						  		<ol class="breadcrumb">
  <li><a href="index.html">Home</a></li>
  <li><a href="#">Login</a></li>

<?php
//must appear BEFORE the <html> tag
session_start();
include_once('includes/functions.php');	

if( isset($_POST["email"])&& isset($_POST["email"]) )
{
	$email = $_POST["email"];
		
	$password = $_POST["password"];
	
	if ($email && $password)
	{
	  // if the user has just tried to log in
	
	  //make the database connection
	  $conn  = db_connect();	
	  
	  //make a query to check if user login successfully
	  $sql_str = "select * from users where email='$email' and password='$password'";
	  $sql = oci_parse($conn, $sql_str);
	  oci_execute($sql);
    	
	  $numOfRows = oci_fetch_all($sql, $res);
	  
	  if ($numOfRows)
	  {
		// login successfully, keep the user's email
		
		$_SESSION['valid_user'] = $email;
		//$row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS);
	   //$_SESSION['name'] = $row["NAME"];
	
		
	  }
	  oci_close($conn);
	}
}
if (isset($_SESSION['valid_user']))
{
  header("location: index.php");  
	//print_r($_SESSION);
}
else
{
  if (isset($email))
  {
    // if user tried and failed to log in
    echo "<b>Incorrect - Please try it again </b><br>";
	echo "<a href=\"registration_oracle.html\">Sign-up</a><br>";
  }
  else 
  {
    // user has not tried to log in yet or has logged out
    echo "<b>You are not logged in</b><br>";
  }

  // provide form to log in: same page for action  
  echo "<form method=post action=\"login_oracle.php\">";
  echo "<table>";
  echo "<tr><td>Email:</td>";
  echo "<td><input type=text name=email></td></tr>";
  echo "<tr><td>Password:</td>";
  echo "<td><input type=password name=password></td></tr>";
  echo "<tr><td colspan=2 align=center>";
  echo "<input type=submit value=\"Log in\"></td></tr>";
  echo "</table></form>";
}
?>
<div class="row">
				
				<footer class="col-md-12" >
			   		<div class="row" id="row1FooterContent" >
			      		
			      		<div class="col-md-2 footer-links">
			     			<h4><strong>Quick Links</strong> </h4>
			     		 </div>
			     		 <div class="col-md-2  footer-links">
			     		 	<h4><strong>About us</strong></h4>
			     		 	<a href="AboutUs">About Us</a>
			     		 	<a href="#">Subscribe as a teacher</a>
			     		 </div>
			      		<div class="col-md-2 footer-links">
			      			<h4><strong>Support</strong></h4>
			      			<a href="#">Support</a>
			      			<a href="#">Help</a>
			      			<a href="ContactUs.html">Contact Us</a>
			      			<a href="#">Give us Feedback</a>

			      		</div>
			     		 
			     		 <div class="col-md-2 footer-links">
							 <h4><strong>Social Networking</strong></h4>
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
		       		<div class="col-xs-12"><hr></div>
		       		<div id="site-links" class="container">
						<div class="row">
							<div class="col-sm-7 col-lg-9">
								<ul class="footer-IT-Library">
									<li id="copyRight">© 2017 IT Library group</li>
										<li><a class="ga" href="sitemap.html" data-ga-category="footer" data-ga-action="click" data-ga-label="sitemap" data-qa="link-site-map">Site Map</a></li>
									<li><a class="ga" href="#" data-ga-category="fat-footer" data-ga-action="click" data-ga-label="privacy-policy" data-qa="link-privacy-policy">Privacy policy</a></li>
									<li><a class="ga" href="#" data-ga-category="footer" data-ga-action="click" data-ga-label="web-use-policy" data-qa="link-website-use">Web Use Policy</a></li>
								</ul>
							</div>
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
