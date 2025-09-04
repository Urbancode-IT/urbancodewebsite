<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Bootstrap (optional for utility classes) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

<style>
  .feedback-section {
    background-color: #eaf8f6;
    padding: 80px 20px;
    font-family: 'Segoe UI', sans-serif;
    position: relative;
    overflow: hidden;
  }

  .feedback-header .stars {
    color: #ffc107;
    font-size: 1.4rem;
    letter-spacing: 2px;
  }

  .feedback-header .score {
    font-size: 1.3rem;
    font-weight: bold;
    color: #000;
  }

  .feedback-header .main-heading {
    font-size: 2.8rem;
    font-weight: 700;
    color: #000;
  }

  .feedback-header .highlight {
    color: #000;
  }

  .feedback-header .emoji {
    font-size: 2rem;
  }

  .feedback-header .likes {
    font-weight: 600;
    margin-top: 8px;
    color: #000;
  }

  .testimonial-card {
    background: white;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.08);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden;
    transition: transform 0.3s;
    height: 100%;
  }

  .testimonial-card:hover {
    transform: translateY(-5px);
  }

  .testimonial-card .stars {
    color: #ffc107;
    font-size: 1rem;
    margin-bottom: 8px;
  }

  .testimonial-card .title {
    font-weight: bold;
    font-size: 1.1rem;
    margin-bottom: 10px;
    color: #000;
  }

  .testimonial-card .message {
    font-size: 0.95rem;
    color: #333;
    line-height: 1.5;
  }

  .testimonial-card .read-more {
    display: inline-block;
    color: #00ae69;
    font-weight: bold;
    cursor: pointer;
    font-size: 0.85rem;
    margin-top: 8px;
  }

  .testimonial-card .user {
    margin-top: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    display: flex;
    justify-content: space-between;
    color: #444;
  }

  .swiper {
    padding: 20px 0;
  }

  .swiper-slide {
    height: auto !important;
    display: flex;
    align-items: stretch;
  }

  .floating-emojis span {
    position: absolute;
    font-size: 1.5rem;
    animation: floatEmoji 6s linear infinite;
    opacity: 0.8;
  }

  .floating-emojis span:nth-child(1) { top: 10%; left: 5%; animation-delay: 0s; }
  .floating-emojis span:nth-child(2) { top: 50%; left: 90%; animation-delay: 1s; }
  .floating-emojis span:nth-child(3) { top: 75%; left: 10%; animation-delay: 2s; }
  .floating-emojis span:nth-child(4) { top: 30%; left: 80%; animation-delay: 3s; }
  .floating-emojis span:nth-child(5) { top: 60%; left: 30%; animation-delay: 4s; }

  @keyframes floatEmoji {
    0% { transform: translateY(0) rotate(0); }
    50% { transform: translateY(-10px) rotate(10deg); }
    100% { transform: translateY(0) rotate(-10deg); }
  }
</style>







<section id="feedback" class="feedback-section">
  <div class="container text-center position-relative">
    
    <!-- Floating Emojis -->
    <div class="floating-emojis">
      <span>✨</span><span>💬</span><span>❤️</span><span>🎉</span><span>🧡</span>
    </div>

    <!-- Heading -->
    <!-- <div class="feedback-header">
      <div class="rating">
        <span class="stars">★★★★★</span>
        <span class="score">4.9</span>
      </div>
      <h2 class="main-heading">They love <span class="highlight">us</span>! <span class="emoji">🥰</span></h2>
      <div class="likes">❤️ 12k</div>
    </div> -->

    <!-- Swiper -->
    <!-- <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php 
        $sql = "SELECT * FROM testimonials";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($testimonial = $result->fetch_assoc()): ?>
              <div class="swiper-slide">
                <div class="testimonial-card mt-3">
                  <div class="stars">★★★★★</div>
                  <h3 class="title"><?php echo $testimonial['title']; ?></h3>
                  <p class="message">
                    <?php echo substr($testimonial['message'], 0, 180); ?>
                    <?php if (strlen($testimonial['message']) > 180): ?>
                      <span class="more-text" style="display: none;"><?php echo substr($testimonial['message'], 180); ?></span>
                      <span class="read-more">Read More</span>
                    <?php endif; ?>
                  </p>
                  <div class="user">
                    <span class="country"><?php echo strtoupper($testimonial['country']); ?></span>
                    <span class="name"><?php echo strtoupper($testimonial['name']); ?></span>
                  </div>
                </div>
              </div>
        <?php endwhile;
        } else {
            echo '<p>No testimonials found.</p>';
        } ?>
      </div>
      
    </div> -->
    <div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <?php 
    $sql = "SELECT * FROM testimonials";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($testimonial = $result->fetch_assoc()):
            $title = isset($testimonial['title']) ? $testimonial['title'] : '';
            $message = isset($testimonial['message']) ? $testimonial['message'] : '';
            $country = isset($testimonial['country']) ? strtoupper($testimonial['country']) : '';
            $name = isset($testimonial['name']) ? strtoupper($testimonial['name']) : '';
    ?>
      <div class="swiper-slide">
        <div class="testimonial-card mt-3">
          <div class="stars">★★★★★</div>
          <?php if (!empty($title)): ?>
            <h3 class="title"><?php echo htmlspecialchars($title); ?></h3>
          <?php endif; ?>

          <p class="message">
            <?php echo htmlspecialchars(substr($message, 0, 180)); ?>
            <?php if (strlen($message) > 180): ?>
              <span class="more-text" style="display: none;"><?php echo htmlspecialchars(substr($message, 180)); ?></span>
              <span class="read-more">Read More</span>
            <?php endif; ?>
          </p>

          <div class="user">
            <?php if (!empty($country)): ?>
              <span class="country"><?php echo $country; ?></span>
            <?php endif; ?>
            <?php if (!empty($name)): ?>
              <span class="name"><?php echo $name; ?></span>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endwhile;
    } else {
        echo '<p>No testimonials found.</p>';
    } ?>
  </div>
