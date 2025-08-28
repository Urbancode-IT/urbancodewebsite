<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<!--Hero Section-->
<main class="main">

<!-- Hero Section -->
<!--<section id="hero" class="hero section">-->

<!--  <div class="container">-->
<!--    <div class="row gy-4">-->
<!--      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">-->
<!--        <h1>Your path to success starts here</h1>-->
<!--        <p>We empower learners with quality education to excel in today’s competitive world.</p>-->
<!--        <div class="d-flex">-->
          
<!--        </div>-->
<!--      </div>-->
<!--      <div class="col-lg-6 order-1 order-lg-2 hero-img" >-->
<!--        <img src="image\abouthero.jpg" class="img-fluid " style="border-radius: 55px;" alt="">-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->

<!--</section><!-- /Hero Section -->
</main>



<!--End hero section--->
<!-- =======  Study Abroad ======= 

<div class="breadcrumbs-header">
  <div class="page-header d-flex align-items-center" >
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center font-family: 'Times New Roman', serif;">
          <h2>About</h2>
          <!-- <p>Welcome to Urbancode, where we blend innovation with excellence. Our dedicated team is passionate about driving success through cutting-edge technology solutions. Discover more about our journey and values as we strive to make a difference in the tech industry.</p> 
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li>About</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->



<!-- <section class="hero-sec product-section">
    <div class="container py-3 py-md-5 text-center">
        <h3 style="color:#000000;">Why Urbancode?</h3>
        <p class="py-3 text-start" style="color:#000000;font-size:20px;">We are a team of passionate mentors from leading MNCs equipped with in-depth subjective knowledge, driven by a shared objective. Our vision comes to life in the form of Urbancode, a testament to our commitment to equip students with knowledge that propels them towards successful career growth. Urbancode is a premier institute dedicated to software and language training. We understand that proficiency in software and language is the cornerstone of success in today's competitive world. We offer various courses led by industry experts who bring real-time scenario experience into the classroom.</p>
        <div class="cource-area mb-3">
            <img src="images/award-1.png" />
            <img src="images/award-2.png" />
            <img src="images/award-3.png" />
        </div> 
        
        <div class="cource-area my-5">
            <div class="cource-item d-flex align-items-center">
                <img src="images/Python-head.png" class="pe-2"/>
                <p>Python</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/aws-head.png" class="pe-2" />
                <p>AWS</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/angular-head.png" class="pe-2" />
                <p>Angular</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/Mysql-head.png" class="pe-2" />
                <p>MySQL</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/UI-&-UX-head.png" class="pe-2" />
                <p>UI/UX Designs</p>
            </div>
        </div>
    </div>
</section> -->

<!-- About Section -->

<style>
/*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
.about .inner-title {
  font-size: 2.75rem;
  font-weight: 700;
  margin: 100px 0;
}

@media (min-width: 991px) {
  .about .inner-title {
    max-width: 65%;
    margin: 0 0 80px 0;
  }
}

.about .our-story {
  padding: 40px;
  background-color: rgba(54, 77, 89, 0.04); 
}

@media (min-width: 991px) {
  .about .our-story {
    padding-right: 35%;
  }
}

.about .our-story h4 {
  text-transform: uppercase;
  font-size: 1.1rem;
  color: rgba(54, 77, 89, 0.5); 
}

.about .our-story h3 {
  font-size: 2.25rem;
  font-weight: 700;
  color: rgba(54, 77, 89, 0.2);    
}

.about .our-story p:last-child {
  margin-bottom: 0;
}
  
.about ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.about ul li {
  padding: 5px 0;
  display: flex;
  align-items: center;
}

.about ul i {
  font-size: 1.25rem;
  margin-right: 0.5rem;
  line-height: 1.2;
  color: #01af6a;
}

.about .watch-video i {
  font-size: 2rem;
  transition: 0.3s;
  color: #01af6a;
}


.about .watch-video a {
  font-weight: 600;
  color: #000; /* Assuming this is the replacement for the default color mix */
  margin-left: 8px;
  transition: 0.3s;
  text-decoration: none;
}

.about .watch-video:hover a {
  color: #01af6a; 
}

.about .about-img {
  min-height: 400px;
  position: relative;
}

@media (min-width: 992px) {
  .about .about-img {
    position: absolute;
    top: 0;
    right: 0;
    min-height: 600px;
  }
}

