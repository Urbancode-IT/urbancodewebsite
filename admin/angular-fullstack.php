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
        <h2>Master .NET + Angular Full Stack Development</h2>
        <p>Learn to build robust web applications with Angular, .NET Core, and SQL Server. Gain real-world experience and become a skilled full-stack developer.</p>
        <div class="d-flex">
          <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
            <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/angular-fullstack/angular-fullstack.jpg" class="img-fluid" style="border-radius: 55px;" alt=".NET + Angular Full Stack Development Course">
      </div>
    </div>
  </div>
</section>



<!-- /Hero Section -->
</main>

<div class="breadcrumbs-header">
  <nav>
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/courses">Courses</a></li>
        <li class="active"  id="course-id">.NET + Angular Full Stack Development</li>
      </ol>
    </div>
  </nav>
</div>





<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Comprehensive .NET + Angular Full Stack Development Curriculum</h5>
                <p class="pb-2">Join Urbancode's .NET + Angular Full Stack Development course to master the art of building dynamic, responsive, and scalable web applications. This course covers front-end development with Angular, back-end development with .NET Core, and database management with SQL Server. Gain hands-on experience with real-world projects, API integration, and modern deployment techniques. Our expert instructors will guide you in creating end-to-end applications while preparing you for in-demand career opportunities. With career support services like resume building, placement assistance, and access to a professional network, you’ll be ready to excel as a full-stack developer.</p>
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width: max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 80+ hrs Instructor-Led Training & Hands-on Projects</li>
                        <li><i class="fa-solid fa-briefcase"></i> Full-Stack Application Portfolio Development</li>
                        <li><i class="fa-solid fa-circle-info"></i> Personalized Mentor Support</li>
                        <li><i class="fa-solid fa-award"></i> Certificate of Proficiency in Full Stack Development</li>
                        <li><i class="fa-solid fa-handshake"></i> Placement Assistance for All Candidates</li>
                        <li class="w-100 text-center position-relative" style="margin-top: 25px;">
                            <button data-bs-toggle="modal" data-bs-target="#brochureModal" class="btn btn-get-started">Get Brochure</button>
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
                <!-- Introduction to Full Stack Development -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to Full Stack Development</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Overview of Front-End, Back-End, and Database</li>
                            <li>Role of Angular, .NET Core, and SQL Server</li>
                            <li>Setting Up the Development Environment</li>
                        </ol>
                    </div>
                </div>
                <!-- Front-End Development with Angular -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Front-End Development with Angular</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Introduction to Angular and SPA</li>
                            <li>Components, Templates, and Forms</li>
                            <li>Angular Material and Routing</li>
                            <li>CRUD Operations with REST APIs</li>
                        </ol>
                    </div>
                </div>
                <!-- Back-End Development with .NET Core -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Back-End Development with .NET Core</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Introduction to .NET Core and Web APIs</li>
                            <li>Dependency Injection and Middleware</li>
                            <li>Authentication and Authorization</li>
                            <li>Error Handling and Logging</li>
                        </ol>
                    </div>
                </div>
                <!-- Database Management with SQL Server -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Database Management with SQL Server</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>SQL Basics: DDL, DML, and DQL</li>
                            <li>Entity Framework Core: Code-First and Database-First</li>
                            <li>Building Relationships: One-to-One, One-to-Many</li>
                            <li>CRUD Operations with Entity Framework</li>
                        </ol>
                    </div>
                </div>
                <!-- Full Stack Integration -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Full Stack Integration</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Integrating Angular with .NET Core APIs</li>
                            <li>Persisting Data in SQL Server</li>
                            <li>Real-Time Updates with SignalR (optional)</li>
                        </ol>
                    </div>
                </div>
                <!-- Project and Portfolio Development -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Project and Portfolio Development</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Building Full-Stack Applications</li>
                            <li>Developing an Online Store or Task Management System</li>
                            <li>Creating a Professional Portfolio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section id="placement-program" class="placement-program section mb-5">
  <div class="container">
    <h2 class="text-center section-title"><span>1-Month</span> .NET + Angular Full Stack Placement Program:</h2>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="accordion" id="programLeft">
          <!-- Fundamentals of Full Stack Development -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseOne" aria-expanded="true" aria-controls="leftCollapseOne">
                Fundamentals of Full Stack Development (Week 1)
              </button>
            </h2>
            <div id="leftCollapseOne" class="accordion-collapse collapse show" aria-labelledby="leftHeadingOne" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>Introduction to Front-End, Back-End, and Databases</li>
                  <li>Overview of Angular, .NET Core, and SQL Server</li>
                  <li>Setting Up the Development Environment</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Angular Basics -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseTwo" aria-expanded="false" aria-controls="leftCollapseTwo">
                Angular Basics (Week 2)
              </button>
            </h2>
            <div id="leftCollapseTwo" class="accordion-collapse collapse" aria-labelledby="leftHeadingTwo" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>Introduction to Angular and SPA</li>
                  <li>Creating Components and Templates</li>
                  <li>Working with Forms and Validation</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Back-End Development with .NET Core -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseThree" aria-expanded="false" aria-controls="leftCollapseThree">
                Back-End Development with .NET Core (Week 3)
              </button>
            </h2>
            <div id="leftCollapseThree" class="accordion-collapse collapse" aria-labelledby="leftHeadingThree" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>Building RESTful APIs</li>
                  <li>Middleware and Dependency Injection</li>
                  <li>Authentication and Authorization with JWT</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Database Management with SQL Server -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="leftHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#leftCollapseFour" aria-expanded="false" aria-controls="leftCollapseFour">
                Database Management with SQL Server (Week 4)
              </button>
            </h2>
            <div id="leftCollapseFour" class="accordion-collapse collapse" aria-labelledby="leftHeadingFour" data-bs-parent="#programLeft">
              <div class="accordion-body">
                <ul>
                  <li>CRUD Operations with Entity Framework Core</li>
                  <li>Building Relationships and Migrations</li>
                  <li>Writing Advanced Queries</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="accordion" id="programRight">
          <!-- Full Stack Integration -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseOne" aria-expanded="false" aria-controls="rightCollapseOne">
                Full Stack Integration (Week 5)
              </button>
            </h2>
            <div id="rightCollapseOne" class="accordion-collapse collapse" aria-labelledby="rightHeadingOne" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Integrating Angular with .NET Core APIs</li>
                  <li>Persisting Data in SQL Server</li>
                  <li>Real-Time Updates with SignalR</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Real-World Projects -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseTwo" aria-expanded="false" aria-controls="rightCollapseTwo">
                Real-World Projects (Week 6)
              </button>
            </h2>
            <div id="rightCollapseTwo" class="accordion-collapse collapse" aria-labelledby="rightHeadingTwo" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Developing a Full-Stack Application</li>
                  <li>Case Studies and Best Practices</li>
                  <li>Portfolio Development</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Career Preparation -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseThree" aria-expanded="false" aria-controls="rightCollapseThree">
                Career Preparation (Week 7)
              </button>
            </h2>
            <div id="rightCollapseThree" class="accordion-collapse collapse" aria-labelledby="rightHeadingThree" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Resume and LinkedIn Optimization</li>
                  <li>Mock Interviews and Interview Prep</li>
                  <li>Job Search Strategies</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Placement Assistance -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="rightHeadingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rightCollapseFour" aria-expanded="false" aria-controls="rightCollapseFour">
                Placement Assistance (Week 8)
              </button>
            </h2>
            <div id="rightCollapseFour" class="accordion-collapse collapse" aria-labelledby="rightHeadingFour" data-bs-parent="#programRight">
              <div class="accordion-body">
                <ul>
                  <li>Connecting with Top Recruiters</li>
                  <li>Placement Drives and Career Support</li>
                  <li>Ongoing Guidance and Networking</li>
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
        <h2>Join Our Angular + .NET Full Stack Development Program!</h2>
        <p>Enroll today to master full-stack web development with Angular and .NET Core. Gain hands-on experience in building powerful, scalable applications using the latest technologies, and take the next step toward becoming a proficient full-stack developer.</p>
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
                <option selected>Angular + .NET Full Stack Development</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Why are you interested in Full Stack Development?"></textarea>
          </div>
          <button type="submit" class="btn-submit">Submit</button>
        </form>
        <div id="formResult"></div>
      </div>
      <div class="col-lg-6 text-center">
        <img src="images/courses/angular-fullstack/enroll.png" alt="Angular + .NET Full Stack Development Enroll" class="img-fluid animated">
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
    <p>Find answers to common questions about our .NET + Angular Full Stack Development Placement Program.</p>
