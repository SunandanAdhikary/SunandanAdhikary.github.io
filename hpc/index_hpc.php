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
                    <p>There is huge scope of optimizing performance of SIMD applications in co-processors such as GPUs and FPGAs. Some of the standard optimization techniques that we have explored in different  GPUs are kernel fusion, coarsening, tiling etc. for varied applications ranging from vision based ADAS tasks, speech recognisation, ML training and so on.   </p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-laptop"></i>
					<h2>Scheduling in Heterogeneous Systems</h2>
                    <p>Scheduling in heterogeneous systems comprising of multiple devices with varying compute capability like big-LITTLE CPUs, iGPUs, dGPUs, FPGAs is much more complex than in standard homogenous system. We explore different scheduling mechanisms suitable for both embedded mobile platforms and as well as large scale server-cluster platforms.</p>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- projects section -->
<div class="content text-center">
    <div class="container">
        <div class="row " style="padding:15px">
            <div class="header">
                <h1 ><span>Research Projects</span></h1>
            </div>
        </div>

        <div class="container topic-desc"  style= "padding: 50px; background-color: LightSteelBlue  ; ">
            <div style="width:100% " data-toggle="collapse" data-target="#proj1-description" >
                <div class="header-content-container" >
                    <h2 style="text-align:center; color:black;">Intelligen ADAS task management on heterogeneous automotive architecture <span class="caret"></span></h2>
                </div>
                <div class="collapse" id="proj1-description" style="padding:20px; ">
                    
                        <p class="text-justify" style= " color:rgb(64,64,64);">
                        An  ADAS  system  constitutes  multiple  object  detection  pipelines that  process  sensor  data  periodically  leveraging  state  of  the  art Deep Neural Networks (DNNs) and Convolutional Neural Networks(CNNs).  The  pipelines  are  used  to  detect  objects  in  the  vicinity and  accordingly  dispatch  commands  to  other  vehicular  subsystems such as park assist, anti-lock braking systems etc. for taking relevant actions.  Therefore,  there  exists  a  natural  requirement  for  real  time guarantees  for  executing  these  object  detection  pipelines.
                        Furthermore, such pipelines possess   time  varying  dynamic  FPS  requirements  dictated  by different  driving  contexts. Given  the  set  of  ADAS  detection  workloads,  designing  automotive computing  solutions  with  the  ability  to  sustain  the  maximum  FPS requirements  of  all  detection  pipelines  simultaneously  may  lead  to over-provisioning  of  resources  on  a  restricted  memory  architecture, and  also  increased  power  consumption  and  thermal  aging  of  the heterogeneous  platform.<br><br>

                        The present work proposes an intelligent runtime system which can manage  the  mapping  and  scheduling  of  ADAS  detection  pipelines in next-generation automotive embedded platforms in a self-learning fashion  so  that  the  time  varying  dynamic  detection  requirements  of existing pipelines are efficiently managed while maintaining real time guarantees. Since  investigating every possible mapping decision imposes a considerably large searchspace  of  decisions  to  be  evaluated  for  finding  an  optimal  solution,we design Reinforcement Learning based schemes for  predicting task-device mapping decisions for each pipeline subject to dynamic FPS requirements over time.

                    </p>
                    <div class="row" style="padding:0px 5px 0px 5px">
                        <img class="img-responsive" src="/hpc/images/adas.png" alt="adas block diagram">
                        <br><br>
                        <a href="https://www.qualcomm.com/invention/research/university-relations/innovation-fellowship/winners" data-lightbox-gallery="portfolio-gallery" style= "color:black"> Winner of Qualcomm Innovation Fellowship Challenge, India 2018-2019</a>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="container topic-desc" style= "padding: 50px; background-color: OldLace  ; ">
            <div style="width:100% " data-toggle="collapse" data-target="#proj2-description" >
                <div class="header-content-container" >
                    <h2 style="text-align:center; color:black;">DAG scheduling in CPU-GPU clusters <span class="caret"></span></h2>
                </div>
                <div class="collapse" id="proj2-description" style="padding:20px">
                    
                    <p class="text-justify" style= " color:rgb(64,64,64);">
                        Recent efforts towards application scheduling on heterogeneous multi-processor architectures typically consider applications to be represented as directed acyclic graphs (DAGs). Each application DAG is annotated at the task level with relevant execution time information that is leveraged by scheduling algorithms (List or Clustering based) to ascertain near optimal schedules at runtime. However, given an online setting, where applications are submitted by multiple users and the types of applications are not restrictive, the chances of knowing execution time information for every program is highly unlikely. In this context, we propose a class of intelligent algorithms for heterogeneous CPU-GPU platforms that leverages static analysis methodologies coupled with machine learning and ascertains how based on static program structure of tasks, device assignments should be made at runtime. This methodology helps in bypassing the requirement for profiling based offline execution time analysis thus making it applicable in an online scheduling scenario. We model applications as data parallel task graphs using the OpenCL programming model leveraging its device independent portability feature. The algorithms under consideration include i) list scheduling where tasks are ordered and dispatched to devices one at a time and ii) cluster scheduling where task clusters are formed and dispatched to devices together, thereby minimizing communication overhead.<br><br>

                        The input is a set of OpenCL application DAGs which are to be scheduled on a heterogeneous platform comprising n CPUs and m GPUs. The information generated by the feature mining and ml classifier models help to enforce priorities among tasks and associate device affinities to each individual task. Using this information and a suitable heuristic, tasks of the arrived DAGs are selected at any scheduling epoch and mapped to a suitable device in the heterogeneous platform.  We are developing a scheduling simulator for carrying out extensive simulation experiments to validate our proposed algorithms. 


                    </p>
                    <div class="row" style="padding:0px 5px 0px 5px">
                        <img class="img-responsive" src="/hpc/images/dag_sched.png" alt="DAG scheduling">
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="container topic-desc" style= "padding: 50px; background-color: Azure ; ">
            <div style="width:100% " data-toggle="collapse" data-target="#proj3-description" >
                <div class="header-content-container" >
                    <h2 style="text-align:center; color:black;">Accelerating deep learning <span class="caret"></span></h2>
                </div>
                <div class="collapse" id="proj3-description" style="padding:20px">
                    
                    <p class="text-justify" style= " color:rgb(64,64,64);">
                        The landscape of deep learning has witnessed a paradigm shift in recent years with the advent of compiler tool chains with dedicated graphical IRs, custom made accelerators tuned for tensor computation and algorithmic optimizations for both training and inference workloads on both heterogeneous compute clusters and embedded platforms. In this context, we are also exploring optimizations for deriving novel scheduling solutions for mapping deep learning workloads on heterogeneous architectures. For significantly large training workloads, the primary bottleneck is the on-chip memory of accelerators. In this regard we are investigating scheduling techniques of asynchronously prefetching and offloading memory in parallel with the computation for accelerating the training process. For inference pipelines, the primary objective would be to ensure that thermal degradation of the platform does not occur. In this regard, we are investigating novel GPGPU optimizations such as kernel fusion and coarsening for mapping the pipeline efficiently on an embedded platform. For both styles of optimizations, predictive modelling and control theoretic solutions are being envisaged for facilitating dynamic and adaptive mapping of computation kernels pertaining to deep learning workloads.


                    </p>
                    <div class="row" style="padding:0px 5px 0px 5px">
                        <img class="img-responsive" src="/hpc/images/dl.png" alt="DL optimization">
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="container topic-desc" style= "padding: 50px; background-color: LavenderBlush ; ">
            <div style="width:100% " data-toggle="collapse" data-target="#proj4-description" >
                <div class="header-content-container" >
                    <h2 style="text-align:center; color:black;">Thermal aware scheduling in heterogeneous embedded platform <span class="caret"></span></h2>
                </div>
                <div class="collapse" id="proj4-description" style="padding:20px">
                    
                    <p class="text-justify" style= " color:rgb(64,64,64);">
                        
                      Modern mobile platforms are equipped with heterogeneous multiprocessor system-on-chip (MPSoC) where the architecture is becoming increasingly complex and heterogeneous having multiple compute elements with varying compute capabilities. They can include multicore big-LITTLE CPUs, accelerators capable of general-purpose computing like graphic processing units (GPUs), and field programmable gate arrays (FPGAs) or digital signal processor (DSP). Increasingly smaller chip size and functional complexity leads to increase in the power density which in turn results in chip overheating which degrades its reliability, and may risk physical safety. Due to the absence of active cooling measures in such mobile platforms, thermal constraints are much more stringent . Thus, in recent times temperature-aware resource scheduling that can maintain on-chip thermal constraints  as well as application timing constraints has become a key system design objective in heterogeneous embeded platform with varying compute elements. We are actively researching on efficent scheduling mechanisms that can determine optimal or near-optimal assignment of tasks to  devices with multiple control values of the thermal features in heterogeneous embedded processors having multiple constraints such as meeting deadline, power enveloping etc.


                    </p>
                    <div class="row" style="padding:0px 5px 0px 5px">
                        <img class="img-responsive" src="/hpc/images/thermal.png" alt="attackSynthTool">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<br><br>

