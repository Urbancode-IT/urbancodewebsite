<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>

<style>
#hero .container {
    margin-top: 60px; /* Adjust the value as needed */
}

  </style>
<!-- Hero Section -->
<section id="hero" class="hero section" >

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Inspire, guide, and make a difference</h1>
        <p>Share your experience to shape future leaders and make a lasting impact.</p>
        <div class="d-flex">
          
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" >
        <img src="image\mentor.jpg" class=" " style="border-radius: 55px;" alt="">
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->
</main>



<!--End hero section--->


<section class="payment-area py-3 py-md-5" style="background-color: #E7EDF6;" id="mentor">
    <div class="container">        
        <div class="text-center mb-3">
            <h4 style="color:#000000;">Register Here</h4>
            <p class="pb-3">Share your details</p>
            <button type="button" style="text-align:center;"   class="btn btn-primary px-4 py-2 site mentor_open">Register</button>
        </div>
        
        <p class="pb-3">Urbancode Invites educators to contribute their industry expertise in delivering current training programs and crafting new initiatives by suggesting training agendas and essential resources across diverse cutting-edge technologies.</p> 

        <p class="pb-3">Technical instructors are expected to demonstrate profound knowledge in their specialized areas and showcase excellent technical aptitude. Moreover, effective communication skills are essential, enabling the explanation of intricate subjects with clarity and engagement.</p>  

        <p class="pb-3">The objective is to play a pivotal role in enhancing individuals' technical/IT skills, aligning them with organizational requirements for career development.</p> 

        <h4 class="mt-2">Responsibilities of a Technical Trainer</h4>   

        <p class="pb-3">We believe a technical trainer plays a crucial role in shaping the skills and knowledge of individuals entering the software industry. Their multifaceted responsibilities contribute to creating a dynamic and effective learning environment.</p> 
        
        <ol>
            <li>Design and develop updated training programs, courses, and curriculum materials based on industry trends.</li>
            <li>Conduct interactive and effective training sessions for individuals or groups.</li>
            <li>Stay abreast of the latest developments in the field to provide accurate and current information.</li>
            <li>Facilitate practical, hands-on exercises and projects to reinforce theoretical concepts.</li>
            <li>Provide constructive feedback to help learners improve their skills and knowledge.</li>
            <li>Offer individualized assistance and foster a supportive learning environment that encourages questions and collaboration.</li>
            <li>Communicate complex technical concepts in a clear and understandable manner.</li>
            <li>Collaborate with other instructors and staff to improve overall training quality.</li>
            <li>Build and maintain relationships with industry professionals to stay connected with industry standards.</li>
            <li>Collect feedback from participants and stakeholders to evaluate the effectiveness of training programs.</li>
        </ol>
    </div>
</section>
<section class="mentor_popup">
  <div class="popup__content">
    <div class="close"><i class="fa-regular fa-circle-xmark"></i></div>
    <form id="mentor-form" class="my-2 my-md-4"> 
        <input type="hidden" name="action" value="mentorForm">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4 ">
                    <label for="">Name<span>*</span></label>
                    <input name="me-name" type="text" class="form-control" id="me-name">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4">
                    <label for="">Email Id<span>*</span></label>
                    <input name="me-email" type="email" class="form-control" id="me-email">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4">
                    <label for="">Phone No<span>*</span></label>
                    <input name="me-mobile" type="number" class="form-control" id="me-mobile">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4">
                    <label for="">Area of Expertise<span>*</span></label>
                    <input name="me-area-ex" type="text" class="form-control" id="me-area-ex">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4">
                    <label for="">Total years of Experience<span>*</span></label>
                    <input name="me-year-ex" type="number" class="form-control" id="me-year-ex">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4">
                    <label for="">Current Company<span>*</span></label>
                    <input name="me-curr-com" type="text" class="form-control" id="me-curr-com">
                </div>
            </div>                
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4">
                    <label for="">Designation<span>*</span></label>
                    <input name="me-des" type="text" class="form-control" id="me-des">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4">
                    <label for="">Date of Birth<span>*</span></label>
                    <input name="me-dob" type="date" class="form-control" id="me-dob">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4">
                    <label for="">Location<span>*</span></label>
                    <input name="me-location" type="text" class="form-control" id="me-location">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4">
                    <label for="">Preferred mode of classes<span>*</span></label>
                    <select class="form-control" id="me-preferred" name="me-preferred">
                        <option value="online">Online</option>
                        <option value="classroom">Classroom</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group mb-3 mb-md-4">
                    <label for="">Available days<span>*</span></label>
                    <select class="form-control" id="me-available" name="me-available">
                        <option value="weekend">Weekend</option>
                        <option value="weekdays">Weekdays</option>
                    </select>
                </div>
            </div>
            
        </div>                    
        <button type="button" class="btn btn-primary px-4 py-2 site" id="mentor-register">Register</button>
    </form> 
  </div>
</section>
<?php include 'inc/footer.php';?>