.about .about-img img {
  position: absolute;
  inset: 0;
  display: block;
  width: 100%;
  height: 650px;
  object-fit: cover;
  object-position: center;
  z-index: 1;
}

</style>

<section id="about" class="about section" style="margin-top: 120px;">

  <div class="container">
    <div class="row position-relative">
      <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="images/about/about_siva.heic" alt="About Sivagaminathan">
      </div>

      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
        <h2 class="inner-title">Sivagaminathan: Founder & Visionary Leader</h2>
        <div class="our-story">
          <h4>Passionate Educator & Industry Expert</h4>
          <h3>About Sivagaminathan</h3>
          <p>
            Sivagaminathan is the founder of Urbancode, with over a decade of expertise in software development, cloud computing, and secure web applications. His passion for teaching and mentoring has empowered hundreds of learners to transform their careers through practical, industry-aligned training.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>Expertise in MERN, MEAN, and full-stack development</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Committed to bridging the gap between academia and industry</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Dedicated mentor focused on personalized learner growth</span></li>
          </ul>
          <p>
            His vision of accessible, hands-on education led to the creation of Urbancode — a platform empowering aspiring professionals to reach their full potential.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!--<section id="about" class="about section mt-5">-->
<!--  <div class="container">-->
<!--    <div class="row position-relative">-->

      <!-- Left side: Interactive 3D Street View embed -->
<!--      <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">-->
<!--        <iframe-->
<!--          width="100%"-->
<!--          height="650"-->
<!--          frameborder="0"-->
<!--          style="border:0"-->
<!--          src="https://www.google.com/maps/embed?pb=!4v1685400000000!6m8!1m7!1sH-nP986DZMVv76X25mIGvw!2m2!1d13.035447!2d80.244107!3f213.5838!4f0!5f0.7820865974627469"-->
<!--          allowfullscreen-->
<!--          aria-hidden="false"-->
<!--          tabindex="0"-->
<!--          loading="lazy"-->
<!--        ></iframe>-->
<!--      </div>-->

      <!-- Right side: Content -->
<!--      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">-->
<!--        <h2 class="inner-title">Empowering Through Education</h2>-->
<!--        <div class="our-story">-->
<!--          <h4>Established 2021</h4>-->
<!--          <h3>Our Journey</h3>-->
<!--          <p>-->
<!--            Urbancode is dedicated to delivering industry-relevant training and professional development. We focus on practical skills and flexible learning to help individuals and businesses unlock their potential.-->
<!--          </p>-->
<!--          <ul>-->
<!--            <li><i class="bi bi-check-circle"></i> <span>Comprehensive programs across multiple technology domains</span></li>-->
<!--            <li><i class="bi bi-check-circle"></i> <span>Expert instructors with real-world experience</span></li>-->
<!--            <li><i class="bi bi-check-circle"></i> <span>Flexible learning options tailored to your schedule</span></li>-->
<!--          </ul>-->
<!--          <p>-->
<!--            Join Urbancode to accelerate your career growth and achieve your professional goals.-->
<!--          </p>-->

<!--          <div class="watch-video d-flex align-items-center position-relative">-->
<!--            <i class="bi bi-play-circle"></i>-->
<!--            <a href="https://www.youtube.com/watch?v=Vi8z_zD_Uo0" class="glightbox stretched-link">Watch Our Story</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->

<!--    </div>-->
<!--  </div>-->
<!--</section>-->



<!-- Stats Counter Section -->
 
<style>
  /*--------------------------------------------------------------
# Stats Counter Section
--------------------------------------------------------------*/
.stats-counter .stats-item {
  box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
  padding: 30px;
}

.stats-counter .stats-item i {
  color: #01af6a; /* Replace with the desired accent color */
  font-size: 42px;
  line-height: 0;
  margin-right: 20px;
}

.stats-counter .stats-item span {
  color: #01af6a; /* Replace with the desired heading color */
  font-size: 36px;
  display: block;
  font-weight: 600;
}

.stats-counter .stats-item p {
  padding: 0;
  margin: 0;
  font-family: "Roboto", sans-serif; /* Replace with the desired heading font */
  font-size: 16px;
}

