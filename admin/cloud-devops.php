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
        <h1>Become a Cloud Development Expert</h1>
        <p>Learn how to design, deploy, and manage applications in the cloud. Master platforms like AWS, Azure, and Google Cloud.</p>
        <div class="d-flex">
            
          <!-- Add buttons or links if needed -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses-hero/cloud-development.jpg" class="" style="border-radius: 55px;" alt="Cloud Development">
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
        <li class="active">Cloud Development</li>
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
    <a href="aws.php" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/aws/aws.jpg" class="testimonial-img" alt="AWS" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>AWS</h3>
            <p>Transform your career with Urbancode's Cloud Architect Course. This comprehensive program covers AWS, Azure, and Google Cloud, providing you with the expertise to design and manage scalable cloud solutions. Learn from industry experts and gain hands-on experience with real-world projects. Whether you're a beginner or an experienced professional, our course equips you with the skills needed to excel in the fast-growing field of cloud architecture. Join Urbancode and become a certified cloud architect today.</p>
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
    <a href="/azure" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/azure/azure.jpg" class="testimonial-img" alt="Azure Course Urbancode" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>Microsoft Azure</h3>
            <p>Elevate your cloud skills with Urbancode's Azure Certification Course. Gain hands-on experience with Azure services, including Virtual Machines, Azure SQL Database, and AI integration. Our course is tailored for beginners and professionals alike, offering comprehensive insights and certification to help you excel in the cloud industry. Enroll in Urbancode’s Azure program and become a certified Azure expert today.</p>
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
    <a href="/gcp" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/gcp/gcp.jpg" class="testimonial-img" alt="GCP Course Urbancode" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>Google Cloud Platform</h3>
            <p>Unlock the power of cloud computing with Urbancode's GCP Certification Course. Learn essential Google Cloud services like Compute Engine, BigQuery, and AI tools to build and manage robust cloud solutions. Suitable for both beginners and seasoned professionals, our program offers real-world projects and certification to help you succeed in the cloud landscape. Enroll with Urbancode and become a certified GCP expert today.</p>
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



     </div>
    
  </div>
 </div>
</section><!-- End Testimonials Section -->


<?php 
include 'inc/footer.php';
?>
