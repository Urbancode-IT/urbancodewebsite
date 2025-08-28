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
        <h1>Unlock Creativity with HTML5 Canvas</h1>
        <p>Learn to use HTML5 Canvas to create interactive graphics, animations, and games. Master drawing techniques, animations, and dynamic rendering, enabling you to bring visuals to life on the web.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/canvas/canvas.jpg" class="img-fluid" style="border-radius: 55px;" alt="HTML5 Canvas Course">
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
        <li class="active">HTML5 Canvas</li>
      </ol>
    </div>
  </nav>
</div>
<!-- End Breadcrumbs -->



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Creative Curriculum for Digital Artists</h5>
                <p class="pb-2">Enroll in Urbancode's Canvas course to unlock your creative potential. This course empowers artists to master digital art techniques, including illustrations, visual design, and animation. With hands-on projects and expert guidance, you'll develop the skills necessary to create stunning artworks and establish a solid foundation for a successful career in digital art.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width: max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 50 hrs Instructor-Led Training & Project Work</li>
                        <li><i class="fa-solid fa-briefcase"></i> Portfolio Development Assistance</li>
                        <li><i class="fa-solid fa-circle-info"></i> Personalized Mentor Support</li>
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
                <!-- Introduction to Digital Art -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to Digital Art</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>What is Digital Art?</li>
                            <li>Tools and Software for Digital Artists</li>
                            <li>Understanding Digital Art Techniques</li>
                        </ol>
                    </div>
                </div>
                <!-- Art Styles and Techniques -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Art Styles and Techniques</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Overview of Different Art Styles</li>
                            <li>Basic Drawing Techniques</li>
                            <li>Color Theory and Application</li>
                        </ol>
                    </div>
                </div>
                <!-- Canvas Tools and Features -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Canvas Tools and Features</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Exploring Canvas Interface</li>
                            <li>Utilizing Brush and Pen Tools</li>
                            <li>Creating Layers and Managing Artwork</li>
                            <li>Importing and Exporting Projects</li>
                        </ol>
                    </div>
                </div>
                <!-- Advanced Techniques in Canvas -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced Techniques in Canvas</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Creating Complex Illustrations</li>
                            <li>Animation Basics with Canvas</li>
                            <li>Integrating Textures and Effects</li>
                        </ol>
                    </div>
                </div>
                <!-- Project Development -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Project Development</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Planning and Conceptualizing a Project</li>
                            <li>Building a Complete Artwork from Scratch</li>
                            <li>Presenting Your Artwork for Feedback</li>
                        </ol>
                    </div>
                </div>
                <!-- Portfolio Creation -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Portfolio Creation</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Showcasing Your Best Works</li>
                            <li>Crafting an Online Portfolio</li>
                            <li>Marketing Yourself as a Digital Artist</li>
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
