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
					<li><a href="#">Search Results</a></li>
				</ol>
				<div class="col-md-12">
					<h1 class="title">Search Results</h1>
				</div>

				<form method=post action="Results.php">
					<div class="row" id="searchResult">
						<div class="col-md-6 col-md-11">
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
									  <input type="submit" class="btn btn-default" name="submit" value="search" id="btnSearch">
								</span>
							</div>
						</div>
					</div>
					<!-- It store the choosen category id -->
					<input type="hidden"  name="search_category"  id="search_category"> 
				</form>

			</div>  

			
				<?php			
					
					//to see if the form was submited from another page
					if (isset($_POST["submit"])){   
						
						//boolean_test ? value_if_true : value_if_false
						$search_text = isset($_POST["search_text"]) ? $_POST["search_text"] : ""; 
						$category_filter = isset($_POST["search_category"]) ? $_POST["search_category"]:"";
						
						$search_text =  strtoupper($search_text);
						$category_filter= strtoupper($category_filter);
						
						//make the database connection
						$conn = db_connect();
						
						$sql_str = "SELECT RESOURCE_NAME, RESOURCE_SHORT_DSC,RESOURCE_URL, RESOURCE_THUMBNAIL , RESOURCE_ACCESS, SOURCE,TYPE_DSC,count(*) over (partition by 1) QTY
									FROM RESOURCES r, CATEGORY c , TYPE T
									WHERE c.category_id = r.category_id
									and r.type_id = t.type_id" ;
						if ($search_text != ""){
							$sql_str = $sql_str . " and UPPER(RESOURCE_NAME) like '%$search_text%'";

						} 
						if ($category_filter != "" and $category_filter != 'All Contents'){
							$sql_str = $sql_str . " and UPPER(CATEGORY_NAME) = '$category_filter'";
						}
						
						$sql = oci_parse($conn,$sql_str);
						oci_execute($sql);
						
						display_results($conn, $sql,$search_text);						
					}				
				?>		


			<?php footer() ?>
		</div>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
			<script src="js/jquery-1.11.3.min.js"></script>
			<script src="js/bootstrap.js"></script>
	</body>
</html>
