<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>
<!-- hero section  -->
<?php       
        
$id = 1;
$sql = "SELECT * FROM basic_info WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $banner1 = $row["banner1Image"];
    $banner2 = $row["banner2Image"];
    $banner3 = $row["banner3Image"];
    $des1 = $row["banner1Description"];
    $des2 = $row["banner2Description"];
    $des3 = $row["banner3Description"];
} else{
    $banner1 = '';
    $banner2 = '';
    $banner3 = '';
    $des1 = '';
    $des2 = '';
    $des3 = '';
} ?>

<br><br>
<section class="form-section">
    <div class="row m-0">
        <div class="col-12 col-md-5 p-3 p-md-5 left">
            <div class="form-col">
                <h2 class="mb-4 text-white">Thank you for reaching out. Our team will get back to you shortly!</h2>
            </div>
        </div>
        <div class="col-12 col-md-7 p-3 p-md-5 right">
            <h4 class="text-white mb-3">Our Featured Courses</h4>
            <h2 class="text-white">Launch a new career</h2>
            <p class="text-white">Take the next step toward your personal and professional goals</p>

            <div class="card-slider mt-3 mt-md-4">
                <div class="col-lg-12">
                    <div class="card w-100">
                        <a href="/ms-sql" style="text-decoration:none;">
                            <img class="card-img-top" src="images/mssql-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>MS SQL</p>
                                <div><h6>It is ranked as the 3rd most in-demand IT skill and the jobopportunities have been increasing in the global market.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <a href="/java" style="text-decoration:none;">
                            <img class="card-img-top" src="images/corejava-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Core Java</p>
                                <div><h6>Core Java course is pivotal for any aspiring software developer.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card w-100">
                        <a href="/aws" style="text-decoration:none;">
                            <img class="card-img-top img-fluid" src="images/aws-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>AWS</p>
                                <div><h6>Enrolling in Urbancode's AWS (Amazon Web Services) course enables professionals to design, deploy, and manage robust cloud infrastructure, fostering efficiency, cost-effectiveness, and scalability.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card w-100">
                        <a href="/azure" style="text-decoration:none;">
                            <img class="card-img-top" src="images/azure-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Azure</p>
                                <div><h6>Our course curriculum is curated by industry experts, offering a comprehensive grasp of Microsoft Azure fundamentals.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="courses-area py-3 py-md-5">
    <div class="container">
        <h2 style="color:#000000;">All Courses</h2>
        <p style="color:#000000;" class="pt-2 pb-3">Choose your best course option and build a new career within a flexible duration</p>
        <div class="row">
            <div class="first col-6 col-lg-8 mb-sm-0">
                <span class="fa fa-search"></span>
                <input class="form-control" type="text" id="course-search" placeholder="Search your course here">
            </div>
            <div class="col-6 col-lg-4 d-flex">
                <a href="javascript:;" class="search btn slide-btn" id="search-btn">Search</a>
                <select class="form-control" id="course-filter">
                    <option value="">All</option>
                    <option value="30">30 hrs</option>
                    <option value="32">32 hrs</option>
                    <option value="35">35 hrs</option>
                    <option value="36">36 hrs</option>
                    <option value="40">40 hrs</option>
                    <option value="45">45 hrs</option>
                    <option value="60">60 hrs</option>
                </select>
            </div>
        </div>
        <!-- <div class="mt-4 full-course" style="display:none;">
            <div class="tab-list">
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate AWS Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>1-2 Months</span> | 100+ Enrollments | Project Management</h6></div>
                        <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate Python Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>1-2 Months</span> | 100+ Enrollments | Project Management</h6></div>
                        <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate PHP Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>3-4 Months</span> | 100+ Enrollments | Project Management</h6></div>
                        <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate React Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>2-3 Months</span> | 100+ Enrollments | Project Management</h6></div>
                        <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate MySQL Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>1-2 Months</span> | 100+ Enrollments | UX/UI Designs</h6></div>
                        <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate Python Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>4 Months</span> | 100+ Enrollments | UX/UI Designs</h6></div>
                        <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate AWS Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>3-4 Months</span> | 100+ Enrollments | Digital Marketing</h6></div>
                        <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate CSS Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>4 Months</span> | 100+ Enrollments | Digital Marketing</h6></div>
                        <div class="mt-2 text-end"><a href="/" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
            </div> 
            <div id="txt" style="display:none;color: #00b56f;font-weight: 600;">Nothing Found.</div>           
        </div> -->
        <div class="show-content">
            <span id="scrollLeft"><i class="fa-solid fa-chevron-left"></i></span>
            <span id="scrollRight"><i class="fa-solid fa-chevron-right"></i></span>
            <ul class="tabs mt-3 mt-md-4">
                <li class="tab-link current" data-tab="tab-1">All</li>
                <li class="tab-link" data-tab="tab-9">Data Science</li>
                <li class="tab-link" data-tab="tab-10">Digital Marketing</li>
                <li class="tab-link" data-tab="tab-2">Database</li>
                <li class="tab-link" data-tab="tab-3">Data Visualisation</li>
                <li class="tab-link" data-tab="tab-4">Cloud & DevOps</li>
                <li class="tab-link" data-tab="tab-5">Data Analytics</li>
                <li class="tab-link" data-tab="tab-6">Programming Language</li>
                <li class="tab-link" data-tab="tab-7">Proficiency Exams</li>
                <li class="tab-link" data-tab="tab-8">Language</li>
            </ul>

            <div id="tab-1" class="tab-content current">
                <div class="tab-list">
                    <div class="card w-100">
                        <a href="/ms-sql" style="text-decoration:none;">
                            <img class="card-img-top" src="images/mssql-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>MS SQL</p>
                                <div><h6>It is ranked as the 3rd most in-demand IT skill and the jobopportunities have been increasing in the global market.</h6></div>
                                <div><h6 class="duration"><span>30</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>   
                    <div class="card w-100">
                        <a href="/power-bi" style="text-decoration:none;">
                            <img class="card-img-top" src="images/pbi-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Power BI</p>
                                <div><h6>Microsoft Power BI has market share of 14.31% in (business-intelligence) bi market. Microsoft Power BI competes with 206intelligence-bi category.</h6></div>
                                <div><h6 class="duration"><span>40</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/tableau" style="text-decoration:none;">
                            <img class="card-img-top" src="images/tableau.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Tableau</p>
                                <div><h6>This course equips you with sought-after skills, making you adept at transforming raw data into impactful visual insights. </h6></div>
                                <div><h6 class="duration"><span>35</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>  
                    <div class="card w-100">
                        <a href="/aws" style="text-decoration:none;">
                            <img class="card-img-top" src="images/aws-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>AWS</p>
                                <div><h6>Enrolling in Urbancode's AWS (Amazon Web Services) course enables professionals to design, deploy, and manage robust cloud infrastructure, fostering efficiency, cost-effectiveness, and scalability.</h6></div>
                                <div><h6 class="duration"><span>45</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/azure" style="text-decoration:none;">
                            <img class="card-img-top" src="images/azure-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Azure</p>
                                <div><h6>Our course curriculum is curated by industry experts, offering a comprehensive grasp of Microsoft Azure fundamentals. Dive into hands-on learning experiences, gaining proficiency in configuring and managing Azure infrastructure for a robust foundation in cloud technology. Gain in-demand skills, empower yourself in cloud computing, and open doors to diverse opportunities in the rapidly evolving tech landscape.</h6></div>
                                <div><h6 class="duration"><span>35</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="card w-100">
                        <a href="/" style="text-decoration:none;">
                            <img class="card-img-top" src="images/mssql-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Google Cloud Platform (GCP)</p>
                                <div><h6>This course equips you with sought-after skills, making you adept at transforming raw data into impactful visual insights. </h6></div>
                                <div><h6 class="duration"><span>45</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>    -->
                    <div class="card w-100">
                        <a href="/sas" style="text-decoration:none;">
                            <img class="card-img-top" src="images/sas-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>SAS</p>
                                <div><h6>Urbancode's SAS (Statistical Analysis System) plays a crucial role in providing advanced analytics and data management solutions. </h6></div>
                                <div><h6 class="duration"><span>32</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div> 
                    <div class="card w-100">
                        <a href="/python" style="text-decoration:none;">
                            <img class="card-img-top" src="images/python-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Core Python</p>
                                <div><h6>Python Training Program at Urbancode empowers you to adeptly grasp the core concepts of this programming language.</h6></div>
                                <div><h6 class="duration"><span>40</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/java" style="text-decoration:none;">
                            <img class="card-img-top" src="images/corejava-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Core JAVA</p>
                                <div><h6>Core Java course is pivotal for any aspiring software developer. Our course serves as the foundation of Java programming, providing a solid base for building robust applications.</h6></div>
                                <div><h6 class="duration"><span>32</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>   
                    <div class="card w-100">
                        <a href="/ielts" style="text-decoration:none;">
                            <img class="card-img-top" src="images/ielts-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>IELTS</p>
                                <div><h6>The International English Language Testing System (IELTS) is globally recognized and serves as a benchmark for English language proficiency.</h6></div>
                                <div><h6 class="duration"><span>35</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/toefl" style="text-decoration:none;">
                            <img class="card-img-top" src="images/toefl-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>TOEFL</p>
                                <div><h6>Selecting TOEFL is a strategic decision for anyone aiming to excel in English language proficiency.</h6></div>
                                <div><h6 class="duration"><span>35</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/pte" style="text-decoration:none;">
                            <img class="card-img-top" src="images/pte.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>PTE</p>
                                <div><h6>PTE (Pearson Test of English) course is a globally recognized English language proficiency test, accepted by universities, employers, and immigration authorities.</h6></div>
                                <div><h6 class="duration"><span>36</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/oet" style="text-decoration:none;">
                            <img class="card-img-top" src="images/oet-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>OET</p>
                                <div><h6>OET is specifically designed to assess English language proficiency in a healthcare context, making it a crucial certification for professionals in the medical field.</h6></div>
                                <div><h6 class="duration"><span>30</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div> 
                    <div class="card w-100">
                        <a href="/french" style="text-decoration:none;">
                            <img class="card-img-top" src="images/fr-lan-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>French </p>
                                <div><h6>Urbancode's French Training Course paves as a gateway to economic opportunities, academic excellence, and cultural depth. Expertly curated by seasoned linguists, this online course explores fundamental French language concepts.</h6></div>
                                <div><h6 class="duration"><span>40</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/german" style="text-decoration:none;">
                            <img class="card-img-top" src="images/ger-lan-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>German</p>
                                <div><h6>Urbancode's German Training Course paves as a gateway to economic opportunities, academic excellence, and cultural depth. Expertly curated by seasoned linguists, this online course explores fundamental and advanced German language concepts.</h6></div>
                                <div><h6 class="duration"><span>60</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>  
                    <div class="card w-100">
                        <a href="/data-science" style="text-decoration:none;">
                            <img class="card-img-top" src="images/datascience.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Data Science</p>
                                <div><h6>Embark on a transformative journey with Urbancode's Data Science Certification Program. Crafted by seasoned experts, this online course delves into foundational and advanced data science concepts.</h6></div>
                                <div><h6 class="duration"><span>60</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>  
                    <div class="card w-100">
                        <a href="/digital-marketing" style="text-decoration:none;">
                            <img class="card-img-top" src="images/digital_marketing.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Digital Marketing</p>
                                <div><h6>Urbancode's Digital Marketing program stands out with hands-on training, industry-relevant skills, and personalized guidance. You will master key skills such as SEO, social media management, and data analytics.</h6></div>
                                <div><h6 class="duration"><span>60</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>    
                </div>
            </div>
            <div id="tab-2" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <a href="/ms-sql" style="text-decoration:none;">
                            <img class="card-img-top" src="images/mssql-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>MS SQL</p>
                                <div><h6>It is ranked as the 3rd most in-demand IT skill and the jobopportunities have been increasing in the global market.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>                    
                </div>
            </div>
            <div id="tab-3" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <a href="/power-bi" style="text-decoration:none;">
                            <img class="card-img-top" src="images/pbi-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Power BI</p>
                                <div><h6>Microsoft Power BI has market share of 14.31% in (business-intelligence) bi market. Microsoft Power BI competes with 206intelligence-bi category.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/tableau" style="text-decoration:none;">
                            <img class="card-img-top" src="images/tableau.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Tableau</p>
                                <div><h6>This course equips you with sought-after skills, making you adept at transforming raw data into impactful visual insights. </h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="tab-4" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <a href="/aws" style="text-decoration:none;">
                            <img class="card-img-top" src="images/aws-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>AWS</p>
                                <div><h6>Enrolling in Urbancode's AWS (Amazon Web Services) course enables professionals to design, deploy, and manage robust cloud infrastructure, fostering efficiency, cost-effectiveness, and scalability.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/azure" style="text-decoration:none;">
                            <img class="card-img-top" src="images/azure-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Azure</p>
                                <div><h6>Our course curriculum is curated by industry experts, offering a comprehensive grasp of Microsoft Azure fundamentals. Dive into hands-on learning experiences, gaining proficiency in configuring and managing Azure infrastructure for a robust foundation in cloud technology. Gain in-demand skills, empower yourself in cloud computing, and open doors to diverse opportunities in the rapidly evolving tech landscape.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="card w-100">
                        <a href="/" style="text-decoration:none;">
                            <img class="card-img-top" src="images/mssql-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Google Cloud Platform (GCP)</p>
                                <div><h6>This course equips you with sought-after skills, making you adept at transforming raw data into impactful visual insights. </h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
            <div id="tab-5" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <a href="/sas" style="text-decoration:none;">
                            <img class="card-img-top" src="images/sas-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>SAS</p>
                                <div><h6>Urbancode's SAS (Statistical Analysis System) plays a crucial role in providing advanced analytics and data management solutions. </h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="card w-100">
                        <a href="/" style="text-decoration:none;">
                            <img class="card-img-top" src="images/azure-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>R Program</p>
                                <div><h6>Our course curriculum is curated by industry experts, offering a comprehensive grasp of Microsoft Azure fundamentals. Dive into hands-on learning experiences, gaining proficiency in configuring and managing Azure infrastructure for a robust foundation in cloud technology. Gain in-demand skills, empower yourself in cloud computing, and open doors to diverse opportunities in the rapidly evolving tech landscape.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
            <div id="tab-6" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <a href="/python" style="text-decoration:none;">
                            <img class="card-img-top" src="images/python-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Core Python</p>
                                <div><h6>Python Training Program at Urbancode empowers you to adeptly grasp the core concepts of this programming language.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/java" style="text-decoration:none;">
                            <img class="card-img-top" src="images/corejava-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Core JAVA</p>
                                <div><h6>Core Java course is pivotal for any aspiring software developer. Our course serves as the foundation of Java programming, providing a solid base for building robust applications.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="tab-7" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <a href="/ielts" style="text-decoration:none;">
                            <img class="card-img-top" src="images/ielts-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>IELTS</p>
                                <div><h6>The International English Language Testing System (IELTS) is globally recognized and serves as a benchmark for English language proficiency.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/toefl" style="text-decoration:none;">
                            <img class="card-img-top" src="images/toefl-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>TOEFL</p>
                                <div><h6>Selecting TOEFL is a strategic decision for anyone aiming to excel in English language proficiency.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/pte" style="text-decoration:none;">
                            <img class="card-img-top" src="images/pte.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>PTE</p>
                                <div><h6>PTE (Pearson Test of English) course is a globally recognized English language proficiency test, accepted by universities, employers, and immigration authorities.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/oet" style="text-decoration:none;">
                            <img class="card-img-top" src="images/oet-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>OET</p>
                                <div><h6>OET is specifically designed to assess English language proficiency in a healthcare context, making it a crucial certification for professionals in the medical field.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="tab-8" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <a href="/french" style="text-decoration:none;">
                            <img class="card-img-top" src="images/fr-lan-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>French </p>
                                <div><h6>Urbancode's French Training Course paves as a gateway to economic opportunities, academic excellence, and cultural depth. Expertly curated by seasoned linguists, this online course explores fundamental French language concepts.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100">
                        <a href="/german" style="text-decoration:none;">
                            <img class="card-img-top" src="images/ger-lan-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>German</p>
                                <div><h6>Urbancode's German Training Course paves as a gateway to economic opportunities, academic excellence, and cultural depth. Expertly curated by seasoned linguists, this online course explores fundamental and advanced German language concepts.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="card w-100">
                        <a href="/pte" style="text-decoration:none;">
                            <img class="card-img-top" src="images/aws-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Spoken English</p>
                                <div><h6>PTE (Pearson Test of English) course is a globally recognized English language proficiency test, accepted by universities, employers, and immigration authorities.</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
            <div id="tab-9" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <a href="/data-science" style="text-decoration:none;">
                            <img class="card-img-top" src="images/datascience.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Data Science</p>
                                <div><h6>Embark on a transformative journey with Urbancode's Data Science Certification Program. Crafted by seasoned experts, this online course delves into foundational and advanced data science concepts.</h6></div>
                                <div><h6 class="duration"><span>60</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>  
                </div>
            </div>
            <div id="tab-10" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <a href="/digital-marketing" style="text-decoration:none;">
                            <img class="card-img-top" src="images/digital_marketing.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p>Digital Marketing</p>
                                <div><h6>Urbancode's Digital Marketing program stands out with hands-on training, industry-relevant skills, and personalized guidance. You will master key skills such as SEO, social media management, and data analytics.</h6></div>
                                <div><h6 class="duration"><span>60</span> hrs Instructor-Led Training</h6></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>   

