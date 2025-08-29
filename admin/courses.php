<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>


  
<style>
  :root {
    --card-radius: 1.25rem;
    --card-padding: 1.5rem;
    --card-gap: 1.5rem;
    --card-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
    --hover-lift: translateY(-10px);
    --hover-scale: scale(1.02);
  }

  .container {
    padding: 0rem;
    max-width: 1200px;
    margin: auto;
  }

  .grid-list {
    display: grid;
    gap: var(--card-gap);
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .category-card-link {
    text-decoration: none;
    color: inherit;
  }

  .category-card {
    background-color: hsla(var(--accent), 0.1);
    border-radius: var(--card-radius);
    padding: var(--card-padding);
    box-shadow: var(--card-shadow);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    gap: 1rem;
    height: 100%;
  }

  .category-card:hover {
    transform: var(--hover-lift) var(--hover-scale);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
  }

  .card-icon {
    background-color: hsla(var(--accent), 0.1);
    border-radius: 50%;
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    transition: background-color 0.3s ease;
  }

  .card-icon i {
    font-size: 2.5rem;
    color: #000;
  }

  .h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin: 0;
  }

  .card-text {
    font-size: 0.95rem;
    line-height: 1.5;
    color: #333;
    flex-grow: 1;
  }

  .card-badge {
    display: inline-block;
    align-self: flex-start;
    padding: 0.4rem 0.75rem;
    font-size: 0.8rem;
    font-weight: 500;
    background-color: hsla(var(--accent), 0.1);
    color: hsl(var(--accent));
    border-radius: 999px;
  }

  @media (max-width: 480px) {
    .card-icon {
      width: 48px;
      height: 48px;
    }
    .card-icon i {
      font-size: 2rem;
    }
    .h3 {
      font-size: 1rem;
    }
    .card-text {
      font-size: 0.85rem;
    }
    .card-badge {
      font-size: 0.75rem;
    }
  }
</sty>
</style>
<style>
   /* Base styles for the hero section */
  .hero.section {
    padding: 80px 0; /* Adjust padding as needed */
    overflow: hidden; /* Crucial to hide elements before they animate in */
    position: relative; /* Good practice for sections */
    background-color: #f8f9fa; /* Light background for contrast */
  }

  /* Keyframes for the text content (sliding in from left with fade) */
  @keyframes slideInLeftFade {
    from {
      opacity: 0;
      transform: translateX(-80px); /* Start further left */
    }
    to {
      opacity: 1;
      transform: translateX(0); /* End at original position */
    }
  }

  /* Keyframes for the image content (sliding in from right with fade and subtle scale) */
  @keyframes slideInRightFadeScale {
    from {
      opacity: 0;
      transform: translateX(80px) scale(0.95); /* Start further right and slightly smaller */
    }
    to {
      opacity: 1;
      transform: translateX(0) scale(1); /* End at original position and size */
    }
  }

  /* Apply animation to specific text elements with a slight stagger */
  .hero.section .col-lg-6.order-2.order-lg-1 h1 {
    opacity: 0; /* Hidden initially */
    animation: slideInLeftFade 1s ease-out forwards;
    animation-delay: 0.2s; /* H1 appears first */
  }

  .hero.section .col-lg-6.order-2.order-lg-1 p {
    opacity: 0; /* Hidden initially */
    animation: slideInLeftFade 1s ease-out forwards;
    animation-delay: 0.5s; /* Paragraph appears after H1 */
  }

  /* Apply animation to the right column (image content) */
  .hero.section .col-lg-6.order-1.order-lg-2.hero-img {
    opacity: 0; /* Hidden initially */
    animation: slideInRightFadeScale 1.2s ease-out forwards; /* Longer duration for image */
    animation-delay: 0.4s; /* Image starts between H1 and P, or slightly after P */
  }

  /* Ensure the image inside scales properly and maintains your border-radius */
  .hero-img img {
    max-width: 100%;
    height: auto;
    display: block;
    border-radius: 55px; /* Preserving your existing style */
  }

  /* Optional: Basic styling for text within hero section for better presentation */
  .hero.section h1 {
    font-size: 3.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 20px;
    line-height: 1.2;
  }

  .hero.section p {
    font-size: 1.25rem;
    color: #556b82;
    margin-bottom: 30px;
  }
  </style>
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Learn from experts, master new skills</h1>
        <p>Join us to gain in-demand skills and hands-on expertise that drive your career forward.</p>
        <div class="d-flex">
          <!-- Optional Buttons -->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="image/about.webp" class="img-fluid" style="border-radius: 55px;" alt="About">
      </div>
    </div>
  </div>
