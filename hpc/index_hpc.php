<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/header.php';?>

<body>
	


<!-- home section -->
<div id="home_hpc">
<!-- 	<div class="container">
		<div class="row" >
            <div class="col-md-5 col-sm-9" style="padding-top: 30px;">
            </div>
		</div>
	</div>
-->
</div>

<!-- divider section -->

<div class="divider">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-laptop"></i>
					<h2>GPGPUs and Optimization Techniques</h2>
					<p> </p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-laptop"></i>
					<h2>Scheduling in Heterogeneous Systems</h2>
					<p> </p>
				</div>
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
            

            <div class="col-md-4 col-sm-4" >
                <img src="/images/adas.jpg" class="img-responsive" alt="ADAS img" style="padding-top: 50px;">
            </div>
            <div class="col-md-8 col-sm-12 about-des">
                <h2>Project 1</h2>
                <p>An  ADAS  system  constitutes  multiple  object  detection  pipelines that  process  sensor  data  periodically  leveraging  state  of  the  art Deep Neural Networks (DNNs) and Convolutional Neural Networks(CNNs).  The  pipelines  are  used  to  detect  objects  in  the  vicinity and  accordingly  dispatch  commands  to  other  vehicular  subsystems such as park assist, anti-lock braking systems etc. for taking relevant actions.  Therefore,  there  exists  a  natural  requirement  for  real  time guarantees  for  executing  these  object  detection  pipelines.
                Furthermore, such pipelines possess   time  varying  dynamic  FPS  requirements  dictated  by different  driving  contexts. Given  the  set  of  ADAS  detection  workloads,  designing  automotive computing  solutions  with  the  ability  to  sustain  the  maximum  FPS requirements  of  all  detection  pipelines  simultaneously  may  lead  to over-provisioning  of  resources  on  a  restricted  memory  architecture, and  also  increased  power  consumption  and  thermal  aging  of  the heterogeneous  platform.
                </p>
                <p>
                The present work proposes an intelligent runtime system which can manage  the  mapping  and  scheduling  of  ADAS  detection  pipelines in next-generation automotive embedded platforms in a self-learning fashion  so  that  the  time  varying  dynamic  detection  requirements  of existing pipelines are efficiently managed while maintaining real time guarantees. Since  investigating every possible mapping decision imposes a considerably large searchspace  of  decisions  to  be  evaluated  for  finding  an  optimal  solution,we design Reinforcement Learning based schemes for  predicting task-device mapping decisions for each pipeline subject to dynamic FPS requirements over time.

                </p>
                <a href="" class="btn btn-default">LEARN MORE</a>
            </div>
        </div>
            
        <div class="row mt30">

            <div class="col-md-4 col-sm-4" >
                <img src="/images/ADASCover.png" class="img-responsive" alt="about img" style="padding-top: 50px;">
            </div>
            <div class="col-md-8 col-sm-12 about-des">
                <h2>Project 2</h2>
                <p></p>
                <p></p>
                <a href="" class="btn btn-default">LEARN MORE</a>
            </div>
        </div>
    
        <div class="row mt30">

            <div class="col-md-4 col-sm-4" >
                <img src="/images/encoding.png" class="img-responsive" alt="about img" style="padding-top: 50px;">
            </div>
            <div class="col-md-8 col-sm-12 about-des">
                <h2>Project 3</h2>
                <p></p>
                <p></p>
                <a href="" class="btn btn-default">LEARN MORE</a>
            </div>
        </div>
        
        <div class="row mt30">

            <div class="col-md-4 col-sm-4" >
               <img src="/images/CNN.png" class="img-responsive" alt="about img" style="padding-top: 50px;">
           </div>
           <div class="col-md-8 col-sm-12 about-des">
               <h2>Project 4</h2>
               <p></p>
               <p></p>
               <a href="" class="btn btn-default">LEARN MORE</a>
           </div>
        </div>
    
        <div class="row mt30">
			
            <div class="col-md-4 col-sm-4" >
                <img src="/images/temp.jpg" class="img-responsive" alt="about img" style="padding-top: 50px;">
            </div>
            <div class="col-md-8 col-sm-12 about-des">
                <h2>Project 5</h2>
                <p></p>
                <p></p>
                <a href="" class="btn btn-default">LEARN MORE</a>
            </div>
        </div>
    
        <div class="row mt30">

            <div class="col-md-4 col-sm-4" >
                <img src="/images/HPC.pdf" class="img-responsive" alt="about img" style="padding-top: 50px;">
            </div>
            <div class="col-md-8 col-sm-12 about-des">
                <h2>Project 6</h2>
                <p></p>
                <p></p>
                <a href="" class="btn btn-default">LEARN MORE</a>
            </div>


		</div>
	</div>
