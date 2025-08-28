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
        <h1>Become a Graphics Design Expert</h1>
        <p>Learn the principles of graphic design and master industry-standard tools like Adobe Photoshop, Illustrator, and InDesign. Develop the skills to create stunning visuals, branding materials, and impactful designs for both print and digital media.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/graphics/graphics.jpg" class="img-fluid" style="border-radius: 55px;" alt="Graphics Design Course">
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
        <li class="active"  id="course-id">Graphics Design</li>
      </ol>
    </div>
  </nav>
</div>




<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Comprehensive Graphics Design Curriculum</h5>
                <p class="pb-2">Join Urbancode's Graphics Design course and dive into the world of visual storytelling. This course equips designers with the essential skills to create impactful graphics, from logo creation to branding and marketing visuals. Through project-based learning and expert mentorship, you'll build a strong portfolio and gain the confidence to excel in the creative industry.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width: max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 60 hrs Instructor-Led Training & Practical Projects</li>
                        <li><i class="fa-solid fa-briefcase"></i> Portfolio Building Support</li>
                        <li><i class="fa-solid fa-circle-info"></i> One-on-One Mentor Guidance</li>
                        <li><i class="fa-solid fa-award"></i> Certificate of Mastery in Graphics Design</li>
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
                <!-- Introduction to Graphics Design -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to Graphics Design</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>What is Graphics Design?</li>
                            <li>Essential Tools for Designers</li>
                            <li>Principles of Design and Visual Communication</li>
                        </ol>
                    </div>
                </div>
                <!-- Typography and Color Theory -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Typography and Color Theory</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Understanding Typography</li>
                            <li>Combining Fonts Effectively</li>
                            <li>Color Psychology and Harmony</li>
                        </ol>
                    </div>
                </div>
                <!-- Graphic Design Tools and Software -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Graphic Design Tools and Software</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Introduction to Adobe Photoshop and Illustrator</li>
                            <li>Vector vs Raster Graphics</li>
                            <li>Creating and Editing Shapes, Text, and Images</li>
                        </ol>
                    </div>
                </div>
                <!-- Branding and Logo Design -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Branding and Logo Design</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Designing a Brand Identity</li>
                            <li>Logo Design Principles and Techniques</li>
                            <li>Creating Logos from Concept to Final Design</li>
                        </ol>
                    </div>
                </div>
                <!-- Marketing and Social Media Graphics -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Marketing and Social Media Graphics</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Designing for Social Media Platforms</li>
                            <li>Creating Promotional Graphics</li>
                            <li>Optimizing Visuals for Online Ads</li>
                        </ol>
                    </div>
                </div>
                <!-- Portfolio Development -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Portfolio Development</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Selecting and Organizing Your Best Work</li>
                            <li>Creating a Professional Portfolio Website</li>
                            <li>Building a Personal Brand as a Graphic Designer</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- <section class="student-bought">
    <div class="container-md">
        <div class="row">
            <div class="col-12 col-md-4 left pe-md-3 py-3 py-md-5">
                <div class="form-col">
                    <h4 class="mb-4 text-white">Guide Videos</h4>  
                </div>
            </div>
            <div class="col-12 col-md-8 right py-3 py-md-5">
                <div class="slide-col ps-md-3">
                    <h4 class="text-white">Students also bought</h4>
                    <div class="bought-slider mt-3 mt-md-4">
                        <div class="col-lg-12">
                            <div class="card w-100">
                                <img class="card-img-top" src="images/new-launch1.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>The Complete Python Bootcamp From Zero to Hero...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>Ultimate AWS Certified Solutions Architect Associate...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card w-100">
                                <img class="card-img-top img-fluid" src="images/new-launch1.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>The Complete Python Bootcamp From Zero to Hero...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card w-100">
                                <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>Ultimate AWS Certified Solutions Architect Associate...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section> -->



<?php 
include 'inc/related.php'; 
include 'inc/footer.php';
?>
