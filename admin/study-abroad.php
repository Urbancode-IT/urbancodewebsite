<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<!-- =======  Study Abroad ======= 

<div class="breadcrumbs-header">
  <div class="page-header d-flex align-items-center" >
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Study Abroad</h2>
          <!-- <p>Discover opportunities to study abroad and expand your horizons. Explore new cultures, gain international experience, and enhance your academic journey with our comprehensive study abroad programs.</p> 
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol>
        <li><a href="/">Home</a></li>
        <li>Study Abroad</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->

<style>
#hero .container {
    margin-top: 60px; /* Adjust the value as needed */
}

  </style>
<section id="hero" class="hero section">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
         <h1>Explore the world, Expand Your Horizons</h1>
        <p>Embark on a transformative journey by studying abroad and experiencing new cultures.</p>
        <div class="d-flex">
          
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" >
        <img src="image\StudyAbroad.jpg" class=" " style="border-radius: 55px;" alt="">
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

<section class="study-abroad-section mt-4">
    <div class="container">
            <header class="section-header">
                <h3>Discover study abroad countries</h3>
                <p>Explore our detailed breakdowns of the study abroad destinations around the world!</p>
            </header>
        <div class="row">
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/usa.avif" class="card-img-top" alt="USA">
                    <div class="card-body text-center">
                        <h5 class="card-title">USA</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in USA</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/canada.avif" class="card-img-top" alt="Canada">
                    <div class="card-body text-center">
                        <h5 class="card-title">Canada</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Canada</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/uk.avif" class="card-img-top" alt="UK">
                    <div class="card-body text-center">
                        <h5 class="card-title">UK</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in UK</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/australiay.jpg" class="card-img-top" alt="Australia">
                    <div class="card-body text-center">
                        <h5 class="card-title">Australia</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Australia</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/zealand.webp" class="card-img-top" alt="New Zealand">
                    <div class="card-body text-center">
                        <h5 class="card-title">New Zealand</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in New Zealand</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/ireland.jpg" class="card-img-top" alt="Ireland">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ireland</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Ireland</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/spain.jpg" class="card-img-top" alt="Spain">
                    <div class="card-body text-center">
                        <h5 class="card-title">Spain</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Spain</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/england.webp" class="card-img-top" alt="Denmark">
                    <div class="card-body text-center">
                        <h5 class="card-title">Denmark</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Denmark</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/belgiun.jpg" class="card-img-top" alt="Belgium">
                    <div class="card-body text-center">
                        <h5 class="card-title">Belgium</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Belgium</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/japan.jpg" class="card-img-top" alt="Hungary">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hungary</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Hungary</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/singapore.jpg" class="card-img-top" alt="Singapore">
                    <div class="card-body text-center">
                        <h5 class="card-title">Singapore</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Singapore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/dubai.jpg" class="card-img-top" alt="Dubai">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dubai</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Dubai</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/germany.avif" class="card-img-top" alt="Germany">
                    <div class="card-body text-center">
                        <h5 class="card-title">Germany</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Germany</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/france.avif" class="card-img-top" alt="France">
                    <div class="card-body text-center">
                        <h5 class="card-title">France</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in France</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/netherlands.jpg" class="card-img-top" alt="Netherlands">
                    <div class="card-body text-center">
                        <h5 class="card-title">Netherlands</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Netherlands</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/swedan.webp" class="card-img-top" alt="Sweden">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sweden</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Sweden</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/finland.jpg" class="card-img-top" alt="Finland">
                    <div class="card-body text-center">
                        <h5 class="card-title">Finland</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Finland</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card">
                    <img src="images/abroad/italy.jpg" class="card-img-top" alt="Italy">
                    <div class="card-body text-center">
                        <h5 class="card-title">Italy</h5>
                        <a href="#study-abroad" class="btn btn-primary">Study in Italy</a>
                    </div>
                </div>
            </div>
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
  <h3>Free Premium Services</h3>
  <p>Enjoy top-notch personalized guidance and comprehensive support at no extra cost.</p>
