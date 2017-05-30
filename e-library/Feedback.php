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
  <li><a href="#">Give Us Feedback</a></li>
  
  
</ol>



                                                          <!-- Code for feedback page (Start) -->
  <br>
<h1 id="faq" style="text-align:center;" ><strong>FEEDBACK</strong></h1>
 <h1 id="contactUsh1">How would you rate the support you received?</h1>
                                          
  <div class="panel">                                    
    <form action="FeedbackResult.php" method="post">
  <input type="radio" name="rate" value="Very Satisfied"> Very Satisfied<br>
  <input type="radio" name="rate" value="Satisfied"> Satisfied<br>
  <input type="radio" name="rate" value="Neutral"> Neutral<br>
  <input type="radio" name="rate" value="Unsatisfied"> Unsatisfied<br>
  <input type="radio" name="rate" value=" Very Unsatisfied"> Very Unsatisfied


<p><b>Note:</b> When a user clicks on a radio-button, it becomes checked, and all other radio-buttons with equal name become unchecked.</p>   

<div>
<h1>Feel free to add any other comments or suggestions:</h1>


Your comments:<br>
<textarea name="comments" rows="10" cols="40">
</textarea> 

</div>
<input name="submit"type="submit" value="Submit Form">
<input type="submit" value="Cancel">
</form> 

                             
</div>                                                  
                                                  
																<!-- Code for feedbackd page (END) -->

 
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