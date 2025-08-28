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
        <h1>Become a MERN Stack Developer</h1>
        <p>Master the MERN stack—MongoDB, Express.js, React, and Node.js—and gain the skills needed to build dynamic, high-performance web applications. Learn how to create end-to-end applications, manage databases, and build scalable APIs.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/mern/mern.jpg" class="img-fluid" style="border-radius: 55px;" alt="MERN Stack Course">
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
        <li class="active" id="course-id">MERN Stack</li>
      </ol>
    </div>
  </nav>
</div>



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Comprehensive MERN Stack Development Training</h5>
                <p class="pb-2">Urbancode's MERN Stack Development Course is designed to equip participants with the skills needed to build dynamic web applications using MongoDB, Express.js, React, and Node.js. This course focuses on practical, hands-on learning, where participants will gain in-depth experience with both front-end and back-end technologies. By the end of the course, you will have developed the ability to create full-stack applications from scratch.</p>   
                <h4 style="color:#000000;" class="py-3">Why should you choose this course?</h4>  
                <p class="pb-2">
                    <b>In-Demand Skill Set</b><br> MERN Stack Developers are highly sought after by tech companies, offering exciting career opportunities in web development. Learning the MERN stack opens doors to building full-stack applications and taking on diverse roles in the tech industry.<br><br>
                    <b>Project-Based Learning</b><br> The course emphasizes practical skills, allowing participants to work on real-world projects. By building a portfolio of MERN-based projects, you will have a valuable showcase for potential employers.<br><br>
                    <b>Industry-Relevant Curriculum</b><br> Covering essential technologies like MongoDB, Express.js, React, and Node.js, this course ensures you gain expertise in building full-stack applications from the ground up.<br><br>
                    <b>Expert Mentorship</b><br> Get guidance from experienced developers and mentors who will help you navigate challenges, solve coding problems, and refine your skills.<br><br>
                    <b>Flexible Learning Environment</b><br> Enjoy flexible learning options with both online and classroom training formats, designed to fit into your schedule and provide the support you need to succeed.<br><br>
                </p>   
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 60hrs Instructor-Led Training</li>
                        <li><i class="fa-solid fa-briefcase"></i> Practice & Exercises for MongoDB | Express.js | React | Node.js</li>
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
        <h5 style="color: #00AE69;margin-top: 15px;font-weight: 700;">Module 1: Front-End Development with React</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">React Fundamentals</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to React.js and component-based architecture</li>
                            <li>Building interactive UIs with JSX</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">State and Props Management</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Understanding state, props, and component lifecycle</li>
                            <li>Managing state using hooks (useState, useEffect)</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Routing and Navigation</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Client-side routing using React Router</li>
                            <li>Handling navigation and dynamic routes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 2: Back-End Development with Node.js and Express.js</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Node.js Fundamentals</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to server-side JavaScript with Node.js</li>
                            <li>Handling requests and building RESTful APIs with Express.js</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Database Management with MongoDB</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to MongoDB and NoSQL databases</li>
                            <li>CRUD operations and data modeling</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Authentication and Authorization</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Implementing JWT-based authentication</li>
                            <li>Role-based access control and security best practices</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">API Integration and Testing</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Integrating third-party APIs</li>
                            <li>Testing and debugging backend services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 3: Full Stack Integration</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Version Control with Git and GitHub</h3>
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
                            <li>Deploying MERN applications using platforms like Heroku and AWS</li>
                            <li>Understanding CI/CD pipelines and automation</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Final Project</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Building a complete MERN stack application</li>
                            <li>Presentation and project demonstration</li>
                        </ul>
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
