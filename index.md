---
layout: default
# title: "About Me"
categories: media
# mathjax: true
---

<div class="basic-info card">
  <div class="profile-container">
    <div class="profile-image">
      <img src="assets/images/me.jpg" alt="MyAvatar" class="dp">
      <div class="social-icons" style="margin-top: 15px; justify-content: center; display: flex; gap: 1rem;">
        <a href="mailto:mesunandan@gmail.com" title="Email"><svg aria-label="Mail" class="icon" style="width: 1.5em; height: 1.5em; color: #d49176;"><use xlink:href="/assets/fontawesome/icons.svg#envelope"></use></svg></a>
        <a href="https://github.com/SunandanAdhikary" target="_blank"><svg aria-label="Github" class="icon" style="width: 1.5em; height: 1.5em; color: #d49176;"><use xlink:href="/assets/fontawesome/icons.svg#github"></use></svg></a>
        <a href="https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ" target="_blank"><svg aria-label="Google Scholar" class="icon" style="width: 1.5em; height: 1.5em; color: #d49176;"><use xlink:href="/assets/fontawesome/icons.svg#google"></use></svg></a>
        <a href="https://www.linkedin.com/in/sunandan-adhikary" target="_blank"><svg aria-label="LinkedIn" class="icon" style="width: 1.5em; height: 1.5em; color: #d49176;"><use xlink:href="/assets/fontawesome/icons.svg#linkedin"></use></svg></a>
        <a href="https://www.youtube.com/channel/UCTzpx5WoEU6FYKBzrQEkymg" target="_blank"><svg aria-label="Youtube" class="icon" style="width: 1.5em; height: 1.5em; color: #d49176;"><use xlink:href="/assets/fontawesome/icons.svg#youtube"></use></svg></a>
      </div>
    </div>
    
    <div class="profile-text">
      <h1>Sunandan <span style="color:#d49176">Adhikary</span></h1>
      <p><svg class="icon" style="display:inline; width:0.9em; height:0.9em; margin-right:0.5em; vertical-align:middle;"><use xlink:href="/assets/fontawesome/icons.svg#graduation-cap"></use></svg><strong>Ph.D. Scholar</strong></p>
      <p><svg class="icon" style="display:inline; width:0.9em; height:0.9em; margin-right:0.5em; vertical-align:middle;"><use xlink:href="/assets/fontawesome/icons.svg#building"></use></svg><strong>Department of Computer Science and Engineering</strong></p>
      <p><svg class="icon" style="display:inline; width:0.9em; height:0.9em; margin-right:0.5em; vertical-align:middle;"><use xlink:href="/assets/fontawesome/icons.svg#map-marker"></use></svg><strong><a href="https://www.iitkgp.ac.in/" target="_blank" class="degree-link">Indian Institute of Technology, Kharagpur</a></strong></p>
      <p><svg class="icon" style="display:inline; width:0.9em; height:0.9em; margin-right:0.5em; vertical-align:middle;"><use xlink:href="/assets/fontawesome/icons.svg#envelope"></use></svg><strong>Email:</strong> <a href="mailto:mesunandan@gmail.com">mesunandan@gmail.com</a> / <a href="mailto:mesunandan@kgpian.iitkgp.ac.in">mesunandan@kgpian.iitkgp.ac.in</a></p>
      <p><svg class="icon" style="display:inline; width:0.9em; height:0.9em; margin-right:0.5em; vertical-align:middle;"><use xlink:href="/assets/fontawesome/icons.svg#info"></use></svg><strong>Bio:</strong> I am a Ph.D. scholar in the <a href="https://cse.iitkgp.ac.in/" target="_blank" class="degree-link">Department of Computer Science and Engineering (CSE)</a> at <a href="https://www.iitkgp.ac.in/" target="_blank" class="degree-link">IIT Kharagpur</a>, affiliated with the <a href="http://cse.iitkgp.ac.in/resgrp/hiprc/" target="_blank">High-Performance Real-time Computing (HiPRC) Lab</a> and the <a href="http://cse.iitkgp.ac.in/~fmres/" target="_blank">Formal Methods Research Group</a>. I am a Prime Minister's Research Fellow. My research explores the intersection of formal methods, control theory, and real-time scheduling to develop safe and secure but resource-aware cyber-physical system (CPS) design strategies. I received an M.S. (by Research) degree from the <a href="https://cse.iitkgp.ac.in/" target="_blank" class="degree-link">department of CSE, IIT Kharagpur</a>, in 2021 and a B.Tech. in Electronics and Communication Engineering from <a href="https://www.kgec.edu.in/" target="_blank" class="degree-link">Kalyani Government Engineering College</a> in 2015. Before joining IIT Kharagpur, I served as a systems engineer at Tata Consultancy Services for three years. As a research engineer at IIT Kharagpur, I have also worked on several collaborative projects with organisations including Indian Railways and Bosch.</p>
    </div>