</div>

  </div>
</section>





  <!-- Swiper JS -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Your existing JS files -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper('.mySwiper', {
        speed: 600,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        slidesPerView: 3, // Show 3 slides per view
        spaceBetween: 20,
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          1200: {
            slidesPerView: 3,
            spaceBetween: 20
          }
        }
      });
    });
  </script>


<!-- ======= Frequently Asked Questions Section ======= -->
<!-- <section id="faq" class="faq section-bg">
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
          <p>Find answers to common questions about Urbancode's courses and programs.</p>
        </header>

    <div class="faq-list">
      <ul>
        
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Why Urbancode?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              Urbancode is a leading platform offering a wide range of professional courses designed to help individuals advance their careers. We provide training in various fields such as technology, languages, creative arts, and more, available both online and offline.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What courses does Urbancode offer?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Urbancode offers a wide range of courses including SQL, SAS, Core Python, Core Java, Angular JS, UI/UX, HTML5, Teradata, PowerApps, PySpark, Hadoop, AWS, GCP, Azure, Power BI, Tableau, Alteryx, Selenium, Selenium with Python, Ethical Hacking, Cyber Security, R Programming, Python ChatGPT, AI & ML, Digital Marketing, Full Stack Development, Photoshop, Graphics, Canvas, FIGMA, Japanese, MS Office, Spanish, Spoken English, App Inventor, Python Jr, Scratch, Web Design, Creative Writing, Book Reading Club, German, French, IELTS, TOEFL, OET, and Medical Coding.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Who are the instructors at Urbancode?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Our courses are taught by industry experts with extensive experience in their respective fields. They provide hands-on training and real-world project experience to ensure you gain practical knowledge and skills.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Do Urbancode courses provide certification?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Yes, upon completion of our courses, you will receive a certification that is recognized by industry professionals. This certification can enhance your resume and help you stand out in the job market.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-question-circle icon-question"></i> <a href="#" data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">How can I enroll in an Urbancode course?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
              You can enroll in any of our courses by visiting our website, selecting the course you're interested in, and following the enrollment instructions. If you have any questions, our support team is available to assist you.
            </p>
          </div>
        </li>

      </ul>
    </div>

  </div> -->
<!-- </section> -->
<!-- End Frequently Asked Questions Section -->


