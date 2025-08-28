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
        <h1>Prepare for PTE with Confidence</h1>
        <p>Our PTE preparation course is designed to help you achieve your best score. We provide in-depth practice in Speaking, Writing, Listening, and Reading, along with tips and strategies to tackle the test efficiently and confidently.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/pte/pte.jpg" class="img-fluid" style="border-radius: 55px;" alt="PTE Preparation Course">
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
        <li class="active" id="course-id">PTE Preparation</li>
      </ol>
    </div>
  </nav>
</div>


<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">PTE Academic Training Program</h5>
                <p class="pb-2">Our PTE Academic course is designed to help students excel in the Pearson Test of English, focusing on all essential skills: Speaking, Writing, Reading, and Listening. Through this course, you will learn proven strategies, engage in mock tests, and receive personalized feedback to help you score high on the PTE exam. This program is perfect for those aiming for further studies or immigration.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 20 hrs Instructor-Led Training & Practice Sessions</li>
                        <li><i class="fa-solid fa-briefcase"></i> Test-Taking Strategies</li>
                        <li><i class="fa-solid fa-circle-info"></i> Personalized Feedback</li>
                        <li><i class="fa-solid fa-award"></i> Mock Tests and Score Evaluation</li>
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
                    <h3 class="each-title">Introduction to PTE</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of PTE Academic</li>
                            <li>Test Format and Scoring System</li>
                            <li>Understanding Skill Requirements</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Speaking Skills</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Oral Fluency and Pronunciation</li>
                            <li>Describe Image and Re-tell Lecture</li>
                            <li>Read Aloud and Answer Short Questions</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Writing Skills</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Summarize Written Text</li>
                            <li>Essay Writing Techniques</li>
                            <li>Grammar and Vocabulary Enhancement</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Reading Skills</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Reading Comprehension</li>
                            <li>Fill in the Blanks</li>
                            <li>Re-order Paragraphs</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Listening Skills</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Summarize Spoken Text</li>
                            <li>Highlight Correct Summary</li>
                            <li>Write from Dictation</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Mock Tests and Practice</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Full-Length Mock Tests</li>
                            <li>Feedback on Performance</li>
                            <li>Score Improvement Strategies</li>
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