</div>
</div>

<div class="tab-container">
  <button class="hamburger" id="hamburger" onclick="toggleHamburger()"><span class="hamburger-icon">☰</span><span class="hamburger-text">Menu</span></button>
  <div class="tabs-nav" id="tabsNav">
    <button class="tablink active" onclick="openTab(event, 'ResearchTab')">Research</button>
    <button class="tablink" onclick="openTab(event, 'AcademicsTab')">Academics</button>
    <button class="tablink" onclick="openTab(event, 'ExperiencesTab')">Work Experiences</button>
  </div>
</div>

<div id="ResearchTab" class="tabcontent" style="display:block;">
  <div class="tab-content-card">
    <h2>Research Areas</h2>
    <p><a href="https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=label:formal_verification" target="_blank">Formal Methods</a>, <a href="https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=label:control_theory" target="_blank">Control Systems</a>, <a href="https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=label:safe_reinforcement_learning" target="_blank">Safe Reinforcement Learning</a>, <a href="https://scholar.google.com/citations?view_op=search_authors&hl=en&mauthors=label:cps_security" target="_blank">Cyber-Physical Systems (CPS) Safety and Security</a></p>

    <h2>PhD Research Summary</h2>
    <p id="phd-preview">Modern safety-critical Cyber-Physical Systems (CPS), such as autonomous vehicles and industrial microgrids, require robust designs to ensure reliable and safe operation despite hardware limitations, runtime faults, and external vulnerabilities. With increasing reliance on learning-enabled components, guaranteeing absolute safety is essential. <span class="phd-preview-dots" onclick="togglePhdSummary()" style="cursor: pointer; color: #d49176; font-weight: bold; user-select: none;">...</span>
      <span id="phd-expanded" class="phd-expanded-text" style="display: none;"> This doctoral research focuses on comprehensive design-space exploration to quantify and enhance the resilience of embedded CPS through structured resilience analysis algorithms, resource-aware network and task scheduling, secure execution strategies, and safe-by-design fallback control architectures. Early work addressed the gap between control performance and optimal resource utilisation using fine-grained dynamic scheduling, where control task executions adapt based on real-time performance metrics. This ensures desired control quality and efficient resource sharing under varying hardware and network conditions. Ongoing research develops a resilience quantification method for real-time hybrid systems using reachability analysis, evaluating safe behaviour under network delays and platform noise across operating regions to optimise system parameters. Building on this, the research introduced secure scheduling techniques to mitigate schedule-based timing inference attacks on automotive Controller Area Networks (CAN). By synthesising skipped and shifted control executions, predictable timing patterns are hidden, enabling protection against side-channel attacks and supporting intrusion detection while maintaining strict real-time performance requirements. Recent work focuses on synthesising backup safe controllers using Lyapunov-based barrier functions. When the system approaches unsafe boundaries—due to attacks or unpredictable behaviour in learning-based controllers—it switches smoothly to a mathematically guaranteed fail-safe control mode, with adaptive resource reallocation based on criticality. Overall, the research establishes a rigorous foundation for structurally resilient, resource-efficient, and provably safe next-generation CPS.</span>
    </p>

    <h2>Publications</h2>
    <ol>
      <li><strong><a href="https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ" target="_blank">Safe Controller Synthesis Using Lyapunov-based Barriers for Linear Hybrid Systems with Simplex Architecture</a></strong><br><em><span style="background-color: rgba(212, 145, 118, 0.2); padding: 0.1em 0.3em; border-radius: 2px;">S. Adhikary</span>, & S. Dey</em>, <strong>arXiv</strong> <strong>(2026)</strong></li>
      <li><strong><a href="https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ" target="_blank">Mitigating Timing-Based Attacks in Real-Time Cyber-Physical Systems</a></strong><br><em>A. Sain, <span style="background-color: rgba(212, 145, 118, 0.2); padding: 0.1em 0.3em; border-radius: 2px;">S. Adhikary</span>, & S. Dey</em>, <strong>arXiv</strong> <strong>(2026)</strong></li>
      <li><strong><a href="https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ" target="_blank">Adaptive Parameterisation for Efficient Detection of False Data Injections</a></strong><br><em>A. Bhattacharya, <span style="background-color: rgba(212, 145, 118, 0.2); padding: 0.1em 0.3em; border-radius: 2px;">S. Adhikary</span>, I. Koley, V. Loya, & S. Dey</em>, <strong>ACM Transactions on Embedded Computing Systems</strong> <strong>(2026)</strong></li>
      <li><strong><a href="https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ" target="_blank">Detecting Stealthy False Data Injections on Cyber-Physical Systems using Temporal Distance Metrics</a></strong><br><em>A. Bhattacharya, S. Singh, <span style="background-color: rgba(212, 145, 118, 0.2); padding: 0.1em 0.3em; border-radius: 2px;">S. Adhikary</span>, & S. Dey</em>, <strong>ACM/IEEE 16th International Conference on Cyber-Physical Systems (ICCPS)</strong> <strong>(2025)</strong></li>
      <li><strong><a href="https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ" target="_blank">MAARS: Multi-Rate Attack-Aware Randomized Scheduling for Securing Real-time Systems</a></strong><br><em>A. Sain, <span style="background-color: rgba(212, 145, 118, 0.2); padding: 0.1em 0.3em; border-radius: 2px;">S. Adhikary</span>, I. Koley, & S. Dey</em>, <strong>ACM/IEEE 16th International Conference on Cyber-Physical Systems (ICCPS)</strong> <strong>(2025)</strong></li>
      <li><strong><a href="https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ" target="_blank">RSU Placement Optimization for Securing Vehicle Platoon Against False Injection Attacks</a></strong><br><em>A. Roy, I. Koley, <span style="background-color: rgba(212, 145, 118, 0.2); padding: 0.1em 0.3em; border-radius: 2px;">S. Adhikary</span>, A. Sarkar, & S. Dey</em>, <strong>ACM Transactions on Cyber-Physical Systems</strong> <strong>(2025)</strong></li>
      <li><strong><a href="https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ" target="_blank">Enhancing Attack Resilience in Real-Time Systems through Variable Control Task Sampling Rates</a></strong><br><em>A. Sain, <span style="background-color: rgba(212, 145, 118, 0.2); padding: 0.1em 0.3em; border-radius: 2px;">S. Adhikary</span>, I. Koley, & S. Dey</em>, <strong>arXiv</strong> <strong>(2024)</strong></li>
      <li><strong><a href="https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ" target="_blank">Revisiting Dynamic Scheduling of Control Tasks: A Performance-Aware Fine-Grained Approach</a></strong><br><em><span style="background-color: rgba(212, 145, 118, 0.2); padding: 0.1em 0.3em; border-radius: 2px;">S. Adhikary</span>, I. Koley, S. K. Ghosh, S. Ghosh, & S. Dey</em>, <strong>IEEE Transactions on Computer-Aided Design of Integrated Circuits and Systems</strong> <strong>(2024)</strong></li>
    </ol>
    <p style="text-align: center; margin-top: 1em;"><a href="https://scholar.google.com/citations?hl=en&user=VsnaXGoAAAAJ" target="_blank" class="publications-button" style="display: inline-block; padding: 0.5em 1.5em; background-color: #d49176; color: #fff; border-radius: 4px; text-decoration: none; font-weight: 600;">Google Scholar</a></p>
  </div>