</section>

</main>

<!-- Courses Section -->
<section class="section category" aria-label="category">
 <div class="container">
    <header class="section-header">
        <h3>Course domains</h3>
        <p>New posts</p>
    </header>
  <ul class="grid-list">
     <!-- Programming Languages -->
      <li>
  <a href="/programming-languages" class="category-card-link">
    <div class="category-card" style="background-color: hsla(220, 80%, 70%, 0.1);">
      <div class="card-icon" style="background-color: hsla(220, 80%, 70%, 0.1);">
        <i class="bi bi-code-slash" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">
        Programming Languages
      </h3>
      <p class="card-text">
        Learn various programming languages with Urbancode’s expert-led courses.
      </p>
      <span class="card-badge" style="background-color: hsla(220, 80%, 70%, 0.1); color: hsl(220, 80%, 70%);">
        6 Courses
      </span>
    </div>
  </a>
</li>

    <!-- Web Development -->
<li>
  <a href="/web-development" class="category-card-link">
    <div class="category-card" style="background-color: hsla(200, 80%, 60%, 0.1);">
      <div class="card-icon" style="background-color: hsla(200, 80%, 60%, 0.1);">
        <i class="bi bi-terminal" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">Web Development</h3>
      <p class="card-text">
        Build dynamic websites and web applications with Urbancode's Web Development training.
      </p>
      <span class="card-badge" style="background-color: hsla(200, 80%, 60%, 0.1); color: hsl(200, 80%, 60%);">7 Courses</span>
    </div>
  </a>
</li>

<!-- UI & UX -->
<li>
  <a href="/ui-ux-about" class="category-card-link">
    <div class="category-card" style="background-color: hsla(300, 70%, 60%, 0.1);">
      <div class="card-icon" style="background-color: hsla(300, 70%, 60%, 0.1);">
        <i class="bi bi-laptop" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">UI/UX</h3>
      <p class="card-text">
        Design intuitive interfaces and enhance user experiences with Urbancode's UI/UX courses.
      </p>
      <span class="card-badge" style="background-color: hsla(300, 70%, 60%, 0.1); color: hsl(300, 70%, 60%);">4 Courses</span>
    </div>
  </a>
</li>

<!-- Cloud & DevOps -->
<li>
  <a href="/cloud-devops" class="category-card-link">
    <div class="category-card" style="background-color: hsla(170, 75%, 45%, 0.1);">
      <div class="card-icon" style="background-color: hsla(170, 75%, 45%, 0.1);">
        <i class="bi bi-cloud" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">Cloud & DevOps</h3>
      <p class="card-text">
        Enhance your skills in Cloud and DevOps with Urbancode's comprehensive training programs.
      </p>
      <span class="card-badge" style="background-color: hsla(170, 75%, 45%, 0.1); color: hsl(170, 75%, 45%);">3 Courses</span>
    </div>
  </a>
</li>

<!-- Data Analytics -->
<li>
  <a href="/data-analytics" class="category-card-link">
    <div class="category-card" style="background-color: hsla(10, 80%, 60%, 0.1);">
      <div class="card-icon" style="background-color: hsla(10, 80%, 60%, 0.1);">
        <i class="bi bi-bar-chart" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">Data Analytics</h3>
      <p class="card-text">
        Discover insights and make data-driven decisions with Urbancode's Data Analytics courses.
      </p>
      <span class="card-badge" style="background-color: hsla(10, 80%, 60%, 0.1); color: hsl(10, 80%, 60%);">2 Courses</span>
    </div>
  </a>
