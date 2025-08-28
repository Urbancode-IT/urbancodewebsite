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
        <h1>Build Custom Apps with Microsoft Power Apps</h1>
        <p>Learn to create powerful, custom applications with Microsoft Power Apps. Discover how to automate workflows, connect data from various sources, and build user-friendly applications without extensive coding knowledge.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
           <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/powerapps/powerapps.jpg" class="img-fluid" style="border-radius: 55px;" alt="Power Apps Course">
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
        <li class="active" id="course-id">Power Apps</li>
      </ol>
    </div>
  </nav>
</div>



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Training Curriculum for Freshers in PowerApps Development</h5>
                <p class="pb-2">Our PowerApps course is designed for anyone looking to jumpstart their career in low-code app development. This comprehensive training covers everything from designing custom apps to automating workflows with PowerApps. You'll learn how to create applications that can streamline business processes, integrate with Microsoft services, and transform data into actionable solutions. By mastering PowerApps, you’ll be well-equipped for roles in app development and digital transformation, enhancing your employability in the evolving tech landscape.</p>
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 40 hrs Instructor-Led Training & Hands-on Projects</li>
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
                    <h3 class="each-title">Introduction to PowerApps</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of Microsoft PowerApps</li>
                            <li>PowerApps Use Cases and Benefits</li>
                            <li>Introduction to Power Platform</li>
                            <li>Setting up PowerApps Environment</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Building Apps with PowerApps</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Creating Canvas and Model-Driven Apps</li>
                            <li>Connecting to Data Sources</li>
                            <li>Adding and Configuring Controls</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">User Interface and User Experience</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Designing User-Friendly Interfaces</li>
                            <li>Working with Forms and Galleries</li>
                            <li>Navigation and Screen Transitions</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Working with Data in PowerApps</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Data Modeling in PowerApps</li>
                            <li>Working with Common Data Service (Dataverse)</li>
                            <ul>
                                <li>CRUD Operations</li>
                                <li>Integrating with SharePoint and Excel</li>
                            </ul>
                            <li>Managing Relationships between Entities</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced PowerApps Concepts</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Using Power Automate with PowerApps</li>
                            <li>Implementing Business Logic with PowerApps</li>
                            <li>App Security and Permissions</li>
                            <li>Deploying and Sharing PowerApps</li>
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
