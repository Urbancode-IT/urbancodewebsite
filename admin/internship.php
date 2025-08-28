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
  padding: 120px 0;
  display: flex;
  align-items: center;
  background: #E6FAEF;  /* Preserving original green background */
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
  background: rgba(255, 255, 255, 0.1);
  position: absolute;
  inset: 0;
}

.hero .container {
  position: relative;
  z-index: 1; /* Ensure content is above the pseudo-elements */
}

.hero h1 {
  margin: 0 0 20px 0;
  font-size: 3rem;
  font-weight: 800;
  line-height: 1.1;
  font-family: "Poppins", sans-serif;
  color: #273f52; /* Deep blue */
}

.hero h1 span {
  color: #03B152; /* Bright green for emphasis */
  border-bottom: 4px solid #1acc8d; /* Accent color under heading text */
}

.hero p {
  color: #273f52;
  margin: 5px 0 30px 0;
  font-family: "Poppins", sans-serif;
  font-size: 22px;
  font-weight: 600;
}

.hero .btn-get-started {
  color: #ffffff;
  background: #1acc8d; /* Accent green */
  font-family: "Raleway", sans-serif;
  font-weight: 400;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 15px;
  border-radius: 50px;
  transition: all 0.5s;
  box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
}

.hero .btn-get-started:hover {
  background: rgba(26, 204, 141, 0.85); /* Slightly lighter green on hover */
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
}

.hero .btn-watch-video {
  font-size: 16px;
  color: #444444; /* Grey for text */
  margin-left: 25px;
  text-decoration: none;
  transition: color 0.3s;
}

.hero .btn-watch-video i {
  color: #1acc8d; /* Consistent with button color */
  font-size: 32px;
  transition: color 0.3s;
}

.hero .btn-watch-video:hover,
.hero .btn-watch-video:hover i {
  color: #03B152; /* Bright green on hover */
}

.hero .animated {
  animation: up-down 2s ease-in-out infinite alternate-reverse;
}

@media (max-width: 640px) {
  .hero h1 {
    font-size: 24px; /* Smaller font size for mobile */
    line-height: 30px;
  }

  .hero p {
    font-size: 16px; /* Smaller font size for better readability on mobile */
  }

  .hero .btn-get-started,
  .hero .btn-watch-video {
    font-size: 13px; /* Smaller buttons on mobile */
    padding: 8px 20px; /* Adjusted padding for smaller screens */
  }
}

.hero .hero-waves {
  display: block;
  width: 100%;
  height: 60px;
  position: absolute;
  left: 0;
  bottom: 0;
}

.hero .wave1 use,
.hero .wave2 use,
.hero .wave3 use {
  fill: #00d976cf; /* Slightly transparent green for wave details */
  animation: move-forever 10s linear infinite;
}

@keyframes move-forever {
  0% { transform: translate3d(-90px, 0, 0); }
  100% { transform: translate3d(90px, 0, 0); }
}

@keyframes up-down {
  0% { transform: translateY(10px); }
  100% { transform: translateY(-10px); }
}

</style>


<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
  <div class="container">
    <div class="row gy-4 justify-content-between">
      <div class="col-lg-6 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
        <img src="images/internships/internship.svg" class="img-fluid animated" alt="Urbancode Internship">
      </div>
      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
        <h1><span>Internship Program</span> </h1>
        <p>Take Your Career to the Next Level – Join Our Exciting Internship Journey! 🌟</p>
        <ul>
          <li><strong>Real-World Projects 🧠</strong> – Work on live projects and gain hands-on experience in the tech industry.</li>
          <li><strong>Expert Mentorship 👨‍🏫</strong> – Learn from industry professionals and sharpen your technical & soft skills.</li>
          <li><strong>Career Growth 🚀</strong> – Build your resume, expand your network, and open doors to full-time opportunities.</li>
        </ul>

        <p><strong>Don't miss this opportunity to grow with Urbancode! 💼</strong></p>
      </div>
    </div>
  </div>

  <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
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
</section>






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
  background-color: #E6FAEF; /* color-mix equivalent */
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
      <!-- Real-Time Projects -->
      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-diagram-3-fill"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Real-Time Project Experience</a></h4>
            <p class="description">Gain hands-on experience by working on live projects that enhance your technical and problem-solving skills.</p>
          </div>
        </div>
      </div>
      <!-- Expert Mentorship -->
      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-person-video3"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Expert Mentorship</a></h4>
            <p class="description">Learn from experienced mentors who guide you through your learning journey and industry practices.</p>
          </div>
        </div>
      </div>
      <!-- Certification and Career Support -->
      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-patch-check-fill"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Certification & Career Support</a></h4>
            <p class="description">Receive an internship certificate, resume-building help, and job placement guidance to launch your career.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<!-- /Featured Services Section -->


