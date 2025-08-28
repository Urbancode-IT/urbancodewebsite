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
        <h1>Master C and C++ Programming</h1>
        <p>Develop core programming skills with C and C++. Learn fundamental concepts, memory management, data structures, and object-oriented programming to build efficient and high-performance applications.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
            <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/c-cpp/c-cpp.jpg" class="img-fluid" style="border-radius: 55px;" alt="C and C++ Course">
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
        <li class="active"  id="course-id">C and C++</li>
      </ol>
    </div>
  </nav>
</div>



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">C/C++ Training Curriculum for Beginners</h5>
                <p class="pb-2">The C/C++ course is crucial for anyone interested in software development. Our curriculum provides a solid foundation in both C and C++ programming languages, teaching you how to write efficient code, manage memory, and utilize object-oriented programming principles. Mastering C/C++ opens up opportunities in various domains like system programming, game development, and embedded systems, giving you a competitive edge in the tech industry.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 30 hrs Instructor-Led Training & Hands-On Project Work</li>
                        <li><i class="fa-solid fa-briefcase"></i> Job Assistance</li>
                        <li><i class="fa-solid fa-circle-info"></i> Mentor Support</li>
                        <li><i class="fa-solid fa-award"></i> Certificate of Completion</li>
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
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to C/C++</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of C and C++</li>
                            <li>History of C/C++</li>
                            <li>Features of C and C++</li>
                            <li>Setting Up the Development Environment</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">C/C++ Basics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Writing Your First C and C++ Programs</li>
                            <li>Data Types and Variables</li>
                            <li>Operators and Expressions</li>
                            <li>Input and Output in C/C++</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Control Flow and Functions</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Conditional Statements (if, else, switch)</li>
                            <li>Loops (for, while, do...while)</li>
                            <li>Functions in C/C++</li>
                            <ul>
                                <li>Function Prototypes</li>
                                <li>Function Overloading (C++)</li>
                                <li>Recursion</li>
                            </ul>
                            <li>Scope and Lifetime of Variables</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Pointers and Memory Management</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Pointers in C/C++</li>
                            <li>Dynamic Memory Allocation (malloc, calloc, free, new, delete)</li>
                            <li>Pointers to Functions</li>
                            <li>Pointer Arithmetic</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Object-Oriented Programming (OOP) in C++</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Classes and Objects</li>
                            <li>Constructors and Destructors</li>
                            <li>Inheritance</li>
                            <li>Polymorphism</li>
                            <ul>
                                <li>Function Overloading</li>
                                <li>Operator Overloading</li>
                                <li>Virtual Functions</li>
                            </ul>
                            <li>Encapsulation and Abstraction</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced Topics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Templates (Function and Class Templates)</li>
                            <li>Exception Handling</li>
                            <li>File Handling</li>
                            <li>Standard Template Library (STL)</li>
                            <ul>
                                <li>Vectors, Lists, and Maps</li>
                                <li>Iterators</li>
                                <li>Algorithms</li>
                            </ul>
                            <li>Multithreading (C++11)</li>
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
