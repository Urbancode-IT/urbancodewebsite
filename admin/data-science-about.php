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
        <p>Unlock the power of data with Urbancode's Data Science course. Learn the essential skills to analyze and interpret large datasets using Python, R, Machine Learning, and more. Master the techniques to build predictive models, data visualizations, and uncover insights that drive business decisions.</p>
        <div class="d-flex">
          <!-- Add buttons or links if needed -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses-hero/data-science.jpg" class="" style="border-radius: 55px;" alt="Data Science">
      </div>
    </div>
  </div>
</section><!-- /Hero Section -->

<!-- Breadcrumbs -->
<div class="breadcrumbs-header">
  <nav>
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/courses">Courses</a></li>
        <li class="active">Data Science</li>
      </ol>
    </div>
  </nav>
</div>



<!-- ======= courses Section ======= -->
<section id="testimonials-courses" class="testimonials-courses section-bg services py-md-4 py-3">
  <div class="container" data-aos="fade-up">
  
    <div class="testimonials-courses-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

      <div class="swiper-slide">
    <a href="data-science.php" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/data-science/ds.jpg" class="testimonial-img" alt="Data Science Course" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>Data Science</h3>
            <p>Start your journey in Data Science with Urbancode's comprehensive course. This program covers essential topics, including data analysis, machine learning, and data visualization using tools like Python, R, and SQL. Gain hands-on experience with real-world projects, guided by industry experts, to build your skills in data-driven decision-making. Whether you’re a beginner or an experienced professional, our Data Science course equips you for success in the growing field of analytics. Join Urbancode and become a certified data scientist today.</p>
            <div class="course__ranking">
                <div class="course__star">
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                </div>
                <span class="course__vote">5.0</span>
                <div class="course__timer">
                    <i class="bi bi-clock"></i>
                    <span>4 Months</span>
                </div>
            </div>
        </div>
    </a>
</div><!-- End testimonial item -->


      
<div class="swiper-slide">
    <a href="python-plus-chat-gpt" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/python-chatgpt/python-chatgpt.jpg" class="testimonial-img" alt="Python and ChatGPT Course" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>Python plus ChatGPT</h3>
            <p>Enhance your programming skills with Urbancode's Python Plus ChatGPT course. This unique program covers Python fundamentals, advanced scripting, and integration with ChatGPT for AI-powered applications. Learn to build intelligent solutions using Python’s robust libraries and ChatGPT’s language capabilities. Perfect for beginners and professionals aiming to explore AI development, this course offers hands-on projects to boost your expertise in Python and AI. Join Urbancode and start your journey in AI and automation today.</p>
            <div class="course__ranking">
                <div class="course__star">
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-half vote"></i>
                </div>
                <span class="course__vote">4.5</span>
                <div class="course__timer">
                    <i class="bi bi-clock"></i>
                    <span>3 Months</span>
                </div>
            </div>
        </div>
    </a>
</div><!-- End testimonial item -->



<div class="swiper-slide">
    <a href="/ai-ml" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/ai-ml/ai-ml.jpg" class="testimonial-img" alt="AI and Machine Learning Course Urbancode" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>AI & Machine Learning</h3>
            <p>Step into the future of technology with Urbancode's AI & Machine Learning course. This program dives deep into machine learning algorithms, neural networks, and AI applications using Python and TensorFlow. Designed for both beginners and professionals, our course includes hands-on projects and expert-led sessions to help you build intelligent solutions and gain a competitive edge in AI-driven fields. Enroll with Urbancode and start your journey toward becoming a certified AI expert today.</p>
            <div class="course__ranking">
                <div class="course__star">
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-half vote"></i>
                </div>
                <span class="course__vote">4.5</span>
                <div class="course__timer">
                    <i class="bi bi-clock"></i>
                    <span>4 Months</span>
                </div>
            </div>
        </div>
    </a>
</div><!-- End testimonial item -->

     </div>
    
  </div>
 </div>
</section><!-- End Testimonials Section -->


<?php 
include 'inc/footer.php';
?>
