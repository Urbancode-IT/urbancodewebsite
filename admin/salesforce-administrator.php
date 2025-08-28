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
        <h1>Become a Certified Salesforce Administrator</h1>
        <p>Master the essential Salesforce administration skills to configure, manage, and maintain your organization’s Salesforce environment. Learn about user management, workflows, reporting, and automation tools to enhance business processes.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
            <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/salesforce-administrator/salesforce-administrator.jpg" class="img-fluid" style="border-radius: 55px;" alt="Salesforce Administrator Course">
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
        <li class="active" id="course-id">Salesforce Administrator</li>
      </ol>
    </div>
  </nav>
</div>

<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Comprehensive Salesforce Administrator Training</h5>
                <p class="pb-2">This Salesforce Administrator course is designed for professionals looking to specialize in Salesforce administration. Learn user management, security controls, workflow automation, and data management techniques to efficiently manage a Salesforce environment and support business growth.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 40 hrs Instructor-Led Training & Hands-on Labs</li>
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
                    <h3 class="each-title">Salesforce Basics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Salesforce CRM</li>
                            <li>Overview of Salesforce Platforms</li>
                            <li>Understanding Salesforce Roles</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">User Management</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Creating and Managing Users</li>
                            <li>Profiles, Roles, and Permission Sets</li>
                            <li>Login Access Policies</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Management</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Data Import and Export</li>
                            <li>Data Validation Rules</li>
                            <li>Data Cleanup and Deduplication</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Workflow Automation</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Workflow Rules and Process Builder</li>
                            <li>Approval Processes</li>
                            <li>Introduction to Salesforce Flow</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Security and Access</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Organization-Wide Defaults (OWD)</li>
                            <li>Sharing Rules and Hierarchies</li>
                            <li>Field-Level Security</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Reporting and Dashboards</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Creating Custom Reports</li>
                            <li>Building Dashboards</li>
                            <li>Scheduling and Sharing Reports</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Salesforce AppExchange</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to AppExchange</li>
                            <li>Installing and Managing Apps</li>
                            <li>Customizing AppExchange Apps</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>               
    </div>
</section>

<?php 
include 'inc/footer.php';
?>