</li>

<!-- Data Science -->
<li>
  <a href="/data-science-about" class="category-card-link">
    <div class="category-card" style="background-color: hsla(50, 70%, 50%, 0.1);">
      <div class="card-icon" style="background-color: hsla(50, 70%, 50%, 0.1);">
        <i class="bi bi-graph-up" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">Data Science</h3>
      <p class="card-text">
        Master data science with Urbancode's in-depth training on statistical methods and machine learning.
      </p>
      <span class="card-badge" style="background-color: hsla(50, 70%, 50%, 0.1); color: hsl(50, 70%, 50%);">2 Courses</span>
    </div>
  </a>
</li>

<!-- Database -->
<li>
  <a href="/database" class="category-card-link">
    <div class="category-card" style="background-color: hsla(240, 60%, 60%, 0.1);">
      <div class="card-icon" style="background-color: hsla(240, 60%, 60%, 0.1);">
        <i class="bi bi-database-fill" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">Database</h3>
      <p class="card-text">
        Learn database management and design with Urbancode’s expert-led Database courses.
      </p>
      <span class="card-badge" style="background-color: hsla(240, 60%, 60%, 0.1); color: hsl(240, 60%, 60%);">4 Courses</span>
    </div>
  </a>
</li>

<!-- Data Visualization -->
<li>
  <a href="/data-visualization" class="category-card-link">
    <div class="category-card" style="background-color: hsla(120, 80%, 50%, 0.1);">
      <div class="card-icon" style="background-color: hsla(120, 80%, 50%, 0.1);">
        <i class="bi bi-pie-chart" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">Data Visualization</h3>
      <p class="card-text">
        Learn how to create stunning data visualizations with Urbancode's specialized courses.
      </p>
      <span class="card-badge" style="background-color: hsla(120, 80%, 50%, 0.1); color: hsl(120, 80%, 50%);">4 Courses</span>
    </div>
  </a>
</li>

<!-- Software Testing -->
<li>
  <a href="/software-testing" class="category-card-link">
    <div class="category-card" style="background-color: hsla(210, 70%, 65%, 0.1);">
      <div class="card-icon" style="background-color: hsla(210, 70%, 65%, 0.1);">
        <i class="bi bi-gear" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">Software Testing</h3>
      <p class="card-text">
        Master software testing techniques with Urbancode’s in-depth training programs.
      </p>
      <span class="card-badge" style="background-color: hsla(210, 70%, 65%, 0.1); color: hsl(210, 70%, 65%);">1 Course</span>
    </div>
  </a>
</li>

<!-- Cyber Security -->
<li>
  <a href="/cyber-security" class="category-card-link">
    <div class="category-card" style="background-color: hsla(0, 70%, 55%, 0.1);">
      <div class="card-icon" style="background-color: hsla(0, 70%, 55%, 0.1);">
        <i class="bi bi-shield" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">Cyber Security</h3>
      <p class="card-text">
        Protect digital assets with Urbancode’s Cyber Security training programs.
      </p>
      <span class="card-badge" style="background-color: hsla(0, 70%, 55%, 0.1); color: hsl(0, 70%, 55%);">2 Courses</span>
    </div>
  </a>
</li>

<!-- SEO -->
<li>
  <a href="/seo" class="category-card-link">
    <div class="category-card" style="background-color: hsla(60, 42%, 20%, 0.10);">
      <div class="card-icon" style="background-color: hsla(60, 100%, 50%, 0.1);">
        <i class="bi bi-search" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">SEO</h3>
      <p class="card-text">
        Optimize websites for search engines with Urbancode's SEO courses.
      </p>
      <span class="card-badge" style="background-color: hsla(60, 80%, 8%, 0.10); color: hsla(60, 37%, 24%, 1.00);">2 Courses</span>
    </div>
  </a>
