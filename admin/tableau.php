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
        <h1>Master Data Visualization with Tableau</h1>
        <p>Learn how to turn data into interactive, easy-to-understand visualizations using Tableau. Discover how to create insightful dashboards, explore advanced analytics, and communicate data-driven insights effectively.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/tableau/tableau.jpg" class="img-fluid" style="border-radius: 55px;" alt="Tableau Course">
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
        <li class="active" id="course-id">Tableau</li>
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
                <p class="pb-2">This course equips you with sought-after skills, making you adept at transforming raw data into impactful visual insights. Gain proficiency in leveraging Tableau's powerful features to analyze and present data effectively. Whether you're a beginner or seeking to enhance your data analytics prowess, the Tableau Specialist course is your gateway to unlocking new opportunities and becoming a proficient data storyteller in the competitive analytics landscape.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 35 hrs Instructor-Led Training & Project Work</li>
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
                    <h3 class="each-title">Data warehouse Concepts </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction about DWC (Data warehousing Concepts) </li>
                            <li>Dimensions, Measures, Keys </li>
                            <li>Types of Dimensions </li>
                            <li>Types of Keys </li>
                            <li>Identifying Keys </li>
                            <li>Types of Joins </li>
                            <li>How to identify Fact and dimension tables </li>
                            <li>Schema introduction </li>
                            <li>Types of schema </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Business Intelligence </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction about Business Intelligence </li>
                            <li>Evolution of BI </li>
                            <li>Categories of BI </li>
                            <li>BI tools Comparisons </li>
                            <li>OLAP and OLTP concepts </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Tableau Introduction </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Tableau Introduction  </li>
                            <li>Products of Tableau </li>
                            <li>Features of Tableau </li>
                            <li>Architecture of Tableau </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data connectivity </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Importing data to Tableau </li>
                            <li>Creating relationships </li>
                            <li>Manage relationships </li>
                            <li>Types of Joins </li>
                            <li>Star and Snowflake connectivity </li>
                            <li>Join using Composite Primary Key </li>
                            <li>Union </li>
                            <li>Data Interpreter </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Source </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Data source tab Introduction </li>
                            <li>Handling multiple source</li>
                            <li>Types of connectivity </li>
                            <li>Settings in Data Source </li>
                            <li>Identify Dimension and Measure using color. </li>
                            <li>Renaming fields </li>
                            <li>Pivot </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Sheet </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Sheet Introduction </li>
                            <li>Data tab overview </li>
                            <li>Create a calculated field for Dimension and Measure.</li>
                            <li>Understanding fields </li>
                            <li>Aggregation Functions </li>
                            <li>Date functions </li>
                            <li>String functions </li>
                            <li>Bin and Grouping </li>
                            <li>Effective usage of columns and rows </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Filter </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Filter Introduction </li>
                            <li>Types of Filters </li>
                            <li>Data Source and Extract Filter </li>
                            <li>Conditional Filter </li>
                            <li>Dimension Filter </li>
                            <li>Measure Filter </li>
                            <li>Date Filter </li>
                            <li>Relative Date Filter </li>
                            <li>Relevant Value Filter </li>
                            <li>Context Filter </li>
                            <li>User Filter and Quick Filter </li>
                            <li>Top and Bottom filter </li>
                            <li>Global Filter </li>
                            <li>Set Filter and its types </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Parameter </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Parameter Introduction </li>
                            <li>Steps to create parameter. </li>
                            <li>Use parameter for Dimension </li>
                            <li>Use parameter for Measure </li>
                            <li>Use parameter for Date</li>
                            <li>Use parameter for Sorting </li>
                            <li>Use parameter for filter Selection </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Blending and Marks </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Data Blending Introduction </li>
                            <li>Join vs. Blend with practical example </li>
                            <li>Blending using multiple data source </li>
                            <li>Marks Introduction </li>
                            <li>Marks types </li>
                            <li>Effective usage of marks with practical scenarios</li> 
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data and Worksheet menu </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Refresh Data Source </li>
                            <li>Data Source replacement </li>
                            <li>Edit Data source filters </li>
                            <li>Various options in Worksheet </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Charts - Show me </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Stacked and Column Charts </li>
                            <li>Trend Charts </li>
                            <li>Table and Matrix </li>
                            <li>Text and Highlight tables </li>
                            <li>Circle views and Area Charts </li>
                            <li>Treemaps of Scatter chart </li>
                            <li>geographical maps and its properties </li>
                            <li>Histogram and bubble Charts </li>
                            <li>Create custom visual charts using tricks </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">LOD - Level of Details </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>LOD Introduction </li>
                            <li>Types of LOD </li>
                            <li>Syntax </li>
                            <li>Coherent Analysis using LOD </li>
                            <li>Scenario questions and discussion related to LOD </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Analytics vs. Analysis </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Analytics - Summarise</li>
                            <li>Analytics - Model </li>
                            <li>Analytics - Forecasting </li>
                            <li>Custom Analytics </li>
                            <li>Various options in Analysis tab </li>
                            <li>Adding Totals, Grand totals, Row and Column totals </li>
                            <li>Control layout and table properties </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Dashboard </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Dashboard introduction </li>
                            <li>Objects </li>
                            <li>Dashboards for different devices </li>
                            <li>Size Adjustment </li>
                            <li>Dashboard layout  </li>
                            <li>Formatting dashboard </li>
                            <li>Task </li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Story and Actions </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Story introduction </li>
                            <li>Creating Storyboard </li>
                            <li>Properties of Storyboard </li>
                            <li>Actions introductions </li>
                            <li>Types of Actions </li>
                            <li>Creating actions with practical scenarios </li>
                            <li>Discussion on effective usage of action in dashboard</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Format menu and Annotate </h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Various options in Format menu  </li>
                            <li>Annotate values in charts </li>
                            <li>Types of Annotate </li>
                            <li>Performance tuning techniques </li>
                            <li>Order of Execution in Tableau </li>
                            <li>Various Export Options in Tableau</li>
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