</style>
<section id="stats-counter" class="stats-counter section">

        <header class="section-header">
          <h3>Stats</h3>
          <p>Find answers to common questions about Urbancode's courses and programs.</p>
        </header>

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-3 col-md-6">
      <div class="stats-item d-flex align-items-center w-100 h-100">
        <i class="bi bi-journal-bookmark color-blue flex-shrink-0"></i>
        <div>
          <span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="1" class="purecounter"></span>
          <p>Courses</p>
        </div>
      </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-md-6">
      <div class="stats-item d-flex align-items-center w-100 h-100">
        <i class="bi bi-person-check color-orange flex-shrink-0"></i>
        <div>
          <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
          <p>Trainers</p>
        </div>
      </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-md-6">
      <div class="stats-item d-flex align-items-center w-100 h-100">
        <i class="bi bi-person-circle color-green flex-shrink-0"></i>
        <div>
          <span data-purecounter-start="0" data-purecounter-end="800" data-purecounter-duration="1" class="purecounter"></span>
          <p>Students</p>
        </div>
      </div>
    </div><!-- End Stats Item -->

    <div class="col-lg-3 col-md-6">
      <div class="stats-item d-flex align-items-center w-100 h-100">
        <i class="bi bi-award-fill color-pink flex-shrink-0"></i>
        <div>
          <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
          <p>Placements</p>
        </div>
      </div>
    </div><!-- End Stats Item -->

  </div>

</div>

</section><!-- /Stats Counter Section -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new PureCounter();
  });
</script>


<style>
  /*--------------------------------------------------------------
# Alt Services 2 Section
--------------------------------------------------------------*/
.alt-services-2 {
  padding: 40px 30px;
}
.alt-services-2 .features-image {
  position: relative;
  min-height: 400px;
}

.alt-services-2 .features-image img {
  position: absolute;
  inset: 0;
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 1;
}

.alt-services-2 h3 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 20px;
}

.alt-services-2 .icon-box {
  margin-top: 30px;
}

.alt-services-2 .icon-box i {
  color: #01af6a;
  margin-right: 15px;
  font-size: 24px;
  line-height: 1.2;
}

.alt-services-2 .icon-box h4 {
  font-weight: 600;
  margin-bottom: 10px;
  font-size: 18px;
}

.alt-services-2 .icon-box p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

</style>

<section id="alt-services-2" class="alt-services-2 section">

  <div class="container">

    <div class="row justify-content-around gy-4">

      <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
        <h3>Expert Training and Instruction</h3>
        <p>At Urbancode, we specialize in providing top-notch training and instructional services. Our programs are designed to empower professionals and teams with the skills and knowledge they need to excel in their respective fields.</p>

        <div class="row">

          <div class="col-lg-6 icon-box d-flex">
            <i class="bi bi-person-check flex-shrink-0"></i>
            <div>
              <h4>Personalized Training</h4>
              <p>Receive customized training programs tailored to your specific needs and goals, ensuring maximum relevance and impact.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="col-lg-6 icon-box d-flex">
            <i class="bi bi-book flex-shrink-0"></i>
            <div>
              <h4>Comprehensive Courses</h4>
              <p>Our courses cover a wide range of topics, providing in-depth knowledge and practical skills that are applicable to real-world scenarios.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="col-lg-6 icon-box d-flex">
            <i class="bi bi-calendar-check flex-shrink-0"></i>
            <div>
              <h4>Flexible Scheduling</h4>
              <p>We offer flexible scheduling options to accommodate your busy calendar, ensuring that training fits seamlessly into your routine.</p>
            </div>
          </div><!-- End Icon Box -->

          <div class="col-lg-6 icon-box d-flex">
            <i class="bi bi-people flex-shrink-0"></i>
            <div>
              <h4>Group Workshops</h4>
              <p>Participate in interactive workshops designed for groups, fostering collaboration and collective learning experiences.</p>
            </div>
          </div><!-- End Icon Box -->

        </div>

      </div>

      <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
        <img src="images/about/trainer.jpg" alt="trainer">
      </div>

    </div>

  </div>

</section><!-- /Alt Services 2 Section

