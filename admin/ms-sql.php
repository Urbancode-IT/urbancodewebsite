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
        <h1>Master Microsoft SQL Server (MS SQL)</h1>
        <p>Learn how to efficiently manage databases, write complex queries, and optimize performance using Microsoft SQL Server. Gain hands-on experience with SQL Server’s powerful features, including data types, indexing, stored procedures, and more for building scalable and high-performance database applications.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/ms-sql/ms-sql.jpg" class="img-fluid" style="border-radius: 55px;" alt="MS SQL Course">
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
        <li class="active" id="course-id">MS SQL</li>
      </ol>
    </div>
  </nav>
</div>


<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Why should you choose this course?</h5>
                <p class="pb-2">
                    <b>Empowering careers</b><br> It is ranked as the 3rd most in-demand IT skill and the have been increasing in the global market.<br><br>

                    <b>Industry Relevance</b><br> Acquiring skills in MS SQL can open doors to job opportunities in companies that rely on MS SQL Server.<br><br>

                    <b>Data-Driven Decision Making</b><br> Understanding SQL allows you to analyze data, which enables better decision-making based on factual insights.<br><br>
                    <b>High Demand</b><br> Proficiency in MS SQL often fetches high-paying positions due to the demand for these skills in the job market.
                </p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-solid fa-clock"></i> 30 hrs Instructor-Led Training</li>
                        <li><i class="fa-solid fa-clock"></i> 32 hrs Practice & Exercises</li>
                        <li><i class="fa-solid fa-circle-info"></i> Mentor Support</li>
                        <li><i class="fa-solid fa-award"></i> Certificate of completion</li>
                        <!-- <li><i class="fa-solid fa-download"></i> 3 downloadable resources</li> -->
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
                    <h3 class="each-title">Introduction to Relational Databases and SQL</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Databases and Database Management Systems (DBMS)</li>
                            <li>Relational Database Concepts</li>
                            <ul>
                                <li>Normalization Concepts (1NF, 2NF, 3NF)</li>
                                <li>Denormalization and its Use Cases</li>
                            </ul>
                            <li>Introduction to SQL (Structured Query Language)</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Database Design</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Database Design Principles</li>
                            <li>Entity-Relationship (ER) Modelling</li>
                            <li>Indexes and Keys in SQL Server</li>
                            <li>SQL Data Types and Operators</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">SQL Server Installation and Configuration</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Installing SQL Server</li>
                            <li>SQL Server Configuration Options</li>
                            <li>SQL Server Management Studio (SSMS) Overview</li>
                            <li>Connecting to SQL Server Instances</li>                            
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Definition, Manipulation and Transaction Control</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>DDL Commands</li>
                            <ul>
                                <li>Create, Alter, Drop, Truncate</li>
                            </ul>
                            <li>DML Commands</li>
                            <ul>
                                <li>Select, Insert, Update, Delete</li>
                            </ul>
                            <li>DCL Commands</li>
                            <ul>
                                <li>Grant, Revoke</li>
                            </ul>
                            <li>TCL Commands</li>
                            <ul>
                                <li>Commit, Rollback, Save point</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Working with SQL: Join, Functions, and temp table</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Combining rows from tables using inner, outer, cross, and self joins</li>
                            <li>Deploying operators such as intersect, except, union</li>
                            <li>Understanding SQL functions and their usage</li>
                            <li>List of built-in SQL Functions</li>
                            <ul>
                                <li>Aggregate functions</li>
                                <li>Date & Time functions</li>
                                <li>String functions</li>
                            </ul>
                            <li>Temporary table creation</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">SQL Views and Stored Procedures</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Learning SQL views</li>
                            <ul>
                                <li>Advantage of views</li>
                                <li>Managing views in SQL Server</li>
                            </ul>
                            <li>Understanding stored procedures and their key benefits</li>
                            <li>Working with Stored Procedures</li>
                            <ul>
                                <li>Executing a SP with Parameters</li>
                                <li>Executing a SP without Parameters</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">SQL Indexes and Triggers</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Creating indexes & their guidelines</li>
                            <ul>
                                <li>Clustered index</li>
                                <li>Non-Clustered index</li>
                            </ul>
                            <li>Creating DML Triggers</li>
                            <li>Instead of Triggers</li>
                            <li>Enable & disable DML Triggers</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Real-world Projects and Case Studies</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Hands-on SQL Server Projects</li>
                            <li>Case Studies from Industry</li>
                            <li>Best Practices and Industry Standards</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Revision and Certification Preparation</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Review of Key Concepts</li>
                            <li>Practice Tests and Quizzes</li>
                            <li>Tips and Strategies for Certification Exams (e.g., Microsoft Certified: Azure Database Administrator Associate)</li>
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
