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
        <h1>Become a Software Testing Expert</h1>
        <p>Learn the essential techniques and tools for testing software effectively. Master both manual and automated testing, including using tools like Selenium, JUnit, and TestNG to ensure the quality and reliability of applications.</p>
        <div class="d-flex">
          <!-- Add buttons or links if needed -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses-hero/software-testing.jpg" class="" style="border-radius: 55px;" alt="Software Testing">
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
        <li class="active">Software Testing</li>
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
    <a href="selenium-python" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/selenium/selenium-python.jpg" class="testimonial-img" alt="Selenium with Python" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>Selenium with Python</h3>
            <p>Master automated testing with Urbancode’s Selenium with Python course. This program provides comprehensive training on using Selenium WebDriver for testing web applications. Learn to write effective test scripts in Python, handle dynamic content, and manage browser sessions. With hands-on projects and real-world scenarios, you will gain practical experience in test automation, enhancing your skills for roles in software development and quality assurance.</p>
            <div class="course__ranking">
                <div class="course__star">
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-half vote"></i>
                </div>
                <span class="course__vote">4.8</span>
                <div class="course__timer">
                    <i class="bi bi-clock"></i>
                    <span>3 Months</span>
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