/*----------------------------------------
future team section update
------------------------------------------
<style>
  *--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
.testimonials .testimonial-item {
  background-color: white;
  box-shadow: 0px 0 20px rgba(0, 0, 0, 0.1);
  box-sizing: content-box;
  padding: 10px;
  margin: 20px 0px;
  min-height: 200px;
  display: flex;
  flex-direction: column;
  text-align: center;
  transition: 0.11s;
}

.testimonials .testimonial-item .stars {
  margin-bottom: 5px;
}

.testimonials .testimonial-item .stars i {
  color: #ffc107;
  margin: 0 1px;
}

.testimonials .testimonial-item .testimonial-img {
  width: 80%;
  border-radius: 5%;
  border: 4px solid white;
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 5px 0 5px 0;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: color-mix(in srgb, #3d4348, transparent 40%);
  margin: 0;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 auto 15px auto;
}

.testimonials .swiper-wrapper {
  height: auto;
}

.testimonials .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: color-mix(in srgb, #3d4348, transparent 85%);
  opacity: 1;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #01af6a;
}

.testimonials .swiper-slide {
  opacity: 0.8;
}

@media (max-width: 1199px) {
  .testimonials .swiper-slide-active {
    opacity: 1;
  }

  .testimonials .swiper-pagination {
    margin-top: 0;
  }

  .testimonials .testimonial-item {
    margin: 40px 20px;
  }
}

@media (min-width: 1200px) {
  .testimonials .swiper-slide-next {
    opacity: 1;
    transform: scale(1.12);
  }
}

    /* Custom styling for larger testimonial images */
    .testimonial-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 20px;
    }
    .testimonial-img {
      width: 100%; /* Make the image fill the container width */
      height: auto;
      max-height: 250px; /* Set a max-height to maintain image proportions */
      border-radius: 10px;
      object-fit: cover;
    }
    .testimonial-item h3, .testimonial-item h4 {
      margin: 10px 0;
    }
    /* Testimonial item container */
.testimonial-item {
  position: relative;
  cursor: pointer;
}
/* Make the testimonial item a container for the image and overlay */
.testimonial-item {
  position: relative;
  text-align: center;
}

/* Style the testimonial image */
.testimonial-img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  transition: 0.3s ease;  /* Transition for hover effect */
}

/* Social media icons container, hidden by default */
.social-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 15px;
  background-color: rgba(0, 0, 0, 0.5); /* Transparent black background */
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease;
  border-radius: 10px; /* Matches the image's rounded corners */
}

/* Style each social icon */
.social-icon {
  color: #ffffff;
  font-size: 30px; /* Size of the icons */
  transition: color 0.3s ease;
}

/* Hover effect on social icons */
.social-icon:hover {
  color: #01af6a;  /* Change color on hover */
}

/* Show the overlay when hovering over the testimonial item */
.testimonial-item:hover .social-overlay {
  opacity: 1;
  visibility: visible;
}
.testimonial-item {
  position: relative;
  overflow: hidden;
  text-align: center;
}

.testimonial-img {
  width: 100%;
  border-radius: 10px;
}

.social-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  background: rgba(0, 0, 0, 0.6);
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease, visibility 0.3s ease;
  border-radius: 10px;
}

.testimonial-item:hover .social-overlay {
  opacity: 1;
  visibility: visible;
}

.social-icon {
  color: white;
  font-size: 24px;
  transition: color 0.3s ease;
}

.social-icon:hover {
  color: #01af6a;
}
*/

  </style>-->
  <!--
/*----------------------------------------
future team section update
------------------------------------------

<!-- Testimonials Section 
<section id="testimonials" class="testimonials section light-background">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper init-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="images\about\p3.jpeg" class="testimonial-img" alt="">
            <div class="social-overlay">
              <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
            </div>
            <h3>Krithika Vaidhya</h3>
            <h4>Head Overseas Education</h4>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="images\about\p1.jpeg" class="testimonial-img" alt="">
            <div class="social-overlay">
              <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
            </div>
            <h3>Krithika Varshini</h3>
            <h4>Head Language &amp; kids Lab</h4>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="images\about\p3.jpeg" class="testimonial-img" alt="">
            <div class="social-overlay">
              <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
            </div>
            <h3>Krithika Vaidhya</h3>
            <h4>Head Overseas Education</h4>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="images\about\p2.jpeg" class="testimonial-img" alt="">
            <div class="social-overlay">
              <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
            </div>
            <h3>Sivagaminathan</h3>
            <h4>Ceo &amp; Founder </h4>
          </div>
        </div>
        <!-- Repeat testimonial items as needed 
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<!-- Swiper CSS
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Swiper JS
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.init-swiper', {
      loop: true,
      speed: 600,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      slidesPerView: 2, // Display two persons per view
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 30,
        }
      }
    });
  });
</script>

/*----------------------------------------
future team section update
------------------------------------------*/
<!-- Team Section -->

