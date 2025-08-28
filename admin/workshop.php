<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<!-- ======= Workshop ======= -->
<style>
#hero .container {
    margin-top: 60px; /* Adjust the value as needed */
}

  </style>

<section id="hero" class="hero section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Transform Your Skills at Our Workshop</h1>
        <p>Join a hands-on workshop where you'll gain practical experience, connect with experts, and enhance your skillset in a collaborative environment.</p>
        <div class="d-flex">
          <!-- Add any call to action buttons or links here if necessary -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="image\workshop.jpg" class="" style="border-radius: 55px;" alt="Workshop Image">
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

<section class="workshop-section mt-4">
    <div class="container">
        <header class="section-header">
            <h3>Upcoming Workshops</h3>
            <p>Join our hands-on workshops and gain practical skills and knowledge from industry experts.</p>
        </header>
        <div class="row">
            <!-- Workshop 1 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/courses/digital-marketing/digital-marketing.jpg" class="card-img-top" alt="Workshop 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Digital Marketing Workshop</h5>
                        <p><strong>Date:</strong> November 10, 2024</p>
                        <p><strong>Time:</strong> 10:00 AM - 1:00 PM</p>
                        <a href="digital-marketing-workshop.php" class="btn btn-primary">Open Workshop</a>
                    </div>
                </div>
            </div>

            <!-- Workshop 2 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/courses/ielts/ielts.jpg" class="card-img-top" alt="Workshop 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">IELTS Workshop</h5>
                        <p><strong>Date:</strong>  November 10, 2024</p>
                        <p><strong>Time:</strong> 2:00 PM - 5:00 PM</p>
                        <a href="ielts-workshop.php" class="btn btn-primary">Open Workshop</a>
                    </div>
                </div>
            </div>

            <!-- Workshop 3 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/courses/toefl/toefl.jpg" class="card-img-top" alt="Workshop 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">TOEFL Exam Prep</h5>
                        <p><strong>Date:</strong> November 10, 2024</p>
                        <p><strong>Time:</strong> 9:00 AM - 12:00 PM</p>
                        <a href="toefl-workshop.php" class="btn btn-primary">Open Workshop</a>
                    </div>
                </div>
            </div>

            <!-- Workshop 4 -->
            <!-- <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <img src="images/workshops/workshop4.jpg" class="card-img-top" alt="Workshop 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Workshop on Cloud Computing</h5>
                        <p><strong>Date:</strong> October 26, 2024</p>
                        <p><strong>Time:</strong> 11:00 AM - 2:00 PM</p>
                        <a href="#workshop-details" class="btn btn-primary">Open Workshop</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
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
      <h3>Workshop Benefits</h3>
      <p>Gain practical skills and expert knowledge through our immersive workshops designed to enhance your professional and personal growth.</p>
    </header>

    <div class="row">
      <!-- Feature 1 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-tools-line" style="color: #ffbb2c;"></i>
          <h3><a href="#">Hands-on Learning</a></h3>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-book-open-line" style="color: #5578ff;"></i>
          <h3><a href="#">Expert-Led Sessions</a></h3>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-team-line" style="color: #e80368;"></i>
          <h3><a href="#">Networking Opportunities</a></h3>
        </div>
      </div>

      <!-- Feature 4 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-brain-line" style="color: #e361ff;"></i>
          <h3><a href="#">Skill Development</a></h3>
        </div>
      </div>

      <!-- Feature 5 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-file-list-2-line" style="color: #47aeff;"></i>
          <h3><a href="#">Workshop Materials & Resources</a></h3>
        </div>
      </div>

      <!-- Feature 6 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-certificate-line" style="color: #ffa76e;"></i>
          <h3><a href="#">Certification of Completion</a></h3>
        </div>
      </div>

      <!-- Feature 7 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-lightbulb-line" style="color: #11dbcf;"></i>
          <h3><a href="#">Innovative Techniques</a></h3>
        </div>
      </div>

      <!-- Feature 8 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-calendar-event-line" style="color: #4233ff;"></i>
          <h3><a href="#">Flexible Scheduling</a></h3>
        </div>
      </div>

      <!-- Feature 9 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-user-heart-line" style="color: #b2904f;"></i>
          <h3><a href="#">Personalized Feedback</a></h3>
        </div>
      </div>

      <!-- Feature 10 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-pencil-ruler-line" style="color: #b20969;"></i>
          <h3><a href="#">Interactive Projects</a></h3>
        </div>
      </div>

      <!-- Feature 11 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-presentation-line" style="color: #ff5828;"></i>
          <h3><a href="#">Presentation Opportunities</a></h3>
        </div>
      </div>

      <!-- Feature 12 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-discussion-line" style="color: #29cc61;"></i>
          <h3><a href="#">Group Discussions & Collaborations</a></h3>
        </div>
      </div>

      <!-- Feature 13 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-chat-3-line" style="color: #cd67f9;"></i>
          <h3><a href="#">1-on-1 Mentorship</a></h3>
        </div>
      </div>

      <!-- Feature 14 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-calendar-check-line" style="color: #2ecc71;"></i>
          <h3><a href="#">Post-Workshop Support</a></h3>
        </div>
      </div>

      <!-- Feature 15 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-file-paper-line" style="color: #f39c12;"></i>
          <h3><a href="#">Workshop Documentation</a></h3>
        </div>
      </div>

      <!-- Feature 16 -->
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