</header>


    <div class="row">
      <!-- Feature 1 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-percent-line" style="color: #ffbb2c;"></i>
          <h3><a href="#">100% Scholarship Offers</a></h3>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-passport-line" style="color: #5578ff;"></i>
          <h3><a href="#">99% Visa Success Rate</a></h3>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-hand-coin-line" style="color: #e80368;"></i>
          <h3><a href="#">Education Loan Assistance</a></h3>
        </div>
      </div>

      <!-- Feature 4 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-building-line" style="color: #e361ff;"></i>
          <h3><a href="#">University Application Processing</a></h3>
        </div>
      </div>

      <!-- Feature 5 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-file-list-line" style="color: #47aeff;"></i>
          <h3><a href="#">Complete Visa Documentation & Filing</a></h3>
        </div>
      </div>

      <!-- Feature 6 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-guide-line" style="color: #ffa76e;"></i>
          <h3><a href="#">Experienced Guidance on SOPs, LORs & Resume</a></h3>
        </div>
      </div>

      <!-- Feature 7 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-hotel-line" style="color: #11dbcf;"></i>
          <h3><a href="#">Accommodation & Part-Time Job Search assistance globally</a></h3>
        </div>
      </div>

      <!-- Feature 8 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-briefcase-line" style="color: #4233ff;"></i>
          <h3><a href="#">Job Referrals Post Study through our extensive network of alumni</a></h3>
        </div>
      </div>

      <!-- Feature 9 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-user-star-line" style="color: #b2904f;"></i>
          <h3><a href="#">Free personalized Admission & Scholarship guidance by experts</a></h3>
        </div>
      </div>

      <!-- Feature 10 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-profile-line" style="color: #b20969;"></i>
          <h3><a href="#">Detailed Profiling</a></h3>
        </div>
      </div>

      <!-- Feature 11 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-search-2-line" style="color: #ff5828;"></i>
          <h3><a href="#">Program Selection</a></h3>
        </div>
      </div>

      <!-- Feature 12 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-list-unordered" style="color: #29cc61;"></i>
          <h3><a href="#">University Shortlisting</a></h3>
        </div>
      </div>

      <!-- Feature 13 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-draft-line" style="color: #cd67f9;"></i>
          <h3><a href="#">Preparing SOP/LORs/Admission Essays</a></h3>
        </div>
      </div>

      <!-- Feature 14 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-edit-box-line" style="color: #2ecc71;"></i>
          <h3><a href="#">Application Filling</a></h3>
        </div>
      </div>

      <!-- Feature 15 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-mail-send-line" style="color: #f39c12;"></i>
          <h3><a href="#">Follow-up with Institutions for Admit Letters</a></h3>
        </div>
      </div>

      <!-- Feature 16 -->
      <div class="col-lg-3 col-md-4 col-6 mt-4">
        <div class="icon-box">
          <i class="ri-money-dollar-box-line" style="color: #3498db;"></i>
          <h3><a href="#">Educational Loan Visa Filing</a></h3>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Features Section -->

<section class="payment-area py-3 py-md-5" style="background-color: #E7EDF6;" id="study-abroad">
    <div class="container">        
    <div class="card p-4">
            <h4 class="text-center" style="color:#000000;">Register Here</h4>
            <p class="text-center pb-2">Allow us to assist you better, Fill in the enquiry form</p>
        
        <form id="study-form" class="mt-2 mt-md-4">     
            
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Name<span>*</span></label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Email Id<span>*</span></label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Phone No<span>*</span></label>
                        <input type="number" class="form-control" name="phone" id="phone">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Current Educational Level<span>*</span></label>
                        <input type="text" class="form-control" name="edu_level" id="edu_level">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Field of Study/Interest<span>*</span></label>
                        <input type="text" class="form-control" name="field_interest" id="field_interest">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Current Institution/University<span>*</span></label>
                        <input type="text" class="form-control" name="current_institute" id="current_institute">
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Admission Intake<span>*</span></label>
                        <select class="form-control"  name="intake" id="intake">
                            <option value="winter">(Winter Intake) Jan</option>
                            <option value="summer">(Summer Intake) May</option>
                            <option value="fall">(Fall Intake) Sept</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Preferred Country of Interest<span>*</span></label>
                            <select class="form-control" name="country_interes" id="country_interes">
                                <option value="USA">USA</option>
                                <option value="Canada">Canada</option>
                                <option value="UK">UK</option>
                                <option value="Australia">Australia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Spain">Spain</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Dubai">Dubai</option>
                                <option value="Germany">Germany</option>
                                <option value="France">France</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Finland">Finland</option>
                                <option value="Italy">Italy</option>
                            </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">Preferred Course(s) of Study<span>*</span></label>
                        <input type="text" class="form-control" name="preferred_course" id="preferred_course">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3 mb-md-4">
                        <label for="">TOFEL/ IELTS/ PTE Score<span>*</span></label>
                        <div class="d-flex">
                            <div class="sep me-5"><input type="radio" name="score" value="yes"> <label>Yes</label></div>
                            <div class="sep"><input type="radio" name="score" value="no"> <label>No</label></div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 selection-score">
                    <div class="form-group mb-3 mb-md-4 yes" style="display:none;">
                        <label for="one">If Yes, Score<span>*</span></label>
                        <input type="number" class="form-control" name="yes" id="one">
                    </div>
                    <div class="form-group mb-3 mb-md-4 no" style="display:none;">
                        <label for="two">If No, Do you need training in TOFEL/ IELTS/ PTE?<span>*</span></label>
                        <input type="text" class="form-control" id="two" name="no">
                    </div>
                </div>
            </div>
        <div class="text-center">                       
            <a href="javascript:;" class="btn btn-primary px-4 py-2 site" onclick="sendEmail()">Register</a>
        <div>    
        </form> 
    </div>
    </div>
