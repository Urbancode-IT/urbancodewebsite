<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<style>
    .workshops-sec {
            background-color: #f8f9fa;
            padding: 50px 0;
        }

        .workshop-card {
            perspective: 1000px;
            height: 300px;
        }

        .card-content {
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.6s;
            position: relative;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .workshop-card:hover .card-content {
            transform: rotateY(180deg);
        }

        .front, .back {
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .back {
            transform: rotateY(180deg);
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
        }

        .img-fluid {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .btn-primary {
            margin-top: 20px;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Button styling */
.btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: bold;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 32px;
  border-radius: 50px;
  transition: background-color 0.5s, box-shadow 0.5s;
  line-height: 1;
  color: #ffffff;
  background: #01af6a;
  border: 2px solid #01af6a;
  text-decoration: none;
}

.btn-get-started:hover {
  background: #018f5a;
  color: #fff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


.gallery .gallery-item {
  overflow: hidden;
  border-right: 3px solid #fff;
  border-bottom: 3px solid #fff;
}

.gallery .gallery-item img {
  transition: all ease-in-out 0.4s;
}

.gallery .gallery-item:hover img {
  transform: scale(1.1);
}


</style>

<!--Hero Section-->
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Exciting events for your learning journey</h1>
        <p>Join our events for growth and insights from industry leaders.</p>
        <div class="d-flex">
          
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" >
        <img src="image\Event.jpg" class=" " style="border-radius: 55px;" alt="">
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->
</main>



<!--End hero section--->



<style>
    /*-----------------------------------*\
  #RESET
\*-----------------------------------*/

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

li {
  list-style: none;
}

a {
  text-decoration: none;
  color: inherit;
}

a,
img,
{
  display: block;
}

img {
  height: auto;
}

i {
  pointer-events: none;
}

address {
  font-style: normal;
}

html {
  font-family: 'Urbanist', sans-serif;
  font-size: 10px;
  scroll-behavior: smooth;
}

body {
  background-color: hsl(0, 0%, 100%);
  color: black;
  font-size: 1.6rem;
  font-weight: 500;
  line-height: 1.6;
}

:focus-visible {
  outline-offset: 4px;
}

::-webkit-scrollbar {
  width: 12px;
}

::-webkit-scrollbar-track {
  background-color: hsl(0, 0%, 96%);
}

::-webkit-scrollbar-thumb {
  background-color: hsl(0, 0%, 80%);
}

::-webkit-scrollbar-thumb:hover {
  background-color: hsl(0, 0%, 70%);
}

/*-----------------------------------*\
  #REUSED STYLE
\*-----------------------------------*/


.abs-img {
  display: none;
}

.section-subtitle {
  color: #01af6a;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 2px;
  margin-block-end: 5px;
}

.h1,
.h2,
.h3 {
  color: black;
  line-height: 1.3;
  font-weight: 800;
}

.h1 {
  font-size: 4rem;
}

.h2 {
  font-size: 3.2rem;
}

.h3 {
  font-size: 2rem;
  font-weight: 700;
}

.w-100 {
  width: 100%;
}

.grid-list {
  display: grid;
  gap: 30px;
}

.img-cover {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/*-----------------------------------*\
  #EVENT
\*-----------------------------------*/

.event :is(.section-subtitle, .section-title) {
  text-align: center;
}

.event .section-title {
  margin-block-end: 60px;
}

.event-card {
  position: relative;
  background-color: hsl(0, 0%, 96%);
  border-radius: 6px;
  overflow: hidden;
}

.event-card .card-banner {
  background-color: hsl(0, 0%, 80%);
  aspect-ratio: 370 / 250;
}

.event-card .badge {
  position: absolute;
  top: 25px;
  left: 0;
  background-color: #01af6a;
  color: hsl(0, 0%, 100%);
  padding: 5px 15px;
  border-radius: 0 50px 50px 0;
  font-weight: 700;
}

.event-card .card-content {
  padding: 25px 20px;
}

.event-card .card-address {
  font-size: 1.4rem;
  display: flex;
  align-items: baseline;
  gap: 8px;
}

.event-card .card-address i {
  color: #01af6a;
  font-size: 1.4rem;
}

.event-card .h3 {
  font-size: 2rem;
  margin-block: 10px;
  line-height: 1.5;
}

.event-card .card-title {
  transition: 0.25s ease;
}

.event-card .card-title:is(:hover, :focus) {
  color: #01af6a;
}

.event-card .btn-link {
  color: #01af6a;
  font-size: 1.8rem;
  font-weight: 700;
  max-width: max-content;
  display: flex;
  align-items: center;
  gap: 10px;
  border-bottom: 2px solid transparent;
  transition: 0.25s ease;
  text-decoration: none;
}

.event-card .btn-link:is(:hover, :focus) {
  border-color: #01af6a;
}
.container{
  width: 100%;
}
/*-----------------------------------*\
  #MEDIA QUERIES
\*-----------------------------------*/



/* responsive for larger than 768px screen */
@media (min-width: 768px) {


  .grid-list {
    grid-template-columns: 1fr 1fr;
  }

  .event-card .card-content {
    padding: 30px;
  }
}


/* responsive for larger than 992px screen */
@media (min-width: 992px) {


  .event-card .card-address {
    font-size: 1.6rem;
  }
}

/* responsive for larger than 1200px screen */
@media (min-width: 1200px) {
  

  .event .grid-list {
    grid-template-columns: repeat(3, 1fr);
  }
}

</style>

<section class="section event" id="event" aria-label="event">
  <div class="container">
    <header class="section-header">
      <h3>Events</h3>
      <p>Let’s Join Our Community</p>
    </header>
    <ul class="grid-list">
        <li>
  <div class="event-card">
    <figure class="card-banner">
      <img src="images/events/bb-meet.png" width="370" height="250" loading="lazy" alt="BB GRAND MEET 2025" class="img-cover">
    </figure>
    <time class="badge" datetime="2025-04-21">21 Apr 2025</time>
    <div class="card-content">
      <address class="card-address">
        <i class="bi bi-geo-alt" aria-hidden="true"></i>
        <span>Gunidy, Chennai – The Ramada Plaza</span>
      </address>
      <h3 class="h3">
        <a href="#" class="card-title">BB GRAND MEET 2025 – The Ultimate BB Meetup</a>
      </h3>
      <a href="#" class="btn-link">
        <span>Get Ticket</span>
        <i class="bi bi-arrow-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</li>

      <li>
        <div class="event-card">
          <figure class="card-banner">
            <img src="images/events/event-card1.heic" width="370" height="250" loading="lazy" alt="Saree Marathon" class="img-cover">
          </figure>
          <time class="badge" datetime="2024-08-11">11 Aug 2024</time>
          <div class="card-content">
            <address class="card-address">
              <i class="bi bi-geo-alt" aria-hidden="true"></i>
              <span>Besant Nagar, Chennai-600090</span>
            </address>
            <h3 class="h3">
              <a href="#" class="card-title">Saree Marathon in Chennai for Womens only</a>
            </h3>
            <a href="https://allevents.in/chennai/saree-marathon-2024/80001676649782?fbclid=PAZXh0bgNhZW0CMTEAAaZSl_Zh6G5MWbKxX1T7aigXLij5OAWHTsrEKuIIMDWbyvhhzXOy8d-tX_k_aem_mjEz1DSEHDWW4dLKIj2x4A" class="btn-link">
              <span>Get Ticket</span>
              <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </li>
      <li>
        <div class="event-card">
          <figure class="card-banner">
            <img src="images/events/event-card2.jpg" width="370" height="250" loading="lazy" alt="Urbancode AI workshop" class="img-cover">
          </figure>
          <time class="badge" datetime="2024-03-19">19 March 2024</time>
          <div class="card-content">
            <address class="card-address">
              <i class="bi bi-geo-alt" aria-hidden="true"></i>
              <span>Sriperumbadur Chennai</span>
            </address>
            <h3 class="h3">
              <a href="#" class="card-title">Urbancode AI workshop Kings Engineering College</a>
            </h3>
            <a href="#" class="btn-link">
              <span>Get Ticket</span>
              <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </li>
      <li>
        <div class="event-card">
          <figure class="card-banner">
            <img src="images/events/event-card3.heic" width="370" height="250" loading="lazy" alt="Explorations of Regional Chief Executive Network" class="img-cover">
          </figure>
          <time class="badge" datetime="2024-01-15">15 Jun 2024</time>
          <div class="card-content">
            <address class="card-address">
              <i class="bi bi-geo-alt" aria-hidden="true"></i>
              <span>Thandalam, Chennai - 602105</span>
            </address>
            <h3 class="h3">
              <a href="#" class="card-title">Workshop & Seminars SIMATS Engineering</a>
            </h3>
            <a href="#" class="btn-link">
              <span>Get Ticket</span>
              <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>




<!-- ======= Workshops Section ======= -->
<section class="workshops-sec py-3 py-md-5">
    <div class="container">
        <div class="row">
            
        <header class="section-header">
          <h3>Workshops</h3>
          <p>Let’s Join Our Community</p>
        </header>
            <div class="col-12 col-lg-4 mb-4">
                <div class="workshop-card" style="perspective: 1000px;">
                    <div class="card-content" style="transform-style: preserve-3d; transition: transform 0.6s;">
                        <div class="front" style="backface-visibility: hidden; position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
                            <img src="images/events/w1.jpg" class="img-fluid" alt="Digital Marketing">
                            <h5 class="mt-3 text-center">Digital Marketing</h5>
                        </div>
                        <div class="back" style="backface-visibility: hidden; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #fff; border: 1px solid #ddd; border-radius: 10px; transform: rotateY(180deg); padding: 20px;">
                            <p>Learn the essential strategies required to thrive in the dynamic world of online marketing.</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdIGLq9m5oEGUh0eB2gmR0KgYZpC6HcjsGg3Zq65p855woGfQ/viewform" class="btn btn-get-started">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <div class="workshop-card" style="perspective: 1000px;">
                    <div class="card-content" style="transform-style: preserve-3d; transition: transform 0.6s;">
                        <div class="front" style="backface-visibility: hidden; position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
                            <img src="images/events/w2.jpg" class="img-fluid" alt="Data Science">
                            <h5 class="mt-3">Data Science</h5>
                        </div>
                        <div class="back" style="backface-visibility: hidden; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #fff; border: 1px solid #ddd; border-radius: 10px; transform: rotateY(180deg); padding: 20px;">
                            <p>Discover the power of data analysis and machine learning.</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdIGLq9m5oEGUh0eB2gmR0KgYZpC6HcjsGg3Zq65p855woGfQ/viewform" class="btn btn-get-started">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repeat the card structure for each workshop -->
            <!-- Data Analytics -->
            <div class="col-12 col-lg-4 mb-4">
                <div class="workshop-card" style="perspective: 1000px;">
                    <div class="card-content" style="transform-style: preserve-3d; transition: transform 0.6s;">
                        <div class="front" style="backface-visibility: hidden; position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
                            <img src="images/events/w3.jpg" class="img-fluid" alt="Data Analytics">
                            <h5 class="mt-3">Data Analytics</h5>
                        </div>
                        <div class="back" style="backface-visibility: hidden; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #fff; border: 1px solid #ddd; border-radius: 10px; transform: rotateY(180deg); padding: 20px;">
                            <p>Gain insights from data to drive decision-making processes.</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdIGLq9m5oEGUh0eB2gmR0KgYZpC6HcjsGg3Zq65p855woGfQ/viewform" class="btn btn-get-started">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data Visualization -->
            <div class="col-12 col-lg-4 mb-4">
                <div class="workshop-card" style="perspective: 1000px;">
                    <div class="card-content" style="transform-style: preserve-3d; transition: transform 0.6s;">
                        <div class="front" style="backface-visibility: hidden; position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
                            <img src="images/events/w4.jpg" class="img-fluid" alt="Data Visualization">
                            <h5 class="mt-3">Data Visualization</h5>
                        </div>
                        <div class="back" style="backface-visibility: hidden; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #fff; border: 1px solid #ddd; border-radius: 10px; transform: rotateY(180deg); padding: 20px;">
                            <p>Learn to create compelling visual stories from data.</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdIGLq9m5oEGUh0eB2gmR0KgYZpC6HcjsGg3Zq65p855woGfQ/viewform" class="btn btn-get-started">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Database -->
            <div class="col-12 col-lg-4 mb-4">
                <div class="workshop-card" style="perspective: 1000px;">
                    <div class="card-content" style="transform-style: preserve-3d; transition: transform 0.6s;">
                        <div class="front" style="backface-visibility: hidden; position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
                            <img src="images/events/w5.jpg" class="img-fluid" alt="Database">
                            <h5 class="mt-3">Database</h5>
                        </div>
                        <div class="back" style="backface-visibility: hidden; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #fff; border: 1px solid #ddd; border-radius: 10px; transform: rotateY(180deg); padding: 20px;">
                            <p>Master the fundamentals of database management and SQL.</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdIGLq9m5oEGUh0eB2gmR0KgYZpC6HcjsGg3Zq65p855woGfQ/viewform" class="btn btn-get-started">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cloud Solutions -->
            <div class="col-12 col-lg-4 mb-4">
                <div class="workshop-card" style="perspective: 1000px;">
                    <div class="card-content" style="transform-style: preserve-3d; transition: transform 0.6s;">
                        <div class="front" style="backface-visibility: hidden; position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
                            <img src="images/events/w6.jpg" class="img-fluid" alt="Cloud Solutions">
                            <h5 class="mt-3">Cloud Solutions</h5>
                        </div>
                        <div class="back" style="backface-visibility: hidden; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #fff; border: 1px solid #ddd; border-radius: 10px; transform: rotateY(180deg); padding: 20px;">
                            <p>Explore cloud computing and its various services.</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdIGLq9m5oEGUh0eB2gmR0KgYZpC6HcjsGg3Zq65p855woGfQ/viewform" class="btn btn-get-started">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Programming Language -->
            <div class="col-12 col-lg-4 mb-4">
                <div class="workshop-card" style="perspective: 1000px;">
                    <div class="card-content" style="transform-style: preserve-3d; transition: transform 0.6s;">
                        <div class="front" style="backface-visibility: hidden; position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
                            <img src="images/events/w7.jpg" class="img-fluid" alt="Programming Language">
                            <h5 class="mt-3">Programming Language</h5>
                        </div>
                        <div class="back" style="backface-visibility: hidden; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #fff; border: 1px solid #ddd; border-radius: 10px; transform: rotateY(180deg); padding: 20px;">
                            <p>Enhance your coding skills with various programming languages.</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdIGLq9m5oEGUh0eB2gmR0KgYZpC6HcjsGg3Zq65p855woGfQ/viewform" class="btn btn-get-started">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Proficiency Exams -->
            <div class="col-12 col-lg-4 mb-4">
                <div class="workshop-card" style="perspective: 1000px;">
                    <div class="card-content" style="transform-style: preserve-3d; transition: transform 0.6s;">
                        <div class="front" style="backface-visibility: hidden; position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
                            <img src="images/events/w8.jpg" class="img-fluid" alt="Proficiency Exams">
                            <h5 class="mt-3">Proficiency Exams</h5>
                        </div>
                        <div class="back" style="backface-visibility: hidden; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #fff; border: 1px solid #ddd; border-radius: 10px; transform: rotateY(180deg); padding: 20px;">
                            <p>Prepare for IELTS, TOEFL, OET, and PTE exams.</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdIGLq9m5oEGUh0eB2gmR0KgYZpC6HcjsGg3Zq65p855woGfQ/viewform" class="btn btn-get-started">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Other -->
            <div class="col-12 col-lg-4 mb-4">
                <div class="workshop-card" style="perspective: 1000px;">
                    <div class="card-content" style="transform-style: preserve-3d; transition: transform 0.6s;">
                        <div class="front" style="backface-visibility: hidden; position: relative; padding: 20px; border: 1px solid #ddd; border-radius: 10px;">
                            <img src="images/events/w9.jpg" class="img-fluid" alt="Other Workshops">
                            <h5 class="mt-3">Other</h5>
                        </div>
                        <div class="back" style="backface-visibility: hidden; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #fff; border: 1px solid #ddd; border-radius: 10px; transform: rotateY(180deg); padding: 20px;">
                            <p>Explore various other workshops offered.</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdIGLq9m5oEGUh0eB2gmR0KgYZpC6HcjsGg3Zq65p855woGfQ/viewform" class="btn btn-get-started">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Workshops Section -->

<!-- <section class="payment-area py-3 py-md-5" style="background-color: #E7EDF6;" id="payment-area">
    <div class="container">        
        <h4 style="color:#000000;">Register Here</h4>
        <p class="pb-2">Please fill the form to register your entry and proceed to payment for entry.</p>
        
        <form id="payment-form" class="mt-2 mt-md-4">     
            

            <ul id="progressbar">
                <li class="active">Course Register</li>
                <li>Proceed to Pay</li>
                <li>Completed</li>
            </ul>

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Name<span>*</span></label>
                        <input name="name" type="text" class="form-control" id="py-name">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Mobile Number<span>*</span></label>
                        <input name="email" type="email" class="form-control" id="en-email">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Email<span>*</span></label>
                        <input name="phone" type="number" class="form-control" id="en-mobile">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Institute/Organization<span>*</span></label>
                        <input name="phone" type="number" class="form-control" id="en-mobile">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Select Contest<span>*</span></label>
                        <select class="form-control" id="">
                            <option value="">Select</option>
                            <option value="python">Python</option>
                            <option value="aws">AWS</option>
                        </select>
                    </div>
                </div>
            </div>                    
            <button type="button" class="btn btn-primary px-4 py-2 site">Register</button>
        </form> 
    </div>
</section>  



<section class="student-bought">
    <div class="container-md">
        <div class="row">
            <div class="col-12 col-md-4 left pe-md-3 py-3 py-md-5">
                <div class="form-col">
                    <h4 class="mb-4 text-white">Guide Videos</h4>  
                </div>
            </div>
            <div class="col-12 col-md-8 right ps-md-3 py-3 py-md-5">
                <div class="slide-col">
                    <h4 class="text-white">Students also bought</h4>
                    <div class="bought-slider mt-3 mt-md-4">
                        <div class="col-lg-12">
                            <div class="card w-100">
                                <img class="card-img-top" src="images/new-launch1.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>The Complete Python Bootcamp From Zero to Hero...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>Ultimate AWS Certified Solutions Architect Associate...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card w-100">
                                <img class="card-img-top img-fluid" src="images/new-launch1.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>The Complete Python Bootcamp From Zero to Hero...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card w-100">
                                <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>Ultimate AWS Certified Solutions Architect Associate...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>-->

      <style>
        /*--------------------------------------------------------------
# Gallery
--------------------------------------------------------------*/
.gallery .gallery-item {
  overflow: hidden;
  border-right: 3px solid #fff;
  border-bottom: 3px solid #fff;
}

.gallery .gallery-item img {
  transition: all ease-in-out 0.4s;
}

.gallery .gallery-item:hover img {
  transform: scale(1.1);
}


      </style>
<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
    <div class="container">

        <header class="section-header">
            <h3>Check our Gallery</h3>
            <p>Level up your Career</p>
        </header>

        <div class="row g-0" data-aos="fade-left">

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                    <a href="images/events/g1.jpeg" class="gallery-lightbox">
                        <img src="images/events/g1.jpeg" alt="Event Image 1" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                    <a href="images/events/g2.jpeg" class="gallery-lightbox">
                        <img src="images/events/g2.jpeg" alt="Event Image 2" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                    <a href="images/events/g3.jpeg" class="gallery-lightbox">
                        <img src="images/events/g3.jpeg" alt="Event Image 3" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                    <a href="images/events/g4.jpeg" class="gallery-lightbox">
                        <img src="images/events/g4.jpeg" alt="Event Image 4" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <a href="images/events/g5.jpeg" class="gallery-lightbox">
                        <img src="images/events/g5.jpeg" alt="Event Image 5" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                    <a href="images/events/g6.jpeg" class="gallery-lightbox">
                        <img src="images/events/g6.jpeg" alt="Event Image 6" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                    <a href="images/events/g7.jpeg" class="gallery-lightbox">
                        <img src="images/events/g7.jpeg" alt="Event Image 7" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                    <a href="images/events/g8.jpeg" class="gallery-lightbox">
                        <img src="images/events/g8.jpeg" alt="Event Image 8" class="img-fluid">
                    </a>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Gallery Section -->



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const lightbox = GLightbox({
            selector: '.gallery-lightbox'
        });
    });
</script>




<?php include 'inc/footer.php';?>
