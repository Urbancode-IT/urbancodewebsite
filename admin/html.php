<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<style>
#hero .container {
    margin-top: 60px; /* Adjust the value as needed */
}
</style>

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
        <h1>Start Your Journey in HTML</h1>
        <p>Learn the essential building blocks of web development with HTML. Understand how to structure web pages, create elements, and build the foundation for beautiful, responsive websites.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/html/html.jpg" class="img-fluid" style="border-radius: 55px;" alt="HTML Course">
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
        <li class="active"  id="course-id">HTML</li>
      </ol>
    </div>
  </nav>
</div>



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">HTML Training Curriculum for Beginners</h5>
                <p class="pb-2">The HTML course is essential for anyone interested in web development. Our curriculum introduces you to the fundamental concepts of HTML, enabling you to create structured and visually appealing web pages. Mastering HTML is the first step towards becoming a front-end developer, providing a strong base for building responsive websites and enhancing your skills in modern web design and development.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 24 hrs Instructor-Led Training & Project Work</li>
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
                    <h3 class="each-title">Introduction to HTML</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>What is HTML?</li>
                            <li>History and Evolution of HTML</li>
                            <li>Basic Structure of an HTML Document</li>
                            <li>Setting Up Your First HTML File</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">HTML Basics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Elements and Tags</li>
                            <li>Attributes and Properties</li>
                            <li>Text Formatting (Headings, Paragraphs, Bold, Italics)</li>
                            <li>Creating Lists (Ordered, Unordered)</li>
                            <li>Adding Links</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Working with Media</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Inserting Images</li>
                            <li>Embedding Videos</li>
                            <li>Adding Audio</li>
                            <li>Using the &lt;figure&gt; and &lt;figcaption&gt; Tags</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Forms and Input</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Creating Forms</li>
                            <li>Form Elements (Input, Textarea, Button, Select)</li>
                            <li>Form Validation</li>
                            <li>Using Labels and Fieldsets</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Intermediate HTML</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Tables and Layouts</li>
                            <li>Working with Iframes</li>
                            <li>HTML5 Semantic Elements (header, footer, article, section)</li>
                            <li>Using Meta Tags</li>
                            <li>HTML Entities</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced HTML</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Creating Responsive Design</li>
                            <li>Using SVG and Canvas for Graphics</li>
                            <li>Geolocation API</li>
                            <li>Storage API (Local and Session Storage)</li>
                            <li>Building Accessible Websites</li>
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
