<?php 
   
	include_once('includes/functions.php');
include_once('includes/config.php');

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
	<script>
		function checkBlob(document) {	
			  var v_image = document.getElementById("lob_upload");	  
			  if (v_image.value !== true) {
				lob_upload.innerHTML = "Is empty";
				v_image.focus();
				return false;
			  }
			  else {
				v_image.innerHTML = "";  
			  }  
			  return true;
			}	

			function validateInfo(document) { 
			  if (checkBlob(document))
			  { 
				return true;
			  }
			  return false;
		}	
	</script>
	</head>
  
	<body style="padding-top: 50px">
		<?php 
		echo navigation_bar();
		?>
		<div class="container-fluid">			
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Profile</a></li>
				</ol>	
			</div>
		<?php
		if (isset($_SESSION['valid_user']))
		{
			
			if (!isset($_FILES['lob_upload'])) 
			{
				
				//checking if the user doesn't update his profile
				if (isset($_POST["update"])){   
					
				
					//boolean_test ? value_if_true : value_if_false
					$search_text = isset($_POST["search_text"]) ? $_POST["search_text"] : ""; 
					$category_filter = isset($_POST["search_category"]) ? $_POST["search_category"]:"";

					$search_text =  strtoupper($search_text);
					$category_filter= strtoupper($category_filter);

					//make the database connection
					
					$conn = db_connect();
					
					//retrieves some values for use in the update
					//list($id,$name,$user) = get_user_values();
					
					$sql_str = "UPDATE USERS SET NAME = '".$_POST["NAME"]."' WHERE EMAIL = '".$_SESSION['valid_user']."'" ;

					$sql = oci_parse($conn,$sql_str);
					$is_ok = oci_execute($sql);
					if ($is_ok)
					{
						oci_commit($conn);
						echo '<div class="alert alert-success" role="alert">Profile updated successfully</div>';
					
					}else{
						echo 'Error. It was not possible to update';
					}
					oci_close($conn);
					display_user_profile();						
				}	else{
					display_user_profile();
				}			
				?>
			
				<div class="row">
					<form class="col-md-6 col-marg-30" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">			
							Update picture: <input type="file"  name="lob_upload" id="lob_upload" required>			
							<input type="submit" value="Upload" class="btn btn-primary" multiple>			
					</form>
				</div>
				<?php
			}else {
				//updae the pictre  just after display de profile, and also it checked before if the file lob variable is not empty
					//if (isset($_POST["lob_upload"])){  
						list($id,$name,$user) = get_user_values();
						$conn = db_connect();
						$lob = oci_new_descriptor($conn, OCI_D_LOB);
						$stmt = oci_parse($conn, 'UPDATE USERS SET PHOTO= '
						.'EMPTY_BLOB() WHERE USER_ID = '.$id.'  RETURNING PHOTO INTO :PHOTO');
						//oci_bind_by_name($stmt, ':MYBLOBID', $myblobid);
						oci_bind_by_name($stmt, ':PHOTO', $lob, -1, OCI_B_BLOB);
						oci_execute($stmt, OCI_DEFAULT);

						if ($lob->savefile($_FILES['lob_upload']['tmp_name'])) {
							oci_commit($conn);
							
							display_user_profile();
					  ?>	
							<div class="row">
								<form class="col-md-6 col-marg-30" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">			
										Update picture: <input type="file"  name="lob_upload" id="lob_upload" required>			
										<input type="submit" value="Upload" class="btn btn-primary" multiple>			
								</form>
							</div>


						<?php
							//header("Refresh:0");
						}
						else {
							echo "file can’t be upload\n";
						}
						$lob->free();
						oci_free_statement($stmt);
						oci_close($conn); // log off
						//list($id,$name,$user) = display_user_profile();
					//}
				//}
			}
				
		}else {
			echo '<div class="alert alert-danger" role="alert">You must to be logged in to see the page content</div>';
			echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
		}
					//display_user_profile();
					footer()
				?>
			
			</div>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
			<script src="js/jquery-1.11.3.min.js"></script>
			<script src="js/bootstrap.js"></script>
	</body>
</html>