<section class="partner-area py-3 py-md-4 text-center">
    <div class="container">
        <h4 style="color:#000000;">Skills on Demand</h4>
        <p style="color:#000000;" class="pt-2 pb-3">Diverse range of courses led by Competent professionals</p>
    </div>
    <div class="image-slider mt-3 mt-md-4">
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/html.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/css.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/js.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/php.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/mysql.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/mariadb.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/cplus.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/csharp.png" alt="Card image cap">
            </div>                    
        </div>        
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/python-lg.png" alt="Card image cap">
            </div>                    
        </div>
    </div>
</section>

<section class="tutorial-area py-3 py-md-4 d-none">
    <div class="container">
        <h4 style="color:#000000;" class="text-center">Our Tutorials</h4>
        <p style="color:#000000;" class="pt-2 pb-3 text-center">We collaborate with 300+ leading universities and companies</p>

        <div class="row tutor-cards">
            <div class="col-12 col-sm-6 col-lg-3 mb-2 mb-lg-0">
                <div class="card w-100">
                    <button class="btn p-0 js-play" type="button" data-toggle="modal" data-target="#modalVideo" data-src="kqtD5dpn9C8" data-title="DOOM - Fight Like Hell Cinematic Trailer"><img class="card-img-top" src="https://img.youtube.com/vi/kqtD5dpn9C8/maxresdefault.jpg"></button>
                    <div class="card-body">
                        <p class="name">Ultimate AWS Certified Solutions Architect Associate...</p>
                        <div class="mt-2 text-end"><a class="btn slide-btn custom-btn view-yt-video">View Details</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-2 mb-lg-0">
                <div class="card w-100">
                    <button class="btn p-0 js-play" type="button" data-toggle="modal" data-target="#modalVideo" data-src="OK_JCtrrv-c" data-title="Официальный анонс-трейлер Battlefield 1"><img class="card-img-top" src="https://img.youtube.com/vi/OK_JCtrrv-c/maxresdefault.jpg"></button>
                    <div class="card-body">
                        <p class="name">Ultimate AWS Certified Solutions Architect Associate...</p>
                        <div class="mt-2 text-end"><a class="btn slide-btn custom-btn view-yt-video">View Details</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card w-100">
                    <button class="btn p-0 js-play" type="button" data-toggle="modal" data-target="#modalVideo" data-src="kqtD5dpn9C8" data-title="Официальный анонс-трейлер Battlefield 1"><img class="card-img-top" src="https://img.youtube.com/vi/kqtD5dpn9C8/maxresdefault.jpg"></button>
                    <div class="card-body">
                        <p class="name">Ultimate AWS Certified Solutions Architect Associate...</p>
                        <div class="mt-2 text-end"><a class="btn slide-btn custom-btn view-yt-video">View Details</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card w-100">
                    <button class="btn p-0 js-play" type="button" data-toggle="modal" data-target="#modalVideo" data-src="OK_JCtrrv-c" data-title="Официальный анонс-трейлер Battlefield 1"><img class="card-img-top" src="https://img.youtube.com/vi/OK_JCtrrv-c/maxresdefault.jpg"></button>
                    <div class="card-body">
                        <p class="name">Ultimate AWS Certified Solutions Architect Associate...</p>
                        <div class="mt-2 text-end"><a class="btn slide-btn custom-btn view-yt-video">View Details</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card w-100">
                    <button class="btn p-0 js-play" type="button" data-toggle="modal" data-target="#modalVideo" data-src="kqtD5dpn9C8" data-title="Официальный анонс-трейлер Battlefield 1"><img class="card-img-top" src="https://img.youtube.com/vi/kqtD5dpn9C8/maxresdefault.jpg"></button>
                    <div class="card-body">
                        <p class="name">Ultimate AWS Certified Solutions Architect Associate...</p>
                        <div class="mt-2 text-end"><a class="btn slide-btn custom-btn view-yt-video">View Details</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card w-100">
                    <button class="btn p-0 js-play" type="button" data-toggle="modal" data-target="#modalVideo" data-src="OK_JCtrrv-c" data-title="Официальный анонс-трейлер Battlefield 1"><img class="card-img-top" src="https://img.youtube.com/vi/OK_JCtrrv-c/maxresdefault.jpg"></button>
                    <div class="card-body">
                        <p class="name">Ultimate AWS Certified Solutions Architect Associate...</p>
                        <div class="mt-2 text-end"><a class="btn slide-btn custom-btn view-yt-video">View Details</a></div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="modalVideo">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title js-title-insert"></h5>
                    <button class="close js-pause" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body px-0 py-0">
                    <div class="embed-responsive embed-responsive-16by9">
                    <div class="embed-responsive-item" id="youTubeIframe"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php';?>
