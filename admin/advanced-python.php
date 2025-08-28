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
        <h1>Take Your Python Skills to the Next Level</h1>
        <p>Master advanced Python concepts, including data structures, OOP, multithreading, asynchronous programming, and data science libraries. Dive deep into best practices and powerful libraries for scalable and efficient coding.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
            <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/advance-python/advance-python.jpg" class="img-fluid" style="border-radius: 55px;" alt="Advanced Python Course">
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
        <li class="active" id="course-id">Advanced Python</li>
      </ol>
    </div>
  </nav>
</div>



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Training Curriculum for Advanced Python Development</h5>
                <p class="pb-2">The Advanced Python course is designed for developers looking to enhance their programming skills. This course delves deeper into Python's capabilities, including advanced topics like multithreading, asynchronous programming, and working with data libraries such as NumPy and Pandas. Mastering these advanced concepts will prepare you to build scalable, high-performance applications, making you highly competitive in today’s tech industry.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 40 hrs Instructor-Led Training & Hands-on Projects</li>
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
        <h4 style="color:#000000;">Course Content</h4>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to Python</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of Python</li>
                            <li>History of Python</li>
                            <li>Features of Python</li>
                            <li>Installing Python and Setting Up Environment</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Python Basics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Writing your first Python program</li>
                            <li>Data types, variables, and operators</li>
                            <li>Control structures (if, else, for, while loops)</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Object-Oriented Programming in Python</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Classes and Objects</li>
                            <li>Inheritance and Polymorphism</li>
                            <ul>
                                <li>Method Overloading and Overriding</li>
                            </ul>
                            <li>Encapsulation and Abstraction</li>
                            <ul>
                                <li>Abstract Base Classes</li>
                                <li>Interfaces and Mixins</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced Python Data Structures</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Lists, Tuples, Sets, and Dictionaries</li>
                            <li>Comprehensions (List, Set, and Dict)</li>
                            <li>Generators and Iterators</li>
                            <li>Lambda, Map, Filter, and Reduce Functions</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Modules and Packages</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Creating and Importing Modules</li>
                            <li>Python Packages and the Python Package Index (PyPI)</li>
                            <li>Virtual Environments and Dependency Management</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Error Handling and Debugging</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Exception Handling (try, except, finally)</li>
                            <li>Custom Exceptions</li>
                            <li>Logging and Debugging in Python</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Working with Libraries and Frameworks</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Using Popular Python Libraries (NumPy, Pandas, Matplotlib)</li>
                            <li>Introduction to Web Frameworks (Django, Flask)</li>
                            <li>Working with Databases in Python (SQLite, SQLAlchemy)</li>
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