</div>

<div id="AcademicsTab" class="tabcontent">
  <div class="tab-content-card">
    <div class="info-row">
      <div class="info-label"><h3>Education</h3></div>
      <div class="info-content">
        <div class="edu-item">
          <strong><span class="degree-name">Ph.D. (Ongoing)</span> - <span class="meta-badge">Current</span></strong><br>
          <a href="https://www.iitkgp.ac.in/" target="_blank" class="degree-link">IIT Kharagpur</a> <span class="meta-badge">(2021 (Autumn) - Present)</span><br>
          <a href="https://cse.iitkgp.ac.in/" target="_blank" class="degree-link">Department of Computer Science</a><br>
          <strong>Thesis:</strong> <a href="assets/pdfs/thesis_Sunandan.pdf" target="_blank">Development of safe and secure control strategies for CPS </a><br>
          <strong>Advisors:</strong> <a href="http://cse.iitkgp.ac.in/~soumya/" target="_blank">Prof. Soumyajit Dey</a>
        </div>
        <div class="edu-item">
          <strong><span class="degree-name">MS</span> - <span class="meta-badge">9.33 CGPA</span></strong><br>
          <a href="http://www.iitkgp.ac.in/" target="_blank" class="degree-link">IIT Kharagpur</a> <span class="meta-badge">(2018-2021)</span><br>
          <a href="https://cse.iitkgp.ac.in/" target="_blank" class="degree-link">Department of Computer Science</a><br>
          <strong>Thesis:</strong> <a href="assets/pdfs/thesis_Sunandan.pdf" target="_blank">Exploring Platform Aware Formal Methods for Safe and Secure Cyber-Physical Systems</a><br>
          <strong>Advisors:</strong> <a href="http://cse.iitkgp.ac.in/~soumya/" target="_blank">Prof. Soumyajit Dey</a>, <a href="https://cse.iitkgp.ac.in/~aritrah/" target="_blank">Prof. Aritra Hazra</a>
        </div>
        <div class="edu-item">
          <strong><span class="degree-name">B.TECH</span> - <span class="meta-badge">8.18 CGPA</span></strong><br>
          <a href="https://www.kgec.edu.in/" target="_blank" class="degree-link">Kalyani Government Engineering College</a> <span class="meta-badge">(2011-2015)</span><br>
          Electronics and Communications
        </div>
        <div class="edu-item">
          <strong><span class="degree-name">HIGHER SECONDARY</span> – <span class="meta-badge">90%</span></strong><br>
          <a href="https://kncs.in/" target="_blank" class="degree-link">Krishnath College School</a> <span class="meta-badge">(2009-2011)</span><br>
          Science (Maths, Physics, Chemistry)
        </div>
        <div class="edu-item">
          <strong><span class="degree-name">SECONDARY</span> – <span class="meta-badge">87%</span></strong><br>
          <a href="https://kncs.in/" target="_blank" class="degree-link">Krishnath College School</a> <span class="meta-badge">(2004-2009)</span>
        </div>
      </div>
    </div>

    <div class="info-row">
      <div class="info-label"><h3>Proficiencies</h3></div>
      <div class="info-content">
        <p><strong>Languages:</strong> Bengali, English, Hindi</p>
        <p><strong>Programming Languages:</strong> C, Embedded C, C++, Python, Java, PHP</p>
        <p><strong>Tools & Frameworks:</strong> Matlab, Simulink, z3, dReal, CBMC, Gurobi, Mosek, OpenAiGym, Flow*</p>
      </div>
    </div>
  </div>
