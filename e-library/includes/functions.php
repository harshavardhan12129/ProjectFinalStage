<?php
	include_once('includes/config.php');

	function navigation_bar()
	{
		print '	<nav class="navbar navbar-default navbar-fixed-top">'	;
		print '		<div class="container-fluid"> ';
		print '			<div class="navbar-header">';
		print '				<button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>';
		print '					<a class="navbar-brand" href="index.php">IT-Library</a>';
		print '			</div>'	;				
		print '			<div class="collapse navbar-collapse" id="topFixedNavbar1">';
		print '				<ul class="nav navbar-nav">';
		print '					<li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>';
		print '				 	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>';
		print '						<ul class="dropdown-menu">';
		print '							<li><a href="../Categories.html">Select from all</a></li>';
										$conn = db_connect();
										$sql = oci_parse($conn,'Select CATEGORY_ID, CATEGORY_NAME FROM category');
										oci_execute($sql);
										while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
											$catid = $row["CATEGORY_ID"];
											$catname = $row["CATEGORY_NAME"];
											$href = 'category_index.php?catid='.$catid.'&catname='.$catname ; 
											echo '<li><a href="'.$href.'" id="'.$row["CATEGORY_ID"].'" onClick="nav_category_id_selected('.$row["CATEGORY_ID"].')">'.$row["CATEGORY_NAME"].'</a></li>';
											
											//echo "<li><a href='category_index.php?catid=$catid&catname=$catname' id='".$row["CATEGORY_ID"].'" onClick="nav_category_id_selected('.$row["CATEGORY_ID"].')">'.$row["CATEGORY_NAME"].'</a></li>';
										}												
		print '						</ul>';
		print '				 	 </li>';
		print '				</ul>';
		print '				<div class="btn-toolbar" role="toolbar" id="btn-toolbar-login-signup">';

		session_start();
		if (isset($_SESSION['valid_user']))
		{
		
			print '			<div class="dropdown">';
			print '				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">';
			print				$_SESSION['valid_user'];
			print '					<span class="caret"></span>';
			print '		  		</button>';
			print '			  	<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">';
			print '					<li><a href="Profile.php">Profile</a></li>';
			print '					<li><a href="logout_oracle.php">Logout</a></li>';
			print '				</ul>';
			print '			</div>	 '; 	
							
		}else{
			print '				<div class="btn-group" role="group">';
			print '					<a href="login_oracle.php" type="button" class="btn btn-default">Login</a>';
			print '				</div>';
			print '			<div class="btn-group" role="group">';
			print '				 <a href="SignUp.php"  type="button" class="btn btn-primary">Sign Up</a>';
			print '			</div>';
		
		}


		print '				</div>';
		print '			</div>';
		print '		</div>';
		print '	</nav>';
	} 


	
	function display_results($conn, $sql,$search_text){
			

			$b = 0;
			while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
			//just the first time will print the headers tags and results qty
			if ($b==0){
				print '<div  id="resultQty">';
				print '	<div class="page-header">';
				if ($search_text!=''){
					print '		<small>About '. $row["QTY"] .' results of '.$search_text.'</small>';
				}else{
					print '		<small>About '. $row["QTY"] .' results </small>';
				}
				print '	</div>';
				print '</div>';
				$b=1;
			}
			if ($row["RESOURCE_ACCESS"]=='P'){
				$Resource_access = '<span class="label label-danger">Paid</span>';
			} elseif ( ($row["RESOURCE_ACCESS"]=='F')){
				$Resource_access = '<span class="label label-success">Free</span>';
			};
			$type_dsc =$row["TYPE_DSC"] ;
			if ($row["SOURCE"]==0){
				$Resource_access = $Resource_access.'<span class="label label-primary">On Site '.$type_dsc.'</span>';
			} elseif ( ($row["SOURCE"]==1)){
				$Resource_access = $Resource_access.'<span class="label label-warning">External '.$type_dsc.'</span>';
			};		
			
			$Resource_name = $row["RESOURCE_NAME"];
			$Resource_name = str_ireplace($search_text,'<mark>'.$search_text.'</mark>',$Resource_name);
			
			$resource_short_dsc = $row["RESOURCE_SHORT_DSC"];
			$resource_short_dsc = str_ireplace($search_text,'<mark>'.$search_text.'</mark>',$resource_short_dsc);
			$href = $row["RESOURCE_URL"] ;
			print '<div class="row">';
			print '	<div class="sixtyPercDiv">' 	;
			print '		<ul class="media-list results">';
			print '			<li class="media">';
			print '			<div class="media-left">';
			print '				<a href="#">';
								if (isset($row["RESOURCE_THUMBNAIL"])){
									$img = oci_lob_load($row["RESOURCE_THUMBNAIL"]);
									echo '<img class="media-object" alt="..." 	src="data:image/jpeg;base64,'.base64_encode($img).' "/>';
								}
			print '				</a>';
			print '			</div>';
			print '			<div class="media-body">';
			print '					<h4 class="media-heading"><a href="'.$href.'" target="_blank">'. $Resource_name.'</a>'.$Resource_access.'</h4>'.$resource_short_dsc;
			print '				</div>';
			print '			</li>';
			print '		</ul>';
			print '	</div>';
			print '</div>';

				
			
		}	
		//close db connection
		oci_close($conn);
		
	}
	
		
