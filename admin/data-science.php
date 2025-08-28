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
        <h1>Become a Data Science Expert</h1>
        <p>Master the skills required for data science, including data analysis, machine learning, and statistical modeling. Learn to work with tools like Python, R, and SQL to extract valuable insights from large datasets and solve complex problems.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/data-science/ds.jpg" class="img-fluid" style="border-radius: 55px;" alt="Data Science Course">
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
        <li class="active"  id="course-id">Data Science</li>
      </ol>
    </div>
  </nav>
</div>



<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>                
                <p class="pb-2">Embark on a transformative journey with Urbancode's Data Science Certification Program. Crafted by seasoned experts, this online course delves into foundational and advanced data science concepts. From mastering statistical analysis to machine learning algorithms, participants gain hands-on experience, empowering them with the skills needed to excel in the dynamic field of data science.</p> 
                <h5 class="pb-2">Why should you choose this course?</h5>
                <p class="pb-2">
                    <b>Empowering careers</b><br> Diverse career paths in data science, including roles such as data analyst, machine learning engineer, data scientist, and more.<br><br>

                    <b>Industry Relevance</b><br> Familiarize yourself with in-demand tool Python and popular libraries like NLTK, SpaCy and Scikit-Learn.<br><br>

                    <b>Data-Driven Decision Making</b><br> Learn to manipulate and preprocess data effectively, a fundamental skill in the data science workflow.<br><br>

                    <b>High Demand</b><br>Acquire the highly sought-after skills in data analysis, machine learning, and statistical modeling that are in high demand across industries.
                </p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-solid fa-clock"></i> 60 hrs Instructor-Led Training</li>
                        <li><i class="fa-solid fa-clock"></i> 30 hrs Project & Exercises</li>
                        <li><i class="fa-solid fa-circle-info"></i> Mentor Support</li>
                        <li><i class="fa-solid fa-award"></i> Placement Assistance</li>
                        <li><i class="fa-solid fa-download"></i> 3 downloadable resources</li>
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
                    <h3 class="each-title">Introduction to Statistical Analysis & Concepts</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Probability Theory</li>
                            <li>Data Analysis: Measures of Central Tendency & Dispersion</li>
                            <li>Introduction to Distributions (Normal, Poisson, Binomial)</li>
                            <li>Hypothesis Testing (Null & Alternate Hypothesis)</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Linear Regression</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Basics of OLS Regression</li>
                            <li>Assumptions & Features of Linear Regression</li>
                            <li>Introduction to Gradient Descent & its loss function</li>
                            <li>Gradient Descent ve Linear Regression</li>
                            <li>Other Gradient Descent Algorithms</li>
                            <li>Other Regression Algorithms: Ridge & Lasso Regression</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Classification</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Logistic Regression</li>
                            <li>Naive Bayes & Conditional Probability</li>
                            <li>K Nearest Neighbour</li>
                            <li>Bagging & Boosting Algorithms: Decision Trees, Random Forest, XGBoost</li>
                        </ul>
                </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Unsupervised Learning</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Clustering</li>
                            <li>K Means Clustering</li>
                            <li>Hierarchical Clustering</li>
                            <li>DBScan Algorithm</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Text Mining</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Intro to Text Mining & Information Retrieval</li>
                            <li>Parts of Speech Tagging</li>
                            <li>Sentiment Analysis</li>
                            <li>Recommender Systems</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced AI & ML Algorithms</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Deep Learning & Neural Networks</li>
                            <li>Convoluted Neural Networks & Recurrent Neural Networks</li>
                            <li>Introduction to Reinforcement Learning</li>
                            <li>Basics of Gen AI</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to Analytics Industry</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Opportunities in Analytics & AI (India & Abroad)</li>
                            <li>Companies and Job Profiles in Analytics</li>
                            <li>Intro to Kaggle & GitHub</li>
                            <li>New trends in Analytics</li>
                            <li>Tips & Tricks for successful transition into Analytics</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Live Project</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Project Discussion</li>
                            <li>Problem Statement & Solution Design</li>
                            <li>Doubts resolution</li>
                            <li>Best Practices & Recommendations</li>
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
