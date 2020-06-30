<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/header.php';?>

<body>



	<!-- header section -->
	<div class="container text-center rounded_rectangle">
		<div class="row" style="padding:15px">
			<!-- <div class="col-md-12 col-sm-12"> -->
			<div class="hero-unit">
				<h1><span>Automotive Systems</span></h1>
			</div>
			<!-- </div> -->
		</div>
		<div class="row" style="padding:15px">
			<img class="img-responsive" src="/images/rts/etaslabcar.jpg" alt="rtsbanner">
		</div>
		<div class="row topic-desc" style="padding:15px">
			<p><span>
				Real-time systems are collections of tasks where in addition to any ordering constraints
				imposed by precedences between the tasks, there are also timing constraints. 
				These constraints relate the execution of a task to real time, which is physical 
				time in the environment of the computer executing the task. 
				Typically, tasks have deadlines, which are values of physical time by which the task must be completed. 
				More generally, real-time programs can have all manner of timing constraints, not just deadlines. 
				The strategies used to implement these task to meet their respective timing contraints is called scheduling.	  
			</span></p>
			<p><span>
				Computer science theorists has been working on different research problem related to Scheduling and formal verification of real time system since longtime.
				The Mars pathfinder mission launched in 1997 which was termed successful mission, but later started to have software glitches. The engineers team in ground
				tried to recreate the scenario for debugging with traces of execution and found that the system was having priority inversion problem. 
				In 1990's itself, the research team comprising Lui Sha, John Lehoczky, and Raj Rajkumar from Carnegie Mellon University 
				had identified priority inversion problem and proposed solution for it. 	
			</span></p>
			<p><span>
				We as a team of research scholars from various disciplines along with grad students
				in collaboration with other departments in campus and industries are working on various problem related to distributed system scheduling, networking,  
				verification and validation with Hardware in Loop (HIL) in automotive domain. 	  
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
				<div class="header center">
					<h1><span>Research Topics</span></h1>
				</div>
				<!-- </div> -->
			</div>


			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj1-description">
					<div class="header-content-container"><h2> Developing Control Scheduling Co-design Strategies for CPS Security Mechanisms <span class="caret"></span></h2></div>
					<div class="collapse" id="proj1-description">
						<div class="col-md-7 col-sm-7">
							<p class="text-justify"> 
								Developing ligthweight security measures with performance guarantee is not enough when we are talkng about resource constrained CPSs. 
								Because prioritized safety-critical tasks must not be harmed while spacing the security tasks in place. 
								For this Control-Scheduling Co-design approach comes in our research space. 
							 </p>
						</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="" alt="">
						</div>
					</div>
				</div>
			</div>
			</div>
			<br>
			<hr class="divider-line">
		</div>
	</div>

<!-- resources section -->
	<div class="content text-center">
		<div class="container">
			<div class="row " style="padding:15px">
				<!-- <div class="col-md-12 col-sm-12"> -->
				<div class="header">
					<h1><span>Research Facilities</span></h1>
				</div>
				<!-- </div> -->
			</div>


			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#hw-description">
					<div class="header-content-container"><h2> Hardware <span class="caret"></span></h2></div>
					<div class="collapse" id="hw-description">
					<div class="content text-center">
						<p> 
							<ul type = "none">
								<li>Infineon Tricore Starter Kit TC2xx</li>
  								<li>Infineon Tricore Evaluation Kit TC3xx</li>
  								<li>Infineon Ethernet Gateway Evaluation Board</li>
								<li>ETAS Desk Labcar</li>
								<li>Zynq FPGA board</li>
								<li>Lauterbach Debugger</li>
							</ul>
						</p>
					</div>
					</div>
				</div>
			</div>
			</div>
			<br>
			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#sw-description">
					<div class="header-content-container"><h2> Software <span class="caret"></span></h2></div>
					<div class="collapse" id="sw-description">
						<p "> 
							<ul type = "none">	
								<li>ETAS-INCA Calibration Software</li>
  								<li>ETAS-AUTOSAR</li>
  								<li>ETAS-COSYM</li>
								<li>Tasking Compiler</li>
  								<li>IPG Carmaker (Office and HIL version)</li>
							</ul>
						</p>

					</div>
				</div>
			</div>
			</div>
			<br>


			<hr class="divider-line">
		</div>
	</div>



		<!-- publication section -->
	<div class="content text-center">
		<div class="container" id="publications">
			<div class="row " style="padding:15px">
				<div class="col-md-12 col-sm-12">
				<div class="header">
					<h1><span>Publications</span></h1>
				</div>
				</div>
			</div>
			<div class="row" style="padding:15px">
				<span> All publications are listed in <a href="\publication.php">publications</a> tab. The <span class="label label-primary">RTS</span> marked ones are RTS related research papers. </span>
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
			<div class="col-md-3 col-sm-3 logo_helper">
					<!-- <span><img class="img-responsive" src="/images/intel.png"></span> -->
				</div>
				<div class="col-md-3 col-sm-3 logo_helper">
					<span ><img class="img-responsive img-rounded" src="/images/industries/bosch.png"></span>
				</div>
				<div class="col-md-3 col-sm-3 logo_helper">
					<span><img class="img-responsive" src="/images/industries/tatamotors.png"></span>
				</div>
				<div class="col-md-3 col-sm-3 logo_helper">
					<!-- <span><img class="img-responsive" src="/images/qualcomm.png"></span> -->
				</div>
			</div>
		</div>
	</div>

	<!-- footer section -->
	<?php include $_SERVER["DOCUMENT_ROOT"] .'/footer.php';?>


</body>

</html>