<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/header.php';?>

<body>



	<!-- header section -->
	<div class="container text-center">
		<div class="row" style="padding:15px">
			<!-- <div class="col-md-12 col-sm-12"> -->
			<div class="hero-unit">
				<h1><span>Cyber Physical Systems Security and Control</span></h1>
			</div>
			<!-- </div> -->
		</div>
		<div class="row" style="padding:15px">
			<img class="img-responsive" src="" alt="">
		</div>
		<div class="row topic-desc lead" style="padding:15px">
			<p><span>
					We research on CPS.
				</span></p>
		</div>
		<br>
			<hr class="divider-line">
	</div>


	<!-- projects section -->
	<div class="content text-center">
		<div class="container">
			<div class="row " style="padding:15px">
				<!-- <div class="col-md-12 col-sm-12"> -->
				<div class="header">
					<h1><span>Research Projects</span></h1>
				</div>
				<!-- </div> -->
			</div>
			<div class="row" style="padding:15px">
				<div style="width:100% " data-toggle="collapse" data-target="#proj1-description">
					<h2>Project 1 <span class="caret"></span></h2>
					<div id="proj1-description">
						<div class="col-md-7 col-sm-7">
							<p class="collapse text-justify"> Our tool chain can generate attack scenarios given any
								plant and controller description using SMT.</p>
						</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="/cps/formaltool.png" alt="attackSynthTool">
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="padding:15px">
				<div data-toggle="collapse" data-target="#proj1-description">
					<h2>Project 1 <span class="caret"></span></h2>
					<p id="proj1-description" class="collapse text-justify"> High-performance computing is the use of
						parallel processing for running advanced application programs efficiently, reliably and quickly.
					</p>
					<img class="img-responsive" src="" align="middle">
				</div>
			</div>
			<br>
			<hr class="divider-line">
		</div>
	</div>

	<!-- publication section -->
	<div class="content text-center">
		<div class="container">
			<div class="row " style="padding:15px">
				<div class="col-md-12 col-sm-12">
				<div class="header">
					<h1><span>Publications</span></h1>
				</div>
				</div>
			</div>
			<div class="row" style="padding:15px">
				<span> All publications are listed in <a href="\publication.php">publications</a> tab. The <span class="label label-primary">CPS</span> marked ones are CPS related research papers. </span>
			</div>
			<br>
			<hr class="divider-line">
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
				<div class="col-md-4 col-sm-4 logo_helper">
					<span class="img-thumbnail"><img class="img-responsive img-rounded" src="/cps/bosch.jpg"></span>
				</div>
				<div class="col-md-4 col-sm-4 logo_helper">
					<span class="img-thumbnail"><img class="img-responsive" src=""></span>
				</div>
				<div class="col-md-4 col-sm-4 logo_helper">
					<span class="img-thumbnail"><img class="img-responsive" src=""></span>
				</div>
			</div>
		</div>
	</div>

	<!-- footer section -->
	<?php include $_SERVER["DOCUMENT_ROOT"] .'/footer.php';?>


</body>

</html>