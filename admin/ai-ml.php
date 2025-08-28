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
        <h1>Become an Expert in AI and Machine Learning</h1>
        <p>Learn the fundamentals and advanced techniques of Artificial Intelligence and Machine Learning. Master algorithms, model building, data preprocessing, and deployment to solve real-world problems with AI-powered solutions.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
            <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/ai-ml/ai-ml.jpg" class="img-fluid" style="border-radius: 55px;" alt="AI & ML Course">
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
        <li class="active" id="course-id">AI & ML</li>
      </ol>
    </div>
  </nav>
</div>


<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Comprehensive AI & ML Training</h5>
                <p class="pb-2">Urbancode's AI & ML Training Course is designed to provide participants with a deep understanding of artificial intelligence and machine learning principles. This course covers both foundational and advanced topics, emphasizing practical skills and real-world applications. From data preprocessing and model building to deployment and optimization, participants will gain hands-on experience and learn to develop intelligent systems capable of solving complex problems.</p>   
                <h4 style="color:#000000;" class="py-3">Why should you choose this course?</h4>  
                <p class="pb-2">
                    <b>Career Opportunities</b><br> AI & ML professionals are in high demand across various industries, offering opportunities in tech companies, research institutions, and large enterprises. Mastery of AI & ML opens doors to diverse career paths and lucrative job prospects.<br><br>
                    <b>Hands-On Experience</b><br> The course focuses on practical application, providing real-world projects and exercises that simulate professional development environments. Participants will build a portfolio of projects to showcase their skills to potential employers.<br><br>
                    <b>Comprehensive Curriculum</b><br> Covering essential technologies and tools such as Python, TensorFlow, Keras, scikit-learn, and more, the course ensures a thorough understanding of AI & ML frameworks and methodologies.<br><br>
                    <b>Expert Guidance</b><br> Learn from industry experts who provide mentorship and guidance throughout the course, helping participants develop critical problem-solving and analytical skills.<br><br>
                    <b>Flexible Learning Options</b><br> Choose between flexible online and classroom training formats, enabling participants to learn at their own pace and balance their studies with professional or personal commitments.<br><br>
                </p>   
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 60hrs Instructor-Led Training</li>
                        <li><i class="fa-solid fa-briefcase"></i> Practice & Exercises for AI | ML | Data Science</li>
                        <li><i class="fa-solid fa-circle-info"></i> Mentor Support and Code Review</li>
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
        <h5 style="color: #00AE69;margin-top: 15px;font-weight: 700;">Module 1: Introduction to AI & ML</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Foundations of AI</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of Artificial Intelligence</li>
                            <li>History and evolution of AI</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Machine Learning Basics</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Machine Learning concepts</li>
                            <li>Supervised and unsupervised learning</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Python for AI & ML</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Python programming basics</li>
                            <li>Libraries for AI & ML (NumPy, pandas, scikit-learn)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 2: Data Preprocessing and Exploration</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Cleaning and Preparation</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Handling missing values</li>
                            <li>Data normalization and standardization</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Exploratory Data Analysis (EDA)</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Visualizing data distributions</li>
                            <li>Identifying patterns and correlations</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Feature Engineering</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Creating new features from existing data</li>
                            <li>Feature selection techniques</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 3: Machine Learning Algorithms</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Supervised Learning</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Linear and logistic regression</li>
                            <li>Decision trees and random forests</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Unsupervised Learning</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>K-means clustering</li>
                            <li>Principal component analysis (PCA)</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Deep Learning</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Neural networks and backpropagation</li>
                            <li>Introduction to TensorFlow and Keras</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="color: #00AE69;margin-top: 30px;font-weight: 700;">Module 4: Advanced Topics in AI & ML</h5>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Natural Language Processing (NLP)</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Text preprocessing and feature extraction</li>
                            <li>Sentiment analysis and text classification</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Computer Vision</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Image processing techniques</li>
                            <li>Object detection and recognition</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">Reinforcement Learning</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to reinforcement learning</li>
                            <li>Implementing Q-learning algorithms</li>
                        </ul>
                    </div>
                </div>

                <div class="each-accordionbox">
                    <h3 class="each-title">AI & ML Deployment</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Deploying models with Flask and Docker</li>
                            <li>Monitoring and maintaining AI systems</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row no-gutters">
      <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
        <img style="height: 500px;" src="images/courses/ai-ml/ai-ml-about.jpg" class="img-fluid" alt="learn-ai-ml">
        <a href="https://youtu.be/mvhjpUEOTMk?si=5JwVngyHEGgjqnlt" class="glightbox play-btn"></a>
      </div>   

      <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

        <header class="section-header">
          <h3>AI & ML</h3>
          <p>Unlock the Power of Artificial Intelligence and Machine Learning</p>
        </header>
        <div class="section-title">
          <p>Embark on an exciting journey into the world of Artificial Intelligence and Machine Learning with Urbancode's extensive training program. Designed by leading industry professionals, this course offers in-depth knowledge and practical skills in AI & ML. From understanding fundamental concepts to mastering advanced algorithms, participants will learn to build intelligent systems and apply machine learning techniques to solve real-world problems.</p>
          <br>
          <h4 class="title"><a href="#">Fundamentals of AI</a></h4>
          <p class="description">Introduction to AI | History of AI | Basics of Machine Learning</p>
          <h4 class="title"><a href="#">Machine Learning</a></h4>
          <p class="description">Supervised Learning | Unsupervised Learning | Neural Networks</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Us Section -->






<?php 
include 'inc/related.php'; 
include 'inc/footer.php';
?>