<style>
  /*--------------------------------------------------------------
# Team Section
--------------------------------------------------------------*/
.team .member {
  position: relative;
}

.team .member .member-img {
  margin: 0 80px;
  border-radius: 50%;
  overflow: hidden;
  position: relative;
}

@media (max-width: 1024px) {
  .team .member .member-img {
    margin: 0 60px;
  }
}

.team .member .member-img img {
  position: relative;
  z-index: 1;
}

.team .member .member-img .social {
  position: absolute;
  inset: 0;
  background-color: rgba(0, 0, 0, 0.6);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 2;
  padding-bottom: 20px;
  transition: 0.3s;
  visibility: hidden;
  opacity: 0;
}

.team .member .member-img .social a {
  transition: 0.3s;
  color: #ffffff; 
  font-size: 20px;
  margin: 0 8px;
}

.team .member .member-img .social a:hover {
  color: #01af6a; 
}

.team .member .member-info {
  margin-top: 30px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 6px;
  font-size: 18px;
}

.team .member .member-info span {
  font-style: italic;
  display: block;
  font-size: 15px;
  color: #9c9c9c; 
  margin-bottom: 10px;
}

.team .member .member-info p {
  margin-bottom: 0;
  font-size: 14px;
}

.team .member:hover .member-img .social {
  padding-bottom: 0;
  visibility: visible;
  opacity: 1;
}

</style>
<!-- <section id="team" class="team section">

<header class="section-header">
  <h3>Meet Our Team</h3>
  <p>Committed to rendering services with excellence.</p>
</header>

<div class="container" >

  <div class="row gy-4 justify-content-center">

    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="member">
        <img src="images\about\p1.jpeg" class="img-fluid" alt="">
        <div class="member-info">
          <div class="member-info-content">
          <h4>Krithika Varshini</h4>
          <span>Head Language & kids Lab</span>
          </div>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div> -->
    
    
    <!-- End Team Member -->

    <!-- <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="member">
        <img src="images\about\p2.jpeg" class="img-fluid" alt="">
        <div class="member-info">
          <div class="member-info-content">
          <h4>Sivagaminathan</h4>
          <span>Founder/CEO</span>
          </div>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- End Team Member -->


    <!-- <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="member">
        <img src="images\about\p3.jpeg" class="img-fluid" alt="">
        <div class="member-info">
          <div class="member-info-content">
          <h4>Krithika Vaidhya</h4>
          <span>Head Overseas Education</span>
          </div>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- End Team Member -->

  <!-- </div>

</div>

</section> -->

<!-- /Team Section -->


  <!-- ======= Contact Section ======= -
  <section id="contact" class="contact py-3 py-md-4">
      <div class="container">-->

      <style>
            /*--------------------------------------------------------------
# Team Section
--------------------------------------------------------------*/
.team {
  --default-color: #ffffff;
}

.team .section-title {
  color: var(--heading-color);
}

.team .member {
  border-radius: 10px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.team .member .member-info {
  opacity: 0;
  position: absolute;
  inset: 0;
  transition: 0.2s;
}

.team .member .member-info-content {
  position: absolute;
  left: 50px;
  right: 0;
  bottom: 0;
  transition: bottom 0.4s;
}

.team .member .member-info-content h4 {
  color: white;
  font-weight: 700;
  margin-bottom: 2px;
  font-size: 18px;
}

.team .member .member-info-content span {
  
  display: block;
  font-size: 13px;
}

.team .member .social {
  position: absolute;
  left: -50px;
  top: 0;
  bottom: 0;
  width: 50px;
  transition: left ease-in-out 0.3s;
  background: rgba(0, 0, 0, 0.6);
  text-align: center;
}

.team .member .social a {
  transition: color 0.3s;
  display: block;
  color: var(--default-color);
  margin-top: 15px;
}

.team .member .social a:hover {
  color: rgb(22, 172, 164);
}

.team .member .social i {
  font-size: 18px;
  margin: 0 2px;
}

.team .member:hover .member-info {
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.8) 20%, rgba(255, 255, 255, 0) 100%);
  opacity: 1;
  transition: 0.4s;
}

