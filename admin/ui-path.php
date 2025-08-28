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
        <h1>Become a Pro at UI Path Automation</h1>
        <p>Enhance your automation capabilities with in-depth UI Path training. Learn to design, deploy, and manage software robots that mimic human actions to perform complex tasks. Unlock efficiency and innovation in your workflows.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
            <!-- Pay Now Button -->
          <a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/ui-path/ui-path.jpg" class="img-fluid" style="border-radius: 55px;" alt="UI Path Course">
      </div>
    </div>
  </div>
</section><!-- /Hero Section -->
</main>

<div class="breadcrumbs-header">
  <nav>
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/courses">Courses</a></li>
        <li class="active" id="course-id">UI Path</li> 
      </ol>
    </div>
  </nav>
</div>


<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">In-Depth UI Path RPA Developer Training</h5>
                <p class="pb-2">This UI Path RPA Developer course is designed for professionals looking to excel in robotic process automation (RPA) using UI Path. It covers foundational to advanced topics such as designing automation workflows, orchestrating bots, handling exceptions, and deploying RPA solutions in real-world scenarios. Gain practical skills in UI Path Studio, Orchestrator, and REFramework to streamline processes and enhance productivity across various industries.</p>
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 60 hrs Instructor-Led Training & Hands-on Projects</li>
                        <li><i class="fa-solid fa-briefcase"></i> Career Transition Assistance</li>
                        <li><i class="fa-solid fa-circle-info"></i> Expert Mentorship</li>
                        <li><i class="fa-solid fa-award"></i> Accredited Certification</li>
                        <li><i class="fa-solid fa-handshake"></i> Direct Placement Opportunities</li>
                        <li class="w-100 text-center position-relative" style="margin-top: 25px;">
                        <button  data-bs-toggle="modal" data-bs-target="#brochureModal" class="btn btn-get-started">Get Brochure</button>
                        </li>
                    </ul>          
                </div>
            </div>
        </div>   
    </div>
</section>


<section class="accordion pb-3 pb-md-5">
    <div class="container">
        <h4 style="color:#000000;">Course Content</h4>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">UI Path Fundamentals</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to RPA and UI Path</li>
                            <li>Understanding UI Path Studio Interface</li>
                            <li>Overview of RPA Lifecycle</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Workflow Design</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Sequences, Flowcharts, and State Machines</li>
                            <li>Activity Panels and Control Features</li>
                            <li>Best Practices in Workflow Design</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Automation with UI Path</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Automating Desktop Applications</li>
                            <li>Web Automation Techniques</li>
                            <li>Data Scraping and Screen Scraping</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Data Manipulation and Debugging</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Managing Variables and Data Types</li>
                            <li>Error Handling and Troubleshooting</li>
                            <li>Debugging Tools in UI Path</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Orchestrator in UI Path</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Introduction to Orchestrator</li>
                            <li>Queue Management</li>
                            <li>Asset and Robot Management</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced UI Path Features</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Building Complex Workflows</li>
                            <li>Introduction to REFramework</li>
                            <li>Utilizing AI Fabric and Document Understanding</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>               
    </div>
</section>
 