<style>
    #internship-programs {
  padding: 60px 20px;
  background-color: #f8fdfb;
}

#internship-programs h2 {
  color: #123d3d;
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 40px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Card Styles */
#internship-programs .card {
  border: none;
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  background-color: #ffffff;
}

#internship-programs .card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
}

#internship-programs .card img {
  max-height: 200px;
  object-fit: contain;
  padding: 20px;
  background-color: #f3faff;
}

#internship-programs .card-title {
  font-size: 20px;
  font-weight: 700;
  margin-top: 15px;
  color: #1a3d4f;
}

#internship-programs .card-text {
  font-size: 15px;
  margin: 10px 0 20px;
  color: #555;
  min-height: 60px;
}

/* Apply Button */
#internship-programs .btn-primary {
  background-color: #1acc8d;
  border: none;
  border-radius: 25px;
  padding: 10px 25px;
  font-weight: 600;
  font-size: 15px;
  transition: background-color 0.3s ease;
}

#internship-programs .btn-primary:hover {
  background-color: #17b47c;
  color: #fff;
}

/* Responsive Grid Spacing */
@media (max-width: 768px) {
  #internship-programs .card {
    margin-bottom: 20px;
  }

  #internship-programs h2 {
    font-size: 26px;
  }
}

</style>



<section id="internship-programs" class="section">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">INTERNSHIPS WE OFFER!</h2>
    <div class="row gy-4 justify-content-center">
      
      <!-- Web Development -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/web.gif" class="card-img-top" alt="Web Development">
          <div class="card-body">
            <h5 class="card-title">Web Development</h5>
            <p class="card-text">Master HTML, CSS, JavaScript, and frameworks to build stunning websites.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- Android Development -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/app.gif" class="card-img-top" alt="Android Development">
          <div class="card-body">
            <h5 class="card-title">Android Development</h5>
            <p class="card-text">Build powerful mobile apps using Java, Kotlin, and Android Studio.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- Data Science -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/datascience.webp" class="card-img-top" alt="Data Science">
          <div class="card-body">
            <h5 class="card-title">Data Science</h5>
            <p class="card-text">Analyze data, build models, and uncover insights using Python and ML.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- Java Programming -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/java.avif" class="card-img-top" alt="Java Programming">
          <div class="card-body">
            <h5 class="card-title">Java Programming</h5>
            <p class="card-text">Develop robust backend apps with OOP principles and Java frameworks.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- C++ Programming -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/c++.avif" class="card-img-top" alt="C++ Programming">
          <div class="card-body">
            <h5 class="card-title">C++ Programming</h5>
            <p class="card-text">Learn C++ for system-level development, logic building, and problem solving.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- Python Programming -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/python.avif" class="card-img-top" alt="Python Programming">
          <div class="card-body">
            <h5 class="card-title">Python Programming</h5>
            <p class="card-text">Automate tasks, analyze data, and build web apps using Python.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- UI/UX Design -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/ui-ux.webp" class="card-img-top" alt="UI/UX Design">
          <div class="card-body">
            <h5 class="card-title">UI/UX Design</h5>
            <p class="card-text">Design user-friendly interfaces with Figma, Adobe XD, and usability testing.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- Artificial Intelligence -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/ai.webp" class="card-img-top" alt="Artificial Intelligence">
          <div class="card-body">
            <h5 class="card-title">Artificial Intelligence</h5>
            <p class="card-text">Dive into AI concepts like neural networks, NLP, and computer vision.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>
      
      <!-- Machine Learning -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/ml.gif" class="card-img-top" alt="Machine Learning">
          <div class="card-body">
            <h5 class="card-title">Machine Learning</h5>
            <p class="card-text">Explore supervised, unsupervised learning, and real-world ML models.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- Flutter Developer -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/flutter.webp" class="card-img-top" alt="Flutter Developer">
          <div class="card-body">
            <h5 class="card-title">Flutter Developer</h5>
            <p class="card-text">Create cross-platform mobile apps using Dart and the Flutter SDK.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- ReactJS Developer -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/reactjs.gif" class="card-img-top" alt="ReactJS Developer">
          <div class="card-body">
            <h5 class="card-title">ReactJS Developer</h5>
            <p class="card-text">Build dynamic UIs and SPAs using ReactJS and modern JavaScript.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>

      <!-- JavaScript Developer -->
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-3">
          <img src="images/internships/javascript.gif" class="card-img-top" alt="JavaScript Developer">
          <div class="card-body">
            <h5 class="card-title">JavaScript Developer</h5>
            <p class="card-text">Master the language of the web: DOM, events, ES6+, and backend JS.</p>
            <a href="#" class="btn btn-primary">Apply</a>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>