</section> 

<script>
  function sendEmail() {
    let params = {
    from_name: "UrbanCode",
    to_name: "Admin",
    reply_to: "admin@urbancode.in",
    message: `New Study Abroad Student Enrollment Details:
              Name: ${document.getElementById('name').value}
              Email: ${document.getElementById('email').value}
              Phone: ${document.getElementById('phone').value}
              Current Educational Level: ${document.getElementById('edu_level').value}
              Field of Study/Interest: ${document.getElementById('field_interest').value}
              Current Institution/University: ${document.getElementById('current_institute').value}
              Admission Intake: ${document.getElementById('intake').value}
              Preferred Country of Interest: ${document.getElementById('country_interes').value}
              Preferred Course(s) of Study: ${document.getElementById('preferred_course').value}
              TOFEL/IELTS/PTE Score: ${document.querySelector('input[name="score"]:checked')?.value}
              If Yes, Score: ${document.getElementById('one')?.value || 'N/A'}
              If No, Training Required: ${document.getElementById('two')?.value || 'N/A'}`,
    name: document.getElementById('name').value,
    email: document.getElementById('email').value,
    phone: document.getElementById('phone').value,
    edu_level: document.getElementById('edu_level').value,
    field_interest: document.getElementById('field_interest').value,
    current_institute: document.getElementById('current_institute').value,
    intake: document.getElementById('intake').value,
    country_interes: document.getElementById('country_interes').value,
    preferred_course: document.getElementById('preferred_course').value,
    score: document.querySelector('input[name="score"]:checked')?.value,
    score_yes: document.getElementById('one')?.value || 'N/A',
    score_no: document.getElementById('two')?.value || 'N/A'
};


    emailjs.send('service_fzvsd7q', 'template_vrsr0af', params)
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
<style>
    .form-group label {
        font-weight: bold;
    }

    .form-group input, .form-group select {
        border-radius: 5px;
        padding: 10px;
        font-size: 16px;
    }

    .form-group input:focus, .form-group select:focus {
        outline: none;
        border-color: #01af6a;
        box-shadow: 0 0 5px rgba(1, 175, 106, 0.5);
    }

    .btn-primary:hover {
        background-color: #018c53;
        border-color: #018c53;
    }

    .d-flex .sep {
        margin-right: 20px;
    }

    .d-flex .sep input {
        margin-right: 5px;
    }

    #study-abroad .card {
        background-color: white;
        border: 1px solid #01af6a;
        border-radius: 10px;
    }

    @media (max-width: 767px) {
        .form-group label {
            font-size: 14px;
        }

        .form-group input, .form-group select {
            font-size: 14px;
            padding: 8px;
        }

        .btn-primary {
            font-size: 14px;
            padding: 8px 16px;
        }
    }
</style>



<?php include 'inc/footer.php';?>
