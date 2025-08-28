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
        <h1>Master JavaScript Programming</h1>
        <p>Unlock the power of JavaScript and build interactive, dynamic websites. Learn the fundamentals, DOM manipulation, ES6+, asynchronous programming, and work with powerful JavaScript libraries and frameworks to enhance your web development skills.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
          
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/javascript/javascript.jpg" class="img-fluid" style="border-radius: 55px;" alt="JavaScript Course">
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
        <li class="active"  id="course-id">JavaScript</li>
      </ol>
    </div>
  </nav>
</div>





<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Comprehensive JavaScript Mastery Course</h5>
                <p class="pb-2">Urbancode's JavaScript Mastery Course is designed to equip participants with a deep understanding of JavaScript, from its core fundamentals to advanced features. This course focuses on hands-on learning, enabling participants to grasp essential concepts such as asynchronous programming, object-oriented programming, and modern ES6+ features. By the end of the course, participants will be able to write efficient and clean JavaScript code for various web-based projects.</p>   
                <h4 style="color:#000000;" class="py-3">Why should you choose this course?</h4>  
                <p class="pb-2">
                    <b>Essential for Web Development</b><br> JavaScript is a cornerstone language of the web, and mastering it opens the door to a wide range of web development opportunities. Understanding JavaScript will enable you to work on both front-end and back-end tasks, making you versatile in the tech industry.<br><br>
                    <b>Real-World Applications</b><br> The course emphasizes practical coding experience through projects, exercises, and scenarios that reflect real-world JavaScript use cases. You will build a strong portfolio to showcase your skills.<br><br>
                    <b>Comprehensive Curriculum</b><br> Covering everything from basic syntax to advanced topics such as promises, async/await, closures, and API integration, this course ensures you gain the expertise needed to write clean and efficient JavaScript code.<br><br>
                    <b>Expert Guidance</b><br> Learn from experienced JavaScript professionals who will mentor and guide you through the course, helping you understand and implement best practices in coding.<br><br>
                    <b>Flexible Learning Environment</b><br> Choose between flexible online or classroom formats, designed to fit into your schedule and provide personalized support to help you succeed.<br><br>
                </p>   
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 50hrs Instructor-Led Training</li>
                        <li><i class="fa-solid fa-briefcase"></i> Practice & Exercises for JavaScript Essentials</li>
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
        <h5 style="color: #00AE69;margin-top: 15px;font-weight: 700;">Module 1: JavaScript Fundamentals</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Core JavaScript Syntax and Concepts</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to variables, data types, and operators</li>
                            <li>Control structures: if-else, loops, and switch cases</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Functions and Scope</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Defining and invoking functions</li>
                            <li>Understanding function scope and closures</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Objects and Arrays</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Creating and manipulating objects</li>
                            <li>Working with arrays and array methods</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 2: Advanced JavaScript Concepts</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Asynchronous JavaScript</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Callbacks, promises, and async/await</li>
                            <li>Handling asynchronous operations and API requests</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Object-Oriented Programming (OOP)</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Prototypes and inheritance in JavaScript</li>
                            <li>Classes and object-oriented design</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">JavaScript Modules and Tooling</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Working with ES6 modules</li>
                            <li>Setting up projects with modern JavaScript tools (npm, Webpack, Babel)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 3: Practical JavaScript Applications</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">DOM Manipulation and Events</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Interacting with the Document Object Model (DOM)</li>
                            <li>Handling user events (click, input, etc.)</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Working with APIs</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Fetching data from REST APIs</li>
                            <li>Building interactive applications using external data</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Final Project</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Building a complete JavaScript application</li>
                            <li>Presenting and demonstrating the project</li>
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
