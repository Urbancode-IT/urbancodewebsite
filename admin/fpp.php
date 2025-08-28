<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<style>
    
    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
.hero {
  width: 100%;
  min-height: 70vh;
  position: relative;
  padding: 120px 0 120px 0;
  display: flex;
  align-items: center;
  background:#BDEECC;
}

.hero .hero-bg {
  position: absolute;
  inset: 0;
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero:before {
  content: "";
  background: rgba(255, 255, 255, 0.1); /* color-mix equivalent */
  position: absolute;
  inset: 0;
}

.hero .container {
  position: relative;
}

.hero h1 {
  margin: 0 0 20px 0;
  font-size: 3rem;
  font-weight: 800;
  line-height: 60px;
  font-family:"Poppins", sans-serif;
  color: #273f52; /* color-mix equivalent */
}

.hero h1 span {
  color: #03B152; /* heading color */
  border-bottom: 4px solid #1acc8d; /* accent color */
}

.hero p {
  color: #273f52; /* color-mix equivalent */
  margin: 5px 0 30px 0;
  font-family:"Poppins", sans-serif;
  font-size: 22px;
  font-weight: 600;
}

.hero .btn-get-started {
  color: #ffffff; /* contrast color */
  background: #1acc8d; /* accent color */
  font-family: "Raleway", sans-serif; /* heading font */
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 15px;
  border-radius: 50px;
  transition: 0.5s;
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
}

.hero .btn-get-started:hover {
  color: #ffffff; /* contrast color */
  background: rgba(26, 204, 141, 0.85); /* color-mix equivalent */
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
}

.hero .btn-watch-video {
  font-size: 16px;
  transition: 0.5s;
  margin-left: 25px;
  color: #444444; /* default color */
  font-weight: 600;
  text-decoration: none;
}

.hero .btn-watch-video i {
  color: #1acc8d; /* accent color */
  font-size: 32px;
  transition: 0.3s;
  line-height: 0;
  margin-right: 8px;
}

.hero .btn-watch-video:hover {
  color: #1acc8d; /* accent color */
}

.hero .btn-watch-video:hover i {
  color: rgba(26, 204, 141, 0.85); /* color-mix equivalent */
}

.hero .animated {
  height:100%;  
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
}

@media (max-width: 640px) {
  .hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  .hero p {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }

  .hero .btn-get-started,
  .hero .btn-watch-video {
    font-size: 13px;
  }
}

.hero .hero-waves {
  display: block;
  width: 100%;
  height: 60px;
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
}

.hero .wave1 use {
  animation: move-forever1 10s linear infinite;
  animation-delay: -2s;
  fill: #00d976cf; /* default color */
  opacity: 0.6;
}

.hero .wave2 use {
  animation: move-forever2 8s linear infinite;
  animation-delay: -2s;
  fill: #00d976cf; /* default color */
  opacity: 0.4;
}

.hero .wave3 use {
  animation: move-forever3 6s linear infinite;
  animation-delay: -2s;
  fill: #00d976cf; /* default color */
}

@keyframes move-forever1 {
  0% {
    transform: translate(85px, 0%);
  }

  100% {
    transform: translate(-90px, 0%);
  }
}

@keyframes move-forever2 {
  0% {
    transform: translate(-90px, 0%);
  }

  100% {
    transform: translate(85px, 0%);
  }
}

@keyframes move-forever3 {
  0% {
    transform: translate(-90px, 0%);
  }

  100% {
    transform: translate(85px, 0%);
  }
}

@keyframes up-down {
  0% {
    transform: translateY(10px);
  }

  100% {
    transform: translateY(-10px);
  }
}

/* Additional CSS for New Section */
.course-info-section {
    background-color: #f8f9fa;
    border-radius: 10px;
    padding: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.course-detail {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    margin-bottom: 15px;
}

.course-detail i {
    font-size: 24px;
    margin-right: 10px;
    color: #1acc8d;
}

.course-detail .fg {
    font-size: 14px;
    font-weight: 700;
    color: #273f52;
}

.course-detail .badge {
    font-size: 0.8rem;
}

.course-detail .text-muted {
    font-size: 0.8rem;
}

.course-detail .btn-primary {
  color: #ffffff; /* contrast color */
  background: #1acc8d; /* accent color */
  font-family: "Raleway", sans-serif; /* heading font */
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 5px 12px 6px 14px;
  border-radius: 50px;
  transition: 0.5s;
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
}

.course-detail .btn-primary:hover {
  olor: #ffffff; /* contrast color */
  background: rgba(26, 204, 141, 0.85); /* color-mix equivalent */
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .course-detail {
        flex-direction: column;
        text-align: center;
    }
    
    .course-detail .btn-primary {
        width: 100%;
        margin-top: 10px;
    }
    
    .course-detail .fg {
        font-size: 12px;
    }
}

@media (max-width: 576px) {
    .course-detail {
        flex-direction: column;
        text-align: center;
    }
    
    .course-detail .btn-primary {
        width: 100%;
        margin-top: 10px;
    }
    
    .course-detail .fg {
        font-size: 10px;
    }
    
    .course-info-section {
        padding: 10px;
    }
}


</style>


<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div class="container">
        <div class="row gy-4 justify-content-between">
            <div class="col-lg-6 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                <img src="/images/fpp/hero-bro.svg" class="img-fluid animated" alt="">
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
                <h1><span>Freshers </span>Placement Program</h1>
                <p>(Placement Oriented)</p>
                <div class="d-flex">
                    <a href="#enroll" class="btn-get-started">Enroll Now</a>
                    <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
        </div>

        <!-- New Section Below Hero -->
        <div class="row course-info-section mt-5">
            <div class="col-lg-2 col-md-4 col-6 course-detail">
                <div class="d-flex align-items-center">
                    <i class="bi bi-clock"></i>
                    <div>
                        <p class="mb-0 fg">OFFLINE</p>
                        <p class="mb-0 fg">3 months</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 course-detail">
                <div class="d-flex align-items-center">
                    <i class="bi bi-calendar"></i>
                    <div>
                        <p class="mb-0 fg">ADMISSION CLOSES ON</p>
                        <p class="mb-0 fg">30th Oct <span class="badge bg-warning text-dark">Limited seats</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 course-detail">
                <div class="d-flex align-items-center">
                    <i class="bi bi-currency-rupee"></i>
                    <div>
                        <p class="mb-0 fg">COURSE FEE</p>
                        <p class="mb-0 fg"><span class="text-decoration-line-through text-muted">₹60,000</span> ₹40,000 <span class="text-success">Save ₹20,000</span></p>
                        <p class="mb-0 fg"><span class="badge bg-warning text-dark">Valid till 30 Oct</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 course-detail">
                <div class="d-flex align-items-center">
                    <i class="bi bi-lightning-charge"></i>
                    <div>
                        <p class="mb-0 fg">PROJECT GUARANTEE</p>
                        <p class="mb-0 fg">100% support until project completion</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-12 course-detail">
                <a href="#enroll" class="btn btn-primary w-100">Enroll now</a>
                <p class="text-muted small text-center">15 already applied</p>
            </div>
        </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
    </svg>

</section><!-- /Hero Section -->




<style>
    /*--------------------------------------------------------------
# Featured Services Section
--------------------------------------------------------------*/
.featured-services {
  padding: 40px 0;
}

.featured-services .service-item {
  position: relative;
  padding-top: 20px;
}

.featured-services .service-item .icon {
  background-color: #BDEECC; /* color-mix equivalent */
  width: 72px;
  height: 72px;
  position: relative;
  margin-right: 15px;
  line-height: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: ease-in-out 0.3s;
}

.featured-services .service-item .icon i {
  color: #00d976cf; /* accent color */
  font-size: 32px;
  position: relative;
}

.featured-services .service-item .title {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  text-decoration: none;
}

.featured-services .service-item .title a {
  color: #3e5055; /* heading color */
  text-decoration: none;
}

.featured-services .service-item .title a:hover {
  color: #388da8; /* accent color */
}

.featured-services .service-item .description {
  font-size: 14px;
}

.featured-services .service-item:hover .icon {
  background-color: #00d976cf; /* accent color */
}

.featured-services .service-item:hover .icon i {
  color: #ffffff; /* contrast color */
}
</style>    
<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section light-background">

<div class="container">

  <div class="row gy-4">

    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <div class="service-item d-flex">
        <div class="icon flex-shrink-0"><i class="bi bi-person-lines-fill"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Freshers Placement Program</a></h4>
          <p class="description">A comprehensive program dedicated to helping fresh graduates land their first job in top companies.</p>
        </div>
      </div>
    </div>
    <!-- End Service Item -->

    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
      <div class="service-item d-flex">
        <div class="icon flex-shrink-0"><i class="bi bi-building"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Industry Connections</a></h4>
          <p class="description">Leverage our strong connections with leading industries to secure your first job.</p>
        </div>
      </div>
    </div><!-- End Service Item -->

    <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
      <div class="service-item d-flex">
        <div class="icon flex-shrink-0"><i class="bi bi-award"></i></div>
        <div>
          <h4 class="title"><a href="#" class="stretched-link">Guaranteed Success</a></h4>
          <p class="description">Our program is designed to ensure success, with a high placement rate for fresh graduates.</p>
        </div>
      </div>
    </div><!-- End Service Item -->

  </div>

</div>

</section><!-- /Featured Services Section -->

<style>
    /*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
.about {
  padding-bottom: 20px;
}

.about .content .who-we-are {
  text-transform: uppercase;
  margin-bottom: 15px;
  color: rgba(61, 67, 72, 0.6); /* color-mix equivalent */
}

.about .content h3 {
  font-size: 2rem;
  font-weight: 700;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding-bottom: 10px;
}

.about .content ul i {
  font-size: 1.25rem;
  margin-right: 4px;
  color: #00d976cf; /* accent color */
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .content .read-more {
  background: #BDEECC; /* accent color */
  color: #000000; /* contrast color */
  font-family: "Nunito", sans-serif; /* heading font */
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  padding: 12px 24px;
  border-radius: 5px;
  transition: 0.3s;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
}

.about .content .read-more i {
  font-size: 18px;
  margin-left: 5px;
  line-height: 0;
  transition: 0.3s;
}

.about .content .read-more:hover {
  background: #00d976cf; /* color-mix equivalent */
  padding-right: 19px;
}

.about .content .read-more:hover i {
  margin-left: 10px;
}

.about .about-images img {
  border-radius: 10px;
}

</style>
<!-- About Section -->
<section id="about" class="about section">

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
      <p class="who-we-are">Who We Are</p>
      <h3>Empowering Growth with Innovative Solutions</h3>
      <p class="fst-italic">
        At Urbancode, we are dedicated to helping businesses and individuals reach their full potential through creative and strategic approaches tailored to meet unique needs.
      </p>
      <ul>
        <li><i class="bi bi-check-circle"></i> <span>Custom solutions designed to drive success and achieve your goals.</span></li>
        <li><i class="bi bi-check-circle"></i> <span>Expert guidance and support every step of the way.</span></li>
        <li><i class="bi bi-check-circle"></i> <span>A commitment to innovation, ensuring you stay ahead in a competitive landscape.</span></li>
      </ul>
      <a href="#" class="read-more"><span>Learn More About Us</span><i class="bi bi-arrow-right"></i></a>
    </div>

    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
      <div class="row gy-4">
        <div class="col-lg-6">
          <img src="images/fpp/about-company-1.jpg" class="img-fluid" alt="Team Collaboration">
        </div>
        <div class="col-lg-6">
          <div class="row gy-4">
            <div class="col-lg-12">
              <img src="images/fpp/about-company-2.jpg" class="img-fluid" alt="Creative Strategy Session">
            </div>
            <div class="col-lg-12">
              <img src="images/fpp/about-company-3.jpg" class="img-fluid" alt="Innovative Solutions">
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
</section><!-- /About Section -->

<style>
  .upcoming-classes {
    padding: 60px 0;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.upcoming-classes .content-box {
    background: #BDEECC;
    padding: 40px;
    border-radius: 15px;
    color: #273f52;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    max-width: 100%;
    margin: 0 auto;
}

.upcoming-classes .content-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

.upcoming-classes h2 {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 20px;
    letter-spacing: 1px;
}

.upcoming-classes p {
    font-size: 18px;
    line-height: 1.6;
    font-weight: 600;
    margin-bottom: 30px;
}

.upcoming-classes .countdown {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 30px;
}

.upcoming-classes .enroll-button {
    background-color: #1acc8d;
    color: white;
    padding: 12px 25px;
    border-radius: 25px;
    font-size: 18px;
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s ease;
    display: inline-block;
}

.upcoming-classes .enroll-button:hover {
    background-color: rgba(26, 204, 141, 0.85);
    color: #fff;
}

@media (max-width: 768px) {
    .upcoming-classes .content-box {
        padding: 30px;
    }
}

</style>

<script>
  // Set the date we're counting down to
var countDownDate = new Date("Nov 15, 2024 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the time remaining until the countdown date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes, and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="countdown-timer"
  document.getElementById("countdown-timer").innerHTML = 
      days + " Days " + hours + " Hours " + minutes + " Minutes " + seconds + " Seconds ";

  // If the countdown is over, display "EXPIRED"
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown-timer").innerHTML = "EXPIRED";
  }
}, 1000);

</script>

<section id="upcoming-classes" class="upcoming-classes section">
  <div class="container">
    <div class="content-box">
      <h2>Upcoming Classes</h2>
      <p>Join our Fresher’s Program to gain hands-on experience with live projects and receive 100% career guidance. Our course is designed to turn you into an expert.</p>
      <div class="countdown">
        <p id="countdown-timer"></p>
      </div>
      <a href="#enroll" class="enroll-button">Join Meeting</a>
    </div>
  </div>
</section>

<style>
    /*--------------------------------------------------------------
# Features Details Section
--------------------------------------------------------------*/
.features-details .features-item+.features-item {
  margin-top: 10px;
}

.features-details .features-item .content {
  background-color: rgba(56, 141, 168, 0.05); /* color-mix equivalent */
  padding: 5px;
  border-radius: 10px;
}

.features-details .features-item h3 {
  font-weight: 700;
  font-size: 26px;
  margin-bottom: 15px;
  color: 111;
}

.features-details .features-item .more-btn {
  background-color: #388da8; /* accent color */
  color: #ffffff; /* contrast color */
  padding: 6px 30px;
  border-radius: 6px;
}

.features-details .features-item .more-btn:hover {
  background-color: rgba(56, 141, 168, 0.8); /* color-mix equivalent */
}

.features-details .features-item ul {
  list-style: none;
  padding: 0;
}

.features-details .features-item ul li {
  padding-bottom: 10px;
  display: flex;
  align-items: center;
  font-family:"Roboto", sans-serif;
  color: 111;
}

.features-details .features-item ul li:last-child {
  padding-bottom: 0;
}

.features-details .features-item ul i {
  font-size: 20px;
  margin-right: 10px;
  font-weight:bold;
  color: #388da8; /* accent color */
}

.features-details .features-item img {
  border-radius: 15px;
}

</style>

<!-- Features Details Section -->
<section id="features-details" class="features-details section">

  <div class="container">

    <!-- First Flow Item -->
    <div class="row gy-4 justify-content-between features-item">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="images/fpp/com-apti.svg" class="img-fluid rounded" alt="Communication & Aptitude">
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="text-uppercase">Communication & Aptitude</h3>
          <ul class="subtopics">
            <li><i class="bi bi-mic"></i> Public Speaking: Build confidence and engage effectively.</li>
            <li><i class="bi bi-pencil"></i> Vocabulary Building: Expand your word power.</li>
            <li><i class="bi bi-puzzle"></i> Logical Reasoning: Sharpen critical thinking.</li>
            <li><i class="bi bi-chat-dots"></i> Pronunciation & Fluency: Achieve clarity in speech.</li>
          </ul>
        </div>
      </div>

    </div><!-- Features Item -->

    <!-- Second Flow Item -->
    <div class="row gy-4 justify-content-between features-item">

      <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
        <div class="content">
          <h3 class="text-uppercase">Tech Fundamentals</h3>
          <ul class="subtopics">
            <li><i class="bi bi-code-slash"></i> Java & Python Basics: Core programming skills.</li>
            <li><i class="bi bi-table"></i> Excel: Essential functions & charts.</li>
            <li><i class="bi bi-database"></i> SQL & Database: Manage and query data.</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
        <img src="images/fpp/tech.svg" class="img-fluid rounded" alt="Tech Fundamentals">
      </div>

    </div><!-- Features Item -->

    <!-- Third Flow Item -->
    <div class="row gy-4 justify-content-between features-item">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="images/fpp/cv.svg" class="img-fluid rounded" alt="CV Build">
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="text-uppercase">CV Build</h3>
          <ul class="subtopics">
            <li><i class="bi bi-award"></i> Key Skills: Highlight your strengths.</li>
            <li><i class="bi bi-card-checklist"></i> Tailored CVs: Customize for industries.</li>
            <li><i class="bi bi-layout-text-sidebar"></i> Professional Layouts: Stand out with design.</li>
          </ul>
        </div>
      </div>

    </div><!-- Features Item -->

    <!-- Fourth Flow Item -->
    <div class="row gy-4 justify-content-between features-item">

      <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
        <div class="content">
          <h3 class="text-uppercase">Mock Interview</h3>
          <ul class="subtopics">
            <li><i class="bi bi-person-square"></i> Problem-Solving: Enhance your skills.</li>
            <li><i class="bi bi-clipboard-check"></i> Feedback: Improve with expert advice.</li>
            <li><i class="bi bi-question-circle"></i> HR Questions: Practice and perfect your responses.</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
        <img src="images/fpp/Interview.svg" class="img-fluid rounded" alt="Mock Interview">
      </div>

    </div><!-- Features Item -->

    <!-- Fifth Flow Item -->
    <div class="row gy-4 justify-content-between features-item">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="images/fpp/job.svg" class="img-fluid rounded" alt="Job Placement">
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="text-uppercase">Job Placement</h3>
          <ul class="subtopics">
            <li><i class="bi bi-briefcase"></i> Job Portals: Navigate and apply effectively.</li>
            <li><i class="bi bi-calendar-check"></i> Scheduling: Manage interview dates efficiently.</li>
            <li><i class="bi bi-envelope-open"></i> Communication: Engage with employers professionally.</li>
          </ul>
        </div>
      </div>

    </div><!-- Features Item -->

  </div>

</section><!-- /Features Details Section -->

<style>
.placement-program {
    padding: 60px 0;
    background-color: #f5fdfb;
}

.section-title {
    font-weight: bold;
    color: #03c041;
}

.section-title span {
    color: #007f4f;
}

.accordion-button {
    background-color: #fff;
    color: #333;
    border: 1px solid #ddd;
    font-weight: bold;
    box-shadow: none;
    transition: background-color 0.3s ease;
}

.accordion-button:not(.collapsed) {
    color: #03c041;
    background-color: #e6f7f5;
    border-color: #03c041;
}

.accordion-button:focus {
    box-shadow: none;
}

.accordion-body {
    background-color: #e6f7f5;
    padding: 15px;
    border: 1px solid #03c041;
    border-top: none;
}

.accordion-body ul {
    padding-left: 20px;
}

.accordion-body ul li {
    list-style-type: disc;
    margin-bottom: 5px;
}

.accordion-item {
    margin-bottom: 10px;
    border: none;
}

</style>

<section id="placement-program" class="placement-program section">
  <div class="container">
    <h2 class="text-center section-title"><span>3-Months</span> Placement Program:</h2>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="accordion" id="programLeft">
          <!-- Communication -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseOne" aria-expanded="true" aria-controls="leftCollapseOne">
                Communication (Weeks 1-2)
              </button>
            </h2>
            <div id="leftCollapseOne" class="accordion-collapse collapse show" aria-labelledby="leftHeadingOne" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>Week 1: Verbal and written communication skills.</li>
                  <li>Week 2: Presentation skills and business communication.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Aptitude -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseTwo" aria-expanded="false" aria-controls="leftCollapseTwo">
                Aptitude (Weeks 3-4)
              </button>
            </h2>
            <div id="leftCollapseTwo" class="accordion-collapse collapse" aria-labelledby="leftHeadingTwo" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>Week 3: Quantitative aptitude, logical reasoning.</li>
                  <li>Week 4: Verbal ability, data interpretation.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Python -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseThree" aria-expanded="false" aria-controls="leftCollapseThree">
                Python (Weeks 5-6)
              </button>
            </h2>
            <div id="leftCollapseThree" class="accordion-collapse collapse" aria-labelledby="leftHeadingThree" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>Week 5: Basics of Python, control structures, functions.</li>
                  <li>Week 6: Data structures, OOP concepts in Python.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Core Java -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseFour" aria-expanded="false" aria-controls="leftCollapseFour">
                Core Java (Weeks 7-8)
              </button>
            </h2>
            <div id="leftCollapseFour" class="accordion-collapse collapse" aria-labelledby="leftHeadingFour" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>Week 7: Java basics, OOP concepts.</li>
                  <li>Week 8: Java collections, exception handling.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="accordion" id="programRight">
          <!-- SQL -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseOne" aria-expanded="false" aria-controls="rightCollapseOne">
                SQL (Weeks 9-10)
              </button>
            </h2>
            <div id="rightCollapseOne" class="accordion-collapse collapse" aria-labelledby="rightHeadingOne" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Week 9: Introduction to SQL, basic CRUD operations.</li>
                  <li>Week 10: Advanced SQL queries, joins, and normalization.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Problem Solving (100 Problems) -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseTwo" aria-expanded="false" aria-controls="rightCollapseTwo">
                Problem Solving (Weeks 11-12)
              </button>
            </h2>
            <div id="rightCollapseTwo" class="accordion-collapse collapse" aria-labelledby="rightHeadingTwo" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Week 11: Array and string problems, recursion.</li>
                  <li>Week 12: Dynamic programming, backtracking.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- CV Building -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseThree" aria-expanded="false" aria-controls="rightCollapseThree">
                CV Building (Week 13)
              </button>
            </h2>
            <div id="rightCollapseThree" class="accordion-collapse collapse" aria-labelledby="rightHeadingThree" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Creating a professional resume and cover letter.</li>
                  <li>Optimizing LinkedIn profiles for job applications.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Mock Interview -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseFour" aria-expanded="false" aria-controls="rightCollapseFour">
                Mock Interview (Weeks 14-15)
              </button>
            </h2>
            <div id="rightCollapseFour" class="accordion-collapse collapse" aria-labelledby="rightHeadingFour" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Week 14: Technical interview preparation.</li>
                  <li>Week 15: HR and behavioral interviews.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Placement Assistance -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseFive" aria-expanded="false" aria-controls="rightCollapseFive">
                Placement Assistance (Week 16)
              </button>
            </h2>
            <div id="rightCollapseFive" class="accordion-collapse collapse" aria-labelledby="rightHeadingFive" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Week 16: Job application strategies and networking.</li>
                  <li>Participating in placement drives and job fairs.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .enroll {
    padding: 60px 0;
    background: linear-gradient(135deg, #e0f7fa 0%, #e0f2f1 100%);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.enroll h2 {
    font-size: 28px;
    font-weight: bold;
    color: #00796b;
    margin-bottom: 30px;
}

.enroll-form {
    background: #ffffff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.enroll-form .form-control {
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 12px 15px;
    box-shadow: none;
    margin-bottom: 20px;
    font-size: 16px;
    transition: all 0.3s ease;
}

.enroll-form .form-control:focus {
    border-color: #00796b;
    box-shadow: 0 0 8px rgba(0, 121, 107, 0.2);
}

.enroll-form .btn-submit {
    background: linear-gradient(135deg, #00796b 0%, #004d40 100%);
    color: #fff;
    border: none;
    padding: 12px 30px;
    border-radius: 50px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.enroll-form .btn-submit:hover {
    background: linear-gradient(135deg, #004d40 0%, #00796b 100%);
}

.enroll img {
    max-width: 100%;
    height: auto;
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

@media (max-width: 768px) {
    .enroll img {
        margin-top: 20px;
    }
}

</style>

<section id="enroll" class="enroll section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h2>Join the Freshers Placement Program: Kickstart Your Career Today!</h2>
        <form id="enrollForm" class="enroll-form" onsubmit="sendEmail(); return false;">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="phone">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="course">Course</label>
              <select class="form-control" id="course" name="course" required>
                <option selected>Freshers Placement Program</option>
                <!-- Add more options as needed -->
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="btn-submit">Submit</button>
        </form>
        <div id="formResult"></div>
      </div>
      <div class="col-lg-6 text-center">
        <img src="images/fpp/enroll.svg" alt="Enroll Image" class="img-fluid animated">
      </div>
    </div>
  </div>
</section>


<script>
  function sendEmail() {

    let params = {
        from_name: "UrbanCode",
        to_name: "Admin",
        reply_to: "admin@urbancode.in",
        message: `New enrollment details:
                  Name: ${document.getElementById('name').value}
                  Email: ${document.getElementById('email').value}
                  Phone: ${document.getElementById('phone').value}
                  Course: ${document.getElementById('course').value}
                  Message: ${document.getElementById('message').value}`,
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        course: document.getElementById('course').value,
        user_message: document.getElementById('message').value
    };

    emailjs.send('service_fzvsd7q', 'template_542hq8s', params)
        .then(function(response) {
           console.log('SUCCESS!', response.status, response.text);
           Swal.fire({
              icon: 'success',
              title: 'Thank you for enrolling!',
              text: 'We will contact you soon.',
              confirmButtonColor: '#01af6a',
              confirmButtonText: 'OK'
           });
        }, function(error) {
           console.log('FAILED...', error);
           Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Failed to send email. Please try again later.',
              confirmButtonColor: '#01af6a',
              confirmButtonText: 'OK'
           });
        });
  }
</script>



<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

  <style>
  /*--------------------------------------------------------------
  # Frequently Asked Questions
  --------------------------------------------------------------*/
  .faq {
    background-color: #f3f5fa; 
    padding: 60px 0;
  }
  .faq .faq-list {
      padding: 0 100px;
  }

  .faq .faq-list ul {
      padding: 0;
      list-style: none;
  }

  .faq .faq-list li+li {
      margin-top: 15px;
  }

  .faq .faq-list li {
      padding: 20px;
      background: #ffffff;
      border-radius: 8px;
      position: relative;
      border: 1px solid #ddd;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .faq .faq-list li:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .faq .faq-list a {
      display: block;
      position: relative;
      font-family: "Poppins", sans-serif;
      font-size: 18px;
      line-height: 24px;
      font-weight: 600;
      padding: 0 30px;
      outline: none;
      cursor: pointer;
      color: #333;
      text-decoration: none;
      transition: color 0.3s ease;
  }

  .faq .faq-list a:hover {
      color: #01af6a;
  }

  .faq .faq-list .icon-question {
      font-size: 24px;
      position: absolute;
      right: 0;
      left: 20px;
      color: #01af60;
      transition: color 0.3s ease;
  }

  .faq .faq-list a:hover .icon-question {
      color: #01af6a;
  }

  .faq .faq-list .icon-show, .faq .faq-list .icon-close {
      font-size: 24px;
      position: absolute;
      right: 0;
      top: 0;
      color: #333;
      transition: transform 0.3s ease, color 0.3s ease;
  }

  .faq .faq-list a:hover .icon-show, .faq .faq-list a:hover .icon-close {
      color: #01af6a;
      transform: rotate(180deg);
  }

  .faq .faq-list p {
      margin-bottom: 0;
      padding: 10px 0 0 0;
      font-family: "Roboto", sans-serif;
      font-size: 16px;
      line-height: 22px;
      color: #666;
      transition: color 0.3s ease;
  }

  .faq .faq-list a.collapsed {
      color: #37517e;
  }

  .faq .faq-list a.collapsed:hover {
      color: #01af6a;
  }

  .faq .faq-list a.collapsed .icon-show {
      display: inline-block;
  }

  .faq .faq-list a.collapsed .icon-close {
      display: none;
  }

  @media (max-width: 1200px) {
      .faq .faq-list {
          padding: 0;
      }
  }

  </style>

    <header class="section-header">
          <h3>FAQ</h3>
          <p>Find answers to common questions about Urbancode's Freshers Placement Program.</p>
    </header>

    <div class="faq-list">
      <ul>
        
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is the Freshers Placement Program at Urbancode?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              The Freshers Placement Program at Urbancode is a comprehensive training and placement initiative designed to equip fresh graduates with the skills and knowledge needed to excel in the job market. We provide extensive training in various domains followed by placement assistance.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What kind of training does the program include?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              The program includes training in key areas such as Python, Core Java, SQL, Problem Solving (100 problems), Communication, Aptitude, Mock Interviews, and more. The curriculum is designed to prepare candidates for real-world challenges and ensure they are job-ready.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Who is eligible to join the Freshers Placement Program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              The program is open to all fresh graduates and final-year students who are looking to enhance their employability and secure a job in their desired field. It is especially beneficial for those who want to gain practical skills and industry exposure.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What kind of placement support does Urbancode offer?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Urbancode offers comprehensive placement support, including resume building, interview preparation, and direct placement assistance. We work closely with a network of companies to help place our students in suitable job roles.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How can I enroll in the Freshers Placement Program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              You can enroll in the Freshers Placement Program by visiting our website, selecting the program, and following the enrollment instructions. Our support team is available to assist you with any queries.
            </p>
          </div>
        </li>

      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->



<?php include 'inc/footer.php';?>