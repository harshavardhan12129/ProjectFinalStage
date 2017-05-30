<?php 
	include_once('includes/functions.php');
?>
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
    			<?php 
	
			echo navigation_bar();
			
		?>
 
    <div class="container-fluid">
		<div class="row">
				  		<ol class="breadcrumb">
  <li><a href="index.html">Home</a></li>
  <li><a href="#">SignUp</a></li>
 
</ol>

<form action="signup_process_oracle.php" method="post">
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
	
		
			<?php 
	
			echo footer();
			
		?>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
