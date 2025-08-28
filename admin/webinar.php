<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<!-- ======= webinor ======= -->

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
        <h1>Join Our Exclusive Webinar</h1>
        <p>Engage with industry leaders, learn new insights, and take your career to new heights. Don’t miss this opportunity to be part of an interactive session.</p>
        <div class="d-flex">
          <!-- Add any call to action buttons or links here if necessary -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="image\webinar.jpg" class="" style="border-radius: 55px;" alt="Webinar Image">
      </div>
    </div>
  </div>
</section><!-- /Hero Section -->


</main>






<style>
    .study-abroad-section {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 80px; /* Ensure this is sufficient to clear the fixed header */
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            border: none;
            position: relative;
            z-index: 1;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.2s;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card-body {
            padding: 15px;
            text-align: center;
            background-color: #f8f9fa; /* Use a background color matching your website */
        }

        .card-title {
            margin: 0;
            font-size: 1.2em;
            color: #333;
            font-family: 'Arial', sans-serif; /* Use a font style matching your website */
        }

        .card-body a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            background-color: #01af6a; /* Use the specified button color */
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            transition: background-color 0.2s;
        }

        .card-body a:hover {
            background-color: #018c55; /* Darken the button color on hover */
        }
</style>

<section class="webinar-section mt-4">
    <div class="container">
        <header class="section-header">
            <h3>Upcoming Webinars</h3>
            <p>Join our interactive webinars to gain valuable knowledge and insights from industry experts in a flexible, online format.</p>
        </header>
        <div class="row">
            <!-- Webinar 1 -->
            <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/webinars/webinar1.jpg" class="card-img-top" alt="Webinar 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Webinar on Web Development</h5>
                        <p><strong>Date:</strong> October 5, 2024</p>
                        <p><strong>Time:</strong> 10:00 AM - 1:00 PM</p>
                        <a href="#webinar-details" class="btn btn-primary">Join Webinar</a>
                    </div>
                </div>
            </div> -->

            <!-- Webinar 2 -->
            <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/webinars/webinar2.jpg" class="card-img-top" alt="Webinar 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Webinar on Data Science</h5>
                        <p><strong>Date:</strong> October 12, 2024</p>
                        <p><strong>Time:</strong> 2:00 PM - 5:00 PM</p>
                        <a href="#webinar-details" class="btn btn-primary">Join Webinar</a>
                    </div>
                </div>
            </div> -->

            <!-- Webinar 3 -->
            <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/webinars/webinar3.jpg" class="card-img-top" alt="Webinar 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Webinar on AI & ML</h5>
                        <p><strong>Date:</strong> October 19, 2024</p>
                        <p><strong>Time:</strong> 9:00 AM - 12:00 PM</p>
                        <a href="#webinar-details" class="btn btn-primary">Join Webinar</a>
                    </div>
                </div>
            </div> -->

            <!-- Webinar 4 -->
            <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/webinars/webinar4.jpg" class="card-img-top" alt="Webinar 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Webinar on Cloud Computing</h5>
                        <p><strong>Date:</strong> October 26, 2024</p>
                        <p><strong>Time:</strong> 11:00 AM - 2:00 PM</p>
                        <a href="#webinar-details" class="btn btn-primary">Join Webinar</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>



<!-- ======= Features Section ======= -->

<style>
    /*--------------------------------------------------------------
# Features
--------------------------------------------------------------*/
.features {
  padding: 20px 20px;
  background: #fff;
}

.features .icon-box {
  display: flex;
  align-items: center;
  padding: 20px;
  transition: ease-in-out 0.3s;
  box-shadow: 2px 0 35px 0 rgba(68, 88, 144, 0.12);
  background: #ffffff;
}

.features .icon-box i {
  font-size: 32px;
  padding-right: 10px;
  line-height: 1;
}

.features .icon-box h3 {
  font-weight: 700;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-size: 16px;
}

.features .icon-box h3 a {
  color: #493c3e;
  transition: ease-in-out 0.3s;
  text-decoration: none;
}

.features .icon-box:hover a {
color: #01af6a;
text-decoration: none;

}

/* Responsive Styles */
@media (max-width: 768px) {
  .features .icon-box {
    flex-direction: column;
    text-align: center;
  }

  .features .icon-box i {
    margin-bottom: 10px;
    font-size: 24px; /* Adjust the icon size */
  }

  .features .icon-box h3 {
    font-size: 14px; /* Adjust the text size */
  }
}


</style>

<section id="features" class="features">
  <div class="container">

    <header class="section-header">
      <h3>Webinar Benefits</h3>
      <p>Enhance your knowledge and skills through our interactive webinars, providing insights and guidance from industry experts.</p>
    </header>

    <div class="row">
      <!-- Benefit 1 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-live-line" style="color: #ffbb2c;"></i>
          <h3><a href="#">Live Interaction</a></h3>
        </div>
      </div>

      <!-- Benefit 2 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-voiceprint-line" style="color: #5578ff;"></i>
          <h3><a href="#">Expert Guidance</a></h3>
        </div>
      </div>

      <!-- Benefit 3 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-global-line" style="color: #e80368;"></i>
          <h3><a href="#">Global Networking</a></h3>
        </div>
      </div>

      <!-- Benefit 4 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-customer-service-2-line" style="color: #e361ff;"></i>
          <h3><a href="#">Enhanced Knowledge</a></h3>
        </div>
      </div>

      <!-- Benefit 5 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-download-cloud-2-line" style="color: #47aeff;"></i>
          <h3><a href="#">Resource Downloads</a></h3>
        </div>
      </div>

      <!-- Benefit 6 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-medal-line" style="color: #ffa76e;"></i>
          <h3><a href="#">Certificate of Participation</a></h3>
        </div>
      </div>

      <!-- Benefit 7 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-rocket-line" style="color: #11dbcf;"></i>
          <h3><a href="#">Innovative Insights</a></h3>
        </div>
      </div>

      <!-- Benefit 8 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-time-line" style="color: #4233ff;"></i>
          <h3><a href="#">Flexible Timing</a></h3>
        </div>
      </div>

      <!-- Benefit 9 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-chat-smile-3-line" style="color: #b2904f;"></i>
          <h3><a href="#">Personalized Q&A</a></h3>
        </div>
      </div>

      <!-- Benefit 10 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-projector-2-line" style="color: #b20969;"></i>
          <h3><a href="#">Interactive Sessions</a></h3>
        </div>
      </div>

      <!-- Benefit 11 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-presentation-line" style="color: #ff5828;"></i>
          <h3><a href="#">Presentation Skills</a></h3>
        </div>
      </div>

      <!-- Benefit 12 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-group-line" style="color: #29cc61;"></i>
          <h3><a href="#">Group Collaborations</a></h3>
        </div>
      </div>

      <!-- Benefit 13 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-chat-3-line" style="color: #cd67f9;"></i>
          <h3><a href="#">1-on-1 Mentorship</a></h3>
        </div>
      </div>

      <!-- Benefit 14 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-support-line" style="color: #2ecc71;"></i>
          <h3><a href="#">Post-Webinar Support</a></h3>
        </div>
      </div>

      <!-- Benefit 15 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-file-paper-2-line" style="color: #f39c12;"></i>
          <h3><a href="#">Webinar Documentation</a></h3>
        </div>
      </div>

      <!-- Benefit 16 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-lightbulb-flash-line" style="color: #3498db;"></i>
          <h3><a href="#">Creative Problem Solving</a></h3>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Features Section -->





<?php include 'inc/footer.php';?>
