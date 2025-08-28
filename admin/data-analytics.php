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
        <h1>Become a Data Analytics Expert</h1>
        <p>Unlock the power of data to make informed business decisions. Learn the skills to analyze, visualize, and interpret complex datasets using tools like Excel, Python, and SQL.</p>
        <div class="d-flex">
          <!-- Add buttons or links if needed -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses-hero/data-analytics.jpg" class="" style="border-radius: 55px;" alt="Data Analytics">
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
        <li class="active">Data Analytics</li>
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
    <a href="sas.php" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/sas/sas.jpg" class="testimonial-img" alt="SAS" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>SAS</h3>
            <p>Advance your career with Urbancode’s SAS Analytics course. This comprehensive program covers data manipulation, statistical analysis, and predictive modeling using SAS. Gain expertise in one of the most widely used analytics tools in the industry, learn from experienced professionals, and work on real-world projects to master the art of data analysis. Perfect for those looking to enter or advance in data science and analytics, this course will equip you with the skills needed to thrive as a SAS analyst.</p>
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
                    <span>3 Months</span>
                </div>
            </div>
        </div>
    </a>
</div><!-- End testimonial item -->



      
<div class="swiper-slide">
    <a href="r-program" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/r-program/r-program.jpg" class="testimonial-img" alt="R Programming Course Urbancode" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>R Programming</h3>
            <p>Master data analysis with Urbancode's R Programming Course. Learn how to harness the power of R for statistical analysis, data visualization, and predictive modeling. This course is perfect for beginners and professionals looking to deepen their analytical skills and gain hands-on experience with real-world datasets. Enroll in Urbancode’s R Programming program and become a proficient data analyst today.</p>
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
