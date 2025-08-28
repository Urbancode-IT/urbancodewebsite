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
        <h1>Become a Full Stack Developer</h1>
        <p>Learn both front-end and back-end development, covering essential technologies like HTML, CSS, JavaScript, Node.js, Express, and databases. Build dynamic web applications and gain expertise in creating fully functional, responsive, and scalable websites.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/full-stack/full-stack.jpg" class="img-fluid" style="border-radius: 55px;" alt="Full Stack Development Course">
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
        <li class="active" id="course-id">Full Stack Development</li>
      </ol>
    </div>
  </nav>
</div>


<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Comprehensive Full Stack Development Training</h5>
                <p class="pb-2">Urbancode's Full Stack Development Training Course is designed to equip participants with the skills and knowledge necessary to become proficient full stack developers. This course covers both front-end and back-end development, emphasizing practical skills and industry best practices. From building responsive web interfaces to creating robust server-side applications, participants will gain hands-on experience and learn to develop dynamic and scalable web applications.</p>   
                <h4 style="color:#000000;" class="py-3">Why should you choose this course?</h4>  
                <p class="pb-2">
                    <b>Career Opportunities</b><br> Full Stack Developers are in high demand across industries, offering opportunities in tech startups, IT companies, and large enterprises. Mastery of full stack development opens doors to diverse career paths and lucrative job prospects.<br><br>
                    <b>Hands-On Experience</b><br> The course focuses on practical application, providing real-world projects and exercises that simulate professional development environments. Participants will build a portfolio of projects to showcase their skills to potential employers.<br><br>
                    <b>Comprehensive Curriculum</b><br> Covering essential technologies such as HTML, CSS, JavaScript, Node.js, React, MongoDB, and more, the course ensures a thorough understanding of both front-end and back-end development frameworks and tools.<br><br>
                    <b>Expert Guidance</b><br> Learn from industry experts who provide mentorship and guidance throughout the course, helping participants develop critical problem-solving and collaboration skills.<br><br>
                    <b>Flexible Learning Options</b><br> Choose between flexible online and classroom training formats, enabling participants to learn at their own pace and balance their studies with professional or personal commitments.<br><br>
                </p>   
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 60hrs Instructor-Led Training</li>
                        <li><i class="fa-solid fa-briefcase"></i> Practice & Exercises for Front-End | Back-End | Full Stack Development</li>
                        <li><i class="fa-solid fa-circle-info"></i> Mentor Support and Code Review</li>
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
        <h4 style="color:#000000;">Course Content</h4>
        <h5 style="color: #00AE69;margin-top: 15px;font-weight: 700;">Module 1: Front-End Development</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">HTML and CSS Fundamentals</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to HTML5 and CSS3</li>
                            <li>Building and styling web pages</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">JavaScript Essentials</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Core JavaScript concepts</li>
                            <li>DOM manipulation and event handling</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Responsive Web Design</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Designing for various devices and screen sizes</li>
                            <li>Frameworks like Bootstrap for responsive layouts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 2: Back-End Development</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Node.js Fundamentals</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to server-side JavaScript with Node.js</li>
                            <li>Building APIs and handling requests</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Database Management</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Working with databases like MySQL, MongoDB</li>
                            <li>CRUD operations and database integration</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Authentication and Authorization</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Implementing user authentication and authorization</li>
                            <li>Security best practices</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">RESTful Services</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Designing and consuming REST APIs</li>
                            <li>Integration with front-end frameworks</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 3: Full Stack Integration</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Version Control with Git</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Using Git for version control and collaboration</li>
                            <li>Branching, merging, and resolving conflicts</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Deployment and DevOps</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Deploying applications using platforms like Heroku, AWS</li>
                            <li>Understanding CI/CD pipelines</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Project Management and Collaboration</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Agile methodologies and project planning</li>
                            <li>Tools for collaboration and productivity</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Final Project</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Developing a full stack application from scratch</li>
                            <li>Presentation and demonstration of the project</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row no-gutters">
      <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
        <img style="height: 500px;" src="images/courses/full-stack/full-about.jpg" class="img-fluid" alt="learn-full-stack-development">
        <a href="https://youtu.be/mvhjpUEOTMk?si=5JwVngyHEGgjqnlt" class="glightbox play-btn"></a>
      </div>   

      <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

        <header class="section-header">
          <h3>Full Stack Development</h3>
          <p>Master the Art of Building Web Applications</p>
        </header>
        <div class="section-title">
          <p>Dive into the dynamic world of Full Stack Development with Urbancode's comprehensive training course. Crafted by industry experts, this course equips you with the skills to build robust web applications from front-end to back-end. From designing interactive user interfaces to developing server-side logic and database management, participants gain hands-on experience in the latest technologies and frameworks essential for modern web development.</p>
          <br>
          <h4 class="title"><a href="#">Front-end Development</a></h4>
          <p class="description">HTML | CSS | JavaScript | React | Angular</p>
          <h4 class="title"><a href="#">Back-end Development</a></h4>
          <p class="description">Node.js | Express | Python | Django | Ruby on Rails</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Us Section -->





<?php 
include 'inc/related.php'; 
include 'inc/footer.php';
?>
