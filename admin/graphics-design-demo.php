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
  background: #BDEECC;  /* Preserving original green background */
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
<section id="hero" class="hero section light-background">
    <div class="container">
        <div class="row gy-4 justify-content-between">
            <div class="col-lg-6 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                <img src="images/g-d-demo/learning.svg" class="img-fluid animated" alt="Interactive Demo Class">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
                <h1><span>Interactive</span> Demo Class</h1>
                <p>Experience hands-on learning with our free, interactive demo class! 🚀</p>
                <ul>
                    <li><strong>Engaging Learning Experience 🎓</strong> – Dive into real-world examples and live activities.</li>
                    <li><strong>Expert Guidance 📘</strong> – Learn directly from industry professionals.</li>
                    <li><strong>Q&A Session 🔎</strong> – Get all your queries answered during the session.</li>
                </ul>
                
                <p><strong>Don't miss this opportunity to kickstart your learning journey! 🌟</strong></p>
                <div class="d-flex">
                    <a href="#register" class="btn-get-started">Join Now</a>
                    <a href="#" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Preview</span></a>
                </div>
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
      <!-- Fundamentals of Graphic Design -->
      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-vector-pen"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Fundamentals of Graphic Design</a></h4>
            <p class="description">Learn the core principles of graphic design, including layout, color theory, typography, and composition.</p>
          </div>
        </div>
      </div>
      <!-- Creative Software Tools -->
      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-laptop"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Creative Software Tools</a></h4>
            <p class="description">Get hands-on experience with industry-standard software like Adobe Photoshop, Illustrator, and Figma.</p>
          </div>
        </div>
      </div>
      <!-- Live Design Projects -->
      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-easel"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Live Design Projects</a></h4>
            <p class="description">Work on real-time design challenges to apply your skills and create stunning visuals for your portfolio.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- /Featured Services Section -->


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
// Set the countdown start time to 5:00 PM on Feb 16, 2025
var countDownDate = new Date("Feb 16, 2025 17:00:00").getTime();
// Set 24 hours after the event starts
var endTime = countDownDate + (24 * 60 * 60 * 1000); // 24 hours in milliseconds

// Update the countdown every 1 second
var x = setInterval(function() {

  // Get the current time
  var now = new Date().getTime();
  
  // Calculate the time remaining until the countdown date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes, and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the countdown timer
  if (distance >= 0) {
    document.getElementById("countdown-timer").innerHTML = 
      days + " Days " + hours + " Hours " + minutes + " Minutes " + seconds + " Seconds ";
  }

  // If the Workshop is starting soon (within 1 hour)
  if (distance <= 3600000 && distance > 0) {
    document.getElementById("countdown-timer").innerHTML = 
      "⏰ WDemostarting soon! " + hours + " Hours " + minutes + " Minutes " + seconds + " Seconds";
  }

  // If the countdown is over, the Workshop has started
  if (distance < 0 && now <= endTime) {
    document.getElementById("countdown-timer").innerHTML = 
      "🚀 Demo class in Progress! You can still join the session!";
  }

  // If the event has passed the 24-hour mark, show expired
  if (now > endTime) {
    document.getElementById("countdown-timer").innerHTML = "EXPIRED";
    clearInterval(x);
  }

  // Check if the user clicks "Join Now"
  document.querySelector('.enroll-button').onclick = function() {
    var timeToEvent = countDownDate - new Date().getTime(); // Calculate remaining time to event
    var timeAfterEvent = new Date().getTime() - countDownDate; // Time passed since event start

    if (timeToEvent <= 3600000 && timeToEvent >= 0) {
      // If within 1 hour and not started yet
      var message = `<a href="https://meet.google.com/gbg-bjmz-ueo" class="btn btn-success" target="_blank">Join Now</a>`;
      Swal.fire({
        title: 'Workshop Starting Soon!',
        html: message,
        icon: 'success',
        confirmButtonColor: '#3085d6',
      });
    } else if (timeToEvent < 0 && timeAfterEvent <= (24 * 60 * 60 * 1000)) {
      // If the event has started but still within 24 hours
      var message = `<a href="https://meet.google.com/gbg-bjmz-ueo" target="_blank" class="btn btn-success">Join Now</a>`;
      Swal.fire({
        title: 'Workshop in Progress!',
        html: message,
        icon: 'success',
        confirmButtonColor: '#3085d6',
      });
    } else if (timeAfterEvent > (24 * 60 * 60 * 1000)) {
      // If the event has ended and it's past 24 hours
      Swal.fire({
        title: 'Event Concluded!',
        text: 'This Demo class session has ended. Please check for future Demo class schedules.',
        icon: 'info',
      });
    } else {
      // If more than 1 hour to the event start
      var hoursRemaining = Math.floor(timeToEvent / (1000 * 60 * 60));
      var minutesRemaining = Math.floor((timeToEvent % (1000 * 60 * 60)) / (1000 * 60));
      var secondsRemaining = Math.floor((timeToEvent % (1000 * 60)) / 1000);
      var remainingMessage = `${hoursRemaining}h ${minutesRemaining}m ${secondsRemaining}s remaining`;

      Swal.fire({
        title: 'Not Yet!',
        html: `<p>This event starts on <strong>${new Date(countDownDate).toLocaleString()}</strong>.</p>
               <p>Please come back later.</p>
               <p>We'll notify you when it's time to join the demo class.</p>
               <p>${remainingMessage}</p>`,
        icon: 'info',
        confirmButtonColor: '#3085d6',
        focusConfirm: false,
        preConfirm: () => {
          window.location.href = '#enroll';
        }
      });
    }
  };

}, 1000);
</script>


