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
        <h1>Begin Your Journey with PySpark</h1>
        <p>Gain expertise in big data processing with PySpark. Learn how to manage and analyze large datasets, work with Spark's DataFrames and RDDs, and build scalable data pipelines for machine learning applications.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/pyspark/pyspark.jpg" class="img-fluid" style="border-radius: 55px;" alt="PySpark Course">
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
        <li class="active" id="course-id">PySpark</li>
      </ol>
    </div>
  </nav>
</div>



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">PySpark Training Curriculum for Data Enthusiasts</h5>
                <p class="pb-2">The PySpark course is designed for individuals eager to explore big data processing and analytics. Our curriculum covers essential concepts of Apache Spark using Python, teaching you how to work with large datasets, build data pipelines, and apply machine learning algorithms efficiently. This course is ideal for data analysts, engineers, and professionals aiming to enhance their data processing skills in real-world scenarios.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 30 hrs Instructor-Led Training & Hands-On Project Work</li>
                        <li><i class="fa-solid fa-briefcase"></i> Job Assistance</li>
                        <li><i class="fa-solid fa-circle-info"></i> Mentor Support for Real-World Applications</li>
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
                    <h3 class="each-title">Introduction to PySpark</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>What is PySpark?</li>
                            <li>Understanding Apache Spark</li>
                            <li>Setting Up the PySpark Environment</li>
                            <li>Introduction to Big Data Processing</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">PySpark Basics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>RDDs (Resilient Distributed Datasets)</li>
                            <li>DataFrames and Datasets</li>
                            <li>Data Types in PySpark</li>
                            <li>Loading and Saving Data</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Manipulation with PySpark</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>DataFrame Operations</li>
                            <li>Handling Missing Data</li>
                            <li>Filtering, Sorting, and Grouping Data</li>
                            <li>Aggregations and Joins</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Machine Learning with PySpark</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to MLlib</li>
                            <li>Feature Engineering</li>
                            <li>Building and Evaluating Models</li>
                            <li>Model Tuning and Optimization</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced PySpark</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Using Spark SQL</li>
                            <li>Working with Streaming Data</li>
                            <li>Optimizing PySpark Applications</li>
                            <li>Deploying PySpark Workflows</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">PySpark Project Work</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>End-to-End Data Processing Project</li>
                            <li>Implementing Machine Learning Models</li>
                            <li>Optimizing Data Pipelines</li>
                            <li>Building a Real-Time Data Processing Application</li>
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
