<?php 
	include_once('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
	 <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title>Welcome to IT-library</title>
		<!-- Bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/e_library.css" rel="stylesheet" type="text/css">
	</head>
  
	<body style="padding-top: 50px">
	<!--<p id="search_category"> </p>-->
	 
		<div id="script">
		<?php 
			echo navigation_bar();
			
		?>
		</div>
		<div class="container-fluid">
			<div class="row" id="principalImage">
				<form method=post action="Results.php">
			 		<div class="row" id="searcher">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<div class="input-group input-group-lg">
								<div class="input-group-btn">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Contents <span class="caret"></span></button>
									<ul class="dropdown-menu">
										<li><a href="#">All Contents</a></li>
										<?php //loading the drop down
											$conn = db_connect();
											$sql = oci_parse($conn,'Select CATEGORY_ID, CATEGORY_NAME FROM category');
											oci_execute($sql);
											while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
												echo '<li><a href="#">'.$row["CATEGORY_NAME"].'</a></li>';
											}	
											oci_close($conn);
										?>        
									</ul>
								</div>						
								<input type="text" class="form-control"  name="search_text" placeholder="Search">
								<span class="input-group-btn">
									<input type="submit" class="btn btn-default" name="submit" value="Search" id="btnSearch">
									
									<!-- <input type="text" class="form-control"  name="search_category" placeholder="Search" id="search_category"> -->
									
								</span>					
							</div>
						 </div>
					</div>
   	 				<!-- It store the choosen category id -->
    	 			<input type="hidden"  name="search_category"  id="search_category"> 
     	 		</form>
	     	 	<h1>Welcome to IT-Library</h1>
		     	<h3>All IT sources in one site. Books, tutorials, apps and much more.</h3>
			 	<img src="images/library.png" class="img-responsive blurImage" alt="E-library Image Banner">		
			</div>
		  	<ul class="nav nav-tabs" id="tabs">
			  <li role="presentation" class="active"><a href="index.php">Hot Categories</a></li>
			  <li role="presentation"><a href="index_newTopic.php">New Topics</a></li>  
			</ul>			
			

			<?php 
				//it will dfesplay the 6 most viewed categories
				display_hot_categories();
							

				//it will display de footer
				footer();
			?>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</body>
</html>