<section id="placement-program" class="placement-program section mb-5">
  <div class="container">
    <h2 class="text-center section-title"><span>3-Month</span> UI Path RPA Placement Program:</h2>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="accordion" id="programLeft">
          <!-- RPA Foundations -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseOne" aria-expanded="true" aria-controls="leftCollapseOne">
                RPA Foundations (Month 1)
              </button>
            </h2>
            <div id="leftCollapseOne" class="accordion-collapse collapse show" aria-labelledby="leftHeadingOne" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>Introduction to RPA, its benefits, and applications.</li>
                  <li>Understanding UI Path Studio, Activities, and Workflow Design.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Orchestrator and Automation Projects -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseTwo" aria-expanded="false" aria-controls="leftCollapseTwo">
                Orchestrator and Automation Projects (Month 2)
              </button>
            </h2>
            <div id="leftCollapseTwo" class="accordion-collapse collapse" aria-labelledby="leftHeadingTwo" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>Setting up and managing the Orchestrator for process automation.</li>
                  <li>Developing practical automation projects using real-world scenarios.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Advanced UI Path Techniques -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseThree" aria-expanded="false" aria-controls="leftCollapseThree">
                Advanced UI Path Techniques (Month 3)
              </button>
            </h2>
            <div id="leftCollapseThree" class="accordion-collapse collapse" aria-labelledby="leftHeadingThree" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>Exploring REFramework, PDF Automation, and Email Automation.</li>
                  <li>Implementing AI capabilities in UI Path processes.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="accordion" id="programRight">
          <!-- Data Management in RPA -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseOne" aria-expanded="false" aria-controls="rightCollapseOne">
                Data Management in RPA (Month 1)
              </button>
            </h2>
            <div id="rightCollapseOne" class="accordion-collapse collapse" aria-labelledby="rightHeadingOne" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Understanding data types and their manipulation within UI Path.</li>
                  <li>Integrating different data sources and using data tables efficiently.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Troubleshooting and Debugging -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseTwo" aria-expanded="false" aria-controls="rightCollapseTwo">
                Troubleshooting and Debugging (Month 2)
              </button>
            </h2>
            <div id="rightCollapseTwo" class="accordion-collapse collapse" aria-labelledby="rightHeadingTwo" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Techniques for identifying and resolving issues in automation workflows.</li>
                  <li>Best practices for maintaining robust and error-free RPA deployments.</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Career Preparation and Placement Assistance -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseThree" aria-expanded="false" aria-controls="rightCollapseThree">
                Career Preparation and Placement Assistance (Month 3)
              </button>
            </h2>
            <div id="rightCollapseThree" class="accordion-collapse collapse" aria-labelledby="rightHeadingThree" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Resume and cover letter optimization tailored for RPA roles.</li>
                  <li>Effective job search strategies and interview preparation specifically for RPA job roles.</li>
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
        <h2>Join Our UI Path RPA Placement Program: Propel Your Automation Career!</h2>
        <p>Register today to embark on your career in robotic process automation. Learn from seasoned professionals and acquire essential skills to thrive in the evolving world of RPA.</p>
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
                <option selected>UI Path RPA Placement Program</option>
                <!-- Add more specific course options related to different aspects of UI Path RPA as needed -->
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Share your interest in RPA and UI Path"></textarea>
          </div>
          <button type="submit" class="btn-submit">Submit</button>
        </form>
        <div id="formResult"></div>
      </div>
      <div class="col-lg-6 text-center">
        <img src="images/courses/ui-path/enroll.svg" alt="UI Path RPA Enroll Image" class="img-fluid animated">
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
        <p>Discover answers to frequently asked questions about our UI Path RPA Placement Program.</p>
     </header>

     <div class="faq-list">
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is the UI Path RPA Placement Program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              The UI Path RPA Placement Program is a comprehensive training initiative designed to equip individuals with the essential skills and knowledge required for robotic process automation. Participants will gain practical experience with the UI Path platform, mastering the automation of business processes across various systems.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What topics are covered in the program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              The program covers a variety of topics including fundamentals of RPA, workflow design using UI Path Studio, orchestrator management, automation of desktop and web applications, data manipulation, and introduction to advanced UI Path features such as document understanding and AI integration.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Who should enroll in this program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              This program is ideal for professionals aiming to enhance their automation skills, IT professionals seeking career transitions into RPA, or new graduates interested in entering the automation field. A basic understanding of programming concepts can be helpful but is not mandatory.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What type of placement support is provided?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              We offer extensive placement support that includes resume reviews, interview preparation, access to job portals, and direct referrals to our network of industry partners actively seeking skilled RPA professionals. Our goal is to ensure you are fully prepared to enter the job market as a certified RPA specialist.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How can I apply for the UI Path RPA Placement Program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              To apply for the program, simply visit our website and navigate to the UI Path RPA Placement Program section. Fill out the application form, and one of our admissions advisors will contact you to discuss your application and next steps.
            </p>
          </div>
        </li>
      </ul>
    </div>

  </div>
</section><!-- End Frequently Asked Questions Section -->

<?php 
include 'inc/footer.php';
?>
