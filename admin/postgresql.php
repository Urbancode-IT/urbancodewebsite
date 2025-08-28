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
        <h1>Master PostgreSQL for Relational Databases</h1>
        <p>Learn PostgreSQL, one of the most powerful open-source relational database management systems. Master the use of SQL queries, data modeling, indexing, and advanced features like JSON support and full-text search to build high-performance and scalable applications.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/postgresql/postgresql.jpg" class="img-fluid" style="border-radius: 55px;" alt="PostgreSQL Course">
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
        <li class="active" id="course-id">PostgreSQL</li>
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
                <p class="pb-2">The PostgreSQL Training Program at Urbancode equips you with the skills to effectively manage and manipulate data using this powerful relational database system. Upon completion, you'll be proficient in SQL queries, data modeling, and performance tuning, enabling you to design and maintain robust database solutions.</p> 
                <h4 style="color:#000000;" class="py-3">Learning Approach</h4>  
                <p class="pb-2">
                    <b>Hands-on Projects and Assignments</b><br> Practical exercises and real-world projects to reinforce learning.<br><br>
                    <b>Interactive Learning Resources</b><br> Tutorials, coding exercises, and resources for a deeper understanding.<br><br>
                    <b>Assessments and Quizzes</b><br> Regular assessments and quizzes to gauge progress.<br><br>
                </p>
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 40 hrs Instructor-Led Training & Project Work</li>
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
                    <h3 class="each-title">Introduction to PostgreSQL</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of PostgreSQL</li>
                            <li>Introduction to PostgreSQL database management system, its applications, and features.</li>
                            <li>Installing PostgreSQL and setting up the development environment.</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Basic SQL Syntax and Data Types</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>SQL Syntax Fundamentals</li>
                            <li>Understanding basic SQL syntax and code structure in PostgreSQL.</li>
                            <li>Exploring data types, tables, and basic database operations.</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Control Structures</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Control Flow</li>
                            <li>Using conditional statements for decision-making.</li>
                            <li>Implementing loops for repetitive tasks in SQL.</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Functions and Procedures</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>PostgreSQL Functions</li>
                            <ul class="accord_ul">
                                <li>Creating and utilizing functions, parameters, and return statements.</li>
                                <li>Introduction to built-in and user-defined functions.</li>
                            </ul>
                            <li>Stored Procedures</li>
                            <ul class="accord_ul">
                                <li>Creating and using stored procedures in PostgreSQL.</li>
                                <li>Understanding the differences between functions and procedures.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Structures</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Tables and Relationships</li>
                            <li>Understanding tables, primary keys, and foreign keys.</li>
                            <li>Implementing relationships between tables using joins.</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Manipulation</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>CRUD Operations</li>
                            <li>Creating, Reading, Updating, and Deleting records in PostgreSQL.</li>
                            <li>Using SQL queries to manipulate data.</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Error Handling and Transactions</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Error Handling</li>
                            <li>Understanding transactions and their importance in PostgreSQL.</li>
                            <li>Using COMMIT, ROLLBACK, and SAVEPOINT for transaction control.</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to Indexing</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of Indexing</li>
                            <li>Understanding the importance of indexing for query performance.</li>
                            <li>Creating and managing indexes in PostgreSQL.</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">PostgreSQL Extensions and Libraries</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of PostgreSQL Extensions</li>
                            <li>Introduction to commonly used extensions such as PostGIS and pgAdmin.</li>
                            <li>Basics of using extensions for enhanced functionality.</li>
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
