<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>
<!-- hero section  -->

<section class="hero-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 p-4 p-md-5 first order-1 order-sm-0">
                <div class="content">
                    <div class="list item-1">
                        <h4 class="text-white" style="font-weight:300;">The Full Potential of Data Visualization and Analytics with Urbancode's Power BI Course</h4>
                        <!-- <h2 class="text-white">UrbanCode Training and Solutions</h2> -->
                    </div>
                    <div class="list item-2" style="display:none;">
                        <h4 class="text-white" style="font-weight:300;">Enroll into our MS SQL Server Course- Master the Power of Seamless Data Management and Analysis</h4>
                        <!-- <h2 class="text-white">UrbanCode Training </h2> -->
                    </div>
                    <div class="list item-3" style="display:none;">
                        <h4 class="text-white" style="font-weight:300;">Unlock Your Path to Global Opportunities with Our IELTS Preparation - Elevate Your Language Proficiency, Achieve Excellence, and Conquer the IELTS Exam</h4>
                        <!-- <h2 class="text-white">Training and Solutions</h2> -->
                    </div>
                    <form id="banner-form">
                        <div class="d-lg-flex mt-3 mt-lg-5">
                            <input class="form-control me-2 mb-2 mb-lg-0" type="email" placeholder="Enter your email" id="ban-email">
                            <input class="form-control me-2 mb-2 mb-lg-0" type="phone" placeholder="Enter your phone" id="ban-phone">
                            <a href="javascript:;" class="btn slide-btn" onclick="enroll('banner', 'banner-form')">Enroll Today</a>                                    
                        </div>
                    </form>
                    <p class="text-white mt-1">We will contact you</p>
                    <div class="slick-slider-dots"></div>
                </div>  
            </div>
            <div class="col-12 col-sm-6 p-0 order-0 order-sm-1">
                <article>
                    <div class="slider vertical-slider">
                        <div class="slick">
                            <div class="item border-0" data-id="1"><img src="images/banner1.png"/></div>
                            <div class="item border-0" data-id="2"><img src="images/banner1.png"/></div>
                            <div class="item border-0" data-id="3"><img src="images/banner1.png"/></div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- product section -->
<section class="product-section">
    <div class="container py-3 py-md-5 text-center">
        <h3 style="color:#000000;">Why us?</h3>
        <p class="py-3" style="color:#000000;">Urbancode is a premier institute dedicated to software and language training. We understand that proficiency in software and language is the cornerstone of success in today's competitive world. We offer various courses led by industry experts who bring real-time scenario experience into the classroom.</p>
        <div class="cource-area mb-3">
            <img src="images/brand.png" />
            <img src="images/brand.png" />
            <img src="images/brand.png" />
        </div>
        <div class="cource-area">
            <div class="cource-item d-flex align-items-center">
                <img src="images/cource.png" class="pe-2"/>
                <p>Phython</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/cource.png" class="pe-2" />
                <p>AWS</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/cource.png" class="pe-2" />
                <p>Angular</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/cource.png" class="pe-2" />
                <p>MySQL</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/cource.png" class="pe-2" />
                <p>UI/UX Designs</p>
            </div>
        </div>
    </div>
</section>

