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
        <h1>Start Your Journey in Python Programming</h1>
        <p>Begin your path to becoming a Python developer. Learn Python's syntax, libraries, and frameworks to build applications in data science, web development, automation, and more.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/python/python.jpg" class="" style="border-radius: 55px;" alt="Python Programming">
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
        <li class="active" id="course-id">python</li>
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
                <p class="pb-2">Python Training Program at Urbancode empowers you to adeptly grasp the core concepts of this programming language. Upon program completion, you'll emerge as an expert capable of crafting Python programs for diverse use cases, leveraging advanced features like Generators, Iterators, Lambda expressions, Functions, File handling, and exception handling.</p> 
                <h4 style="color:#000000;" class="py-3">Learning Approach</h4>  
                <p class="pb-2">
                    <b>Hands-on Projects and Assignments</b><br> Practical exercises and real-world projects to reinforce learning.<br><br>
                    <b>Interactive Learning Resources</b><br> Tutorials, coding exercises, and resources for a deeper understanding.<br><br>
                    <b>Assessments and Quizzes</b><br> Regular assessments and quizzes to gauge progress<br><br>
                </p>
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 40 hrs Instructor-Led Training & Project Work</li>
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
                    <h3 class="each-title">Introduction to Python</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of Python</li>
                            <li>Introduction to Python programming language, its applications, and features.</li>
                            <li>Installing Python and setting up the development environment.</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Basic Python Syntax and Data Types</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Python Syntax Fundamentals</li>
                            <li>Understanding basic syntax, indentation, and code structure.</li>
                            <li>Exploring variables, data types, and operators in Python.</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Control Structures</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Control Flow</li>
                            <li>Exploring decision-making with if, else, and elif statements.</li>
                            <li>Implementing loops: for loops, while loops, and loop control statements.</li>
                        </ul>
                    </div> 
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Functions and Modules</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Functions in Python</li>
                            <ul class="accord_ul">
                                <li>Creating and utilizing functions, parameters, and return statements.</li>
                                <li>Introduction to built-in and user-defined functions.</li>
                            </ul>
                            <li>Python Modules</li>
                            <ul class="accord_ul">
                                <li>Importing and using modules in Python.</li>
                                <li>Creating and using custom modules.</li>
                            </ul>
                        </ol>
                    </div> 
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Structures</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Lists, Tuples, and Dictionaries</li>
                            <li>Understanding and working with different data structures</li>
                            <li>Manipulating lists, tuples, and dictionaries.</li>
                        </ul>
                    </div> 
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">File Handling</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Working with Files</li>
                            <li>Reading and writing files in Python.</li>
                            <li>Handling different file formats and operations.</li>
                        </ul>
                    </div> 
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Error Handling and Exception</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Error Handling</li>
                            <li>Introduction to exceptions and error handling in Python.</li>
                            <li>Using try, except, and finally blocks.</li>
                        </ul>
                    </div> 
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to OOP</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Object-Oriented Programming (OOP)</li>
                            <li>Understanding OOP concepts: classes, objects, and inheritance.</li>
                            <li>Creating classes and objects in Python.</li>
                        </ul>
                    </div> 
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to Librarie</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of Python Libraries</li>
                            <li>Introduction to commonly used libraries such as NumPy, Pandas, and Matplotlib.</li>
                            <li>Basics of using libraries for data analysis and visualization.</li>
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
