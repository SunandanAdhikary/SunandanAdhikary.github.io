<!DOCTYPE html>
<html lang="en">

<!-- header section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/header.php';?>

<body>
  
<!-- navigation

  <div class="container">
    <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
      <a href="#" class="navbar-brand"><img src="../images/logo.pdf" class="img-responsive" alt="logo"></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../ndex.php" >HOME</a></li>
        <li><a href="about.php">PEOPLE</a></li>
        <li><a href="projects.php">PROJECTS</a></li>
        <li><a href="tools.php" class="active">TOOLS</a></li>
        <li><a href="../contact.php">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</div>    
-->

<!-- contact header section -->
<div id="tools-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12"></div>
    </div>
  </div>
</div>

<br> <br>


<div class="content">

<div id="portfolio">
  <div class="container">
    <div class= "header" >
      <h1> <a href="./html/home.html">PySchedCL</a>-  A Python based OpenCL Scheduling Framework
    </div>
    <div class="row mt30">
      <p style="text-align:justify">

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
        efficient solutions much faster. Before we proceed to discuss the capabilities of the framework, we
        present a brief overview of what application development using Opencl entails.

      <h2> OpenCL Overview </h2>
      <p style="text-align:justify">

        OpenCL applications are data parallel programs which process multidimensional
        data. Every OpenCL application comprises two parts - a single threaded host program and a
        data-parallel program referred to as kernel that describes the computation of a single work item.
        A simple vector addition kernel is depicted below.
      <img class="img-responsive" src="OpenCLArch.png" align="middle">
      During program execution, a user specified number of work items (kernel invocations) is launched
      by the host program to execute in parallel. These work items are organized in
      a multi dimensional grid and subsets of work items are grouped together to form
      work groups, which are mapped to an OpenCL device. Each work-item can query its
      position in the grid by calling certain built-in OpenCL functions from within the kernel code. The
      job of the host side program  is to orchestrate the execution of the OpenCL kernel across different OpenCL
      compliant devices in the heterogeneous platform. This includes proper buffer management associated with the kernel
      computation and synchronization mechanisms for ensuring correctness of the computation. Our framework aims
       to relieve the programmer from the intricacies of the host program so that they may focus
      on the underlying high performance algorithm more.  The capabilities of the framework are higlighted below.


      <h2> PySchedCL Goals </h2>

      <p style="text-align:justify"> The primary goal of PySchedCL is to provide a platform for rapid prototyping of
        high performance applications as well as a research tool for experimenting various scheduling and mapping policies
        of multiple OpenCL applications for different heterogeneous platforms. The framework leverages a kernel specification scheme that specifies
        information regarding the host side management for the execution of an OpenCL kernel.  Given the corresponding specification
        file for a kernel, the framework is capable of distributing the computation across the devices
        of the target heterogeneous architecture. The salient features of the framework is represented in the following figure and discussed below. <br>

        <img class="img-responsive" src="pyschedcl.png" align="middle">
        <p style="text-align:justify">
          <ol>
          <li>The framework is capable of scheduling a set of independent OpenCL kernels (with their specification files) provided as input and
          <li> The framework comprises a static analysis frontend capable of extracting program features that will
            distribute the computation across available devices in the heterogeneous platform.  </li>
          serve in designing efficient heuristic functions for optimal mapping of kernels to device.s </li>
          <li> In addition to the static analysis frontend, the framework provides a robust scheduling backend that
            is capable of automatically managing OpenCL runtime parameters while intelligently scheduling
            data parallel workloads across the different processors of the heterogeneous architecture.
          </ol>


      <h2> PySchedCL Version 1.0 </h2>

      The current version of PySchedCL provides a scheduling engine that may be leveraged for the following tasks.
      <ol>
      <li> Partitioning an OpenCL kernel across multiple CPU and GPU device(s). </li>

      <li> Scheduling a set of independent OpenCL kernels across multiple devices  </li>

      <li> Designing runtime scheduling heuristics that leverage optimal partitioning information of individual OpenCL kernels. </li>
      <li>  Utilities for carrying out extensive experimentation and evaluation of scheduling policies .
      </ol>

      In addition to the above tasks, the tool provides a rich API and an extensive documentation for
      extending the current capabilities of the framework with ease.

      <p style="text-align:justify">
      </p>

      <div class="sidenav">
      	<a href="install.html" class="btn btn-default">DOWNLOAD</a>
      	<a href="pyschedcl.html" class="btn btn-default">DOCUMENTATION</a>
	</div>
</div>
    </div>
  </div>
</div>



<!-- footer section -->
<?php include $_SERVER["DOCUMENT_ROOT"] .'/footer.php';?>

<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