<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>To Know more about our courses</h4>
            
            <!-- <form action="" method="post">
              <input type="email" name="email"><input type="submit" class="btn bth-success" value="Download Brochure">
            </form> -->
            <form>
              
              <button type="button" class="btn btn-success" onclick="document.querySelector('.brochure_popup').style.display='block';">Download Brochure</button>
            </form>

          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info footer-links">
            <img src="images/footer-logo.webp" alt="Logo" style="width:225px; margin-bottom:15px;">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="/about">About us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="/contact-us">Contact us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="https://blog-urbancode.blogspot.com/">Blog</a></li>   
                <li><i class="bi bi-chevron-right"></i> <a href="/privacy-policy">Privacy policy</a></li>
              </ul>  
    
              <div class="social-links mt-3">
                <a href="https://wa.me/919025059775?text=Hello,%20I'm%20interested%20in%20learning%20more%20about%20your%20courses.%20Can%20you%20provide%20more%20information?" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61563183054002" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/urbancode_edutech/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.youtube.com/@UrbancodeTraining" class="youtube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.linkedin.com/company/urbanc0de/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Demand Software Courses</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/full-stack">MERN Stack </a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/full-stack">MEAN Stack </a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/full-stack">Python Stack </a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/angular-fullstack">.NET + Angular Full Stack</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/data-science">Data Analytics</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/aws">AWS cloud computing course</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/digital-marketing">Software Testing</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Kids Courses</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/full-stack">Core Python </a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/angular-fullstack">AI & ML for Kids</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/data-science">Web Development For Kids</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/data-science">Graphic Designing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/data-science">C Programming</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/data-science">SQL</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/data-science">C++</a></li>
            </ul>
          </div>



        <!--  <div class="col-lg-3 col-md-6 footer-links">
            <h4>Demand Courses</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/software-testing">Automation Testing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/web-development">MERN & MEAN</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/react-native">React Native</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/cloud-devops">AWS DevOps</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/power-bi">Power BI & SQL</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/python">Python</a></li>
            </ul>
          </div>
          --->
          <div class="col-lg-3 col-md-6 footer-links">
             <h4>Internships</h4>
             <ul>
             <li><i class="bi bi-chevron-right"></i> <a href="/full-stack">Software Testing Internsip</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/angular-fullstack">Web Development Internship</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/data-science">Digital Marketing Internship</a></li>
            </ul>
  </div>

        </div>
      </div>
    </div>
      <div class="copyright">
        Copyright &copy; <?php echo date("Y"); ?> <strong><span>Urbancode Edutech Solutions Private Limited</span></strong>. All rights reserved.
      </div>
      <!-- <div class="credits">
        Made with <span>❤️</span><a href="https://www.linkedin.com/in/coding-ranjith"> Coding Ranjith</a>
      </div> -->
    </div>
  </footer><!-- End Footer -->
  

<style>
   #footer { 
    background: hsl(180, 3%, 7%); 
    padding: 0 0 30px 0; 
    color: #fff; 
    font-size: 14px; 
    } 
    #footer .footer-newsletter {
  padding: 50px 0;
  background: #f3f5fa;
  text-align: center;
  font-size: 15px;
  color: #444444;
}

#footer .footer-newsletter h4 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
  color: #01af6a;
}

#footer .footer-newsletter form {
  margin-top: 30px;
  
  padding: 6px 10px;
  position: relative;
  
}

#footer .footer-newsletter form button {
  border: 0;
  padding: 8px;
  width: calc(100% - 100px);
  border-radius: 50px;
  font-weight: 600;
  background: #01af6a;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: 0.3s;
}

#footer .footer-newsletter form input[type=submit] {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  font-weight: 700;
  padding: 0 20px;
  background: #01af6a;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

#footer .footer-newsletter form button:hover {
  background: #01af6a;
} 
  #footer .footer-top { 
    background: #151515; 
    border-bottom: 1px solid #222222; 
    padding: 40px 0 10px 0; 
   } 
  #footer .footer-top .footer-info {
     margin-bottom: 20px; 
  } #footer .footer-top .footer-info h3 {
     font-size: 28px;
     margin: 0 0 20px 0; 
     padding: 2px 0 2px 0; 
     line-height: 1; 
     font-weight: 700; 
     text-transform: uppercase; 
  } 
  #footer .footer-top .footer-info h3 span {
     color: #ffc451; 
  } 
  #footer .footer-top .footer-info p {
     font-size: 14px; 
     line-height: 24px; 
     margin-bottom: 0; 
     font-family: "Raleway", sans-serif; 
     color: #fff;
     font-family: "Merriweather",serif; 
  } 
  #footer .footer-top .social-links a { 
    font-size: 18px; 
    display: inline-block; 
    background: #292929; 
    color: #fff; 
    line-height: 1; 
    padding: 8px 0; 
    margin-right: 4px; 
    border-radius: 4px; 
    text-align: center; 
    width: 36px; 
    height: 36px; 
    transition: 0.3s; 
  } 
  #footer .footer-top .social-links a:hover {
     background: hsl(170, 75%, 41%); 
     color: #151515; 
     text-decoration: none; 
    } 
  #footer .footer-top h4 {
     font-size: 16px; 
     font-weight: 600; 
     color: #fff; 
     position: relative; 
     padding-bottom: 12px; 
  } 
  #footer .footer-top .footer-links {
     margin-bottom: 30px; 
  } 
  #footer .footer-top .footer-links ul {
     list-style: none; 
     padding: 0; 
     margin: 0; 
  } 
  #footer .footer-top .footer-links ul i {
     padding-right: 2px; color: hsl(170, 75%, 41%); font-size: 18px; line-height: 1; }
 #footer .footer-top .footer-links ul li {
   padding: 10px 0;
   display: flex; 
   align-items: center; 
  } 
 #footer .footer-top .footer-links ul li:first-child { 
  padding-top: 0; 
  } 
 #footer .footer-top .footer-links ul a {
   color: #fff; 
   transition: 0.3s; 
   display: inline-block; 
   line-height: 1; 
  } 
  #footer .footer-top .footer-links ul a:hover {
     color: hsl(170, 75%, 41%); 
  } 
  #footer .copyright { text-align: center; padding-top: 30px; } #footer .credits { padding-top: 10px; text-align: center; font-size: 13px; color: #fff; }

