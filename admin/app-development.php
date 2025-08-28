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
        <h1>Build Cutting-Edge Mobile Apps</h1>
         <p>Master the art of app development and create powerful, user-friendly mobile applications with expert guidance and hands-on training.</p>
        <div class="d-flex">
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses-hero/app-development.jpg" class="img-fluid" style="border-radius: 55px;" alt="Mobile App Development">
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
        <li class="active">App Development</li>
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
          <a href="react-native" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
            <div class="testimonial-item">
              <img src="images/courses/react-native/react-native.jpg" class="testimonial-img" alt="React Native Course">
              <h3>React Native Course</h3>
              <p>Master cross-platform mobile app development with Urbancode's React Native Course. This program covers everything from JavaScript fundamentals to building, deploying, and maintaining apps for iOS and Android. Learn about Firebase integration, state management, and navigation while working on real-world projects like e-commerce or task management apps. Gain the skills and confidence to excel in the app development industry with hands-on training and expert mentorship.</p>
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
</section>



</div>




  </div>
 </div>
</section><!-- End Testimonials Section -->

<?php 
include 'inc/footer.php';
?>
