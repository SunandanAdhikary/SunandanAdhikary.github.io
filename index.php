<!DOCTYPE html>
<html lang="en">


<!-- header section -->

<head>
	<title>HiPRC Bootstrap Template</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--
    OneTel Template
    http://www.templatemo.com/tm-468-onetel
    -->
	<!-- stylesheet css -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/nivo-lightbox.css">
	<link rel="stylesheet" href="/css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="/css/templatemo-style.css">
	<!-- google web font css -->
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

	<!-- javascript js -->
	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/nivo-lightbox.min.js"></script>
	<script src="/js/custom.js"></script>

</head>
<!-- navigation -->

<div class="container">
	<div class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="197" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header logo_helper">
				<a href="#" class="navbar-brand"><img src="/images/logo.pdf" class="img-responsive" alt="logo"></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/index.php" class="active">HOME</a></li>
					<li><a href="/people.php">PEOPLE</a></li>
					<li><a href=#research>RESEARCH</a></li>
					<!-- <li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">RESEARCH
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#hpc">High Performance Computing</a></li>
					<li><a class="dropdown-item" href="#cps">Cyber-Physical System Control & Security</a></li>
					<li><a class="dropdown-item" href="#sg">Smart Grid</a></li>
					<li><a class="dropdown-item" href="#mcn">Wireless multi-hop control networks</a></li>
					</ul>
				</li> -->
					<li><a href="/publications.php">PUBLICATIONS</a></li>
					<li><a href="#industry">INDUSTRY</a></li>
					<li><a href="http://cse.iitkgp.ac.in/~soumya/course.html">COURSES</a></li>
					<li><a href="#contact">CONTACT US</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<body>



	<!-- home section -->
	<div id="home">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-5 col-sm-9" style="padding-top: 30px;"></div> -->
				<!-- <div class="page-header col-md-10 col-sm-9 " style="background-color:rgba(47, 79, 79, 0.6); line-height: 1200px; padding: 20px;"> -->
				<div class="hero-unit"
					style="background-color:rgba(47, 79, 79, 0.6); line-height: 1250px; padding: 20px;">
					<h2>Welcome to</h2>
					<h3>High Performance Real-time Computation Lab</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container" id="about" style="padding:10px">
			<div class="row" style="padding: 20px;">
				<div class="col-md-6 col-sm-6 text-left text-justify" id="aboutus">
					<div>
						<h1 class="header-content-container">About Us</h1>
						<p><span>We are a motivated group of people from <a href="">Indian Institute of Techology,
									Kharagpur</a> working under <a href="http://cse.iitkgp.ac.in/~soumya/">Professor Soumyajit Dey</a></span></p>
					</div>
				</div>

				<div class="col-md-6 col-sm-6 text-right" id="updates">
					<!-- <> -->
						<h1 class="header-content-container">Updates</h1>
						<div class="clearfix" style="width: 100%;">
							<div class="update-date date">
								<strong style="color:white">18th April,2018</strong>
							</div>
							<div class="blockquote-reverse">
								<span class=""><a href="#">Srijeeta Maity and Anirban Ghose awarded with Qualcomm
										Innovation Award</a></span>
							</div>
						</div>
						<div class="clearfix" style="width: 100%;">
							<div class="update-date date">
								<strong style="color:white">...</strong>
							</div>
							<div class="blockquote-reverse">
								<span class=""><a href="#">..</a></span>
							</div>
						</div>
					<!-- </> -->
				</div>
			</div>
		</div>
	</div>



	<!-- research section -->
	<div class="divider">
		<div class="container" id="research">
			<div class="row " style="padding:15px">
				<div class="col-md-12 col-sm-12">
					<div class="header-content-container">
						<h1><span>Research Topics</span></h1>
					</div>
				</div>
			</div>
			<div class="row" style="padding: 20px;">
				<div class="col-md-6 col-sm-6 card" style="padding:15px">
					<div class="divider-wrapper divider-one" data-toggle="collapse" data-target="#hpc-description">
						<i class="fa fa-laptop"></i>
						<h2>High-Performance Computating</h2>
						<p id="hpc-description" class="collapse"> High-performance computing is the use of parallel
							processing for running advanced application programs efficiently, reliably and quickly. </p>
						<a href="/hpc/index_hpc.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 card" style="padding:15px">
					<div class="divider-wrapper divider-two" data-toggle="collapse" data-target="#cps-description">
						<i class="fa fa-cogs" aria-hidden="true"></i>
						<h2>Cyber-Physical Systems</h2>
						<p id="cps-description" class="collapse"> A system with a physical plant being controlled or
							governed by a control algorithm is a Cyber-Physical System (CPS). With advancement in IoT
							field CPS are getting more networked in nature. We research on securing them utilizing
							control theoretic measures keeping their resource constraints in mind. </p>
						<a href="/cps/cps.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
			</div>

			<div class="row" style="padding: 20px;">

				<div class="col-md-6 col-sm-6 card" style="padding:15px">
					<div class="divider-wrapper divider-one" data-toggle="collapse" data-target="#rts-description">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						<h2>Real-Time Sysemst</h2>
						<p id="rts-description" class="collapse"> ... </p>
						<a href="/rts/rts.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>

				<div class="col-md-6 col-sm-6 card" style="padding:15px">
					<div class="divider-wrapper divider-two" data-toggle="collapse" data-target="#sg-description">
						<i class="fa fa-bolt" aria-hidden="true"></i>
						<h2>Smart Grids</h2>
						<p id="sg-description" class="collapse"> ... </p>
						<a href="/sg/sg.php" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
			</div>

			<div class="row" style="padding: 20px;">
				<!-- <div class="col-md-6 col-sm-6"> -->
				<div class="divider-wrapper divider-one" style="padding: 15px">
					<i class="fa fa-wifi" aria-hidden="true"></i>
					<h2>Wireless multi-hop control networks (MCN)</h2>
					<p>Wireless multi-hop control networks (MCN) facilitate real-time monitoring and control for a
						significant class of distributed cyber-physical systems.</p>
					<a href="/mcn/mcn_home.php" class="btn btn-default">LEARN MORE</a>
				</div>
				<!-- </div> -->

			</div>
		</div>
	</div>


	<!-- industry section -->
	<div class="content text-center">
		<div class="container" id="industry">
			<div class="row " style="padding:15px">
				<div class="col-md-12 col-sm-12">
				<div class="header">
					<h1><span>Industry Affiliations</span></h1>
				</div>
				</div>
			</div>
			<div class="row" style="padding:15px">
				<div class="col-md-3 col-sm-3 logo_helper">
					<span ><img class="img-responsive img-rounded" src="/images/bosch.png"></span>
				</div>
				<div class="col-md-3 col-sm-3 logo_helper">
					<span><img class="img-responsive" src="/images/intel.png"></span>
				</div>
				<div class="col-md-3 col-sm-3 logo_helper">
					<span><img class="img-responsive" src="/images/qualcomm.png"></span>
				</div>
				<div class="col-md-3 col-sm-3 logo_helper">
					<span><img class="img-responsive" src="/images/tatamotors.png"></span>
				</div>
			</div>
		</div>
	</div>

	<!-- contact section -->
	<div id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-sm-12">
					<h2>Get in touch</h2>
					<p> If you are interested in this domain and want to pursue research contact us through email. </p>
				</div>
				<div class="col-md-8 col-sm-8 mt30">
					<form action="#" method="post" role="form">
						<div class="col-md-6 col-sm-6">
							<label for="name">NAME</label>
							<input name="name" type="text" class="form-control" id="name">
							<label for="email">EMAIL</label>
							<input name="email" type="email" class="form-control" id="email">
						</div>
						<div class="col-md-6 col-sm-6">
							<label for="message">MESSAGE</label>
							<textarea name="message" rows="6" class="form-control" id="message"></textarea>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" name="submit" class="btn btn-default">SEND</button>
						</div>
					</form>
				</div>
				<div class="col-md-4 col-sm-4 address">
					<div>
						<h3>Email</h3>
						<p>info@company.com</p>
					</div>
					<div>
						<h3>Phones</h3>
						<p>010-020-0340 | 090-080-0760</p>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 mt20">
					<h3>Location</h3>
					<div class="google_map mt20">
						<div id="map-canvas"></div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- footer section -->
	<?php include 'footer.php';?>



</body>

</html>