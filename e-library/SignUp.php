<!DOCTYPE html>
<html lang="en">
	<script>
	function checkRePassword(document) {	
	  var pwd = document.getElementById("password");
  	  var pwd_msg = document.getElementById('pwd_msg');
	  var repwd = document.getElementById("rePassword");	  
	  if (pwd.value != repwd.value) {
		pwd_msg.innerHTML = "The two passwords are not the same. Please re-enter both now";
		repwd.value = "";
		pwd.focus();
		return false;
	  }
	  else {
		pwd_msg.innerHTML = "";  
	  }  
	  return true;
	}	

	function validateInfo(document) { 
	  if (checkRePassword(document))
	  { 
		return true;
	  }
	  return false;
	}	
</script>
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
  <li><a href="#">SignUp</a></li>
 
</ol>
			<form action="registration_process_oracle.php" method="post">
 <table border="0">
	<tr>
    	<td align="right">* Name:</td>
    	<td><input type="text" id="name" name="name" required></td>
	</tr>
	<tr>
    	<td align="right">* Email:</td>
    	<td><input type="email" name="email" id="email" required></td>
	</tr>
	<tr>
    	<td align="right">* Password:</td>
    	<td><input type="password" id="password" name="password" required></td>
        <td id="pwd_msg" style="color:red;"></td>
	</tr>
	<tr>
    	<td align="right">* Re-try:</td>
    	<td><input type="Password" id="rePassword" name="rePassword" onChange="checkRePassword(document)"></td>
	</tr>
	<tr>
    	<td align="right"><input type="submit" name="submit" value="Submit" onClick="return validateInfo(document)"></td>
    	<td><input type="reset" name="reset" value="Clear"></td>
	</tr>
  </table> 
</form>
	
		
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
