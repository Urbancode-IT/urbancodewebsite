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
<section id="hero" class="hero section dark-background">
    <div class="container">
        <div class="row gy-4 justify-content-between">
            <div class="col-lg-6 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="/images/html-css-bootcamp/html-css.png" class="img-fluid animated" alt="HTML & CSS Bootcamp">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-in">
                <h1><span>Master HTML & CSS</span> in 7 Days!</h1>
                <p>Exclusive Bootcamp for Beginners & Aspiring Developers</p>                
                <ul>
                    <li><strong>Weekend Batches Available 🗓️</strong> – Learn at your convenience.</li>
                    <li><strong>Live Sessions with Experts 🎓</strong> – Gain insights from industry professionals.</li>
                    <li><strong>Certificate of Completion 🏆</strong> – Showcase your skills to employers.</li>
                    <li><strong>Hands-On Projects 💻</strong> – Build real-world responsive web pages.</li>
                </ul>
                
                <p><strong>Special Feature: Classes Available in தமிழ்</strong> 🇮🇳</p>
                
                <p class="pricing"><strong>Register Now for</strong> <del>₹1,999</del> <span class="discounted-price">₹199</span></p>

                <div class="d-flex">
                    <a href="#enroll" class="btn-get-started">Enroll Now</a>
                    <a href="#" class="glightbox btn-watch-video d-flex align-items-center">
                        <i class="bi bi-play-circle"></i><span>Watch</span>
                    </a>
                </div>
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
      <!-- Hands-On Learning -->
      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-code-slash"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Hands-On Learning</a></h4>
            <p class="description">Master HTML & CSS with practical projects, real-world exercises, and interactive coding challenges.</p>
          </div>
        </div>
      </div>
      <!-- Expert Mentorship -->
      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-person-badge"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Expert Mentorship</a></h4>
            <p class="description">Learn from industry professionals with personalized guidance and career-oriented insights.</p>
          </div>
        </div>
      </div>
      <!-- Certification & Job Support -->
      <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-award-fill"></i></div>
          <div>
            <h4 class="title"><a href="#" class="stretched-link">Certification & Job Support</a></h4>
            <p class="description">Earn a recognized certificate and get assistance with portfolio building, job applications, and interview preparation.</p>
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
// Set the start time for the AWS bootcamp
var countDownDate = new Date("Oct 19, 2024 11:00:00").getTime();
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

  // If the bootcamp is starting soon (within 1 hour)
  if (distance <= 3600000 && distance > 0) {
    document.getElementById("countdown-timer").innerHTML = 
      "⏰ Bootcamp starting soon! " + hours + " Hours " + minutes + " Minutes " + seconds + " Seconds";
  }

  // If the countdown is over, the bootcamp has started
  if (distance < 0 && now <= endTime) {
    document.getElementById("countdown-timer").innerHTML = 
      "🚀 Bootcamp in Progress! You can still join the session!";
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
      var message = `<a href="https://meet.google.com/scw-mntn-osa" class="btn btn-success" target="_blank">Join Now</a>`;
      Swal.fire({
        title: 'Bootcamp Starting Soon!',
        html: message,
        icon: 'success',
        confirmButtonColor: '#3085d6',
      });
    } else if (timeToEvent < 0 && timeAfterEvent <= (24 * 60 * 60 * 1000)) {
      // If the event has started but still within 24 hours
      var message = `<a href="https://meet.google.com/scw-mntn-osa" target="_blank" class="btn btn-success">Join Now</a>`;
      Swal.fire({
        title: 'Bootcamp in Progress!',
        html: message,
        icon: 'success',
        confirmButtonColor: '#3085d6',
      });
    } else if (timeAfterEvent > (24 * 60 * 60 * 1000)) {
      // If the event has ended and it's past 24 hours
      Swal.fire({
        title: 'Event Concluded!',
        text: 'This bootcamp session has ended. Please check for future bootcamp schedules.',
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
               <p>We'll notify you when it's time to join the bootcamp.</p>
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
      <h2>Upcoming Classes</h2>
      <p>🚀 Ready to kickstart your web development journey? Join <strong>Urbancode’s Exclusive HTML & CSS Bootcamp</strong> and transform your ideas into reality! Master web design, build responsive layouts, and create stunning websites. Enroll today and start your journey towards becoming a front-end developer! 💡</p>
      <p><strong>Next Batch Starts:</strong> Feb 15, 2025 (Morning) <br> <strong>Time:</strong> 10:00 AM IST</p>
      <p><strong>Mode:</strong> Live Online Session via Google Meet 🎥</p>
      <div class="countdown">
        <p id="countdown-timer"></p>
      </div>
      <a href="#enroll" class="enroll-button">Register Now</a>
    </div>
  </div>
</section>




<!-- <section id="demo-video" class="demo-video section mb-5">
  <div class="container">
    <div class="content-box">
      <h2 class="text-center">Watch Our HTML & CSS Bootcamp Demo</h2>
      <p class="text-center">Get a sneak peek into our HTML & CSS Bootcamp by watching this demo.</p>
      <div class="video-wrapper">
        <iframe class="responsive-video" src="https://www.youtube.com/embed/your-html-css-demo-video-link" 
          title="HTML & CSS Bootcamp Demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</section> -->


<!-- CSS for styling, borders, and responsiveness -->
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
</style>




<style>
    .upcoming-bootcamps .bootcamp-card {
    background: #BDEECC;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.upcoming-bootcamps .bootcamp-card button {
    background-color: #1acc8d;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.upcoming-bootcamps .bootcamp-card button:hover {
    background-color: rgba(26, 204, 141, 0.85);
}

</style>


<script>
function enrollBootcamp(startTime) {
    const eventTime = new Date(startTime).getTime();
    const now = new Date().getTime();
    const timeToEvent = eventTime - now;

    let message = "";
    if (timeToEvent <= 3600000 && timeToEvent >= 0) {
        // If within 1 hour and not started yet
        message = `<a href="https://meet.google.com/scw-mntn-osa" target="_blank">Join Now</a>`;
        Swal.fire({
            title: 'Bootcamp Starting Soon!',
            html: message,
            icon: 'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Join'
        });
    } else if (timeToEvent < 0) {
        // If the event has already started or finished
        message = 'This bootcamp session has already started or finished.';
        Swal.fire({
            title: 'Event Concluded!',
            text: message,
            icon: 'info',
            confirmButtonText: 'Ok'
        });
    } else {
        // For times when it's more than 1 hour to the event start
        const hours = Math.floor(timeToEvent / (1000 * 60 * 60));
        const minutes = Math.floor((timeToEvent % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeToEvent % (1000 * 60)) / 1000);
        message = `${hours}h ${minutes}m ${seconds}s remaining`;
        Swal.fire({
            title: 'Not Yet!',
            html: `<p>This event starts on <strong>${new Date(startTime).toLocaleString()}</strong>.</p>
                   <p>Please come back later.</p>
                   <p>We'll notify you when it's time to enroll in the bootcamp.</p>
                   <p>${message}</p>`,
            icon: 'info',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Ok',
            focusConfirm: false,
            preConfirm: () => {
                window.location.href = '#enroll';
            }
        });
    }
}
</script>


<!-- <section id="upcoming-bootcamps" class="upcoming-bootcamps section">
    <div class="container">
        <h2 class="mb-5">Upcoming HTML & CSS Bootcamps</h2>
        <div class="row"> -->
            <!-- Bootcamp Card 1 -->
            <!-- <div class="col-md-4">
                <div class="bootcamp-card">
                    <h3>HTML & CSS Fundamentals</h3>
                    <p>Date: Feb 15, 2025</p>
                    <p>Time: 10:00 AM</p>
                    <p>Google Meet</p>
                    <button onclick="enrollBootcamp('Feb 15, 2025 10:00:00')">Enroll Now</button>
                </div>
            </div> -->
            <!-- Bootcamp Card 2 -->
            <!-- <div class="col-md-4">
                <div class="bootcamp-card">
                    <h3>Responsive Web Design</h3>
                    <p>Date: Jan 01, 2025</p>
                    <p>Time: 11:00 AM</p>
                    <p>Google Meet</p>
                    <button onclick="enrollBootcamp('Feb 15, 2025 10:00:00')">Enroll Now</button>
                </div>
            </div> -->
            <!-- Bootcamp Card 3 -->
            <!-- <div class="col-md-4">
                <div class="bootcamp-card">
                    <h3>Advanced CSS Techniques</h3>
                    <p>Date: Jan 01, 2025</p>
                    <p>Time: 11:00 AM</p>
                    <p>Google Meet</p>
                    <button onclick="enrollBootcamp('Feb 15, 2025 10:00:00')">Enroll Now</button>
                </div>
            </div>
        </div>
    </div>
</section> -->




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
    <!-- First Feature: HTML Mastery -->
    <div class="row gy-4 justify-content-between features-item">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="images/html-css-bootcamp/html-mastery.png" class="img-fluid rounded" alt="HTML Mastery">
      </div>
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="text-uppercase">Mastering HTML</h3>
          <ul class="subtopics">
            <li><i class="bi bi-code-square"></i> **HTML Structure**: Understand elements, tags, and document flow.</li>
            <li><i class="bi bi-input-cursor"></i> **Forms & User Input**: Create login forms, search bars, and interactive inputs.</li>
            <li><i class="bi bi-image"></i> **Embedding Media**: Add images, videos, and audio to enhance web pages.</li>
          </ul>
        </div>
      </div>
    </div><!-- Features Item -->

    <!-- Second Feature: Advanced CSS Styling -->
    <div class="row gy-4 justify-content-between features-item">
      <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
        <div class="content">
          <h3 class="text-uppercase">Advanced CSS Styling</h3>
          <ul class="subtopics">
            <li><i class="bi bi-brush"></i> **CSS Fundamentals**: Learn selectors, properties, and inheritance.</li>
            <li><i class="bi bi-app-indicator"></i> **Layouts & Positioning**: Master Flexbox, Grid, and positioning techniques.</li>
            <li><i class="bi bi-lightning"></i> **CSS Animations**: Create smooth transitions and hover effects.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
        <img src="images/html-css-bootcamp/css-advanced.png" class="img-fluid rounded" alt="Advanced CSS Styling">
      </div>
    </div><!-- Features Item -->

    <!-- Third Feature: Mobile-Responsive Design -->
    <div class="row gy-4 justify-content-between features-item">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="images/html-css-bootcamp/mobile-responsive.png" class="img-fluid rounded" alt="Mobile-Responsive Design">
      </div>
      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3 class="text-uppercase">Mobile-Responsive Design</h3>
          <ul class="subtopics">
            <li><i class="bi bi-phone"></i> **Media Queries**: Optimize layouts for different screen sizes.</li>
            <li><i class="bi bi-grid-1x2"></i> **Bootstrap Framework**: Leverage Bootstrap for fast and responsive designs.</li>
            <li><i class="bi bi-rocket"></i> **Performance Optimization**: Improve speed, accessibility, and SEO.</li>
          </ul>
        </div>
      </div>
    </div><!-- Features Item -->
  </div>
</section>



<style>
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


<section id="placement-program" class="placement-program section mb-5">
  <div class="container">
    <h2 class="text-center section-title"><span>7-Day</span> HTML & CSS Bootcamp</h2>
    <p class="text-center">🚀 Fast-track your web development skills! Learn HTML, CSS & Responsive Design in just 7 days with hands-on projects.</p>
    
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="accordion" id="programLeft">
          <!-- Day 1: HTML Fundamentals -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseOne" aria-expanded="true" aria-controls="leftCollapseOne">
                Day 1: HTML Basics & Page Structure
              </button>
            </h2>
            <div id="leftCollapseOne" class="accordion-collapse collapse show" aria-labelledby="leftHeadingOne" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>📌 Learn **HTML structure**, semantic elements, headings, and paragraphs.</li>
                  <li>💻 **Hands-on Project**: Create a simple webpage with proper structure.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Day 2: Forms & Multimedia -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseTwo" aria-expanded="false" aria-controls="leftCollapseTwo">
                Day 2: Forms, Tables & Multimedia
              </button>
            </h2>
            <div id="leftCollapseTwo" class="accordion-collapse collapse" aria-labelledby="leftHeadingTwo" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>📌 Build **forms, tables, and embed images/videos**.</li>
                  <li>💻 **Hands-on Project**: Create a user registration form.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Day 3: CSS Fundamentals -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseThree" aria-expanded="false" aria-controls="leftCollapseThree">
                Day 3: CSS Styling & Selectors
              </button>
            </h2>
            <div id="leftCollapseThree" class="accordion-collapse collapse" aria-labelledby="leftHeadingThree" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>📌 Learn **CSS properties, colors, fonts, and text styling**.</li>
                  <li>💻 **Hands-on Project**: Apply styles to an existing webpage.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Day 4: CSS Box Model & Positioning -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseFour" aria-expanded="false" aria-controls="leftCollapseFour">
                Day 4: Box Model & Positioning
              </button>
            </h2>
            <div id="leftCollapseFour" class="accordion-collapse collapse" aria-labelledby="leftHeadingFour" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>📌 Understand **margins, padding, borders, and positioning**.</li>
                  <li>💻 **Hands-on Project**: Create a visually structured landing page.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="accordion" id="programRight">
          <!-- Day 5: Flexbox & Grid -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseOne" aria-expanded="false" aria-controls="rightCollapseOne">
                Day 5: CSS Layouts - Flexbox & Grid
              </button>
            </h2>
            <div id="rightCollapseOne" class="accordion-collapse collapse" aria-labelledby="rightHeadingOne" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>📌 Learn **modern layouts with Flexbox & CSS Grid**.</li>
                  <li>💻 **Hands-on Project**: Build a responsive web page using Grid & Flexbox.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Day 6: Responsive Web Design -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseTwo" aria-expanded="false" aria-controls="rightCollapseTwo">
                Day 6: Responsive Web Design & Media Queries
              </button>
            </h2>
            <div id="rightCollapseTwo" class="accordion-collapse collapse" aria-labelledby="rightHeadingTwo" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>📌 Implement **Media Queries & Bootstrap** for mobile-friendly designs.</li>
                  <li>💻 **Hands-on Project**: Convert an existing layout into a responsive design.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Day 7: Final Project & Deployment -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseThree" aria-expanded="false" aria-controls="rightCollapseThree">
                Day 7: Final Project & Deployment
              </button>
            </h2>
            <div id="rightCollapseThree" class="accordion-collapse collapse" aria-labelledby="rightHeadingThree" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>📌 Build a **complete responsive website** applying all concepts learned.</li>
                  <li>🚀 **Deploy your website** using **GitHub Pages** or **Netlify**.</li>
                  <li>🎓 Receive a **Certificate of Completion** and career guidance.</li>
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


<!-- Enrollment Section -->
<section id="enroll" class="enroll section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>🚀 Enroll Now: Master HTML & CSS in Just 7 Days!</h2>
                <p>Start your journey in web development with expert-led training, hands-on projects, and real-world experience.</p>
                
                <form id="enrollForm" class="enroll-form" onsubmit="sendEmail(); return false;">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="course">Select Course</label>
                            <select class="form-control" id="course" name="course" required>
                                <option selected>HTML & CSS Bootcamp</option>
                                <option>JavaScript Fundamentals</option>
                                <option>Full-Stack Web Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message">Your Message (Optional)</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Let us know if you have any questions!"></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Secure Your Spot Now</button>
                </form>
                
                <div id="formResult"></div>
                <p class="mt-3">📍 Live Online Classes | 🎓 Certification Included | 💻 Hands-On Projects</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="images/html-css-bootcamp/enroll.png" alt="Enroll in Bootcamp" class="img-fluid animated">
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

</style>

<!-- ======= Frequently Asked Questions Section ======= -->
<section id="faq" class="faq section-bg mt-5">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3>Frequently Asked Questions</h3>
      <p>Have questions about Urbancode’s HTML & CSS Bootcamp? We’ve got answers! 🚀</p>
    </header>

    <div class="faq-list">
      <ul>
        <!-- Question 1 -->
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">
            What is the HTML & CSS Bootcamp at Urbancode?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              The HTML & CSS Bootcamp at Urbancode is an **intensive hands-on training program** designed for beginners and aspiring web developers. You’ll learn to **build, style, and optimize** web pages while mastering **responsive design techniques**.
            </p>
          </div>
        </li>

        <!-- Question 2 -->
        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">
            What will I learn in the HTML & CSS Bootcamp?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              The bootcamp covers:
              <br>✅ **HTML Basics** – Structure, semantic elements, forms, and media embedding.
              <br>✅ **CSS Styling** – Colors, fonts, layouts, Flexbox, and Grid.
              <br>✅ **Responsive Web Design** – Media queries and Bootstrap.
              <br>✅ **Real-World Projects** – Build & deploy a complete website.
            </p>
          </div>
        </li>

        <!-- Question 3 -->
        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">
            Who should join the bootcamp?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              This bootcamp is **perfect for beginners**, aspiring web developers, graphic designers, freelancers, and students who want to **create professional websites from scratch**. **No prior coding experience is needed!** 🎉
            </p>
          </div>
        </li>

        <!-- Question 4 -->
        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">
            Will I be able to build a website after this bootcamp?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Absolutely! 🚀 By the end of the bootcamp, you will have built a **fully responsive, visually appealing website** and gained the confidence to work on your own projects or portfolio.
            </p>
          </div>
        </li>

        <!-- Question 5 -->
        <li data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-question-circle icon-question"></i>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">
            How do I enroll in the HTML & CSS Bootcamp?
            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
          </a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              You can **secure your spot** by visiting our official website at <a href="https://urbancode.in">urbancode.in</a> and navigating to the **HTML & CSS Bootcamp** section. Seats are **limited**, so early enrollment is recommended! 🎟️
            </p>
          </div>
        </li>
      </ul>
    </div>

  </div>
</section>
<!-- End Frequently Asked Questions Section -->





<?php include 'inc/footer.php';?>