<!-- tool section -->
<div class="content text-center" >
    <div class="container">
        <div class="row " style="padding:15px">
            <div class="header">
                <h1 ><span>Tools developed</span></h1>
            </div>
        </div>
        <div id="about">
            <div class="container topic-desc" style= "padding: 50px; background-color: white; color:black;" data-toggle="collapse" data-target="#tool-description,#tool-description0,#tool-description1,#tool-description2,#tool-description3,#tool-description4,#tool-description5,#tool-description6">
                <h2 style="text-align:center; color:black;">PySchedCL: Python based Scheduling framework for OpenCL applications</h2>
                <div class="row" style="text-align:center" >
        
            <p style="text-align:justify;color:rgb(64,64,64)" id="tool-description" class="collapse" >

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
                  efficient solutions much faster.
            </p>
            <p style="text-align:justify;color:rgb(64,64,64)" id="tool-description0" class="collapse">

                  The primary goal of PySchedCL is to provide a platform for rapid prototyping of
                  high performance applications as well as a research tool for experimenting various scheduling and mapping policies
                  of multiple OpenCL applications for different heterogeneous platforms. The framework leverages a kernel specification scheme that specifies
                  information regarding the host side management for the execution of an OpenCL kernel.  Given the corresponding specification
                  file for a kernel, the framework is capable of distributing the computation across the devices of the target heterogeneous architecture. <br>
            </p>
            <p style="text-align:justify;color:rgb(64,64,64)" id="tool-description1" class="collapse">
                The salient features of the framework is represented in the following figure and discussed below.
                        <ol style="text-align:justify;color:rgb(64,64,64)" id="tool-description2" class="collapse">
                        <li>The framework is capable of scheduling a set of independent OpenCL kernels (with their specification files) provided as input.
                        <li> The framework comprises a static analysis frontend capable of extracting program features that will
                          distribute the computation across available devices in the heterogeneous platform.  </li>
                        <li>serve in designing efficient heuristic functions for optimal mapping of kernels to devices. </li>
                        <li> In addition to the static analysis frontend, the framework provides a robust scheduling backend that
                          is capable of automatically managing OpenCL runtime parameters while intelligently scheduling
                          data parallel workloads across the different processors of the heterogeneous architecture.
                        </ol>

            </p>
            <p style="text-align:justify;color:rgb(64,64,64)" id="tool-description3" class="collapse">
                    The current version of PySchedCL provides a scheduling engine that may be leveraged for the following tasks.
                    <ol style="text-align:justify;color:rgb(64,64,64)" id="tool-description4" class="collapse">
                    <li> Partitioning an OpenCL kernel across multiple CPU and GPU device(s). </li>

                    <li> Scheduling a set of independent OpenCL kernels across multiple devices  </li>

                    <li> Designing runtime scheduling heuristics that leverage optimal partitioning information of individual OpenCL kernels. </li>
                    <li>  Utilities for carrying out extensive experimentation and evaluation of scheduling policies .</li>
                    </ol>
            </p>
            <p style="text-align:justify;color:rgb(64,64,64)" id="tool-description5" class="collapse">
                    In addition to the above tasks, the tool provides a rich API and an extensive documentation for extending the current capabilities of the framework with ease.
                    <img src="/hpc/pyschedcl.png" class="img-responsive" alt="about img" style="padding-top: 50px;">
            </p>


        </div>

        
        <div class="row" style="text-align:center">
                <a href="/hpc/tools/home.html" class="btn btn-default" style="background-color:teal">LEARN MORE</a>
        </div>
    </div>
</div>
</div>
</div>

<br><br>




<!-- footer section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/footer.php';?>


</body>
</html>