<script src="https://www.youtube.com/iframe_api"></script>
<script>
    var player;
    var lastButton = '';
    const youtube = 'youTubeIframe';
    const titleInsert = '.js-title-insert';
    const btnPlay = '.js-play';
    const btnPause = '.js-pause';
    const modalId = '#modalVideo';
    const videoQuality = 'hd720';

    function onYouTubePlayerAPIReady() {
        player = new YT.Player(youtube, {
            controls: 2,
            iv_load_policy: 3,
            rel: 0,
            events: {
                onReady: onPlayerReady
            }
        });
    }

    function onPlayerReady(event) {
        'use strict';
        $(btnPlay).on('click', function() {
            var videoId = $(this).attr('data-src');
            $('#modalVideo').addClass('show').show().css('opacity','1');
            if (lastButton == videoId) {
                $(titleInsert).text($(this).attr('data-title'));
                player.playVideo(videoId, 0, videoQuality);
            } else {
                $(titleInsert).text($(this).attr('data-title'));
                player.loadVideoById(videoId, 0, videoQuality);
                lastButton = videoId;
            }
        });
        
        $(btnPause).on('click', function() {
            player.pauseVideo();
            $('#modalVideo').removeClass('show').hide().css('opacity','0');
        });
        
        $(modalId).on('click', function() {
            player.pauseVideo();            
        });
    }
    $('.view-yt-video').on('click', function(){
        $(this).parent().parent().parent().find('button').trigger('click');
    });
</script>
    