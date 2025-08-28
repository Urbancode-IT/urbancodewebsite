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
        <h1>Learn Spanish with Confidence</h1>
        <p>Start speaking Spanish with ease. This course covers essential vocabulary, grammar, and pronunciation, enabling you to communicate effectively in a variety of real-life situations and develop your conversational skills.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/spanish/spanish.jpg" class="img-fluid" style="border-radius: 55px;" alt="Spanish Language Course">
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
        <li class="active" id="course-id">Spanish</li>
      </ol>
    </div>
  </nav>
</div>


<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Spanish Language Course</h5>
                <p class="pb-2">Embark on your journey to fluency with Urbancode's Spanish Language course. Whether you're a beginner or looking to refine your language skills, this course is designed to help you master speaking, reading, writing, and listening in Spanish. Perfect for business, travel, or cultural exploration, this course equips you with the tools needed to confidently communicate in Spanish.</p>   
                
                <h4 style="color:#000000;" class="py-3">Course Overview:</h4>  
                <p class="pb-2">
                    <b>What will you learn?</b><br> You will learn essential aspects of the Spanish language, including grammar, vocabulary, pronunciation, and conversational skills. This course emphasizes real-life scenarios to help you speak and understand Spanish fluently.<br><br>
                    
                    <b>Who is this course for?</b><br> This course is suitable for learners of all levels, from beginners to advanced. Whether you’re learning Spanish for travel, business, or personal interest, this course will help you improve your language skills.<br><br>
                    
                    <b>Course Highlights:</b><br> Master basic and advanced grammar, enhance vocabulary, improve listening and speaking abilities, and practice conversational Spanish in real-world scenarios.
                </p>   
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 30 hrs Instructor-Led Training</li>
                        <li><i class="fa-solid fa-briefcase"></i> Real-World Conversational Practice</li>
                        <li><i class="fa-solid fa-circle-info"></i> Language Assessments</li>
                        <li><i class="fa-solid fa-award"></i> Certificate of Completion</li>
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
                    <h3 class="each-title">Introduction to Spanish</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of the Spanish Language</li>
                            <li>Spanish Alphabet and Pronunciation</li>
                            <li>Basic Greetings and Introductions</li>
                            <li>Common Spanish Phrases</li>
                        </ul>
                    </div>
                </div> 
                <div class="each-accordionbox">
                    <h3 class="each-title">Grammar and Vocabulary</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Basic Sentence Structure</li>
                            <li>Verb Conjugations (Present Tense)</li>
                            <li>Nouns, Adjectives, and Pronouns</li>
                            <li>Building Vocabulary (Common Words and Phrases)</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Conversational Spanish</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Engaging in Everyday Conversations</li>
                            <li>Asking Questions and Providing Answers</li>
                            <li>Spanish for Travel and Business</li>
                            <li>Real-life Scenarios and Role Plays</li>
                        </ul>
                    </div>
                </div> 
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced Topics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Past and Future Tenses</li>
                            <li>Complex Sentences and Grammar</li>
                            <li>Idiomatic Expressions</li>
                            <li>Listening and Speaking Fluency</li>
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