<!-- <section id="demo-video" class="demo-video section mb-5">
  <div class="container">
    <div class="content-box">
      <h2 class="text-center">Watch Our AWS Workshop Demo</h2>
      <p class="text-center">Get a sneak peek into our AWS Workshop by watching this demo.</p>
      <div class="video-wrapper">
        <iframe class="responsive-video" src="https://www.youtube.com/embed/9OvR2zrS4AQ?si=0X_8Vn-6SEbukHmA" 
          title="AWS Workshop Demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</section> -->

<!-- CSS for styling, borders, and responsiveness 


<style>
  .demo-video {
    background-color: #f8f9fa;
    padding: 50px 0;
    border-top: 5px solid #01af6a; /* Top border for section */
    border-bottom: 5px solid #01af6a; /* Bottom border for section */
  }

  .demo-video h2 {
    color: #333;
    font-size: 2rem;
    margin-bottom: 10px;
  }

  .demo-video p {
    color: #666;
    font-size: 1.2rem;
    margin-bottom: 30px;
  }

  /* Border for the video wrapper */
  .video-wrapper {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
    height: 0;
    overflow: hidden;
    max-width: 100%;
    background: #000;
    margin: 0 auto;
    border: 3px solid #01af6a; /* Border around video */
    border-radius: 10px; /* Rounded corners */
  }

  .video-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 10px; /* Ensures iframe follows border rounding */
  }

  /* Button styling with borders */
  .enroll-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1.1rem;
    background-color: #fff; /* White background for contrast */
    color: #01af6a; /* Text matches theme color */
    text-decoration: none;
    border: 2px solid #01af6a; /* Border around button */
    border-radius: 5px; /* Rounded button corners */
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  /* Hover effect for button */
  .enroll-button:hover {
    background-color: #01af6a; /* Hover background */
    color: #fff; /* Hover text color */
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .demo-video h2 {
      font-size: 1.6rem;
    }

    .demo-video p {
      font-size: 1rem;
    }

    .enroll-button {
      font-size: 1rem;
      padding: 8px 16px;
    }
  }
</style> -->

<style>
    /*--------------------------------------------------------------
# Features Details Section
--------------------------------------------------------------*/
.features-details .features-item+.features-item {
  margin: 20px 20px;
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
<section id="features-details" class="features-details section mb-5">
  <div class="container">

    <!-- First Feature Item -->
    <div class="row gy-4 justify-content-between features-item">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="images/internships/learning.svg" class="img-fluid rounded" alt="Real-World Learning">
      </div>
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="text-uppercase">Real-World Learning</h3>
          <ul class="subtopics">
            <li><i class="bi bi-laptop"></i> Hands-On Projects: Gain experience by working on real client-based tasks.</li>
            <li><i class="bi bi-lightbulb"></i> Practical Skills: Learn tools and technologies used by industry professionals.</li>
            <li><i class="bi bi-code-slash"></i> Coding & Collaboration: Write clean code and collaborate using Git & GitHub.</li>
          </ul>
        </div>
      </div>
    </div><!-- Features Item -->

    <!-- Second Feature Item -->
    <div class="row gy-4 justify-content-between features-item">
      <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
        <div class="content">
          <h3 class="text-uppercase">Mentorship & Guidance</h3>
          <ul class="subtopics">
            <li><i class="bi bi-person-badge"></i> Industry Mentors: Learn directly from experienced developers and trainers.</li>
            <li><i class="bi bi-chat-dots"></i> 1-on-1 Sessions: Get feedback, resolve doubts, and accelerate your growth.</li>
            <li><i class="bi bi-people"></i> Peer Support: Collaborate with fellow interns through group activities and tasks.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
        <img src="images/internships/mentership.svg" class="img-fluid rounded" alt="Mentorship and Guidance">
      </div>
    </div><!-- Features Item -->

    <!-- Third Feature Item -->
    <div class="row gy-4 justify-content-between features-item">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="images/internships/career.svg" class="img-fluid rounded" alt="Career Support and Certification">
      </div>
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="text-uppercase">Career Support & Certification</h3>
          <ul class="subtopics">
            <li><i class="bi bi-award"></i> Internship Certificate: Receive a recognized certificate to boost your resume.</li>
            <li><i class="bi bi-briefcase"></i> Placement Assistance: Get help with mock interviews, job referrals, and more.</li>
            <li><i class="bi bi-file-earmark-person"></i> Portfolio & Resume Building: Showcase your work to future employers.</li>
          </ul>
        </div>
      </div>
    </div><!-- Features Item -->

  </div>
</section>





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
</style>





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

<script>
  function sendEmail() {
    // Capture form data
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const course = document.getElementById('course').value;
    const message = document.getElementById('message').value.trim();

    // Construct EmailJS params
    const params = {
      from_name: "UrbanCode",
      to_name: "Admin",
      reply_to: "admin@urbancode.in",
      name: name,
      email: email,
      phone: phone,
      course: course,
      user_message: message,
      message: `New enrollment details:\n
                Name: ${name}\n
                Email: ${email}\n
                Phone: ${phone}\n
                Course: ${course}\n
                Message: ${message || 'N/A'}`
    };

    // Send email via EmailJS
    emailjs.send('service_fzvsd7q', 'template_542hq8s', params)
      .then(function (response) {
        console.log('SUCCESS!', response.status, response.text);

        // Show success alert
        Swal.fire({
          icon: 'success',
          title: 'Thank you for enrolling!',
          text: 'We will contact you soon.',
          confirmButtonColor: '#01af6a',
          confirmButtonText: 'OK'
        });

        // Track Meta Pixel conversion
        if (typeof fbq === 'function') {
          fbq('track', 'CompleteRegistration', {
            value: course,
            currency: 'INR'
          });
        }

        // Optional: Reset the form
        document.getElementById('enrollForm').reset();
      })
      .catch(function (error) {
        console.error('FAILED to send email...', error);

        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Failed to send your details. Please try again later.',
          confirmButtonColor: '#01af6a',
          confirmButtonText: 'OK'
        });
      });
  }