<section id="upcoming-classes" class="upcoming-classes section mb-5">
  <div class="container">
    <div class="content-box">
      <h2>Graphic Design Demo Class</h2>

      <p><strong>Date:</strong> Feb 16, 2025 <strong>Time:</strong> 5:00 PM to 6:00 PM</p>
      <p><strong>Location:</strong> Live Interactive Session</p>

      <p id="countdown-timer"></p>

      <a class="enroll-button" href="#join-class">Join Meeting</a>
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
        <img src="images/g-d-demo/design-principles.svg" class="img-fluid rounded" alt="Design Principles">
      </div>
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="text-uppercase">Core Design Principles</h3>
          <ul class="subtopics">
            <li><i class="bi bi-brush"></i> Composition & Layout: Master the art of organizing elements visually.</li>
            <li><i class="bi bi-palette"></i> Color Theory: Learn how to use colors effectively to create harmony.</li>
            <li><i class="bi bi-type"></i> Typography Basics: Explore font pairing and readability techniques.</li>
          </ul>
        </div>
      </div>
    </div><!-- Features Item -->

    <!-- Second Feature Item -->
    <div class="row gy-4 justify-content-between features-item">
      <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
        <div class="content">
          <h3 class="text-uppercase">Creative Software Skills</h3>
          <ul class="subtopics">
            <li><i class="bi bi-vector-pen"></i> Adobe Illustrator: Create stunning vector graphics and illustrations.</li>
            <li><i class="bi bi-layers"></i> Photoshop Basics: Master photo editing and manipulation techniques.</li>
            <li><i class="bi bi-layout-text-sidebar"></i> Figma Essentials: Design user interfaces and collaborate in real time.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
        <img src="images/g-d-demo/software-tools.svg" class="img-fluid rounded" alt="Creative Software Skills">
      </div>
    </div><!-- Features Item -->

    <!-- Third Feature Item -->
    <div class="row gy-4 justify-content-between features-item">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="images/g-d-demo/live-projects.svg" class="img-fluid rounded" alt="Live Design Projects">
      </div>
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="text-uppercase">Live Design Projects</h3>
          <ul class="subtopics">
            <li><i class="bi bi-easel"></i> Hands-On Challenges: Work on real-world design problems.</li>
            <li><i class="bi bi-folder"></i> Portfolio Building: Create stunning visuals to showcase your skills.</li>
            <li><i class="bi bi-chat-square-dots"></i> Feedback & Review: Receive constructive feedback from industry experts.</li>
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

           // Trigger Meta Pixel tracking upon successful form submission
           fbq('track', 'CompleteRegistration', {
              value: document.getElementById('course').value,
              currency: 'INR'
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

<!-- Enrollment Section -->
<section id="enroll" class="enroll section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>Join Our Interactive Graphic Design Demo Class: Unleash Your Creativity!</h2>
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
                            <label for="course">Class</label>
                            <select class="form-control" id="course" name="course" required>
                                <option selected>Graphic Design Demo Class</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Any questions or preferences? (optional)"></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Enroll Now</button>
                </form>
                <div id="formResult"></div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="images/g-d-demo/enroll.svg" alt="Graphic Design Enrollment" class="img-fluid animated">
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
      <p>Find answers to common questions about our Graphic Design Demo Class.</p>
    </header>

    <div class="faq-list">
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is the Graphic Design Demo Class?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              Our Graphic Design Demo Class is a free, interactive session aimed at introducing you to the fundamentals of design, tools like Photoshop and Illustrator, and live project workflows. It's perfect for beginners and aspiring designers.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What can I expect to learn in this demo class?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              You will learn the basics of graphic design, including design principles, color theory, typography, and hands-on training in tools like Adobe Photoshop and Illustrator. The session also includes practical exercises and a live Q&A.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Who should attend the Graphic Design Demo Class?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              This demo class is ideal for beginners, students, or anyone interested in exploring a career in graphic design. No prior experience is necessary—just bring your enthusiasm to learn and create!
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How will this demo class benefit me?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              This demo class provides hands-on experience with essential graphic design tools and techniques. You’ll gain practical skills, learn from experts, and get a glimpse into real-world design workflows—all for free!
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How can I register for the Graphic Design Demo Class?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              You can register for the Graphic Design Demo Class by visiting our website, navigating to the demo class section, and completing the registration form. Seats are limited, so register early to secure your spot.
            </p>
          </div>
        </li>
      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->




<?php include 'inc/footer.php';?>
