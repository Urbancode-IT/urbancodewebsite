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
        <h1>Master AWS Cloud Services</h1>
        <p>Learn to harness the power of Amazon Web Services (AWS) to build scalable, secure, and cost-effective cloud infrastructure. Master services like EC2, S3, Lambda, and more to develop cloud applications and manage cloud environments efficiently.</p>
        <div class="d-flex">
            <button type="button" class="btn btn-get-started" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enroll Today</button>
          <!-- Add buttons or links if needed -->
            <!-- Pay Now Button -->
          <!--<a href="#" class="btn btn-get-started" style="margin-left: 25px;" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</a>-->
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="images/courses/aws/aws.jpg" class="img-fluid" style="border-radius: 55px;" alt="AWS Course">
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
        <li class="active"  id="course-id">AWS</li>
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
                <p class="pb-2">Enrolling in Urbancode's AWS (Amazon Web Services) course enables professionals to design, deploy, and manage robust cloud infrastructure, fostering efficiency, cost-effectiveness, and scalability. As the demand for cloud expertise continues to rise, an AWS course becomes instrumental in staying competitive, unlocking diverse career opportunities, and contributing to the digital transformation of businesses worldwide.</p>      
            </div>
            <div class="col-12 col-lg-5 col-xl-4 mt-3 mt-lg-0">                
                <div style="max-width: max-content;">
                    <h4 style="color:#000000;" class="pb-3 text-center">This course includes</h4>
                    <ul class="m-0">
                        <li><i class="fa-regular fa-clock"></i> 45 hrs Instructor-Led Training & Project Work</li>
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
        <h4 style="color:#000000;">Course Content</h4>
        <div class="accordion_inner">
            <div class="accordion-section">
                <!-- Introduction to Cloud Computing -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Introduction to Cloud Computing</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>What is Cloud Computing?</li>
                            <li>Benefits of Cloud Computing</li>
                            <li>Cloud Service Models (IaaS, PaaS, SaaS)</li>
                        </ol>
                    </div>
                </div>
                <!-- Cloud Market Trends -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Cloud Market Trends</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Current Market Analysis</li>
                            <li>Future Trends and Predictions</li>
                            <li>Impact on Various Industries</li>
                        </ol>
                    </div>
                </div>
                <!-- AWS Fundamentals -->
                <div class="each-accordionbox">
                    <h3 class="each-title">AWS Fundamentals</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Overview of AWS Services</li>
                            <li>Regions and Availability Zones</li>
                            <li>Creating a Free Tier AWS Account</li>
                            <li>Launching Windows and Linux VMs</li>
                        </ol>
                    </div>
                </div>
                <!-- Core AWS Services -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Core AWS Services</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Amazon EC2</li>
                            <li>Amazon S3</li>
                            <li>Amazon VPC</li>
                            <li>Amazon RDS</li>
                        </ol>
                    </div>
                </div>
                <!-- Additional AWS Services -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Additional AWS Services</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>Amazon Route 53</li>
                            <li>Amazon CloudFront</li>
                            <li>Amazon IAM</li>
                            <li>Serverless: AWS Lambda</li>
                            <li>Monitoring and Management with AWS CloudWatch and CloudTrail</li>
                            <li>Amazon SNS and SQS</li>
                        </ol>
                    </div>
                </div>
                <!-- Advanced AWS Services -->
                <div class="each-accordionbox">
                    <h3 class="each-title">Advanced AWS Services</h3>
                    <div class="each-text">
                        <ol class="accord_ol">
                            <li>AWS Command Line Interface (CLI)</li>
                            <li>AWS Config</li>
                            <li>Advanced Networking and Security</li>
                            <li>Data Management and Analytics</li>
                            <li>Cost Management and Optimization</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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
