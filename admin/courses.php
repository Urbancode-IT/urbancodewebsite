<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<style>
/*-----------------------------------*\
  #RESET
\*-----------------------------------*/

li {
  list-style: none;
}

a,
img,
data,
input,
button,
ion-icon {
  display: block;
}

a {
  color: inherit;
  text-decoration: none;
}

img {
  height: auto;
}

input,
button {
  background: none;
  border: none;
  font: inherit;
}

ion-icon {
  pointer-events: none;
}

address {
  font-style: normal;
}

html {
  font-family: 'Poppins', sans-serif;
  font-size: 10px;
  scroll-behavior: smooth;
}

body {
  background-color: hsl(0, 0%, 100%);
  color:black;
  font-size: 1.6rem;
  line-height: 1.75;
}

:focus-visible {
  outline-offset: 4px;
}

::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-track {
  background-color: hsl(0, 0%, 98%);
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

.container {
  width:100%;
}

.h1,
.h2,
.h3 {
  color:black;
  font-family: 'League Spartan', sans-serif;
  line-height: 1;
}

.h1,
.h2 {
  font-weight: 600;
}

.h1 {
  font-size: 4.2rem;
}

.h2 {
  font-size: 3.2rem;
}

.h3 {
  font-size: 2.3rem;
  font-weight: 500;
}

.grid-list {
  display: grid;
  gap: 30px;
}

.category-card,
.stats-card {
  background-color: hsla(170, 75%, 41%, 0.1);
}

/* General Styles for Category Cards */
.category-card {
  padding: 30px;
  text-align: center;
  border-radius: 5px;
  width: 100%;
  max-width: 300px;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0 6px 15px 0 hsla(0, 0%, 0%, 0.05);
  transition: transform 0.5s ease, box-shadow 0.3s ease;
  margin: auto;
  position: relative;
  perspective: 1000px;
}

.category-card:hover {
  transform: rotateX(5deg) scale(1.05);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
}

.card-icon {
  width: 80px;
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  margin-bottom: 20px;
  transition: transform 0.3s ease;
}

.card-title {
  display: block;
  font-size: 1.8rem;
  color: hsl(0, 0%, 9%);
  transition: color 0.3s ease;
}

.card-title:hover {
    color:#01af6a;
}
.card-text {
  font-size: 1.5rem;
  color: hsl(0, 0%, 9%);
  margin-bottom: 20px;
  transition: color 0.3s ease;
}

.card-badge {
  display: inline-block;
  background-color: hsla(170, 75%, 41%, 0.1); /* Default color */
  color: hsl(170, 75%, 41%); /* Default color */
  font-size: 1.5rem;
  font-weight: 500;
  padding: 5px 15px;
  border-radius: 5px;
  transition: background-color 0.3s ease, color 0.3s ease;
}


/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for large than 575px screen
*/

@media (min-width: 575px) {



  .grid-list {
    grid-template-columns: 1fr 1fr;
  }
}

/**
* responsive for large than 768px screen
*/

@media (min-width: 768px) {



  .btn {
    padding: 15px 30px;
  }
}

/**
* responsive for large than 992px screen
*/

@media (min-width: 992px) {



  .grid-list {
    grid-template-columns: repeat(4, 1fr);
  }
}



</style>
<!--Hero Section-->
<main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section">

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Learn from experts, master new skills</h1>
        <p>Join us to gain in-demand skills and hands-on expertise that drive your career forward.</p>
        <div class="d-flex">
          
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" >
        <img src="image\about.jpg" class="img-fluid " style="border-radius: 55px; alt="">
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->
</main>




<!-- =======  courses Breadcrumbs-header ======= 

<div class="breadcrumbs-header">
  <div class="page-header d-flex align-items-center">
    <div class="container position-relative">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Our Courses</h2>
          <!-- <p>Explore a wide range of courses designed to enhance your skills and knowledge. From programming to data science, find the perfect course for you.</p> 
        </div>
      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">Courses</li>
      </ol>
    </div>
  </nav>
</div><!-- End Breadcrumbs -->


<section class="section category" aria-label="category">
  <div class="container">
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
    <div class="category-card" style="background-color: hsla(60, 100%, 50%, 0.1);">
      <div class="card-icon" style="background-color: hsla(60, 100%, 50%, 0.1);">
        <i class="bi bi-search" style="font-size: 3rem; color: black;"></i>
      </div>
      <h3 class="h3">SEO</h3>
      <p class="card-text">
        Optimize websites for search engines with Urbancode's SEO courses.
      </p>
      <span class="card-badge" style="background-color: hsla(60, 100%, 50%, 0.1); color: hsl(60, 100%, 50%);">2 Courses</span>
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










<?php include 'inc/footer.php';?>