function display_resources(){
		//make the database connection
		$conn = db_connect();

		$sql_str = "select RESOURCE_NAME, RESOURCE_URL from resources " ;
		$sql = oci_parse($conn,$sql_str);
		oci_execute($sql);

			print '<div class="row" id="index_content">';
			$count = 0;
			while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
				
				$count = $count + 1;
				if ($count=1){
					print '<div class="col-md-4">';
					print ' 	<ul>';
				};		
				print '	<li><a href="'.$row["RESOURCE_URL"].'">'.$row["RESOURCE_NAME"].'</a></li>';
				if ($count=2){
					print'  	</ul>';
					print'  </div>';
					$count = 0;
				};
			}
			print '</div>  ';
	
			//close db connection
		oci_close($conn);
		
	}
function display_new_topics(){
		//make the database connection
		$conn = db_connect();

		$sql_str = "SELECT RESOURCE_NAME,RESOURCE_SHORT_DSC,RESOURCE_URL FROM resources  WHERE rownum <= 6 ORDER BY RESOURCE_ID desc" ;
		$sql = oci_parse($conn,$sql_str);
		oci_execute($sql);

		
			print '<section id="Section_Hot-topics" class="row">';		  
			print '	<div class="col-lg-10 col-lg-offset-1">';
			print '		<div class="row">';
			while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
				print '			<article class="col-sm-6 col-md-4 col-lg-4 ">';
				print '				<div class="thumbnail">';
				print '					<a href="'.$row["RESOURCE_URL"].'" target="_blank"><h3>'.$row["RESOURCE_NAME"].'</h3></a>';
				print '					<div class="caption">'	;				
				print '						<p>'.$row["RESOURCE_SHORT_DSC"].'</p>';
				print '						<p> <a href="'.$row["RESOURCE_URL"].'"target="_blank" class="btn btn-default" role="button">Explore &gt&gt</a></p>';
				print '					</div>';
				print '				</div>';
				print '			</article>';
			}
			print '		</div>';
			print '	</div>';
			print '</section>';
			//close db connection
		oci_close($conn);
		
	}

	function display_hot_categories(){
		//make the database connection
		$conn = db_connect();

		$sql_str = "SELECT category_name, category_short_dsc,CATEGORY_ID
					from (
					SELECT category_name, category_short_dsc,c.category_id
					FROM category c
					INNER JOIN RESOURCES r ON c.category_id = r.category_id					
					GROUP BY category_name,category_short_dsc,c.CATEGORY_ID
					ORDER BY sum(r.resource_views) desc
					)
					WHERE rownum <= 6" ;
		$sql = oci_parse($conn,$sql_str);
		oci_execute($sql);

		
			print '<section id="Section_Hot-topics" class="row">';		  
			print '	<div class="col-lg-10 col-lg-offset-1">';
			print '		<div class="row">';
			while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
				$catid=$row["CATEGORY_ID"];
				$catname=$row["CATEGORY_NAME"];
				$href = 'category_index.php?catid='.$catid.'&catname='.$catname ; 
				print '			<article class="col-sm-6 col-md-4 col-lg-4 ">';
				print '				<div class="thumbnail">';
				print "					<a href='category_index.php?catid=$catid&catname=$catname'><h3>".$row["CATEGORY_NAME"]."</h3></a>";
				print '					<div class="caption">'	;				
				print '						<p>'.$row["CATEGORY_SHORT_DSC"].'</p>';
				print '						<p> <a href="'.$href.'" class="btn btn-default" role="button">Explore &gt&gt</a></p>';
				print '					</div>';
				print '				</div>';
				print '			</article>';
			}
			print '		</div>';
			print '	</div>';
			print '</section>';
			//close db connection
		oci_close($conn);
		
	}


