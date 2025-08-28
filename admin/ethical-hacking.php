<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<style>
#hero .container {
    margin-top: 60px; /* Adjust the value as needed */
}
</style>

<!-- Hero Section -->
<section id="hero" class="hero section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Become an Expert in Ethical Hacking</h1>
        <p>Learn how to identify, exploit, and fix vulnerabilities in systems through ethical hacking techniques. Understand penetration testing, risk assessments, and how to protect networks and applications from malicious attacks.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/ethical-hacking/ethical-hacking.jpg" class="img-fluid" style="border-radius: 55px;" alt="Ethical Hacking Course">
      </div>
    </div>
  </div>
</section><!-- /Hero Section -->
</main>

<div class="breadcrumbs-header">
  <nav>
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/courses">Courses</a></li>
        <li class="active"  id="course-id">Ethical Hacking</li>
      </ol>
    </div>
  </nav>
</div>





<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Training Curriculum for Freshers for Ethical Hacking</h5>
                <p class="pb-2">Urbancode's Ethical Hacking course provides in-depth knowledge on identifying and mitigating cybersecurity threats. This course covers essential topics like penetration testing, vulnerability analysis, and ethical hacking techniques. As cyberattacks increase, organizations require skilled professionals to safeguard systems and networks. This course will equip you with the tools and knowledge needed to perform ethical hacking, secure systems, and protect against malicious attacks, preparing you for a career in cybersecurity and ethical hacking.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 50 hrs Instructor-Led Training & Practical Exercises</li>
                        <li><i class="fa-solid fa-briefcase"></i> Job Assistance</li>
                        <li><i class="fa-solid fa-circle-info"></i> Mentor Support</li>
                        <li><i class="fa-solid fa-award"></i> Certificate of Completion</li>
                        <li class="w-100 text-center position-relative" style="margin-top: 25px;">
                        <button  data-bs-toggle="modal" data-bs-target="#brochureModal" class="btn btn-get-started">Get Brochure</button>
                        </li>
                    </ul>          
                </div>
            </div>
        </div>   
    </div>
</section>



<section class="accordion pb-3 pb-md-5">
    <div class="container">
        <h4 style="color:#000000;">Course content</h4>
        <h5 style="color: #00AE69;margin-top: 15px;font-weight: 700;">Ethical Hacking Course</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to Ethical Hacking</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Understanding Ethical Hacking</li>
                            <ul class="accord_ul">
                                <li>Overview of ethical hacking and its importance in cybersecurity.</li>
                                <li>Roles and responsibilities of an ethical hacker.</li>
                            </ul>
                            <li>Legal and Ethical Considerations</li>
                            <ul class="accord_ul">
                                <li>Cyber laws, ethics, and frameworks guiding ethical hacking.</li>
                                <li>Understanding the difference between ethical and malicious hacking.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Reconnaissance and Information Gathering</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Footprinting and Reconnaissance Techniques</li>
                            <ul class="accord_ul">
                                <li>Understanding passive and active reconnaissance techniques.</li>
                                <li>Using tools like Nmap, WHOIS, and Google Dorks for gathering information.</li>
                            </ul>
                            <li>Scanning and Enumeration</li>
                            <ul class="accord_ul">
                                <li>Network scanning and enumeration techniques to identify vulnerabilities.</li>
                                <li>Using tools like Netcat, Nessus, and OpenVAS.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">System Hacking</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Password Cracking and Exploitation</li>
                            <ul class="accord_ul">
                                <li>Techniques for password cracking and system exploitation.</li>
                                <li>Using tools like John the Ripper, Hydra, and Cain & Abel.</li>
                            </ul>
                            <li>Privilege Escalation</li>
                            <ul class="accord_ul">
                                <li>Gaining elevated privileges on compromised systems.</li>
                                <li>Exploiting vulnerabilities for privilege escalation.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Web Application Hacking</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Web Application Vulnerabilities</li>
                            <ul class="accord_ul">
                                <li>Understanding common vulnerabilities like SQL Injection, XSS, and CSRF.</li>
                                <li>Using tools like Burp Suite and OWASP ZAP for web application testing.</li>
                            </ul>
                            <li>Exploiting Web Servers and Applications</li>
                            <ul class="accord_ul">
                                <li>Techniques for exploiting vulnerabilities in web applications.</li>
                                <li>Bypassing authentication mechanisms and securing web apps.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Wireless Network Hacking</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Understanding Wireless Networks</li>
                            <ul class="accord_ul">
                                <li>Overview of wireless network protocols and security standards (WEP, WPA, WPA2).</li>
                                <li>Wireless network scanning and monitoring using tools like Aircrack-ng.</li>
                            </ul>
                            <li>Exploiting Wireless Networks</li>
                            <ul class="accord_ul">
                                <li>Techniques for breaking wireless network encryption and hijacking sessions.</li>
                                <li>Securing wireless networks from attacks.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Social Engineering and Exploitation</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Social Engineering Techniques</li>
                            <ul class="accord_ul">
                                <li>Overview of phishing, baiting, and pretexting attacks.</li>
                                <li>Using tools like SET (Social Engineering Toolkit) for social engineering attacks.</li>
                            </ul>
                            <li>Defending Against Social Engineering</li>
                            <ul class="accord_ul">
                                <li>Strategies to prevent and mitigate social engineering attacks.</li>
                                <li>Training and awareness for securing human elements in organizations.</li>
                            </ul>
                        </ol>
                    </div>
                </div>                
            </div>
        </div>  
    </div>
</section>



<?php 
include 'inc/related.php'; 
include 'inc/footer.php';
?>
