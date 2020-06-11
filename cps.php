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
				<h1><span>Cyber Physical Systems Security and Control</span></h1>
			</div>
			<!-- </div> -->
		</div>
		<div class="row" style="padding:15px">
			<img class="img-responsive" src="/images/cps/cps.png" alt="cpsbanner">
		</div>
		<div class="row topic-desc lead" style="padding:15px">
			<p><span>
					Recent Popularity of Cyber-Physical Systems (CPS) spans through several domains from automotives to poweer distribution systems. Advancement in CPS research has enhanced features like conectivity and automation enabling a large area coverage with least human effort in such systems. As an example Automated Connected Vehicles, Smart grid and Amart Building management Systems, IoT devices are becoming more commonplace. But these boons of sophistication come with an inevitable let down of more exposure towards malicious intents jeopardising the safety requirements of such systems. We have seen several such examples in recent times. Few years back Charlie Miller and Cris Valasek has proved how vulnerable the automobiles are becoming as they try to become smarter by demonstrating not only physical but also remote carjacking. They demonstrated <a href="https://en.wikipedia.org/wiki/Zero-day_(computing)">Zero-day </a>like<a href="https://www.wired.com/2015/07/hackers-remotely-kill-jeep-highway/"> cyber attacks</a> on vehicles form manufacturers like JEEP (Cherokee),Fiat (Chrysler). Such vulnerabilities has obligated new lagislations for automobile vendors to meet certain protection standards for sold vehicles. Even after that there have been several <a href="">incidents</a> of Wireless Carjacking. Targetting large scale CPS vulnerabilities is not new. We have seen how 500kb computer code (<a href="https://en.wikipedia.org/wiki/Stuxnet">Stuxnet</a>) can destroy Atomic Power Establishments in 2010 by compromising programmable Logic COntrollers hugesly used in any embedded systems! By remotely  <a href="https://www.wired.com/2016/03/inside-cunning-unprecedented-hack-ukraines-power-grid/">shutting down power supply of Ivanofranivsk region of West Ukraine</a> in 2015 the attackers proved they are not content with just hacking and unlocking car doors remotely while with advancements in CPS offers them a huge attack surface. So our research is primarily aimed to eliminate such ill-intents to challange CPS safety without compromising their usual functionalities. So utilizing our knowledge from scholars of deifferent domains like Electrical, Electronics and Comunication and COmputer Science and Engineering, we try to develop resource aware security mechanisms for safety-critical CPSs that hugely impacts our daily life. With top-notch lab setups to examine our works on real world systems we intend to provide provable security and safety guarantees by utilizing state of the art lightweight cryptographic techniques and intelligent control co-designs.  
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
					<h1><span>Research Topics</span></h1>
				</div>
				<!-- </div> -->
			</div>
			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj1-description">
					<div class="header-content-container"><h2>Safety and Robustness Analysis of Safety-Critical CPS<span class="caret"></span></h2></div>
					<div class="collapse" id="proj1-description">
						<div class="col-md-7 col-sm-7">
							<p class="text-justify"> Most of the CPS we intent to provide security are Safety-Critical. So we developed methods to find security loopholes by analysing safety of these systems as they continue to function in real world. This analysis helps under stand how robust the control systems is towards such anomalies. Using this approach we can as well understand how an attacker functions and make it more realistic by imposing real-world constraints. We can intelligently mine these system parameters that can restraint the accessibility of system vulnerabilities. Along with analyzing vulnerabilities we are also interested in system control behaviours and how are those affected when such attack scenarios arise in real world. As we are interested in provably secure such systems, we utilize several verification tools like <a href="">Z3</a>, <a href="">dReal</a> to analyse system vulnerabilities.  </p>
							<img class="img-responsive" src="" alt="carmaker">
						</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="/images/cps/formaltool.png" alt="attackSynthTool">
							<p class="text-justify"> THere are projects running on such topics funded by CPS giant <a href="">Bosch</a> to analyse security of automoblies that relies on their developed components.</p>
						</div>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>

			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj2-description">
					<div class="header-content-container"><h2>Designing Light weight Security Mechanisms for Real-time CPS<span class="caret"></span></h2></div>
					<div class="collapse" id="proj2-description">
						<div class="col-md-7 col-sm-7">
							<p class="text-justify"> MItigating security vulnerabilities in CPSs are not like addressing ususal software security or all about utilizing cryptographic practices. The mechanism needs an in-depth knowledge about system functionalities. Because these vulnerabilities are not generic and mostly are system specific. For addressing such vulnerabilities we can improve control behaviour of the system to be robust against such attacks. The protection system design can be integrated well by exploiting the control structure of the system. We also research on lighweight security components popular among cryptography reasearchers like <a href="">Physically Unclonable Functions(PUFs)</a> 
							<!-- and <a href=""></a>System Obfuscators --> because of their resource constraints. This is another aspect of CPS like automobiles or IoT devices we need to contemplate while designing security mechanisms since most such systems are limited on resource. So we must ensure the security along with ensuring desired performance profile of the CPS.
							</p>
						</div>
						<div class="col-md-5 col-sm-5" style="padding:0px 5px 0px 5px">
							<img class="img-responsive" src="" alt="">
						</div>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>


			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj3-description">
					<div class="header-content-container"><h2> Developing Control Scheduling Co-design Strategies for CPS Security Mechanisms <span class="caret"></span></h2></div>
					<div class="collapse" id="proj3-description">
						<div class="col-md-7 col-sm-7">
							<p class="text-justify"> Developing lighweight security measures with performance guarantee is not enough when we are talkng about resource constrained CPSs. Becuase prioritized safety-critical tasks must not be harmed while spacing the security tasks in place. For this COntrol-Scheduling Co-design approach comes in our research space. For more details on such works visit <a href="">Real-Time Systems</a> Section of our research domains. </p>
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