.brochure_popup .brochure_popup__content {
    width: 80%;
    max-width: 550px;
    overflow: auto;
    padding: 20px;
    background: white;
    color: black;
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    border-radius: 5px;
    border-top: 4px solid #00b56f;
}
.brochure_popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
  display: none; /* 🔹 keep hidden initially */
  justify-content: center;
  align-items: center;
  z-index: 1050;
}
.brochure_popup.active {
  display: flex; /* 🔹 only show when "active" */
}
.brochure_popup__content {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  max-width: 700px; /* Desktop/laptop limit */
  width: 100%;
  max-height: 90vh; /* Prevents overflowing desktop screen */
  overflow-y: auto; /* Scroll if content exceeds height */
}

/* ✅ Mobile friendly */
@media (max-width: 767px) {
  .brochure_popup__content {
    width: 100%;              /* Almost full width */
    height: 90vh;            /* Use most of screen height */
    max-width: none;         /* Remove desktop width limit */
    border-radius: 8px;
    overflow-y: auto;        /* Scroll only in mobile */
  }

  .brochure_popup {
    align-items: flex-start; /* Start from top instead of center */
    padding: 15px 0;         /* Space at top/bottom */
  }
}
</style>



<div class="toast custom-toast h-0 border-0" id="customToast" role="alert" aria-live="assertive" aria-atomic="true"></div>
<section class="brochure_popup">
  <div class="brochure_popup__content" >
    <div class="brochure_close d-flex justify-content-between align-items-center" >
      <h3 class="m-0" >Download Brochure</h3>
      <i class="fa-solid fa-xmark"></i>
    </div>
    <hr style="color: #c6c2c2;height: 2px;">

    <form id="brochure-form">
      <div class="row g-3 mt-2">
        <div class="col-md-6">
          <label for="brochure-name" class="form-label">Name</label>
          <input class="form-control" type="text" placeholder="Enter your name" id="brochure-name" required>
        </div>
        <div class="col-md-6">
          <label for="brochure-course" class="form-label">Course</label>
          <select class="form-control" id="brochure-course" required>
            <option value="" selected disabled>Select your course</option>
            <option value="Full Stack Development">Full Stack Development</option>
            <option value="Data Science">Data Science</option>
            <option value="AI & ML">AI & ML</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="UI/UX Design">UI/UX Design</option>
            <option value="Cyber Security">Cyber Security</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="brochure-email" class="form-label">Email Address</label>
          <input class="form-control" type="email" placeholder="Enter your email" id="brochure-email" required>
        </div>
        <div class="col-md-6">
          <label for="brochure-phone" class="form-label">Phone Number</label>
          <input class="form-control" type="tel" placeholder="Enter your phone" id="brochure-phone" required>
        </div>
        <div class="col-md-6">
          <label for="brochure-zipcode" class="form-label">Location Zip Code</label>
          <input class="form-control" type="text" placeholder="Enter your zip code" id="brochure-zipcode" required>
        </div>
        <div class="col-md-6">
          <label for="brochure-mode" class="form-label">Mode</label>
          <select class="form-control" id="brochure-mode" required>
            <option value="" selected disabled>Select mode</option>
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
          </select>
        </div>
      </div>

      <div class="d-flex justify-content-end mt-3">
        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
        <a href="javascript:;" class="btn btn-success" onclick="enroll('brochure', 'brochure-form')">
          Download Now
        </a>
      </div>
    </form>
  </div>
