<?php
?>
<html>
<head>
<title>Search | TCKP</title>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" id="bootstrap-css" href="./css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="./css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="animate-css" href="./css/animate.css" type="text/css" media="all">

</head>


<body class="white_bg animated fadeIn">
	<div class="content">	
		<!-- TOP DIV -->	
		<div class="container">	
			<!-- TOP LOGO AND MENU DIV -->
			<div class="col-sm-12">	
				<div class="row margins top_div">
					<!-- LOGO DIV -->
					<div class="col-lg-6 col-sm-5 col-xs-3">
						<div class="col-sm-3 col-xs-9">
							<img class="img img-responsive logo" src="images/logo.png" alt="">
						</div>
						<div class="col-sm-9 col-xs-3 text-left">
							<h4 class="color-blue top_div_logo_heading"> TCKP DISCOVER</h4>
							<h5 class="color-text heading-description">Tourism Cooperation KP</h5>
						</div>
					</div>
					<!-- MENU DIV -->				
					<div class="col-lg-6 col-sm-7 col-xs-9">
						<nav class="navbar">
							<div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuBar">
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>                        
						      </button>
						    </div>
						    <div class="collapse navbar-collapse" id="menuBar">
								<ul class="nav navbar-nav">
									<li class="top-links color-black"><a href="#">Destination</a></li>
									<li class="top-links color-black"><a href="#">Tour</a></li>
									<li class="top-links color-black"><a href="#">Plan</a></li>
									<li class="top-links color-black"><a href="#">Sign In</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>

			<!-- BREAD CRUMB AND WEATHER DIV -->
			<div class="col-sm-12">	
				<div class="row">
					<!-- BREADCRUMB DIV -->
					<div class="col-lg-6 col-xs-12">
						<ol class="breadcrumb">
						  <li><a href="index.php">Home</a></li>
						  <li><a href="discover.php">Discover</a></li>
						  <li class="active">Search</li>
						</ol>
					</div>
					<!-- ELEVATION AND WEATHER DIV -->				
					<div class="col-sm-6 col-xs-12">
						<div class="col-sm-6 col-xs-12">
						</div>
						<div class="col-sm-6 col-xs-12">
							<p class="about_elevation">8202'<br/>Elevation</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- BANNER ROW -->
		<div class="container-fluid">
			<div class="row">
				<div class="banner-wrapper">
					<div class="searchPage_banner">
						<img class="img img-responsive" src="images/img_1.jpg" />
						<!-- SEARCH FORM -->
			        	<form class="form-inline search search-page" action="search.php">
						    <span class="glyphicon glyphicon-remove"></span>
							<div class="form-group col-sm-2 col-xs-12">
							      	<select class="form-control search_select" id="sel1" name="sel1">
							          <option>Ketchup</option>
							          <option>Relish</option>
							          <option>Mustard</option>
							          <option>Tent</option>
							          <option>Flashlight</option>
							          <option>Toilet Paper</option>
							      	</select>
							</div>
							<div class="form-group col-sm-2 col-xs-12">
							      	<select class="form-control search_select" id="sel2" name="sel2">
							          <option>Mustard</option>
							          <option>Ketchup</option>
							          <option>Relish</option>
							          <option>Tent</option>
							          <option>Flashlight</option>
							          <option>Toilet Paper</option>
							      	</select>
						    </div>
						    <div class="form-group col-sm-2 col-xs-12">
							      	<select class="form-control search_select" id="sel3" name="sel3">
							          <option>Tent</option>
							          <option>Flashlight</option>
							          <option>Mustard</option>
							          <option>Ketchup</option>
							          <option>Relish</option>
							          <option>Toilet Paper</option>
							      	</select>
						    </div>	
						    <div class="form-group col-sm-4 col-xs-12">
							    <input type="text" class="form-control" id="search-text" name="search-text" placeholder="Or search places, regions, activities">
						    </div>							    
						    <div class="form-group col-xs-2 text-right">
							    <button type="submit" class="btn btn-info">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- RESULTS ROW -->
		<div class="spacing">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 text-center">
						<div class="search-results">
							<img src="images/img_4.jpg" class="img img-responsive ">
							<div class="search-section">
								<h3 class="color-black">Rafting</h3>
								<p class="color-text">Lorem ipsum dolor sit</p>
							</div>
							<div class="search-section">
								<h4 class="color-black">Address</h4>
								<p class="color-text">Lorem ipsum dolor sit</p>
							</div>
							<div class="search-section contact">
								<h4 class="color-black">Contact</h4>
								<p class="color-text">(+92) 000 0000</p>
								<p class="color-text">abc.com/xyz</p>
							</div>
							<a href="#"><button class="btn btn-primary gotopage">EXPLORE</button></a>
						</div>	
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 text-center">
						<div class="search-results">
							<img src="images/img_3.jpg" class="img img-responsive">
							<div class="search-section">
								<h3 class="color-black">Rafting</h3>
								<p class="color-text">Lorem ipsum dolor sit</p>
							</div>
							<div class="search-section">
								<h4 class="color-black">Address</h4>
								<p class="color-text">Lorem ipsum dolor sit</p>
							</div>
							<div class="search-section contact">
								<h4 class="color-black">Contact</h4>
								<p class="color-text">(+92) 000 0000</p>
								<p class="color-text">abc.com/xyz</p>
							</div>
							<a href="#"><button class="btn btn-primary gotopage">EXPLORE</button></a>
						</div>
					</div>	
					<div class="col-lg-4 col-md-4 col-sm-12 text-center">
						<div class="search-results">
							<img src="images/img_2.jpg" class="img img-responsive">
							<div class="search-section">
								<h3 class="color-black">Rafting</h3>
								<p class="color-text">Lorem ipsum dolor sit</p>
							</div>
							<div class="search-section">
								<h4 class="color-black">Address</h4>
								<p class="color-text">Lorem ipsum dolor sit</p>
							</div>
							<div class="search-section contact">
								<h4 class="color-black">Contact</h4>
								<p class="color-text">(+92) 000 0000</p>
								<p class="color-text">abc.com/xyz</p>
							</div>
							<a href="#"><button class="btn btn-primary gotopage">EXPLORE</button></a>									
						</div>	
					</div>
				</div>

				<!-- SEARCH DESCRIPTION TEXT -->
				<div class="row">
					<div class="col-xs-12 text-center">
						<h4 class="color-black spacing">Showing 3 of 3 results</h4>
					</div>
				</div>

				<!-- SHOW MORE RESULTS -->
				<div class="row">
					<div class="col-xs-12 text-center">
						<a href="#"><button class="btn btn-info">SHOW MORE</button></a>
					</div>
				</div>
			</div>
		</div>
		<!-- END OF RESULTS ROW -->

		<!-- START OF FOOTER -->
		<!-- START OF FOOTER -->
		<div class="footer">
			<div class="col-sm-12">
				<div class="col-sm-push-2 col-sm-8 col-sm-pull-2">
					<ul class="text-center">
						<li class="footer-links"><a href="#">Home</a></li>
						<li class="footer-links"><a href="#">Terms</a></li>
						<li class="footer-links"><a href="#">Privacy Policy</a></li>
						<li class="footer-links"><a href="#">Site Map</a></li>
						<li class="footer-links"><a href="#">Discover Places</a></li>
						<li class="footer-links"><a href="#">Navigation</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END OF FOOTER -->
		<!-- END OF FOOTER -->
	</div>

</body>

<script type="text/javascript" src="js/jquery.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.glyphicon-remove').click(function(){
			$('.search')[0].reset();
		}); 

		// SET SELECTED ACTIVITY
		$('button').click(function() {
			window.sessionStorage.setItem('path', $(this).attr('id'));
			console.log(sessionStorage);
		});
	});
</script>


</html>

		
			