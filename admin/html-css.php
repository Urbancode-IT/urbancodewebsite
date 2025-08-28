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
        <h1>Build Websites with HTML and CSS</h1>
        <p>Learn the fundamentals of web design and development with HTML and CSS. Create responsive, visually appealing websites, and understand the building blocks of web layout, styling, and responsive design for all devices.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/html-css/html-css.jpg" class="img-fluid" style="border-radius: 55px;" alt="HTML and CSS Course">
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
        <li class="active"  id="course-id">HTML and CSS</li>
      </ol>
    </div>
  </nav>
</div>



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Comprehensive HTML & CSS Development Training</h5>
                <p class="pb-2">Urbancode's HTML & CSS Development Training Course is designed to provide participants with the skills and knowledge necessary to build stunning, responsive websites. This course covers the fundamentals of HTML5 and CSS3, focusing on practical skills and industry best practices. From structuring content to designing visually appealing and responsive layouts, participants will gain hands-on experience and learn how to create modern, accessible web pages.</p>   
                <h4 style="color:#000000;" class="py-3">Why should you choose this course?</h4>  
                <p class="pb-2">
                    <b>Career Opportunities</b><br> HTML and CSS form the backbone of web development, making this course essential for aspiring web developers, designers, and digital marketers. Mastery of these technologies opens doors to various career paths and creative projects.<br><br>
                    <b>Hands-On Experience</b><br> The course is focused on practical application, providing real-world projects and exercises that simulate professional web development environments. Participants will build a portfolio of projects to showcase their skills to potential employers.<br><br>
                    <b>Comprehensive Curriculum</b><br> Covering essential concepts such as HTML5, CSS3, Flexbox, Grid, and Responsive Design, this course ensures a thorough understanding of front-end development techniques and best practices.<br><br>
                    <b>Expert Guidance</b><br> Learn from industry experts who provide mentorship and guidance throughout the course, helping participants develop their problem-solving and design skills.<br><br>
                    <b>Flexible Learning Options</b><br> Choose between flexible online and classroom training formats, enabling participants to learn at their own pace and balance their studies with personal or professional commitments.<br><br>
                </p>   
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 40hrs Instructor-Led Training</li>
                        <li><i class="fa-solid fa-briefcase"></i> Practice & Exercises for HTML & CSS Development</li>
                        <li><i class="fa-solid fa-circle-info"></i> Mentor Support and Code Review</li>
                        <li class="w-100 text-center position-relative" style="margin-top: 25px;">
                            <button data-bs-toggle="modal" data-bs-target="#brochureModal" class="btn btn-get-started">Get Brochure</button>
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
        <h5 style="color: #00AE69;margin-top: 15px;font-weight: 700;">Module 1: HTML Fundamentals</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to HTML</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Understanding HTML Structure and Syntax</li>
                            <li>HTML Elements, Attributes, and Tags</li>
                            <li>Creating Basic Web Pages</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">HTML5 Features</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to HTML5 and its new elements</li>
                            <li>Working with Multimedia: Audio, Video, and Canvas</li>
                            <li>Forms and Form Validation</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Semantic HTML</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Understanding the Importance of Semantic Tags</li>
                            <li>Creating Accessible and SEO-friendly Web Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 2: CSS Fundamentals</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to CSS</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Understanding CSS Syntax and Selectors</li>
                            <li>Styling Text, Colors, and Backgrounds</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Layout and Positioning</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Box Model, Margin, Padding, and Borders</li>
                            <li>Using Flexbox and CSS Grid for Layouts</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Responsive Design</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Media Queries for Responsive Design</li>
                            <li>Mobile-First Design Approach</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">CSS3 Features</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Transitions, Animations, and Transformations</li>
                            <li>Working with Flexbox and Grid Systems</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 3: Advanced HTML & CSS Techniques</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Building Forms and Tables</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Creating Interactive Forms with Validation</li>
                            <li>Styling Tables for Better User Experience</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Project Management with Git</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Using Git for Version Control</li>
                            <li>Collaborating with Others on Web Projects</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Deployment and Optimization</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Deploying Web Pages on Hosting Platforms</li>
                            <li>Optimizing Performance for Faster Load Times</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Final Project</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Designing and Building a Complete Website</li>
                            <li>Presentation and Demonstration of the Project</li>
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
          <img style="height: 500px;" src="images/courses/html-css/html-css-about.jpg" class="img-fluid" alt="learn-html-css-development">
          <a href="https://youtu.be/mvhjpUEOTMk?si=5JwVngyHEGgjqnlt" class="glightbox play-btn"></a>
        </div>   
        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
          <header class="section-header">
            <h3>HTML & CSS Development</h3>
            <p>Master the Essentials of Front-End Web Design</p>
          </header>
          <div class="section-title">
            <p>Dive into the world of web design with Urbancode's comprehensive HTML & CSS course. Crafted by industry experts, this course equips you with the skills to create stunning and responsive web pages. From structuring content with HTML to styling and layout design using CSS, participants gain hands-on experience in the essential technologies required for modern front-end development.</p>
            <br>
            <h4 class="title"><a href="#">HTML Fundamentals</a></h4>
            <p class="description">HTML5 | Semantic HTML | Forms & Tables</p>
            <h4 class="title"><a href="#">CSS Styling</a></h4>
            <p class="description">CSS3 | Flexbox | Grid | Responsive Design</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  

<!-- End About Us Section -->





<?php 
include 'inc/related.php'; 
include 'inc/footer.php';