</section>



 <!--<script>-->
 <!--       document.addEventListener('contextmenu', function(event) {-->
            <!--event.preventDefault();  // Prevent the default context menu-->
 <!--           Swal.fire({-->
 <!--               icon: 'error',-->
 <!--               title: 'Entering Developer Zone!',-->
 <!--               text: 'You are entering a beta section. Remember, with great power comes great responsibility!',-->
 <!--               footer: '<a href="mailto:ranjith.c96me@gmail.com">Need help? Contact us!</a>'-->
 <!--           });-->
 <!--       });-->

        <!--// Disable specific keyboard shortcuts (F12, Ctrl+Shift+I, Ctrl+Shift+J)-->
 <!--       document.addEventListener('keydown', function(event) {-->
 <!--           if (event.keyCode == 123 || (event.ctrlKey && event.shiftKey && (event.keyCode == 73 || event.keyCode == 74))) {-->
                <!--event.preventDefault();  // Prevent the default action-->
 <!--               Swal.fire({-->
 <!--                   icon: 'error',-->
 <!--                   title: 'Oops...',-->
 <!--                   text: 'Looks like you stumbled upon our developer’s sandbox. If you’re tinkering here, remember that great power requires great responsibility!',-->
 <!--                   footer: '<a href="mailto:ranjith.c96me@gmail.com">Contact us if you need help!</a>'-->
 <!--               });-->
 <!--           }-->
 <!--       });-->
 <!--   </script>-->
<!-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
<div class="elfsight-app-47c4f723-b3a8-4767-bf3f-b145f2e3583c" data-elfsight-app-lazy></div> -->
<!--Start of Tawk.to Script-->



<!--<script type="text/javascript">-->
<!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
<!--(function(){-->
<!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
<!--s1.async=true;-->
<!--s1.src='https://embed.tawk.to/6566187c1db16644c555876a/1hgbcva2h';-->
<!--s1.charset='UTF-8';-->
<!--s1.setAttribute('crossorigin','*');-->
<!--s0.parentNode.insertBefore(s1,s0);-->
<!--})();-->
<!--</script>-->
<!--End of Tawk.to Script-->

<!-- 
<script>(function(w, d) { w.CollectId = "665c64b71063215eaa122fd0"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script> -->

<style>

/* Custom CSS for positioning and animations */
        #whatsapp .whatsapp-button {
            position: fixed;
            transform: all .5s ease;
            text-align: center;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
            left: 20px;
            bottom: 30px;
            font-size: 24px;
            color: white;
            background-color: #25D366;
            border-radius: 50px;
            border-right: none;
            display: block;
            border: 0;
            z-index: 9999;
            width: 50px;
            height: 50px;
            line-height: 50px;
            overflow: hidden;
        }

        #whatsapp .whatsapp-button::before, #whatsapp .whatsapp-button::after {
            content: "";
            position: absolute;
            z-index: -1;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            -webkit-animation: pulse-border 1500ms ease-out infinite;
            animation: pulse-border 1500ms ease-out infinite;
        }

        #whatsapp .whatsapp-button::after {
            animation-delay: 750ms;
        }

        #whatsapp .whatsapp-button:focus {
            border: none;
            outline: none;
        }

        @keyframes pulse-border {
            0% { transform: translateX(-50%) translateY(-50%) scale(1); opacity: 1; }
            100% { transform: translateX(-50%) translateY(-50%) scale(1.5); opacity: 0; }
        }
    </style>

    <script>
      
    /**
   * courses slider
   */
   new Swiper('.testimonials-courses-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

    </script>

<!-- WhatsApp Button -->
<div id="whatsapp">
    <a href="https://wa.me/919025059775?text=Hello,%20I'm%20interested%20in%20learning%20more%20about%20your%20courses.%20Can%20you%20provide%20more%20information?" class="whatsapp-button" target="_blank" id="toggle1" aria-label="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
<script src="js/script.js?v=3"></script>


</body>



<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("YT8EbjGOPAYEgRarR"); // Initialize with your EmailJS user ID
   })();
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Glightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const lightbox = GLightbox({
        selector: '.glightbox'
      });
    });
  </script>
 <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Swiper
      /**
   * Gallery Slider
   */
  new Swiper('.gallery-slider', {
    speed: 400,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 5,
        spaceBetween: 20
      }
    }
  });


      // Initialize Glightbox
      const lightbox = GLightbox({
        selector: '.glightbox'
      });
    });
  </script>  

</html>
