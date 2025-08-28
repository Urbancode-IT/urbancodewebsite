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
        <h1>Unlock Your Potential, Join the Bootcamp</h1>
        <p>Get hands-on training from industry experts and take your skills to the next level. Build your future with a bootcamp designed for success.</p>
        <div class="d-flex">
          <!-- Add any call to action buttons or links here if necessary -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="image\bootcamp.jpg" class="" style="border-radius: 55px;" alt="Bootcamp Image">
      </div>
    </div>
  </div>
</section><!-- /Hero Section -->

</main>



<!--End hero section--->



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

<section class="bootcamp-section mt-4">
    <div class="container">
        <header class="section-header">
            <h3>Upcoming Bootcamps</h3>
            <p>Join our intensive bootcamps for hands-on learning and gain practical skills from industry experts.</p>
        </header>
        <div class="row">
            <!-- Bootcamp 1 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/courses/aws/aws.jpg"  class="card-img-top" alt="Bootcamp 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">AWS Cloud Bootcamp</h5>
                        <p><strong>Date:</strong> November 10 , 2024</p>
                        <p><strong>Time:</strong> 10:00 AM - 5:00 PM</p>
                        <a href="https://urbancode.in/aws-bootcamp" class="btn btn-primary">Join Bootcamp</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/courses/html-css/html-css.jpg"  class="card-img-top" alt="HTML & CSS Bootcamp">
                    <div class="card-body text-center">
                        <h5 class="card-title">HTML & CSS Bootcamp</h5>
                        <p><strong>Date:</strong> Feb 15, 2025</p>
                        <p><strong>Time:</strong> 10:00 AM - 5:00 PM</p>
                        <a href="https://urbancode.in/html-css-bootcamp" class="btn btn-primary">Join Bootcamp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <!-- Bootcamp 2 -->
            <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/bootcamps/bootcamp2.jpg" class="card-img-top" alt="Bootcamp 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bootcamp on Data Science</h5>
                        <p><strong>Date:</strong> October 12, 2024</p>
                        <p><strong>Time:</strong> 9:00 AM - 4:00 PM</p>
                        <a href="#bootcamp-details" class="btn btn-primary">Join Bootcamp</a>
                    </div>
                </div>
            </div> -->

            <!-- Bootcamp 3 -->
            <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/bootcamps/bootcamp3.jpg" class="card-img-top" alt="Bootcamp 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bootcamp on AI & ML</h5>
                        <p><strong>Date:</strong> October 19, 2024</p>
                        <p><strong>Time:</strong> 9:00 AM - 6:00 PM</p>
                        <a href="#bootcamp-details" class="btn btn-primary">Join Bootcamp</a>
                    </div>
                </div>
            </div> -->

            <!-- Bootcamp 4 -->
            <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/bootcamps/bootcamp4.jpg" class="card-img-top" alt="Bootcamp 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bootcamp on Cloud Computing</h5>
                        <p><strong>Date:</strong> October 26, 2024</p>
                        <p><strong>Time:</strong> 10:00 AM - 5:00 PM</p>
                        <a href="#bootcamp-details" class="btn btn-primary">Join Bootcamp</a>
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
      <h3>Bootcamp Benefits</h3>
      <p>Gain hands-on experience and practical skills with our bootcamps, guided by industry professionals in an immersive learning environment.</p>
    </header>

    <div class="row">
      <!-- Benefit 1 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-hand-heart-line" style="color: #ffbb2c;"></i>
          <h3><a href="#">Hands-On Training</a></h3>
        </div>
      </div>

      <!-- Benefit 2 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-team-line" style="color: #5578ff;"></i>
          <h3><a href="#">Industry Mentorship</a></h3>
        </div>
      </div>

      <!-- Benefit 3 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-global-line" style="color: #e80368;"></i>
          <h3><a href="#">Networking Opportunities</a></h3>
        </div>
      </div>

      <!-- Benefit 4 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-book-line" style="color: #e361ff;"></i>
          <h3><a href="#">Skill Development</a></h3>
        </div>
      </div>

      <!-- Benefit 5 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-download-cloud-2-line" style="color: #47aeff;"></i>
          <h3><a href="#">Resource Materials</a></h3>
        </div>
      </div>

      <!-- Benefit 6 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-medal-line" style="color: #ffa76e;"></i>
          <h3><a href="#">Certificate of Completion</a></h3>
        </div>
      </div>

      <!-- Benefit 7 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-rocket-line" style="color: #11dbcf;"></i>
          <h3><a href="#">Cutting-Edge Insights</a></h3>
        </div>
      </div>

      <!-- Benefit 8 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-time-line" style="color: #4233ff;"></i>
          <h3><a href="#">Flexible Scheduling</a></h3>
        </div>
      </div>

      <!-- Benefit 9 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-chat-smile-3-line" style="color: #b2904f;"></i>
          <h3><a href="#">Individualized Q&A</a></h3>
        </div>
      </div>

      <!-- Benefit 10 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-focus-3-line" style="color: #b20969;"></i>
          <h3><a href="#">Project-Based Learning</a></h3>
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
          <h3><a href="#">Collaborative Environment</a></h3>
        </div>
      </div>

      <!-- Benefit 13 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-chat-3-line" style="color: #cd67f9;"></i>
          <h3><a href="#">One-on-One Mentorship</a></h3>
        </div>
      </div>

      <!-- Benefit 14 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-support-line" style="color: #2ecc71;"></i>
          <h3><a href="#">Post-Bootcamp Support</a></h3>
        </div>
      </div>

      <!-- Benefit 15 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-file-paper-2-line" style="color: #f39c12;"></i>
          <h3><a href="#">Comprehensive Notes</a></h3>
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