function get_user_values(){
		//session_start();
		if (isset($_SESSION['valid_user']))
		{
			//make the database connection
			$conn = db_connect();

			$sql_str = "select NAME,EMAIL,PHOTO,USER_ID
						from users" ;

			$sql_str = $sql_str." where email = '".$_SESSION['valid_user']."'";

			$sql = oci_parse($conn,$sql_str);
			oci_execute($sql);
	
			while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
				$name=$row["NAME"];
				$user=$row["EMAIL"];
				$id=$row["USER_ID"];											
			}

			//close db connection
			oci_close($conn);
			return array($id,$name,$user);
		}else{
			echo 'You must be logged in to see your profile.';
		}

	}
	function display_user_profile(){
		//session_start();
		if (isset($_SESSION['valid_user']))
		{
			//make the database connection
			$conn = db_connect();

			$sql_str = "select NAME,EMAIL,PHOTO,USER_ID
						from users" ;

			$sql_str = $sql_str." where email = '".$_SESSION['valid_user']."'";

			$sql = oci_parse($conn,$sql_str);
			oci_execute($sql);
	
			while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
				$name=$row["NAME"];
				$user=$row["EMAIL"];
				$id=$row["USER_ID"];?>
				<div class="row">
					<?php	
					if (isset($row['PHOTO'])) { ?>
					<div class="col-md-6">
						<?php $img = oci_lob_load($row["PHOTO"]);
						echo '<img class="circle" alt="..." 	src="data:image/jpeg;base64,'.base64_encode($img).' "/>';?>
					</div>
					<?php } ?>

					<div class="col-md-6">
						<form class="panel panel-default form-margin-top-right" action="Profile.php" method="POST">
							<div class="panel-heading">Profile Details</div>
							<div>
								<div class="panel-body">
									  <div>
											<div class="input-group">
												<div class="col-md-4">
													<p>User Name</p>							  
												</div>
												<div class="col-md-8">
													<input type="text" id="NAME" class="form-control" placeholder="User Name" name="NAME" aria-describedby="addon1" value="<?php echo $row["NAME"] ?>">
												</div>
											</div> 
									  </div>
									<br> 
									 <div>
										<div class="input-group">
											<div class="col-md-4">
												<p>Email</p>
											</div>
											<div class="col-md-8">
													<input type="text" class="form-control" placeholder="Email" aria-describedby="addon1"  disabled value="<?php echo $row["EMAIL"] ?>">
											</div>
										</div> 

									 </div> 
									<div class="btn-group" role="group">
									  <input type="submit" class="btn btn-primary" name="update" value="update">
									  
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
				<?php
				
			}
			//close db connection
			oci_close($conn);
	
		}else{
			echo 'You must be logged in to see your profile.';
		}

	}
	function display_resources_into_categories($conn, $sql){
		while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
			echo "<p>".$row["RESOURCE_NAME"]."</p><br/>";
		}
	}



	function footer(){

		print '<div class="row">';
		print '				<footer class="col-md-12" >';
		print '			   		<div class="row" id="row1FooterContent" >	';		      		
		print '			      		<div class="col-md-2 col-lg-2 col-sm-2 footer-links">';
		print '			     			<h4><strong>Quick Links</strong> </h4>';
		$conn = db_connect();
		$sql_str = "select resource_name
					from (
					select r.resource_name,r.resource_views
					from resources r
					order by r.resource_views desc)
					where rownum <= 3";
		$sql = oci_parse($conn,$sql_str);
		oci_execute($sql);
		while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
			print'<a href="#">'.$row["RESOURCE_NAME"].'</a>';
		}
		oci_close($conn);
		print '			     		 </div>';
		print '			     		 <div class="col-md-2  col-lg-2 col-sm-2 footer-links">';
		print '			     		 	<h4><strong>About us</strong></h4>';
		print '			     		 	<a href="../AboutUs">About Us</a>';
		print '			     		 	<a href="#">Subscribe as a teacher</a>';
		print '			     		 </div>';
		print '			      		<div class="col-md-2 col-lg-2 col-sm-2 footer-links">';
		print '			      			<h4><strong>Support</strong></h4>';
		print '			      			<a href="#">Support</a>';
		print '			      			<a href="#">Help</a>';
		print '			      			<a href="../ContactUs.html">Contact Us</a>';
		print '			      			<a href="feedback.html">Give us Feedback</a>';
		print '			      		</div>			     		 ';
		print '			     		 <div class="col-md-2 col-lg-2 col-sm-2 footer-links">';
		print '							<h4><strong>Social Networking</strong></h4>';
		print '							<a href="#" class="fa fa-facebook"></a>	';
		print '							<a href="#" class="fa fa-twitter"></a>';
		print '							<a href="#" class="fa fa-google"></a>';
		print '							<a href="#" class="fa fa-linkedin"></a>';
		print '							<a href="#" class="fa fa-youtube"></a>';
		print '							<a href="#" class="fa fa-instagram"></a>';
		print '		     		        <style>';
		print '								.fa {';
		print '								   padding: 20px;';
		print '								  font-size: 15px;';
		print '								  width: 50px;';
		print '									  text-align: center;';
		print '									  text-decoration: none;';
		print '									  margin: 5px 2px;';
		print '									}';
		print '									.fa:hover {';
		print '										opacity: 0.7;';
		print '									}';
		print '									.fa-facebook {';
		print '									  background: #3B5998;';
		print '									  color: white;';
		print '								}';
		print '								.fa-twitter {';
		print '								  background: #55ACEE;';
		print '								  color: white;';
		print '								}';
		print '								.fa-google {';
		print '								  background: #dd4b39;';
		print '								  color: white;';
		print '								}';
		print '								.fa-linkedin {';
		print '								  background: #007bb5;';
		print '								  color: white;';
		print '								}';
		print '								.fa-youtube {;';
		print '								  background: #bb0000;';
		print '								  color: white;';
		print '								}';
		print '								.fa-instagram {';
		print '								  background: #125688;';
		print '								  color: white;';
		print '								}';
		print '							</style>';
		print '			     		 </div>		';	     		
		print '		       		</div>';
		print '		       		<div class="col-xs-12"><hr></div>';
		print '		       		<div id="site-links" class="container">';
		print '						<div class="row">';
		print '							<div class="col-sm-7 col-lg-9">';
		print '								<ul class="footer-IT-Library">';
		print '									<li id="copyRight">© 2017 IT Library group</li>';
		print '										<li><a class="ga" href="../sitemap.html" data-ga-category="footer" data-ga-action="click" data-ga-label="sitemap" data-qa="link-site-map">Site Map</a></li>';
		print '									<li><a class="ga" href="#" data-ga-category="fat-footer" data-ga-action="click" data-ga-label="privacy-policy" data-qa="link-privacy-policy">Privacy policy</a></li>';
		print '									<li><a class="ga" href="#" data-ga-category="footer" data-ga-action="click" data-ga-label="web-use-policy" data-qa="link-website-use">Web Use Policy</a></li>';
		print '								</ul>';
		print '							</div>';
		print '						</div>';
		print '					</div>';
		print '			  	</footer>	';			
		print '			</div>';
	}



?>


