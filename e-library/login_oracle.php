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
//must appear BEFORE the <html> tag
//session_start();


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









