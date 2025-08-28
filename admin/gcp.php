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
        <h1>Master Google Cloud Platform (GCP)</h1>
        <p>Learn how to build and manage applications using Google Cloud Platform (GCP). Gain hands-on experience with GCP services such as Compute Engine, Kubernetes Engine, Cloud Storage, and BigQuery to design scalable, secure, and cost-effective cloud solutions.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
          <!-- Pay Now Button -->
          <a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/gcp/gcp.jpg" class="img-fluid" style="border-radius: 55px;" alt="GCP Course">
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
        <li class="active"  id="course-id">GCP</li>
      </ol>
    </div>
  </nav>
</div>


<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Google Cloud Platform (GCP) Training Curriculum</h5>
                <p class="pb-2">Our GCP course curriculum, designed by industry experts, provides a comprehensive understanding of Google Cloud Platform fundamentals. Engage in hands-on learning experiences to master configuring and managing GCP infrastructure. Acquire the in-demand skills necessary for cloud computing success and explore various career opportunities in the rapidly evolving tech landscape.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 35 hrs Instructor-Led Training & Hands-On Project Work</li>
                        <li><i class="fa-solid fa-briefcase"></i> Job Assistance</li>
                        <li><i class="fa-solid fa-circle-info"></i> Expert Mentor Support</li>
                        <li><i class="fa-solid fa-award"></i> Certificate of Completion</li>
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
        <h4 style="color:#000000;">Course content</h4>
        <div class="accordion_inner">
            <div class="accordion-section">
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to Cloud Computing</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Definition and Essential Characteristics</li>
                            <li>Cloud Service Models (IaaS, PaaS, SaaS)</li>
                            <li>Deployment Models (Public, Private, Hybrid, Community)</li>
                            <li>The Evolution of Cloud Computing</li>
                            <li>Historical Perspective and Technological Advancements</li>
                            <li>Market Trends and Future Outlook</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">GCP as a Cloud Platform</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of GCP Services and Ecosystem</li>
                            <li>GCP's Architecture and Global Infrastructure</li>
                            <li>Setting Up a GCP Account and Navigating the GCP Console</li>
                            <li>GCP Pricing and Support Plans</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">GCP Computing Services</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Google Compute Engine (GCE) and App Engine</li>
                            <li>Google Kubernetes Engine (GKE) and Containers</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Understanding Cloud Storage</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Types of Cloud Storage (Object, Block, File)</li>
                            <li>Data Redundancy and Replication Strategies</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">GCP Storage Solutions</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Google Cloud Storage and Persistent Disks</li>
                            <li>Implementing GCP Storage Security</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Basics of Cloud Networking</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Network Models in the Cloud</li>
                            <li>IP Addressing and DNS in Cloud Environments</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">GCP Networking Services</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Google Virtual Private Cloud (VPC) and Subnetting</li>
                            <li>Google Cloud Load Balancers and Network Security (Overview)</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Deploying a Java App to the Cloud</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of Java App Development for Cloud</li>
                            <li>Containerizing Java Applications</li>
                            <li>Hands-On: Deploying a Java App to Google App Engine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>               
    </div>
</section>


<?php 
include 'inc/related.php'; 
include 'inc/footer.php';
?>
