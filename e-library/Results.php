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

				<div class="row" id="searchResult">
					<div class="col-md-6 col-md-11">
						<div class="input-group input-group-lg">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Contents <span class="caret"></span></button>
								<ul class="dropdown-menu">
										<li><a href="Categories.html">All Contents</a></li>
										<li><a href="#">Big Data</a></li>
										<li><a href="#">Cloud Computing</a></li>
										<li><a href="#">Enterprise Content Management</a></li>
										<li><a href="#">GIS</a></li>
										<li><a href="#">IT and Hardware</a></li>
										<li><a href="#">Network Administration</a></li>
										<li><a href="#">Operating System</a></li>
										<li><a href="#">Security</a></li>
										<li><a href="#">DBMS</a></li>
										<li><a href="Programming.html">Programming Languages</a></li>
										<li><a href="Content.html">Business Intelligence</a></li>                           
										<li><a href="#">Cloud Computing</a></li>
										<li><a href="#">Internet Fundamentals</a></li>
										<li><a href="#">Networking</a></li>
										<li><a href="#">Security</a></li>
								</ul>
							</div>
							<input type="text" class="form-control" placeholder="Search">
							<span class="input-group-btn">
								  <button class="btn btn-default" type="button">Search</button>
							</span>
						</div>
					</div>
				</div>
				<div class="col-md-6" id="resultQty">
				 <div class="page-header">
					<small>About 186,000,000 results</small>
				</div>
				</div>
			</div>  

			<div class="row">
				<div class="sixtyPercDiv"> 	
					<ul class="media-list results">
						<li class="media">
							<div class="media-left">
								<a href="#">
									<img class="media-object" src="HTMLFundamentals.jpg" alt="...">
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading"><a href="https://www.pluralsight.com/courses/html-fundamentals" target="_blank"><mark>HTML</mark> Fundamentals</a><span class="label label-danger">External Course</span></h4>
									<mark>HTML</mark> markup is the heart of any web application and this course will teach you the fundamentals of <mark>HTML</mark> regardless of the tool you use to author it. You will learn how to properly define your <mark>HTML</mark> markup and follow the standards, how to create lists, tables, and images, and all about text elements. Along the way you will also be show what NOT to do in your <mark>HTML</mark>.

							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="sixtyPercDiv"> 	
					<ul class="media-list results">
						<li class="media">
							<div class="media-left">
								<a href="#">
									<img class="media-object" src="HTMLDreamviewer.jpg" alt="">
								</a>
							</div>

							<div class="media-body">
								<h4 class="media-heading"><a href="https://helpx.adobe.com/dreamweaver/how-to/work-with-html-layout.html" target="_blank"><mark>HTML</mark> With Dreamweaver</a><span class="label label-danger">External Course</span></h4>
									A well-defined web page structure provides the foundation for your layout and styling. See how to use Hypertext Markup Language <mark>(HTML)</mark> to structure pages in Adobe Dreamweaver.

							</div>
						</li>
					</ul>
				</div>	
			</div>
			<div class="row">
				<div class="sixtyPercDiv"> 	
					<ul class="media-list results">
						<li class="media">
							<div class="media-left">
								<a href="#">
									<img class="media-object" src="HTMLBook.jpg" alt="">
								</a>
							</div>

							<div class="media-body">
								<h4 class="media-heading"><a href="https://www.amazon.com.au/HTML-Web-Guide-Absolute-Beginners-Development-Book/dp/B015JNEOZY/ref=sr_1_10?ie=UTF8&qid=1491917135&sr=8-10&keywords=html+book" target="_blank"><mark>HTML</mark>: Web Guide For Absolute <mark>HTML</mark></a><span class="label label-warning">Paid Book</span></h4>
									<mark>HTML</mark> Web Guide For Absolute Beginners is a book for beginners. No prior knowledge of <mark>HTML</mark> required. You don't need to read a 500 pages book to learn <mark>HTML</mark>. Just follow these simple examples and become proficient with <mark>HTML</mark> in less than 24 hours. Straightforward examples. So easy, anyone can learn it!


							</div>

						</li>
					</ul>
				</div>	
			</div>

			<div class="row">
				<div class="sixtyPercDiv"> 	
					<ul class="media-list results">
						<li class="media">
							<div class="media-left">
								<a href="#">
									<img class="media-object" src=" " alt=" ">
								</a>
							</div>

							<div class="media-body">
								<h4 class="media-heading"><a href="https://www.amazon.com.au/HTML-Web-Guide-Absolute-Beginners-Development-Book/dp/B015JNEOZY/ref=sr_1_10?ie=UTF8&qid=1491917135&sr=8-10&keywords=html+book" target="_blank"><mark>HTML</mark>: Inside Course Example <mark>HTML</mark></a><span class="label label-success">Free Course</span><span class="label label-info">Inside Course</span></h4>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam repellat, maiores quaerat, officia quo quidem dolores possimus nostrum quasi nesciunt, dignissimos pariatur necessitatibus eos dolor. Numquam, ullam veritatis nesciunt ea!

							</div>										
						</li>
					</ul>
				</div>		
			</div>

			<nav aria-label="...">
				<ul class="pagination" id="marginPagination">
					<li class="disabled">
						<span>
							<span aria-hidden="true">&laquo;</span>
						</span>
					</li>
					<li class="active">
					  <span>1 <span class="sr-only">(current)</span></span>
					</li>
					<li class="enable">
						<span>2 <span class="sr-only">(disabled)</span></span>
					</li>
					<li class="enable">
						<span>3 <span class="sr-only">(disabled)</span></span>
					</li>
						<li class="enable">
						<span>4 <span class="sr-only">(disabled)</span></span>
					</li>
						<li class="enable">
						<span>5 <span class="sr-only">(disabled)</span></span>
					</li>
						<li class="enable">
						<span>6 <span class="sr-only">(disabled)</span></span>
					</li>
					  <li class="disabled">
					  <span>
						<span aria-hidden="true">&raquo;</span>
					  </span>
					</li>
				</ul>
			</nav>
			<?php footer() ?>
		</div>
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
			<script src="js/jquery-1.11.3.min.js"></script>
			<script src="js/bootstrap.js"></script>
	</body>
</html>
