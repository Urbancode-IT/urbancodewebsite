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
        <h1>Become a Cybersecurity Expert</h1>
        <p>Learn how to protect networks, systems, and data from cyber threats. Master key concepts such as ethical hacking, encryption, penetration testing, and network security protocols to safeguard critical information and defend against cyber attacks.</p>
        <div class="d-flex">
          <!-- Add buttons or links if needed -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses-hero/cybersecurity.jpg" class="" style="border-radius: 55px;" alt="Cybersecurity">
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
        <li class="active">Cybersecurity</li>
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
    <a href="cybersecurity.php" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/cybersecurity/cybersecurity.jpg" class="testimonial-img" alt="Cybersecurity" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>Cybersecurity</h3>
            <p>Protect your organization from digital threats with Urbancode’s Cybersecurity course. This comprehensive program covers crucial areas such as network security, risk assessment, incident response, and security protocols. Gain hands-on experience in identifying vulnerabilities and implementing effective security measures. Ideal for IT professionals and anyone interested in building a career in cybersecurity, this course will equip you with the skills necessary to safeguard data and ensure compliance with security standards.</p>
            <div class="course__ranking">
                <div class="course__star">
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-half vote"></i>
                </div>
                <span class="course__vote">4.9</span>
                <div class="course__timer">
                    <i class="bi bi-clock"></i>
                    <span>3 Months</span>
                </div>
            </div>
        </div>
    </a>
</div><!-- End testimonial item -->




      
<div class="swiper-slide">
    <a href="ethical-hacking.php" class="testimonial-wrap" style="text-decoration: none; color: inherit;">
        <div class="testimonial-item">
            <img src="images/courses/ethical-hacking/ethical-hacking.jpg" class="testimonial-img" alt="Ethical Hacking" style="width: 100%; height: 200px; object-fit: cover;" loading="lazy">
            <h3>Ethical Hacking</h3>
            <p>Secure your future in cybersecurity with Urbancode’s Ethical Hacking course. This comprehensive program teaches you the essential skills needed to identify and mitigate vulnerabilities in systems and networks. Learn about penetration testing, security assessment, and ethical hacking methodologies from experienced instructors. Gain hands-on experience through practical labs and real-world projects that will prepare you for a successful career in cybersecurity. Perfect for IT professionals, security enthusiasts, and anyone looking to make a difference in the digital world.</p>
            <div class="course__ranking">
                <div class="course__star">
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-fill vote"></i>
                    <i class="bi bi-star-half vote"></i>
                </div>
                <span class="course__vote">4.7</span>
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