</header>


<div class="faq-list">
  <ul>
    <li data-aos="fade-up" data-aos-delay="100">
      <i class="bi bi-question-circle icon-question"></i> 
      <a href="#" data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is the Angular Fullstack Development Program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
      <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
        <p>
          The Angular Fullstack Development Program is an advanced course that equips learners with the skills to build dynamic, high-performance web applications using Angular for the frontend and Node.js for the backend. This comprehensive program covers both frontend and backend technologies, preparing participants for fullstack development careers.
        </p>
      </div>
    </li>

    <li data-aos="fade-up" data-aos-delay="200">
      <i class="bi bi-question-circle icon-question"></i> 
      <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What topics are covered in the program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
      <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
        <p>
          The program covers Angular fundamentals, component architecture, directives, routing, and data binding. It also includes backend development with Node.js, Express, MongoDB, and RESTful APIs. Participants will gain hands-on experience with fullstack development through real-world projects and build a robust portfolio.
        </p>
      </div>
    </li>

    <li data-aos="fade-up" data-aos-delay="300">
      <i class="bi bi-question-circle icon-question"></i> 
      <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Who should enroll in this program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
      <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
        <p>
          This program is perfect for aspiring web developers, software engineers, and anyone interested in becoming a fullstack developer. Previous experience with JavaScript or frontend frameworks will be helpful, but is not required. A passion for building complete web applications is key.
        </p>
      </div>
    </li>

    <li data-aos="fade-up" data-aos-delay="400">
      <i class="bi bi-question-circle icon-question"></i> 
      <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What type of placement support is provided?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
      <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
        <p>
          We provide comprehensive placement support, including resume crafting, mock interviews, career counseling, and connecting you with top-tier tech companies hiring Angular fullstack developers.
        </p>
      </div>
    </li>

    <li data-aos="fade-up" data-aos-delay="500">
      <i class="bi bi-question-circle icon-question"></i> 
      <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How can I apply for the Angular Fullstack Development Program?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
      <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
        <p>
          To apply, visit our website and fill out the application form under the Angular Fullstack Development Program section. Our team will reach out to guide you through the admission process and provide additional details for enrollment.
        </p>
      </div>
    </li>
  </ul>
</div>




  </div>
</section><!-- End Frequently Asked Questions Section -->




<!-- <section class="student-bought">
    <div class="container-md">
        <div class="row">
            <div class="col-12 col-md-4 left pe-md-3 py-3 py-md-5">
                <div class="form-col">
                    <h4 class="mb-4 text-white">Guide Videos</h4>  
                </div>
            </div>
            <div class="col-12 col-md-8 right py-3 py-md-5">
                <div class="slide-col ps-md-3">
                    <h4 class="text-white">Students also bought</h4>
                    <div class="bought-slider mt-3 mt-md-4">
                        <div class="col-lg-12">
                            <div class="card w-100">
                                <img class="card-img-top" src="images/new-launch1.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>The Complete Python Bootcamp From Zero to Hero...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>Ultimate AWS Certified Solutions Architect Associate...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card w-100">
                                <img class="card-img-top img-fluid" src="images/new-launch1.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>The Complete Python Bootcamp From Zero to Hero...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card w-100">
                                <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                                <div class="card-body">
                                    <p>Ultimate AWS Certified Solutions Architect Associate...</p>
                                    <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                                    <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section> -->



<?php 
include 'inc/related.php'; 
include 'inc/footer.php';
?>
