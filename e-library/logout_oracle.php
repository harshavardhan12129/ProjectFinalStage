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
	<?php 
	
			echo navigation_bar();
			
		?>
   
    <div class="container-fluid">
		<div class="row">
						  		<ol class="breadcrumb">
  <li><a href="index.html">Home</a></li>
  <li><a href="#">Login</a></li>
<?php
  
  if(isset($_SESSION['valid_user']))
  {
  	$old_user = $_SESSION['valid_user'];  // store  to test if user *was* logged in
  	unset($_SESSION['valid_user']);		// free session var valid_user 
  }
  else
  	$old_user = "";

  if (!empty($old_user))	//user logged in
  {
    if (isset($_SESSION['valid_user']))	//if valid_user still exist
	// user was logged in and could not be logged out
    {
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
      echo "Could not log you out.<br>";
    } 
	else //valid_user not exist
	{
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
      echo "$old_user, you logged out.<br>";
	}
  }
  else //not logged in
  {
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
    // if user was not logged in but came to this page somehow
    echo "You were not logged in, and so have not been logged out.<br>"; 
  }
  echo '<a href="login_oracle.php">Back to login page</a>';
  echo '</body>';
  echo '</html>';
	footer();
		?> 

		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
