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
        <h1>Start Your Journey in Java Programming</h1>
        <p>Build a strong foundation in Java, one of the most popular programming languages. Master core Java concepts, object-oriented programming, and develop skills for building robust applications.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/java/java.jpg" class="" style="border-radius: 55px;" alt="Java Programming">
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
        <li class="active"  id="course-id">java</li>
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
                <p class="pb-2">Core Java course is pivotal for any aspiring software developer. Our course serves as the foundation of Java programming, providing a solid base for building robust applications. Mastering Core Java equips you with essential skills in object-oriented programming, multithreading, exception handling, and more, ensuring you are well-prepared for advanced Java development and enhancing your employability in the competitive tech industry.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 32 hrs Instructor-Led Training & Project Work</li>
                        <li><i class="fa-solid fa-briefcase"></i> Job Assistance</li>
                        <li><i class="fa-solid fa-circle-info"></i> Mentor Support</li>
                        <li><i class="fa-solid fa-award"></i> Certificate of completion</li>
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
                    <h3 class="each-title">Introduction to Java</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of Java</li>
                            <li>History of Java</li>
                            <li>Features of Java</li>
                            <li>Installing Java Development Kit (JDK)</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Java Basics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Writing your first Java program</li>
                            <li>Data types and variables</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Object-Oriented Programming (OOP) Principles</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Classes and objects</li>
                            <li>Inheritance</li>
                            <li>Polymorphism</li>
                            <ul>
                                <li>Method-Overloading</li>
                                <li>Method-Overriding</li>
                            </ul>
                            <li>Encapsulation</li>
                            <li>Abstraction</li>
                            <ul>
                                <li>Abstract class</li>
                                <li>Interface</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Loops</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Control Statement</li>
                            <ul>
                                <li>While</li>
                                <li>Do....While</li>
                                <li>For and Nested For</li>
                            </ul>
                            <li>Selection Statement</li>
                            <ul>
                                <li>If</li>
                                <li>If....else</li>
                                <li>Else....if</li>
                            </ul>
                            <li>Jumping statement</li>
                            <ul>
                                <li>Break</li>
                                <li>Continue</li>
                                <li>Switch</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Intermediate</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>AScanner</li>
                            <li>Typecasting</li>
                            <ul>
                                <li>Upcasting</li>
                                <li>Downcasting</li>
                                <li>Narrowing</li>
                                <li>Widening</li>
                            </ul>
                            <li>Array</li>
                            <li>String</li>
                            <ul>
                                <li>String types</li>
                                <li>String methods</li>
                            </ul>
                            <li>Collection</li>
                            <ul>
                                <li>List</li>
                                <li>Set</li>
                                <li>Map</li>
                            </ul>
                            <li>Keywords</li>
                            <li>Exception Handling</li>
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