.team .member:hover .member-info-content {
  bottom: 30px;
  transition: bottom 0.4s;
}

.team .member:hover .social {
  left: 0;
  transition: left ease-in-out 0.3s;
}
        /*--------------------------------------------------------------
# Contact
--------------------------------------------------------------
.contact .info {
  width: 100%;
  background: #fff;
}

.contact .info i {
  font-size: 20px;
  background: #01af6a;
  color: #fff;
  float: left;
  width: 44px;
  height: 44px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 4px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #151515;
}

.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #484848;
}

.contact .info .email,
.contact .info .phone {
  margin-top: 40px;
}

.contact .php-email-form {
  width: 100%;
  background: #fff;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 4px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
  border-color: #01af6a;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: #01af6a;
  border: 0;
  padding: 10px 24px;
  color: #ffffff;
  font-size: bold;
  transition: 0.4s;
  border-radius: 4px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #01af6a;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
} */

<style>
    .contact-section {
        background-color: #f5f7fa;
        padding: 50px 0;
    }
    .contact-box {
        padding: 20px;
        border-radius: 8px;
        background-color: #f1fcf8; /* Updated form background color */
        margin-bottom: 20px;
        height: 100%; /* Ensures both boxes maintain equal height */
    }
    .map-box {
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        background-color: #f5f7fa;
    }
    .map-box iframe {
        height: 100%; /* Ensures the iframe uses the full height of the container */
    }
    .contact-info {
        color: #01af6a; /* Icon color */
    }
    .btn-primary {
        background-color: #01af6a; /* Button color */
        border-color: #01af6a;
    }
    .btn-primary:hover {
        background-color: #019d60; /* Darker shade for hover effect */
        border-color: #019d60;
    }
    /* Adjustments for smaller screens */
    @media (max-width: 767.98px) {
        .contact-section {
            padding: 30px 15px;
        }
        .contact-box, .map-box {
            height: auto; /* Allows flexibility for smaller screens */
        }
    }
</style>

<section class="contact-section">
  <header class="section-header" style="margin-top:20px margin-bottom:20px">
    <h3>Contact</h3>
    <p>Contact Us</p>
  </header>
  <div class="container">

    <div class="row g-3">
      <!-- Contact Form -->
      <div class="col-md-6 d-flex">
        <div class="contact-box w-100">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Message</button>
          </form>
        </div>
      </div>

      <!-- Google Maps for 2 Branches -->
      <div class="col-md-6 d-flex flex-column gap-4">
        <!-- Branch 1 -->
        <div class="map-box w-100" style="height: 300px;">
          <h5 class="mb-2">Urbancode Branch 1 - Pallikaranai</h5>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.46718187896!2d80.20756157409521!3d12.941929887370751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4459863a4cda389d%3A0x886df1337be63502!2sUrbancode%20Training%20and%20Solutions!5e0!3m2!1sen!2sin!4v1716888945389!5m2!1sen!2sin"
            title="Urbancode Pallikaranai Branch" style="border: 0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Branch 2 -->
        <div class="map-box w-100" style="height: 300px;">
          <h5 class="mb-2">Urbancode Branch 2 - Velachery</h5>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6991458950947!2d80.21744877484173!3d12.991084487326082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525dba278c06f7%3A0x88aba962bd4daa3a!2sGoStudy!5e0!3m2!1sen!2sin!4v1748695344747!5m2!1sen!2sin"
            title="Urbancode velachery" style="border: 0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <!-- Contact Information -->
    <div class="row text-center mt-4">
      <div class="col-6 col-md-3">
        <p><i class="bi bi-building contact-info"></i><br>Company: Urbancode Edutech Solutions Private Limited</p>
      </div>
      <div class="col-6 col-md-3">
        <p><i class="bi bi-geo-alt-fill contact-info"></i><br>Location: 9/29, 5th St, Kamakoti Nagar, Pallikaranai, Chennai, Tamil Nadu 600100</p>
      </div>
      <div class="col-6 col-md-3">
        <p><i class="bi bi-envelope-fill contact-info"></i><br>Email: admin@urbancode.in</p>
      </div>
      <div class="col-6 col-md-3">
        <p><i class="bi bi-telephone-fill contact-info"></i><br>Call: +91 9878798797</p>
      </div>
    </div>

  </div>
</section>



<?php include 'inc/footer.php';?>
