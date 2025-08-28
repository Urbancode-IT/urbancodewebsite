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
        <h1>Master Microsoft Azure Cloud</h1>
        <p>Unlock the power of Microsoft Azure to build, deploy, and manage applications and services through Microsoft’s cloud platform. Learn to utilize Azure's compute, storage, networking, and security services to create scalable cloud solutions.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
            <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/azure/azure.jpg" class="img-fluid" style="border-radius: 55px;" alt="Azure Course">
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
        <li class="active"  id="course-id">Azure</li>
      </ol>
    </div>
  </nav>
</div>

<section class="course-inc py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 pe-lg-5">
                <h4 style="color:#000000;" class="pb-3">Description</h4>
                <h5 class="pb-2">Training Curriculum for Freshers for Service Delivery Team</h5>
                <p class="pb-2">Our course curriculum is curated by industry experts, offering a comprehensive grasp of Microsoft Azure fundamentals. Dive into hands-on learning experiences, gaining proficiency in configuring and managing Azure infrastructure for a robust foundation in cloud technology. Gain in-demand skills, empower yourself in cloud computing, and open doors to diverse opportunities in the rapidly evolving tech landscape.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width:max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 35 hrs Instructor-Led Training & Project Work</li>
                        <li><i class="fa-solid fa-briefcase"></i> Job Assistance</li>
                        <li><i class="fa-solid fa-circle-info"></i> Mentor Support</li>
                        <li><i class="fa-solid fa-award"></i> Certificate of completion</li>
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
                    <h3 class="each-title">Azure as a Cloud Platform</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of Azure Services and Ecosystem</li>
                            <li>Azure's Architecture and Global Infrastructure</li>
                            <li>Setting Up an Azure Account and Navigating the Azure Portal</li>
                            <li>Azure Pricing and Support Plans</li>
                        </ul>
                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Azure Computing Services</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Azure Virtual Machines and App Services</li>
                            <li>Azure Kubernetes Service (AKS) and Containers</li>
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
                    <h3 class="each-title">Azure Storage Solutions</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Azure Blob Storage and File Storage</li>
                            <li>Implementing Azure Storage Security</li>
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
                    <h3 class="each-title">Azure Networking Services</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Azure Virtual Network and Subnetting</li>
                            <li>Azure Load Balancers and Network Security Groups (Overview)</li>
                        </ul>

                    </div>
                </div>
                <div class="each-accordionbox">
                    <h3 class="each-title">Deploying a Java App to the Cloud</h3>
                    <div class="each-text">
                        <ul class="accord_ul">
                            <li>Overview of Java App Development for Cloud</li>
                            <li>Containerizing Java Applications</li>
                            <li>Hands-On: Deploying a Java App to Azure App Service</li>
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
