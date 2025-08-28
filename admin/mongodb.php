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
        <h1>Master MongoDB for Scalable Applications</h1>
        <p>Learn how to work with MongoDB, the leading NoSQL database, to store and manage data in a flexible, scalable way. Understand MongoDB's document-based model, querying, aggregation, and how to integrate MongoDB with your applications for high-performance data management.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/mongodb/mongodb.jpg" class="img-fluid" style="border-radius: 55px;" alt="MongoDB Course">
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
        <li class="active" id="course-id">MongoDB</li>
      </ol>
    </div>
  </nav>
</div>


<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Training Curriculum for Freshers in NoSQL Database Management</h5>
                <p class="pb-2">Our MongoDB course is essential for anyone looking to build a career in NoSQL database management. This course provides a comprehensive introduction to MongoDB, covering everything from database design to complex queries using the MongoDB query language. Mastering MongoDB will equip you with the skills to efficiently manage and optimize document-based databases, ensuring you are well-prepared for advanced database management roles in the rapidly growing tech industry.</p>
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
                    <h3 class="each-title">Introduction to MongoDB</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of MongoDB</li>
                            <li>History of MongoDB</li>
                            <li>Features of MongoDB</li>
                            <li>Installing MongoDB and MongoDB Compass</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">MongoDB Basics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Writing your first MongoDB query</li>
                            <li>Understanding data types and collections</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Database Design Principles</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Document Structure and Schema Design</li>
                            <li>Normalization vs. Denormalization in NoSQL</li>
                            <li>Embedding vs. Referencing documents</li>
                            <li>Creating Data Models</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">MongoDB Queries</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>CRUD Operations</li>
                            <ul>
                                <li>INSERT, FIND, UPDATE, DELETE</li>
                            </ul>
                            <li>Aggregation Framework</li>
                            <ul>
                                <li>Using Aggregation Pipelines</li>
                                <li>Group and Sort Operations</li>
                            </ul>
                            <li>Indexes and Performance Optimization</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Intermediate MongoDB Concepts</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Data Relationships in MongoDB</li>
                            <li>Schema Design Patterns</li>
                            <li>Replication and Sharding</li>
                            <li>Data Backup and Recovery</li>
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