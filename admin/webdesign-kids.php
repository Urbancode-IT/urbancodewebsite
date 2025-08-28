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
        <h1>Discover Web Design for Kids</h1>
        <p>Give your child the creative skills to build their own website! This course teaches the basics of web design, HTML, and CSS, allowing kids to create fun and interactive websites while learning essential coding concepts.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/webdesign-kids/webdesign-kids.jpg" class="img-fluid" style="border-radius: 55px;" alt="Web Design for Kids Course">
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
        <li class="active"  id="course-id">Web Design for Kids</li>
      </ol>
    </div>
  </nav>
</div>


<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Training Curriculum for Freshers for Service Delivery Team</h5>
                <p class="pb-2">Can your child design a website? Yes, Absolutely. With Urbancode's Web designing course for kids, your child will be trained to visually express ideas and create interactive online content. The process of designing websites introduces fundamental coding and design principles, enhancing problem-solving skills.</p>   
                <h4 style="color:#000000;" class="py-3">Course Overview:</h4>  
                <p class="pb-2">
                    <b>What is Web Designing for Kids?</b><br> Web designing for kids is a text-based programming language. It helps kids to understand the fundamentals of designing and coding by doing various interactive tasks. Web designing for kids involves unleashing creativity through crafting visually appealing and interactive websites.<br><br>
                    <b>Who is this course for?</b><br> This course is made for kids aged 8 years and above. Students with no prior coding experience, as well as those who know the basics of block-based programming languages, may join this course.<br><br>
                    <b>What will you learn in this course?</b><br> You will learn the undamentals of web technologies and basics of HTML, CSS and JavaScript. Students will be taught by live projects to design websites<br><br>
                </p>   
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 45 hrs Instructor-Led Training</li>
                        <li><i class="fa-solid fa-briefcase"></i> 10+ Projects & Exercises</li>
                        <li><i class="fa-solid fa-circle-info"></i> 2 Assessments</li>
                        <li><i class="fa-solid fa-award"></i> 4 Months Duration</li>
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
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to HTML</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Web technologies, basic & history of HTML,</li>
                            <li>Basic structure of HTML Document</li>
                            <li>Heading, Paragraph and inline CSS</li>
                            <li>Text style, quotation, HTML colors</li>
                            <li>Images</li>
                            <li>Other medias</li>
                            <li>Table</li>
                            <li>List</li>
                            <li>Layout webpage</li>
                        </ul>
                    </div>
                </div> 
                <div class="each-accordionbox">
                    <h3 class="each-title">CSS Framework</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to internal CSS</li>
                            <li>Borders, margin, padding, height/width</li>
                            <li>External CSS - Class and Id</li>
                            <li>Layout website using Flexbox</li>
                            <li>Layout website using Grid</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to JS</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Js</li>
                            <li>Internal and external JS</li>
                            <li>Output and statement</li>
                            <li>Datatypes, variable, Let and const</li>
                            <li>Conditions</li>
                            <li>Switch</li>
                            <li>Loop Statements</li>
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