</div>

<div id="ExperiencesTab" class="tabcontent">
  <div class="tab-content-card">
    <div class="info-row">
      <div class="info-label"><h3 class="section-title">Teaching Assistant</h3></div>
      <div class="info-content">
        <p><strong>Indian Institute of Technology, Kharagpur</strong></p>
        <ul>
          <li>Compilers Theory and Lab</li>
          <li>Formal Languages and Automata Theory</li>
          <li>Computer Organization and Architecture Lab</li>
          <li>High-Performance Computer Architecture</li>
          <li>Computational Foundations of Cyber-physical Systems</li>
          <li>Programming and Data Structures Theory</li>
        </ul>
      </div>
    </div>

    <div class="info-row">
      <div class="info-label"><h3 class="section-title">Research Consultant</h3></div>
      <div class="info-content">
        <p><strong>Indian Institute of Technology, Kharagpur</strong><br><em><span class="meta-badge">February 2018 - 2021</span></em></p>
        <p>MHRD funded Project under Prof. Pallab Dasgupta, Prof. Soumyajit Dey, and Prof. Aritra Hazra. Building toolchain for SMT based Verification of Closed-loop Control software with timing anomalies.</p>
      </div>
    </div>

    <div class="info-row">
      <div class="info-label"><h3 class="section-title">System Engineer</h3></div>
      <div class="info-content">
        <p><strong>Tata Consultancy Services</strong><br>Kolkata & Chennai | <em><span class="meta-badge">August 2015 - February 2018</span></em></p>
        <p>Analysis and development of Business Intelligence applications for British Airways and Pizza Hut International using Java.</p>
      </div>
    </div>

    <div class="info-row">
      <div class="info-label"><h3 class="section-title">Engineering Intern</h3></div>
      <div class="info-content">
        <p><strong>Bharat Sanchar Nigam Limited</strong><br><em><span class="meta-badge">January 2013 - August 2014</span></em></p>
        <p>Employability Enhancement Training Program in communication technologies and tools.</p>
      </div>
    </div>

    <div class="info-row">
      <div class="info-label"><h3 class="section-title">Summer Trainee</h3></div>
      <div class="info-content">
        <p><strong>Airport Authority of India, Kolkata</strong><br><em><span class="meta-badge">July - August 2013</span></em></p>
        <p>Hands-on experience with electronics and communication instruments in airport operations.</p>
      </div>
    </div>

    <div class="info-row">
      <div class="info-label"><h3 class="section-title">Achievements</h3></div>
      <div class="info-content">
        <ul>
          <li>National Merit Scholarships</li>
          <li>Robotics Competition Rankings</li>
          <li>National and State Level Drawing Contests</li>
          <li>National Talent Search Medals</li>
          <li>State Level Quiz Contests</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<script>
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
  var hamburger = document.getElementById("hamburger");
  var tabsNav = document.getElementById("tabsNav");
  if(hamburger) hamburger.classList.remove("active");
  if(tabsNav) tabsNav.classList.remove("open");
}

function toggleHamburger() {
  var hamburger = document.getElementById("hamburger");
  var tabsNav = document.getElementById("tabsNav");
  if(hamburger) hamburger.classList.toggle("active");
  if(tabsNav) tabsNav.classList.toggle("open");
}

document.addEventListener('click', function(event) {
  var tabContainer = document.querySelector('.tab-container');
  if (tabContainer && !tabContainer.contains(event.target)) {
    var hamburger = document.getElementById("hamburger");
    var tabsNav = document.getElementById("tabsNav");
    if(hamburger) hamburger.classList.remove("active");
    if(tabsNav) tabsNav.classList.remove("open");
  }
});
</script>