</li>

 <!-- Medical Coding -->
      <li>
      <a href="/medical-coding" class="category-card-link">
        <div class="category-card" style="background-color: hsla(280, 70%, 55%, 0.1);">
          <div class="card-icon" style="background-color: hsla(280, 70%, 55%, 0.1);">
            <i class="bi bi-file-earmark-medical" style="font-size: 3rem; color: black;"></i>
          </div>
          <h3 class="h3">Medical Coding</h3>
          <p class="card-text">
            Master medical coding practices and healthcare documentation with Urbancode's in-depth courses.
          </p>
        </div>
       </a>
      </li>

      <!-- Languages -->
      <li>
       <a href="/languages" class="category-card-link">
        <div class="category-card" style="background-color: hsla(140, 60%, 65%, 0.1);">
          <div class="card-icon" style="background-color: hsla(140, 60%, 65%, 0.1);">
            <i class="bi bi-translate" style="font-size: 3rem; color: black;"></i>
          </div>
          <h3 class="h3">Languages</h3>
          <p class="card-text">
            Enhance your language skills with Urbancode's Foreign Languages courses.
          </p>
          <span class="card-badge" style="background-color: hsla(140, 60%, 65%, 0.1); color: hsl(140, 60%, 65%);">7 Courses</span>
        </div>
       </a>
      </li>

      <!-- English Proficiency Exams -->
      <li>
      <a href="/english-proficiency-exams" class="category-card-link">
        <div class="category-card" style="background-color: hsla(240, 70%, 50%, 0.1);">
          <div class="card-icon" style="background-color: hsla(240, 70%, 50%, 0.1);">
            <i class="bi bi-book" style="font-size: 3rem; color: black;"></i>
          </div>
          <h3 class="h3">English Proficiency Exams</h3>
          <p class="card-text">
            Prepare for English exams like IELTS, TOEFL, PTE, and OET with Urbancode's dedicated courses.
          </p>
          <span class="card-badge" style="background-color: hsla(240, 70%, 50%, 0.1); color: hsl(240, 70%, 50%);">4 Courses</span>
        </div>
       </a>
      </li>
        <!-- CRM -->
        <li>
          <a href="/crm" class="category-card-link">
         <div class="category-card" style="background-color: hsla(210, 60%, 80%, 0.1);">
           <div class="card-icon" style="background-color: hsla(210, 60%, 80%, 0.1);">
              <i class="bi bi-people" style="font-size: 3rem; color: black;"></i>
            </div>
            <h3 class="h3">CRM</h3>
             <p class="card-text">
             Learn to optimize customer relationships with industry-leading CRM tools and strategies.
            </p>
             <span class="card-badge" style="background-color: hsla(210, 60%, 80%, 0.1); color: hsl(210, 60%, 50%);">3 Courses</span>
         </div>
  </a>
</li>
      <!-- Kids -->
      <li>
      <a href="/kids" class="category-card-link">
        <div class="category-card" style="background-color: hsla(300, 60%, 65%, 0.1);">
          <div class="card-icon" style="background-color: hsla(300, 60%, 65%, 0.1);">
            <i class="bi bi-house" style="font-size: 3rem; color: black;"></i>
          </div>
          <h3 class="h3">Kids</h3>
          <p class="card-text">
            Engage young minds with Urbancode's educational courses designed for kids.
          </p>
          <span class="card-badge" style="background-color: hsla(300, 60%, 65%, 0.1); color: hsl(300, 60%, 65%);">6 Courses</span>
        </div>
       </a>
      </li>

        <!-- React-Native -->

<li>
<a href="/app-development" class="category-card-link">
  <div class="category-card" style="background-color: hsla(210, 65%, 85%, 0.1);">
    <div class="card-icon" style="background-color: hsla(210, 65%, 85%, 0.1);">
      <i class="bi bi-phone-fill" style="font-size: 3rem; color: black;"></i>
    </div>
    <h3 class="h3">App Development</h3>
    <p class="card-text">
      App Development to create professional cross-platform apps for iOS and Android with ease.
    </p>
    <span class="card-badge" style="background-color: hsla(210, 65%, 85%, 0.1); color: hsl(210, 65%, 50%);">1 Courses</span>
  </div>
</a>

</li>


  </ul>
</div>
</section>

<?php include 'inc/footer.php'; ?>
