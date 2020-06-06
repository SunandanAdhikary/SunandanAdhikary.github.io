<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/header.php';?>

<body>
	
<!-- navigation -->
	<!-- <div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<a href="#" class="navbar-brand"><img src="/images/logo.pdf" class="img-responsive"  alt="logo"></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../index.php">HOME</a></li>
				<li><a href="about.php">PEOPLE</a></li>
				<li><a href="projects.php">PROJECTS</a></li>
				<li><a href="tools.php">TOOLS</a></li>
				<li><a href="../contact.php">CONTACT US</a></li>
			</ul>
		</div>
	</div>
</div>		 -->

<!-- home section -->
<div id="home_hpc">
	<div class="container">
		<div class="row" >
			<div class="col-md-5 col-sm-9" style="padding-top: 30px;"></div>
			<!-- <div class="col-md-10 col-sm-9 " style="background-color:rgba(47, 79, 79, 0.6); line-height: 1200px; padding: 20px;">

				<h3 >Welcome to</h3>
				<h2> High Performance Real-time Computational Lab</h1>
			</div> -->
		</div>
	</div>
</div>

<!-- divider section -->

<div class="divider">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-laptop"></i>
					<h2>GPGPUs and Optimizations</h2>
					<p> </p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-laptop"></i>
					<h2>Automated Scheduling Framework</h2>
					<p> </p>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- about section -->
<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4" >
				<img src="/images/mechanism.jpeg" class="img-responsive" alt="about img" style="padding-top: 50px;">
			</div>
			<div class="col-md-8 col-sm-12 about-des">
				<h2>Mechchanisms Used</h2>
				<p></p>
				<p></p>
				<a href="" class="btn btn-default">LEARN MORE</a>
			</div>
		</div>
	</div>
</div>

<!-- Project section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Recent Projects</h2>
                <p>We are working on these projects ......</p>
			</div>
         </div>
         
         <div class="row mt30">
            
			
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="" data-lightbox-gallery="portfolio-gallery"><img src="/images/adas.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="" data-lightbox-gallery="portfolio-gallery"><img src="/images/ADASCover.png" alt="portfolio img"></a>
			</div>
            
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="" data-lightbox-gallery="portfolio-gallery"><img src="/images/encoding.png" alt="portfolio img"></a>
			</div>
			
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="" data-lightbox-gallery="portfolio-gallery"><img src="/images/CNN.png" alt="portfolio img"></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="" data-lightbox-gallery="portfolio-gallery"><img src="/images/temp.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="" data-lightbox-gallery="portfolio-gallery"><img src="/images/HPC.pdf" alt="Automated scheduling framework"></a>
			</div>
			<div class="">
				<a rel="nofollow" href="" class="btn btn-default">View More</a>
			</div>
		</div>
	</div>
</div>		


<div id="publications">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-5 col-md-8 col-sm-12">
				<h2>Publications</h2>
			</div>
         </div>
         
         <div class="row mt30">

         	<div style="padding-top: 20px;font-size: 150%">
				<a href="" data-lightbox-gallery="portfolio-gallery"> Srijeeta Maity, Anirban Ghose, Soumyajit Dey, Swarnendu Biswas, "Thermal Load-aware Adaptive Scheduling for Heterogeneous Platforms", International Conference on VLSI Design - 2020</a>
			</div>
            
			
			<div style="padding-top: 20px;font-size: 150%">
				<a href="" data-lightbox-gallery="portfolio-gallery">Anirban Ghose, Lokesh Dokara, Soumyajit Dey, Pabitra Mitra, "A Framework for OpenCL Task Scheduling on Heterogeneous Multicore ", Parallel Processing Letters Vol. 27, No. 3-4 (2017)</a>
			</div>

			<div style="padding-top: 20px;font-size: 150%">
				<a href="" data-lightbox-gallery="portfolio-gallery">Anirban Ghose, Soumyajit Dey, Pabitra Mitra and Mainak Chaudhuri, "Divergence Aware Automated Partitioning of OpenCL Workloads", India Software Engineering Conference - 2016</a>
			</div>
			
			
		</div>

		<div style="text-align: center;">
				<a rel="nofollow" href="" class="btn btn-default">View More</a>
		</div>
	</div>
</div>		

<div id="publications">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-5 col-md-8 col-sm-12">
				<h2>Awards</h2>
			</div>
         </div>
         
         <div style="padding: 20px;font-size: 200%">
				<a href="" data-lightbox-gallery="portfolio-gallery"> Winner of Qualcomm Innovation Fellowship Challenge 2018-2019</a>
		</div>
	</div>
</div>



<!-- footer section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/footer.php';?>

<!-- javascript js -->	
<!-- <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script> -->

</body>
</html>
