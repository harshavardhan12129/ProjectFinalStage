<?php
	function navigation_bar(){
?>		
		<nav class="navbar navbar-default navbar-fixed-top">	
			<div class="container-fluid"> 
				<div class="navbar-header">
					<button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					<a class="navbar-brand" href="../index.html">IT-Library</a>
				</div>
				<div class="collapse navbar-collapse" id="topFixedNavbar1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="../index.html">Home<span class="sr-only">(current)</span></a></li>
					 	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="../Categories.html">Select from all</a></li>
							<?php
								$conn = db_connect();
								$sql = oci_parse($conn,'Select CATEGORY_ID, CATEGORY_NAME FROM category');
								oci_execute($sql);
								while (($row = oci_fetch_array($sql,OCI_ASSOC+ OCI_RETURN_NULLS))!= false){
									echo '<li><a href="#">'.$row["CATEGORY_NAME"].'</a></li>';
								}												
							?>     
						</ul>
					  </li>
					</ul>
					<div class="btn-toolbar" role="toolbar" id="btn-toolbar-login-signup">
						<div class="btn-group" role="group">
							<a href="../Login.html" type="button" class="btn btn-default">Login</a>
						</div>
						<div class="btn-group" role="group">
						  <a href="../SignUp.html"  type="button" class="btn btn-primary">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
	
<?php } ?>  
<?php
	function footer(){
?>	
	<div class="row">
				<footer class="col-md-12" >
			   		<div class="row" id="row1FooterContent" >
			      		
			      		<div class="col-md-2 col-lg-2 col-sm-2 footer-links">
			     			<h4><strong>Quick Links</strong> </h4>
			     			<a href="#">Business Intelligence</a>
			     		 	<a href="#">Hadoop Course</a>
			     		 	<a href="#">AWS</a>
			     		 </div>
			     		 <div class="col-md-2  col-lg-2 col-sm-2 footer-links">
			     		 	<h4><strong>About us</strong></h4>
			     		 	<a href="../AboutUs">About Us</a>
			     		 	<a href="#">Subscribe as a teacher</a>
			     		 </div>
			      		<div class="col-md-2 col-lg-2 col-sm-2 footer-links">
			      			<h4><strong>Support</strong></h4>
			      			<a href="#">Support</a>
			      			<a href="#">Help</a>
			      			<a href="../ContactUs.html">Contact Us</a>
			      			<a href="#">Give us Feedback</a>

			      		</div>
			     		 
			     		 <div class="col-md-2 col-lg-2 col-sm-2 footer-links">
							 <h4><strong>Social Networking</strong></h4>
			     		 </div>
			     		
			     		 
		       		</div>
		       		<div class="col-xs-12"><hr></div>
		       		<div id="site-links" class="container">
						<div class="row">
							<div class="col-sm-7 col-lg-9">
								<ul class="footer-IT-Library">
									<li id="copyRight">© 2017 IT Library group</li>
										<li><a class="ga" href="../sitemap.html" data-ga-category="footer" data-ga-action="click" data-ga-label="sitemap" data-qa="link-site-map">Site Map</a></li>
									<li><a class="ga" href="#" data-ga-category="fat-footer" data-ga-action="click" data-ga-label="privacy-policy" data-qa="link-privacy-policy">Privacy policy</a></li>
									<li><a class="ga" href="#" data-ga-category="footer" data-ga-action="click" data-ga-label="web-use-policy" data-qa="link-website-use">Web Use Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
			  	</footer>				
			</div>
<?php } ?> 


