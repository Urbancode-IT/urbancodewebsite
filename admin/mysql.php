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
        <h1>Master MySQL Database Management</h1>
        <p>Learn MySQL, one of the most popular relational database management systems, and how to efficiently manage and query databases. Gain practical knowledge in designing, maintaining, and optimizing databases, and mastering SQL queries for real-world applications.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/mysql/mysql.jpg" class="img-fluid" style="border-radius: 55px;" alt="MySQL Course">
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
        <li class="active" id="course-id">MySQL</li>
      </ol>
    </div>
  </nav>
</div>



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Training Curriculum for Freshers in Database Management</h5>
                <p class="pb-2">Our MySQL course is essential for anyone looking to build a career in database management. This course provides a comprehensive introduction to MySQL, from database design to complex SQL queries. Mastering MySQL will give you the skills to manage and optimize relational databases, ensuring you are well-prepared for advanced database management and increasing your employability in the rapidly growing tech industry.</p>
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
        <h4 style="color:#000000;">Course Content</h4>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to MySQL</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of MySQL</li>
                            <li>History of MySQL</li>
                            <li>Features of MySQL</li>
                            <li>Installing MySQL and MySQL Workbench</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">MySQL Basics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Writing your first SQL query</li>
                            <li>Understanding data types and tables</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Database Design Principles</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Normalization and Denormalization</li>
                            <li>Primary and Foreign Keys</li>
                            <li>Relationships between tables</li>
                            <li>Creating ER Diagrams</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">SQL Queries</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Control Statements</li>
                            <ul>
                                <li>SELECT, INSERT, UPDATE, DELETE</li>
                                <li>JOINs (INNER, LEFT, RIGHT, FULL)</li>
                            </ul>
                            <li>Aggregation Functions</li>
                            <ul>
                                <li>COUNT, SUM, AVG, MAX, MIN</li>
                            </ul>
                            <li>Subqueries and Nested Queries</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Intermediate SQL Concepts</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Stored Procedures and Functions</li>
                            <li>Triggers</li>
                            <li>Views and Indexes</li>
                            <li>Data Integrity and Constraints</li>
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