<section class="form-section">
    <div class="row m-0">
        <div class="col-12 col-md-5 p-3 p-md-5 left">
            <div class="form-col">
                <h2 class="mb-4 text-white">Quick Enquiry</h2>
                <form id="enquiry-form">              
                    <div class="form-group mb-4">
                        <input name="name" type="text" class="form-control" placeholder="Enter your name*" id="en-name">
                    </div>
                    <div class="form-group mb-4">
                        <input name="email" type="email" class="form-control" placeholder="Enter your email*" id="en-email">
                    </div>
                    <div class="form-group mb-4">
                        <input name="phone" type="number" class="form-control" placeholder="Enter your mobile number*" id="en-mobile">
                    </div>
                    <div class="form-group mb-4" name="course" id="en-course">
                        <select class="form-control" id="">
                            <option value="">Select course</option>
                            <option value="python">Python</option>
                            <option value="aws">AWS</option>
                        </select>
                    </div>                   
                    <button type="button" onclick="enroll('enquiry', 'enquiry-form')" class="btn btn-primary px-4 py-2 site">Submit</button>
                </form>    
            </div>
        </div>
        <div class="col-12 col-md-7 p-3 p-md-5 right">
            <h4 class="text-white mb-3">Our Featured Course</h4>
            <h2 class="text-white">Launch a new career</h2>
            <p class="text-white">Take the next step toward your personal and professional goals</p>

            <div class="card-slider mt-3 mt-md-4">
                <div class="col-lg-12">
                    <div class="card w-100">
                        <img class="card-img-top" src="images/new-launch1.png" alt="Card image cap">
                        <div class="card-body">
                            <p>The Complete Python Bootcamp From Zero to Hero...</p>
                            <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                        <div class="card-body">
                            <p>Ultimate AWS Certified Solutions Architect Associate...</p>
                            <div><h6>2-3 Months | 100+ Enrollments | Front-End Development</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card w-100">
                        <img class="card-img-top img-fluid" src="images/new-launch1.png" alt="Card image cap">
                        <div class="card-body">
                            <p>The Complete Python Bootcamp From Zero to Hero...</p>
                            <div><h6>2-3 Months | 100+ Enrollments | Project Management</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card w-100">
                        <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                        <div class="card-body">
                            <p>Ultimate AWS Certified Solutions Architect Associate...</p>
                            <div><h6>2-3 Months | 100+ Enrollments | Digital Marketing</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="courses-area py-3 py-md-5">
    <div class="container">
        <h2 style="color:#000000;">All Courses</h2>
        <p style="color:#000000;" class="pt-2 pb-3">Choose your favorite course and launch a new career by flexible period</p>
        <div class="row">
            <div class="first col-6 col-lg-8 mb-sm-0">
                <span class="fa fa-search"></span>
                <input class="form-control" type="text" id="course-search" placeholder="Search your course here">
            </div>
            <div class="col-6 col-lg-4 d-flex">
                <a href="javascript:;" class="search btn slide-btn" id="search-btn">Search</a>
                <select class="form-control" id="course-filter">
                    <option value="">All</option>
                    <option value="1-2 Months">1-2 Months</option>
                    <option value="2-3 Months">2-3 Months</option>
                    <option value="3-4 Months">3-4 Months</option>
                    <option value="4 Months">4 Months</option>
                </select>
            </div>
        </div>
        <div class="mt-4 full-course" style="display:none;">
            <div class="tab-list">
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate AWS Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>1-2 Months</span> | 100+ Enrollments | Project Management</h6></div>
                        <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate Python Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>1-2 Months</span> | 100+ Enrollments | Project Management</h6></div>
                        <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate PHP Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>3-4 Months</span> | 100+ Enrollments | Project Management</h6></div>
                        <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate React Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>2-3 Months</span> | 100+ Enrollments | Project Management</h6></div>
                        <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate MySQL Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>1-2 Months</span> | 100+ Enrollments | UX/UI Designs</h6></div>
                        <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate Python Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>4 Months</span> | 100+ Enrollments | UX/UI Designs</h6></div>
                        <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate AWS Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>3-4 Months</span> | 100+ Enrollments | Digital Marketing</h6></div>
                        <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
                <div class="card w-100">
                    <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="name">Ultimate CSS Certified Solutions Architect Associate...</p>
                        <div><h6 class="duration"><span>4 Months</span> | 100+ Enrollments | Digital Marketing</h6></div>
                        <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                    </div>
                </div>
            </div> 
            <div id="txt" style="display:none;color: #00b56f;font-weight: 600;">Nothing Found.</div>           
        </div>
        <div class="show-content">
            <ul class="tabs mt-3 mt-md-4">
                <li class="tab-link current" data-tab="tab-1">Project Management</li>
                <li class="tab-link" data-tab="tab-2">UX/UI Designs</li>
                <li class="tab-link" data-tab="tab-3">Digital Marketing</li>
                <li class="tab-link" data-tab="tab-4">Data Specialist</li>
                <li class="tab-link" data-tab="tab-5">Front-End Development</li>
                <li class="tab-link" data-tab="tab-5">IT Supports</li>
                <li class="tab-link" data-tab="tab-5">Languages</li>
            </ul>

            <div id="tab-1" class="tab-content current">
                <div class="tab-list">
                    <div class="card w-100">
                        <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                        <div class="card-body">
                            <p>Ultimate AWS Certified Solutions Architect Associate...</p>
                            <div><h6>1-2 Months | 100+ Enrollments | Project Management</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                    <div class="card w-100">
                        <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                        <div class="card-body">
                            <p>Ultimate Python Certified Solutions Architect Associate...</p>
                            <div><h6>2 Months | 100+ Enrollments | Project Management</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                    <div class="card w-100">
                        <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                        <div class="card-body">
                            <p>Ultimate PHP Certified Solutions Architect Associate...</p>
                            <div><h6>3-4 Months | 100+ Enrollments | Project Management</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                    <div class="card w-100">
                        <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                        <div class="card-body">
                            <p>Ultimate React Certified Solutions Architect Associate...</p>
                            <div><h6>1 Months | 100+ Enrollments | Project Management</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                        <div class="card-body">
                            <p>Ultimate Angular Certified Solutions Architect Associate...</p>
                            <div><h6>1-2 Months | 100+ Enrollments | UX/UI Designs</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                    <div class="card w-100">
                        <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                        <div class="card-body">
                            <p>Ultimate MySQL Certified Solutions Architect Associate...</p>
                            <div><h6>2 Months | 100+ Enrollments | UX/UI Designs</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-content">
                <div class="tab-list">
                    <div class="card w-100">
                        <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                        <div class="card-body">
                            <p>Ultimate AWS Certified Solutions Architect Associate...</p>
                            <div><h6>1-2 Months | 100+ Enrollments | Digital Marketing</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                    <div class="card w-100">
                        <img class="card-img-top" src="images/new-launch2.png" alt="Card image cap">
                        <div class="card-body">
                            <p>Ultimate CSS Certified Solutions Architect Associate...</p>
                            <div><h6>2 Months | 100+ Enrollments | Digital Marketing</h6></div>
                            <div class="mt-2 text-end"><a href="/single.php" class="btn slide-btn custom-btn">View Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   

<section class="partner-area py-3 py-md-4 text-center">
    <div class="container">
        <h4 style="color:#000000;">Skills on Demand</h4>
        <p style="color:#000000;" class="pt-2 pb-3">Learn from the industry experts</p>
    </div>
    <div class="image-slider mt-3 mt-md-4">
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner1.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner2.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner3.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner4.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner5.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner6.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner7.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner8.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner9.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner10.png" alt="Card image cap">
            </div>                    
        </div>
        <div class="col-lg-12">
            <div class="card w-100">
                <img class="card-img-top" src="images/partner11.png" alt="Card image cap">
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
    