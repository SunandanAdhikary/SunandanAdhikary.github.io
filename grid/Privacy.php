<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/header.php';?>

<body>


	<div class="container text-center rounded_rectangle">
		<div class="row" style="padding:15px">
			<!-- <div class="col-md-12 col-sm-12"> -->
			<div class="hero-unit">
				<h1><span> Privacy Preserving Smart Grid Information Flow </span></h1>
			</div>
			<!-- </div> -->
		</div>
		<div class="row" style="padding:15px">
			<img class="one" src="/grid/images/GridPrivacy.png" width="500" height="400" alt="privacybanner">
		</div>
		<div class="row topic-desc" style="padding:15px">
			<p><span>

				A Smart Grid is a large scale Cyber Physical System comprising generation, distribution systems, metered loads, system state sensors and support for multiple real time communication protocols. Given the exponential growth of electricity consumption, modern grid systems implement sophisticated energy management and load balancing systems. Smart meter fulfills these expectations and provides a greater value for both supplier and customer sides. Smart meters and customers are some of the essential components of a smart grid to maintain a bi-directional flow of electricity and informative data for different operational purposes such as managing energy usage, timely billing, failure detection, demand response, load monitoring etc. The figure showsa Smart Grid architecture example employing an IEEE 9-bus power system model along with pricing as well as metering loops. The design and implementation principles of this kind of Cyber Physical System (CPS) are significantly different from other embedded systems because of the tight coupling of real valued and dense time  system dynamics with software based discrete automated control. In available  literature, people usually concentrate on separate control planes of the grid; either the power network or the communication network or a combination of both for satisfying different control objectives like economic dispatch, privacy aware metering, pricing  control and demand response. However, for considering the security perspective, the interaction of these loops need to be modeled, an aspect we bring in for the our current work. In the figure, the dotted red lines display the vulnerable attack channels of this architecture. Minor tempering of control signals in such systems can lead to blackout of grid infrastructure. Also, on the other hand, various studies have shown that  the closed loop formed by the real-time pricing signals and  (semi-)automated/manual demand response by consumers, appliances and lower level distribution frameworks can be exploited by an adversary to destabilize the control objective of pricing schemes. Small malicious modifications to the price signals or the demand can be continuously amplified in the closed loop to trigger grid inefficiency and cascaded failures leading to  blackouts. Since  Smart Grid  communication infrastructure supports very low  bandwidth, high-end cryptographic security solutions are  unsuitable for such systems. This motivates approaches for lightweight privacy-preserving smart meter data streaming. Moreover, the effect of such techniques on real time  electricity pricing is also something worth exploring since pricing signals operate in closed loop with user consumption patterns and adversarial attacks on such signals can potentially destabilise real time pricing algorithms causing huge financial loss to the utility provider. Our present work outlines a road map for verifiable privacy preserving data streaming protocol design given a formalized definition of privacy and usability of smart meter data. The robustness of such protocols is further tested in our work with Machine Learning based attacks which attempt to reverse engineer the data streams. Also we further study the effect of privacy transformations in the context of pricing loop sensitivity.

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
					<div class="header-content-container"><h2>Privacy Preserving Smart meter Streaming<span class="caret"></span></h2></div>
					<div class="collapse show" id="proj1-description">
							<p class="text-justify"> We propose various attack algorithms that can fetch the original input readings from the privacy preserved smart meter output streams with a very low guessing entropy. We follow this up by showing that each appliance's information leakage can be predicated with high accuracy from the obtained input readings. Thenceforth we propose new privacy preserving smart meter streaming algorithms to disguise appliance's usage patterns to mitigate such kind of attacks without violating the utility-privacy tradeoff. We support our claims by providing generic proofs and conducting experiments to evaluate our attack algorithm on real life dataset. Eventually we show the feasibility of our proposed privacy preserving scheme by executing it in our in-house Advanced Metering Infrastructure setup and Hardware in Loop Simulator. </p>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>


			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj4-description">
					<div class="header-content-container"><h2>Verifiable Protocol Design <span class="caret"></span></h2></div>
					<div class="collapse show" id="proj4-description">
							<p class="text-justify"> 
							Absence of formal proofs in  privacy solutions  is a matter of concern even after learning a set of  parameters which seem to satisfy privacy requirement for most input cases. We propose formal and mathematical protocol verification techniques for both cryptographic and non-cryptographic schemes. Formal encoding of non-cryptographic privacy preserving transformation  protocols can be proved to be mathematically secure with the use of popular interactive theorem provers (like Coq) which allow for the expression of mathematical assertions, proofs of these assertions and extraction of a certified program from the constructive proof of its formal encoding. Other flavours of formal techniques can also be explored in this context.  More specifically, mathematical definition of cryptographic protocols can be established as secure by expressing them in domain specific formal languages, encoding the target privacy properties and using associated engines for model checking, static analysis, observational equivalence etc for establishing provable privacy. In this context we propose examining the usability of formal engines like Coq, ProVerif & Cryptol as theorem prover and protocol verifier systems. </p>
					</div>
				</div>
			</div>
			 <br>
			<!-- <hr class="divider-line"> -->
			</div>



			<div class="row">
			<div class="container topic-desc">
				<div style="width:100% " data-toggle="collapse" data-target="#proj2-description">
					<div class="header-content-container"><h2>Machine Learning techniques for protocol robustness<span class="caret"></span></h2></div>
					<div class="collapse show" id="proj2-description">
						<!-- <div class="col-md-7 col-sm-7"> -->
							<p class="text-justify">  We work on establishing Machine Learning based tool flow for automated robustification of a privacy preserving transformation protocol. Our proposed tool is used to check system specific protocol robustness using Machine Learning classifiers. From given system specification and requirements, the proposed methodology will try to find a choice of privacy parameters satisfying system privacy criteria by iteratively tuning the privacy parameters in a closed loop. Essentially, the ML classifier learns whether a given parameterized version of the privacy algorithm is ensuring a privacy requirement for different input streams. Based on the feedback, it tunes the privacy parameters of such a scheme and saturates finally to a privacy parameter setting which the classifier deems fit for privacy implementation.   

							Again Instead of verifying the privacy constraint in each iteration, alternatively we can train a classifier to determine whether the privacy is maintained separately after the output sequence is generated. Based on the result of the classifiers we can divide the pattern in different clusters. For example, the pattern type can be windows of time that exhibit common classification results. These classification results can later be used to change or modify the HVAC controller accordingly by compromising the comfort factor. 
							</p>
					<!-- 	</div> -->
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
					<div class="header-content-container"><h2>Privacy preserved stable Real-Time Pricing (RTP) <span class="caret"></span></h2></div>
					<div class="collapse show" id="proj3-description">
						<!-- <div class="col-md-7 col-sm-7"> -->
							<p class="text-justify"> Real-time pricing algorithms operate in closed loop with demand response systems and actual consumers.  The sensitivity of such systems to  uncertain behaviours can be easily exploited by any adversary to destabilize the RTP system by introducing classes of integrity attacks, namely, the scaling and delay attacks. Simultaneously Smart Grid data aggregation and dynamic pricing schemes still lacks security and privacy measures to ensure the integrity and authenticity of their communication data. These vulnerabilities may bring down the whole system exploiting the  iterative feedback. Also existing pricing schemes work with original pricing and consumption signals thus violating consumers privacy. This brings out the trade-off between privacy and stability of the pricing loop in Smart grids, an area where the bounds for privacy and pricing control performance  are not established. our objective is to establish pricing algorithms which provide provable performance guarantee in the presence of privacy transformed data streams. </p>
						<!-- </div> -->
					</div>
				</div>
			</div>
			</div>
			<br>
			<hr class="divider-line">
		</div>



	</div>




<!-- footer section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/footer.php';?>

</body>
</html>
