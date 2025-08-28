<?php require_once "config.php";?>
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
        <h1>Learn Coding with Scratch</h1>
        <p>Introduce your child to the world of programming with Scratch! This course helps kids learn the basics of coding by creating interactive stories, games, and animations in a fun and engaging way.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/scratch-kids/scratch-kids.jpg" class="img-fluid" style="border-radius: 55px;" alt="Scratch for Kids Course">
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
        <li class="active"  id="course-id">Scratch for Kids</li>
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
                <p class="pb-2">Bring your child's coding dreams to reality. With Urbancode's Scratch course, train your kid to be Harvard or Google certified. Learn coding through experienced instructors, making it fun and accessible.</p>   
                <h4 style="color:#000000;" class="py-3">Course Overview:</h4>  
                <p class="pb-2">
                    <b>What is scratch programming?</b><br> Scratch programming is a block-based programming language. It helps kids to understand the fundamentals of coding by doing various interactive tasks. Students can create their own stories, animations, games and more programs on this platform. It enables children to improve their critical thinking skills.<br><br>
                    <b>Who is this course for?</b><br> This course is made for kids aged 7 to 16 years. Students with no prior coding experience, as well as those who know the basics of block-based programming languages, may join this course.<br><br>
                    <b>What will you learn in this course?</b><br> You will learn the undamentals of coding, such as sequence, logic, events, variables, functions, and so on. Students will learn to create digital storytelling, animation, game development, and much more.<br><br>
                </p>   
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 24 hrs Instructor-Led Training</li>
                        <li><i class="fa-solid fa-briefcase"></i> 10+ Projects & Exercises</li>
                        <li><i class="fa-solid fa-circle-info"></i> 9 Assessments</li>
                        <li><i class="fa-solid fa-award"></i> 2 Months Duration</li>
                        <li><i class="fa-solid fa-award"></i> 1 Final Project</li>
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
                    <h3 class="each-title">Introduction</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Scratch</li>
                            <li>Sprite, Backdrop, and Sounds</li>
                            <li>Character animation</li>
                            <li>Loops and Sequences</li>
                        </ul>
                    </div>
                </div> 
                <div class="each-accordionbox">
                    <h3 class="each-title">Story</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Narrating stories</li>
                            <li>Text-to-Speech extension</li>
                            <li>Parallelism</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Art & Animation</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Pen tool</li>
                            <li>Advanced animation</li>
                            <li>Music extension</li>
                            <li>Function (Abstraction)</li>
                        </ul>
                    </div>
                </div> 
                <div class="each-accordionbox">
                    <h3 class="each-title">Game & Application Development</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Basic game development</li>
                            <li>Advanced game development</li>
                            <li>Video sensing</li>
                            <li>Translate extension</li>
                            <li>Function with parameter</li>
                            <li>Operators</li>
                            <li>List</li>
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
