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


if(isset($_POST['name'], $_POST['email'], $_POST['password'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//make the database connection
	$conn  = db_connect();
	
	//create an insert query 
	$sql_str = "insert into users (name, email, password) 
			VALUES ('$name', '$email', '$password')";
	$sql = oci_parse($conn, $sql_str);
	
	//execute the query
	$is_ok = oci_execute($sql);
	
	if($is_ok)
	{
		echo "<h1>Welcome to IT library</h1>";
		echo "Hi <b>$name</b><br />";
		echo "<a href=\"login_oracle.php\">You can login now</a>";
	}
	oci_close($conn);		
}
else {
	die("Input error");
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
     </div>
	</body>
    
</html>
