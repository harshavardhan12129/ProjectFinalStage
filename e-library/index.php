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
		<!--<script>
			function nav_category_id_selected(cat_id){
				
			} 
		</script>-->
	</head>
  
	<body style="padding-top: 50px">
		<?php 
			echo navigation_bar();
		?>
		<div class="container-fluid">
			<div class="row" id="principalImage">
				<form method=post action="Results.php">
			 		<div class="row" id="searcher">
						<div class="col-md-12 col-lg-12 col-sm-12">
							<div class="input-group input-group-lg">
								<div class="input-group-btn">
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Contents <span class="caret"></span></button>
									<ul class="dropdown-menu">
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
								<input type="submit" class="btn btn-default" name="submit" value="submit">
													
								</span>					
							</div>
						 </div>
					</div>
     	 		</form>
	     	 	<h1>Welcome to IT-Library</h1>
		     	<h3>All IT sources in one site. Books, tutorials, apps and much more.</h3>
			 	<img src="images/library.png" class="img-responsive blurImage" alt="E-library Image Banner">		
			</div>
		  	<ul class="nav nav-tabs" id="tabs">
			  <li role="presentation" class="active"><a href="index.html">Hot Topics</a></li>
			  <li role="presentation"><a href="index_newTopic.html">New Topics</a></li>  
			</ul>			
			
			<section id="Section_Hot-topics" class="row">		  
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<article class="col-sm-6 col-md-4 col-lg-4 ">
							<div class="thumbnail">
								<a href="Content.html"><h3>Business Intelligence</h3></a>
								<div class="caption">
									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima tempora aliquam quod eaque, dicta, sed autem quasi est architecto, accusantium temporibus! Fugit quos, autem voluptates nam laudantium asperiores optio earum.</p>
									<p> <a href="#" class="btn btn-default" role="button">Explore &gt&gt</a></p>
								</div>
							</div>
						</article>
					
						<article class="col-sm-6 col-md-4 col-lg-4">
							<div class="thumbnail">
								<h3 >Big Data</h3>
								<div class="caption">
									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi alias exercitationem perferendis, eos, debitis, pariatur reiciendis saepe veritatis eligendi inventore illum odio repudiandae, atque id tenetur ex consequatur porro sunt.</p>
									<p> <a href="#" class="btn btn-default" role="button">Explore &gt&gt</a></p>
								</div>
							</div>
						</article>
						<article class="col-sm-6 col-md-4 col-lg-4">
							<div class="thumbnail">
								<h3>DBMS</h3>
								<div class="caption">
									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum distinctio nam qui voluptate, laudantium veritatis animi dignissimos facilis eius incidunt minima magnam enim voluptatibus optio placeat voluptates id ducimus dicta.</p>
									<p> <a href="#" class="btn btn-default" role="button">Explore &gt&gt</a></p>
								</div>
							</div>
						</article>
						<article class="col-sm-6 col-md-4 col-lg-4">
							<div class="thumbnail">
								<h3 >Security</h3>
								<div class="caption">
									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, labore, eaque? Nesciunt corporis necessitatibus, voluptatibus magni aliquam in quibusdam perferendis natus optio quos voluptate neque, esse recusandae ducimus repudiandae. Aperiam.</p>
									<p><a href="#" class="btn btn-default" role="button">Explore &gt&gt</a></p>
								</div>
							</div>
						</article>
						<article class="col-sm-6 col-md-4 col-lg-4">
							<div class="thumbnail">
								<h3>Virtualization</h3>
								<div class="caption">
									
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolore aliquam dolorem harum ab adipisci dignissimos officia tempora ipsa deserunt ex eveniet cumque sit, quia corporis, blanditiis hic voluptate enim?</p>
									<p> <a href="#" class="btn btn-default" role="button">Explore &gt&gt</a></p>
								</div>
							</div>
						</article>
						<article class="col-sm-6 col-md-4 col-lg-4">
							<div class="thumbnail">
								<h3 >Cloud Computing</h3>
								<div class="caption">
							
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem obcaecati eaque eligendi rem quod rerum quam provident, dolor labore, unde dignissimos consequuntur, nulla alias, illo inventore illum vero. Minima, incidunt.</p>
									<p> <a href="#" class="btn btn-default" role="button">Explore &gt&gt</a></p>
								</div>
							</div>
						</article>
					</div>
				</div>
			</section>
			<?php footer() ?>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<!-- Add icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</body>
</html>
