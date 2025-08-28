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
        <h1>Master R Programming for Data Science</h1>
        <p>Learn R Programming to analyze and visualize data, build statistical models, and perform machine learning tasks. Gain hands-on experience with R’s extensive libraries to solve real-world data problems and gain insights from large datasets.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/r-program/r-program.jpg" class="img-fluid" style="border-radius: 55px;" alt="R Programming Course">
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
        <li class="active" id="course-id">R Programming</li>
      </ol>
    </div>
  </nav>
</div>



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Comprehensive R Programming Training</h5>
                <p class="pb-2">Urbancode's R Programming course provides a deep dive into data analysis, statistical modeling, and data visualization using the R language. The curriculum is designed to enable participants to manipulate large datasets, perform statistical analyses, and create compelling data visualizations. This course is essential for professionals in data science, analytics, and research fields, empowering them to make data-driven decisions and extract valuable insights from complex data sets.</p>      
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
        <h5 style="color: #00AE69;margin-top: 15px;font-weight: 700;">R Programming - Beginner Level</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to R</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Overview of R Programming</li>
                            <ul class="accord_ul">
                                <li>Introduction to R and its applications in data analysis and statistics.</li>
                                <li>Understanding the RStudio environment and interface.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">R Basics</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Data Structures in R</li>
                            <ul class="accord_ul">
                                <li>Introduction to vectors, matrices, lists, and data frames.</li>
                                <li>Working with different data types and structures in R.</li>
                            </ul>
                            <li>Basic Operations</li>
                            <ul class="accord_ul">
                                <li>Performing basic arithmetic operations and logical operations in R.</li>
                                <li>Using functions for data manipulation and analysis.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Import and Export</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Working with External Data</li>
                            <ul class="accord_ul">
                                <li>Importing data from various sources (CSV, Excel, databases, etc.).</li>
                                <li>Exporting processed data to different formats.</li>
                            </ul>
                        </ol>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Data Cleaning and Transformation</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Data Manipulation</li>
                            <ul class="accord_ul">
                                <li>Using dplyr, tidyr, and other packages for data manipulation.</li>
                                <li>Handling missing data, data filtering, and sorting.</li>
                            </ul>
                            <li>Data Transformation</li>
                            <ul class="accord_ul">
                                <li>Data aggregation and summarization using R.</li>
                                <li>Reshaping data with pivoting techniques.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Visualization</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Introduction to Data Visualization</li>
                            <ul class="accord_ul">
                                <li>Creating basic plots and charts using base R plotting functions.</li>
                                <li>Using ggplot2 for advanced data visualization.</li>
                            </ul>
                            <li>Customizing Visuals</li>
                            <ul class="accord_ul">
                                <li>Adding labels, themes, and customizations to plots.</li>
                                <li>Saving and exporting visualizations for reports.</li>
                            </ul>
                        </ol>
                    </div>
                </div>                

            </div>
        </div> 
        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">R Programming - Advanced Level</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced Data Analysis with R</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Statistical Analysis</li>
                            <ul class="accord_ul">
                                <li>Performing statistical tests and analyses in R (t-tests, ANOVA, regression).</li>
                            </ul>
                            <li>Time Series Analysis</li>
                            <ul class="accord_ul">
                                <li>Exploring time series data, decomposition, and forecasting models.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced Data Manipulation</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Using Apply Functions</li>
                            <ul class="accord_ul">
                                <li>Applying lapply, sapply, tapply for data manipulation.</li>
                                <li>Vectorizing operations for efficient data processing.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Building R Functions</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Writing custom functions for repetitive tasks.</li>
                            <li>Using conditional statements and loops within functions.</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Building Interactive Dashboards</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Creating Shiny Apps</li>
                            <ul class="accord_ul">
                                <li>Introduction to Shiny for building interactive web applications with R.</li>
                                <li>Adding interactivity and custom widgets to dashboards.</li>
                            </ul>
                        </ol>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Efficiency and Optimization</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Optimizing R Code</li>
                            <ul class="accord_ul">
                                <li>Techniques for improving the performance of R scripts.</li>
                                <li>Memory management and profiling for large datasets.</li>
                            </ul>
                        </ol>
                    </div>
                </div>   
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Reporting and Automation</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Generating Reports</li>
                            <ul class="accord_ul">
                                <li>Using R Markdown for dynamic report generation.</li>
                                <li>Automating data analysis workflows with R scripts.</li>
                            </ul>
                        </ol>
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