</div>

<!-- about section -->
<div id="about">
    <div class="container" style= "padding: 50px; background-color: white; color:black;">
        <h2 style="text-align:center; color:black;">Tool developed: PySchedCL</h2>
        <div class="row" style="text-align:center">
        
            <p style="text-align:justify" id="pyschedcl">

                  In the past few years, OpenCL has emerged as a widely used parallel programming standard for high perfor-
                  mance computing on heterogeneous platforms comprising processors of widely varying architectures.
                  The programming standard offers program portability  across an array of
                  different processor architectures e.g., general purpose (CPU), data parallel (GPU), task
                  parallel (CELL/B.E.) etc. The OpenCL API provides the programmer with a
                  vast array of options to write data-parallel programs efficiently for heterogeneous
                  architectures. However there exists a steep learning curve in learning the low level directives offered by the
                  OpenCL API completely. In addition to getting acquainted with the API, the programmer is  burdened with the
                  task of ascertaining target device characteristics and writing efficient code for utilizing the varied
                  processing elements in the heterogeneous system to their complete potential. Our framework is based on <thead>
                  the PyOpenCL python package and provides user friendly abstractions over the underlying API for designing
                  efficient solutions much faster. <br><br>

                  We have developed a python based scheduling framework for OpenCL applications named PySchedCL. The primary goal of PySchedCL is to provide a platform for rapid prototyping of
                  high performance applications as well as a research tool for experimenting various scheduling and mapping policies
                  of multiple OpenCL applications for different heterogeneous platforms. The framework leverages a kernel specification scheme that specifies
                  information regarding the host side management for the execution of an OpenCL kernel.  Given the corresponding specification
                  file for a kernel, the framework is capable of distributing the computation across the devices of the target heterogeneous architecture. <br>
            </p>
            <p style="text-align:justify">
                The salient features of the framework is represented in the following figure and discussed below.
                        <ol style="text-align:justify">
                        <li>The framework is capable of scheduling a set of independent OpenCL kernels (with their specification files) provided as input.
                        <li> The framework comprises a static analysis frontend capable of extracting program features that will
                          distribute the computation across available devices in the heterogeneous platform.  </li>
                        <li>serve in designing efficient heuristic functions for optimal mapping of kernels to devices. </li>
                        <li> In addition to the static analysis frontend, the framework provides a robust scheduling backend that
                          is capable of automatically managing OpenCL runtime parameters while intelligently scheduling
                          data parallel workloads across the different processors of the heterogeneous architecture.
                        </ol>

            </p>
            <p style="text-align:justify">
                    The current version of PySchedCL provides a scheduling engine that may be leveraged for the following tasks.
                    <ol style="text-align:justify">
                    <li> Partitioning an OpenCL kernel across multiple CPU and GPU device(s). </li>

                    <li> Scheduling a set of independent OpenCL kernels across multiple devices  </li>

                    <li> Designing runtime scheduling heuristics that leverage optimal partitioning information of individual OpenCL kernels. </li>
                    <li>  Utilities for carrying out extensive experimentation and evaluation of scheduling policies .
                    </ol>
            </p>
            <p style="text-align:justify">
                    In addition to the above tasks, the tool provides a rich API and an extensive documentation for extending the current capabilities of the framework with ease.

               
            </p>
        </div>

        <div class="row" style="text-align:center">
                <img src="/hpc/pyschedcl.png" class="img-responsive" alt="about img" style="padding-top: 50px;">
        </div>
        <div class="row" style="text-align:center">
                <a href="/hpc/tools/home.html" class="btn btn-default" style="background-color:teal">LEARN MORE</a>
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
				<a href="https://www.qualcomm.com/invention/research/university-relations/innovation-fellowship/winners" data-lightbox-gallery="portfolio-gallery"> Winner of Qualcomm Innovation Fellowship Challenge, India 2018-2019</a>
		</div>
	</div>
</div>



<!-- footer section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/footer.php';?>


</body>
</html>