</script>


<!-- Enrollment Section -->
<section id="enroll" class="enroll section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <h2>Apply for Our <span style="color:#1acc8d;">Offline Internship Program</span> at Urbancode, Chennai!</h2>
        <p class="mb-4">
          Join our in-office internship and gain real-time experience working alongside industry experts. This program is perfect for students and freshers eager to grow through practical, face-to-face learning.
        </p>
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
              <label for="course">Internship Domain</label>
              <select class="form-control" id="course" name="course" required>
                <option disabled selected>Select a Domain</option>
                <option>Web Development</option>
                <option>Android Development</option>
                <option>Data Science</option>
                <option>Java Programming</option>
                <option>C++ Programming</option>
                <option>Python Programming</option>
                <option>UI/UX Design</option>
                <option>Artificial Intelligence</option>
                <option>Machine Learning</option>
                <option>Flutter Developer</option>
                <option>ReactJS Developer</option>
                <option>JavaScript Developer</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Any additional info or preferred timing (optional)"></textarea>
          </div>
          <button type="submit" class="btn-submit">Submit</button>
        </form>
        <div id="formResult"></div>
      </div>
      <div class="col-lg-6 text-center">
        <img src="images/internships/enroll.svg" alt="Offline Internship Enrollment" class="img-fluid animated">
      </div>
    </div>
  </div>
</section>






<style>
     <style>
  /*--------------------------------------------------------------
  # Frequently Asked Questions
  --------------------------------------------------------------*/
  .faq {
    background-color: #f3f5fa; 
    padding: 60px 0;
    margin-top:40px;
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

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg mt-5">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3>FAQ</h3>
      <p>Find answers to common questions about our Internship Program at Urbancode.</p>
    </header>

    <div class="faq-list">
      <ul>

        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is the Urbancode Internship Program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              The Urbancode Internship Program is a structured training opportunity designed for students and freshers to gain hands-on experience in real-time projects across various domains like Web Development, Data Science, UI/UX, and more.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What domains are available for internships?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              We offer internships in Web Development, Python, Java, Data Science, UI/UX Design, Android, Flutter, ReactJS, Machine Learning, and more. Each program is tailored to provide domain-specific training and project work.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Who can apply for the internship?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              The internship is ideal for college students, recent graduates, or anyone looking to gain real-time project experience. Basic knowledge in the chosen domain is recommended but not mandatory.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Will I receive a certificate and placement support?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Yes! All participants will receive a recognized internship certificate. We also offer resume building assistance, mock interviews, and guidance to prepare for placement opportunities.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How do I apply for the internship?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              You can apply by visiting our official website and selecting your preferred internship domain. Click “Apply” and fill out the form to complete your registration. Our team will reach out with further details.
            </p>
          </div>
        </li>

      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->






<?php include 'inc/footer.php';?>
