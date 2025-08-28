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
        <h1>Accelerate Your Career as a Salesforce Developer</h1>
        <p>Master Salesforce development skills, including Apex programming, Lightning Web Components, SOQL, and integration best practices. Build scalable, efficient, and secure Salesforce applications to meet modern business needs.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
            <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/salesforce/salesforce-developer.jpg" class="img-fluid" style="border-radius: 55px;" alt="Salesforce Developer Course">
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
        <li class="active" id="course-id">Salesforce Developer</li>
      </ol>
    </div>
  </nav>
</div>

<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Comprehensive Salesforce Developer Training</h5>
                <p class="pb-2">This Salesforce Developer course is tailored for aspiring developers looking to specialize in Salesforce. Learn Apex programming, Lightning Web Components (LWC), SOQL, and integration techniques. Gain expertise in building custom Salesforce solutions to streamline workflows and drive business growth.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 50 hrs Instructor-Led Training & Projects</li>
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
                            <li>Understanding Salesforce Ecosystem</li>
                            <li>Overview of Salesforce Platforms</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Apex Programming</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Apex</li>
                            <li>Triggers and Batch Apex</li>
                            <li>Governor Limits</li>
                            <li>Debugging and Exception Handling</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Lightning Web Components (LWC)</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Lightning Web Components</li>
                            <li>Building Custom Components</li>
                            <li>Styling and Deployment</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Management in Salesforce</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>SOQL and SOSL Queries</li>
                            <li>Data Import and Export</li>
                            <li>Data Security and Sharing Rules</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Integration with Salesforce</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>REST and SOAP APIs</li>
                            <li>OAuth Authentication</li>
                            <li>Integration Best Practices</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Salesforce Deployment and DevOps</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Change Sets and Metadata API</li>
                            <li>Salesforce DX (SFDX)</li>
                            <li>Continuous Integration/Continuous Deployment (CI/CD)</li>
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
