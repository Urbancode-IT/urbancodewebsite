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
        <h1>Become an SEO Expert</h1>
        <p>Master the art of Search Engine Optimization (SEO) and learn how to drive organic traffic to your website. Understand the essential strategies for on-page and off-page SEO, keyword research, link building, and content optimization to rank higher on search engines.</p>
        <div class="d-flex">
          <!-- Add buttons or links if needed -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses-hero/seo.jpg" class="" style="border-radius: 55px;" alt="SEO">
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
        <li class="active">SEO (Search Engine Optimization)</li>
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
    <a href="digital-marketing.php" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/digital-marketing/digital-marketing.jpg" class="testimonial-img" alt="Digital Marketing" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>Digital Marketing</h3>
            <p>Elevate your marketing skills with Urbancode’s Digital Marketing course. This comprehensive program covers essential topics such as search engine optimization (SEO), social media marketing, email marketing, content marketing, and data analytics. Learn how to create effective marketing strategies that engage customers and drive sales. With hands-on projects, real-world case studies, and guidance from industry experts, this course is perfect for anyone looking to succeed in the dynamic world of digital marketing.</p>
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
