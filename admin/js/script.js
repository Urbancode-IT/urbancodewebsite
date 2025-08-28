$(document).ready(function($) {
    $('.card-slider').slick({
      dots: false,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      responsive: [
        {
        
            breakpoint: 991,
            settings: {
            slidesToShow: 2,
            slidesToScroll: 1
            }
        },
        {
        
            breakpoint: 767,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 1
            }
        },
        {
        
            breakpoint: 550,
            settings: {
            slidesToShow: 2,
            slidesToScroll: 1
            }
        },
        {
            breakpoint: 400,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
      }]
    });

    $('.image-slider').slick({
        dots: false,
        infinite: true,
        speed: 1500,
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        arrows: false,
        cssEase: 'linear',
        responsive: [
          {
          
              breakpoint: 991,
              settings: {
              slidesToShow: 8,
              slidesToScroll: 1
              }
          },
          {
          
              breakpoint: 767,
              settings: {
              slidesToShow: 6,
              slidesToScroll: 1
              }
          },
          {
          
              breakpoint: 550,
              settings: {
              slidesToShow: 5,
              slidesToScroll: 1
              }
          },
          {
              breakpoint: 400,
              settings: {
                  arrows: false,
                  slidesToShow: 3,
                  slidesToScroll: 1
            }
        }]
    });

    $('.bought-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [
          {
          
              breakpoint: 1200,
              settings: {
              slidesToShow: 2,
              slidesToScroll: 1
              }
          },
          {
              breakpoint: 400,
              settings: {
                  arrows: false,
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
        }]
    });

    $('.tutor-cards').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [
          {
          
              breakpoint: 991,
              settings: {
              slidesToShow: 3,
              slidesToScroll: 1
              }
          },
          {
          
              breakpoint: 767,
              settings: {
              slidesToShow: 2,
              slidesToScroll: 1
              }
          },
          {
              breakpoint: 450,
              settings: {
                  arrows: false,
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
        }]
    });

    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');
    
        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');
    
        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    });

    $('.slick', '.vertical-slider').slick({
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        appendDots: $('.slick-slider-dots'),
    });
    $(".vertical-slider").on("afterChange", function (){
        var id = $(this).find('.slick-active').attr('data-id');
        $('.content .list').hide(1000);
        $('.content .item-'+id).show(1000);
    });

    /*function adjustListHeight() {
        $('.hero-sec .content').each(function(){  
            var highestBox = 0;
            $('.list', this).each(function(){
                if($(this).height() > highestBox) {
                    highestBox = $(this).height(); 
                }
            });  
            $('.list', this).height(highestBox);                    
        });
    }
    
    // Run on initial page load
    adjustListHeight();
    
    // Run on window resize
    $(window).resize(function() {
        adjustListHeight();
    });*/
});

// $('.testimonials').owlCarousel({
//     loop:true,
//     margin:20,
//     nav:false,
//     dots:true,
// 	 responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:1
//         },
//         1000:{
//             items:2
//         }
//     }
// })




function showCustomToast(msg,type) {
    var toastElement = document.getElementById("customToast");
    var bootstrapToast = new bootstrap.Toast(toastElement);

    bootstrapToast.show();
    var cont = '';
    cont += '<div class="toast-header '+type+'" >';
        cont += '<strong class="me-auto">'+msg+'</strong>';
        cont += '<button type="button" class="btn-close custom-close-button" data-bs-dismiss="toast" aria-label="Close"></button>';
    cont += '</div>';
    $('#customToast').html(cont);
}


function bannersendEmail() {
    const name = document.getElementById('banner-name').value;
    const email = document.getElementById('banner-email').value;
    const phone = document.getElementById('banner-phone').value;
    const course = document.getElementById('banner-course').value;
    const zipcode = document.getElementById('banner-zipcode').value;
    const mode = document.getElementById('banner-mode').value;

    if (!isValidEmail(email)) {
        Swal.fire({
            icon: 'error',
            title: 'Invalid Email',
            text: 'Please enter a valid email address.',
            confirmButtonColor: '#01af6a',
            confirmButtonText: 'OK'
        });
        return;
    }

    if (!isValidMobileAll(phone)) {
        Swal.fire({
            icon: 'error',
            title: 'Invalid Phone Number',
            text: 'Please enter a valid phone number.',
            confirmButtonColor: '#01af6a',
            confirmButtonText: 'OK'
        });
        return;
    }

    let adminParams = {
        from_name: "UrbanCode",
        to_name: "Admin",
        reply_to: "admin@urbancode.in",
        message: `New enrollment details:
                  Name: ${name}
                  Email: ${email}
                  Phone: ${phone}
                  Course: ${course}
                  Zip Code: ${zipcode}
                  Mode: ${mode}`
    };

    // Send email to admin
    emailjs.send('service_fzvsd7q', 'template_542hq8s', adminParams)
        .then(function(response) {
            console.log('Admin Email Sent Successfully!', response.status, response.text);
            Swal.fire({
                icon: 'success',
                title: 'Thank you for enrolling!',
                text: 'We will contact you soon.',
                confirmButtonColor: '#01af6a',
                confirmButtonText: 'OK'
            });
        })
        .catch(function(error) {
            console.log('Email Sending Failed...', error);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Failed to send email. Please try again later.',
                confirmButtonColor: '#01af6a',
                confirmButtonText: 'OK'
            });
        });
}


  function isValidEmail(email) {
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailRegex.test(email);
  }

  function isValidMobileAll(mobile) {
    if (/^[0-9]{10}$/.test(mobile)) {
        var repeatingDigitsRegex = /(\d)\1{5,}/;
        var sequentialDigitsRegex = /0123456789|9876543210|1234567890/;
        return !repeatingDigitsRegex.test(mobile) && !sequentialDigitsRegex.test(mobile);
    }
    return false;
  }

  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('brochureForm');
    if (form && !form.dataset.listenerAdded) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            if (!form.dataset.submitted) {
                form.dataset.submitted = 'true'; // Prevent multiple submissions
                brochureDownload();
            }
        });
        form.dataset.listenerAdded = 'true'; // Prevent multiple listeners
    }
});

function brochureDownload() {
    console.log('Function is running');
    const name = document.getElementById('brochure-name').value;
    const email = document.getElementById('brochure-email').value;
    const phone = document.getElementById('brochure-phone').value;

    // Validate email and phone
    if (!isValidEmail(email)) {
        Swal.fire({
            icon: 'error',
            title: 'Invalid Email',
            text: 'Please enter a valid email address.',
            confirmButtonColor: '#01af6a',
            confirmButtonText: 'OK'
        }).then(() => {
            document.getElementById('brochureForm').dataset.submitted = 'false'; // Re-enable the form
        });
        return;
    }

    if (!isValidMobileAll(phone)) {
        Swal.fire({
            icon: 'error',
            title: 'Invalid Phone Number',
            text: 'Please enter a valid phone number.',
            confirmButtonColor: '#01af6a',
            confirmButtonText: 'OK'
        }).then(() => {
            document.getElementById('brochureForm').dataset.submitted = 'false'; // Re-enable the form
        });
        return;
    }

    // Get the current page section from the URL to determine the brochure to download
    const currentPageUrl = window.location.href;
    const pageSection = currentPageUrl.split('/').pop().replace('.php', '');

    // Prepare parameters for admin email
    let adminParams = {
        from_name: name,
        to_name: 'Admin',
        reply_to: email, // Reply should go back to the user's email for admin's response
        message: `New brochure download:
                  Name: ${name},
                  Email: ${email},
                  Phone: ${phone},
                  Brochure: ${pageSection}`
    };

     // Programmatically start the download
     const link = document.createElement('a');
     link.href = `https://urbancode.in/brochure/${pageSection}.pdf`;
     link.download = `${pageSection}-brochure.pdf`;
     link.target = '_blank';
     document.body.appendChild(link);
     link.click();
     document.body.removeChild(link);
     document.getElementById('brochureForm').dataset.submitted = 'false'; // Re-enable the form

    // Send email to admin
    emailjs.send('service_fzvsd7q', 'template_542hq8s', adminParams)
        .then(function(response) {
            console.log('Admin Email Sent Successfully!', response.status, response.text);
            Swal.fire({
                icon: 'success',
                title: 'Brochure Downloaded!',
                text: 'We will contact you soon.',
                confirmButtonColor: '#01af6a',
                confirmButtonText: 'OK'
            });
           
        })
        .catch(function(error) {
            console.log('Email Sending Failed...', error);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Failed to send email. Please try again later.',
                confirmButtonColor: '#01af6a',
                confirmButtonText: 'OK'
            });
            document.getElementById('brochureForm').dataset.submitted = 'false'; // Re-enable the form
        });
}


$(document).ready(function(){
    // $('#course-search').on('keypress',function(e) {
    //     if(e.which == 13) {
    //         $('#search-btn').trigger('click');
    //     }
    // });
    $('#search-btn').on('click', function(){ filterCource(); });
    $('#course-filter').on('change', function(){ filterCource(); });
    $('#course-search').on('keyup', function(){ filterCource(); });

    function filterCource(){
        var selectSearch = $("#course-search").val().toLowerCase();        
        var selectCategory = $('#course-filter').val().toLowerCase();
        $('.tabs .tab-link:first-child').trigger('click');
        /*if(selectSearch == '' && selectCategory == ''){
            // $('.show-content').show();
            // $('.full-course').hide();
        }else if(selectSearch != '' &&  selectCategory == ''){
            // $('.show-content').hide();
            // $('.full-course').show();
            $(".full-course .card").filter(function() {
                $(this).toggle($(this).find(".card-body").text().toLowerCase().indexOf(selectSearch) > -1);
            });
            $(".full-course .card:visible").length == 0 ? $('#txt').show() : $('#txt').hide();
        }else{
            // $('.show-content').hide();
            // $('.full-course').show();

            jQuery(".full-course .card").each(function() {
                var cardTitle = jQuery(this).find(".name").text().toLowerCase().trim();
                var cardCategory = jQuery(this).find(".duration span").text().toLowerCase().trim();
        
                var titleMatch = cardTitle.includes(selectSearch);  
                var categoryMatch = selectCategory === cardCategory;

                if(titleMatch && categoryMatch) {
                  jQuery(this).fadeIn();
                }else {
                  jQuery(this).fadeOut("slow");
                }
            });
            $(".full-course .card:visible").length == 0 ? $('#txt').show() : $('#txt').hide();
        }*/
        if(selectSearch == '' && selectCategory == ''){
            $("#tab-1 .tab-list .card").fadeIn();
        }else if(selectSearch != '' &&  selectCategory == ''){
            $("#tab-1 .tab-list .card").filter(function() {
                $(this).toggle($(this).find(".card-body").text().toLowerCase().indexOf(selectSearch) > -1);
            });            
        }else{
            $("#tab-1 .tab-list .card").each(function() {
                var cardTitle = jQuery(this).find(".name").text().toLowerCase().trim();
                var cardCategory = jQuery(this).find(".duration span").text().toLowerCase().trim();
        
                var titleMatch = cardTitle.includes(selectSearch);  
                var categoryMatch = selectCategory === cardCategory;

                if(categoryMatch) {
                  jQuery(this).fadeIn();
                }else {
                  jQuery(this).fadeOut("slow");
                }
            });
        }
    }
});


// Show the first accordion section by default
$(".each-accordionbox:first-child").addClass("active").children(".each-text").slideDown();

// Click handler for accordion titles
$(".each-title").on("click", function () {
  const parentBox = $(this).parent();

  if (parentBox.hasClass("active")) {
    // Collapse if it's already active
    parentBox.removeClass("active");
    parentBox.children(".each-text").slideUp();
  } else {
    // Collapse all others
    $(".each-accordionbox").removeClass("active").children(".each-text").slideUp();

    // Expand the clicked one
    parentBox.addClass("active");
    parentBox.children(".each-text").slideDown();
  }
});


// $(".each-accordionbox:first-child").addClass("active").children(".each-text").slideDown();
// $(".each-title").on("click",function(){
//     if( $(this).parent().hasClass("active") ){
//         $(this).next().slideUp();
//         $(this).parent().removeClass("active");
//     }
//     else{
//         $(".each-text").slideUp();
//         $(".each-accordionbox").removeClass("active");
//         $(this).parent().addClass("active");
//         $(this).next().slideDown();
//     }
// });

$(".down_btn").click(function() {
    $(".brochure_popup").fadeIn(500);
});
$(".brochure_close").click(function() {
    $(".brochure_popup").fadeOut(500);
});


$(document).ready(function() {
    if ($(window).width() <= 991) {
        $('.dropdown-menu .click').on('click', function(){  
            $(this).parent().css('display', 'block');                   
            $('.submenu').removeClass('show');
            $(this).find('.submenu').addClass('show');
        });
    }
});

$('#study-abroad input[type="radio"]').on('click', function(){
    $('.selection-score div').hide();
    var val = $(this).val();    
    $('.selection-score .'+val).show();
    
});

// contact form submit 
function contactSubmit(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;
    if (name == "" && email == "" && message == "") {    
        showCustomToast('Please fill in all required fields.', 'error');
        return;
    }else if (name == ""){
        showCustomToast('Please Enter Name.', 'error');   
        return;
    }
    
    if (!isValidEmail(email)) {
        showCustomToast('Please enter a valid email address.', 'error');  
        return;
    }

    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {'action': 'contactForm', 'name': name, 'email': email, 'message': message },
        success: function(response) {  
            showCustomToast(response, 'success');
            setTimeout(function() {
                document.getElementById("contact-form").reset();
            }, 1500);
        },
        error: function(xhr, status, error) {
            setTimeout(function() {
                showCustomToast(error, 'error');
            }, 1500);
        }
    });
}

// Study Abroad Submit 
function studyAbroadSubmit(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var edu_level = document.getElementById("edu_level").value;
    var field_interest = document.getElementById("field_interest").value;
    var current_institute = document.getElementById("current_institute").value;
    var intake = document.getElementById("intake").value;
    var country_interes = document.getElementById("country_interes").value;
    var preferred_course = document.getElementById("preferred_course").value;
    
    var genderRadioButtons = document.getElementsByName('score');
    var score;

    // Do something with the radio buttons
    for (var i = 0; i < genderRadioButtons.length; i++) {
        if (genderRadioButtons[i].checked) {
            score = genderRadioButtons[i].value;
            break;
        }
    }

    var one = document.getElementById("one").value;
    var two = document.getElementById("two").value;

    if (name == "" || email == "" || phone == "" || edu_level == "" || field_interest == "" || current_institute == "" || intake == "" || country_interes == "" || preferred_course == "" || score == "") {    
        showCustomToast('Please fill in all required fields.', 'error');
        return;
    }
    
    if (!isValidEmail(email)) {
        showCustomToast('Please enter a valid email address.', 'error');  
        return;
    }

    if (!isValidMobileAll(phone)) {
        showCustomToast('Please enter a valid mobile number.', 'error');
        return;
    }
    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {'action': 'studyAbroadForm', 'name': name, 'email': email, 'phone': phone, 'edu_level': edu_level, 'field_interest': field_interest, 'current_institute': current_institute, 'intake': intake, 'country_interes': country_interes, 'preferred_course': preferred_course, 'score': score, 'one': one, 'two': two },
        success: function(response) {  
            showCustomToast(response, 'success');
            setTimeout(function() {
                document.getElementById("study-form").reset();
            }, 1500);
        },
        error: function(xhr, status, error) {
            setTimeout(function() {
                showCustomToast(error, 'error');
            }, 1500);
        }
    });
}

// mentor form 
$(document).ready(function() {
    $("#mentor-register").click(function() {
        var formData = new FormData($("#mentor-form")[0]);
        var name = document.getElementById("me-name").value;
        var email = document.getElementById("me-email").value;
        var phone = document.getElementById("me-mobile").value;
        var area_ex = document.getElementById("me-area-ex").value;
        var year_ex = document.getElementById("me-year-ex").value;
        var current_com = document.getElementById("me-curr-com").value;
        var des = document.getElementById("me-des").value;
        var dob = document.getElementById("me-dob").value;
        var location = document.getElementById("me-location").value;
        var preferred = document.getElementById("me-preferred").value;
        var available = document.getElementById("me-available").value;
        
        if (name == "" || email == "" || phone == "" || area_ex == "" || year_ex == "" || current_com == "" || des == "" || dob == "" || location == "" || preferred == "" || available == "") {    
            showCustomToast('Please fill in all required fields.', 'error');
            return;
        }
        
        if (!isValidEmail(email)) {
            showCustomToast('Please enter a valid email address.', 'error');  
            return;
        }
    
        if (!isValidMobileAll(phone)) {
            showCustomToast('Please enter a valid mobile number.', 'error');
            return;
        }

        $.ajax({
            type: "POST",
            url: "ajax.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {                
                showCustomToast(response, 'success');
                setTimeout(function() {
                    document.getElementById("mentor-form").reset();
                    $(".mentor_popup").fadeOut(500);
                }, 1500);
            },
            error: function(xhr, status, error) {
                setTimeout(function() {
                    showCustomToast(error, 'error');
                }, 1500);
            }
        });
    });
});

$(".mentor_open").on('click', function() {
    $(".mentor_popup").fadeIn(500);
});
$(".mentor_popup .close").click(function() {
    $(".mentor_popup").fadeOut(500);
});

var step = 100;
var scrolling = false;

$("#scrollLeft").bind("click", function(event) {
    event.preventDefault();
    $(".tabs").animate({
        scrollLeft: "-=" + step + "px"
    });
});

$("#scrollRight").bind("click", function(event) {
    event.preventDefault();
    $(".tabs").animate({
        scrollLeft: "+=" + step + "px"
    });
});



document.addEventListener("DOMContentLoaded", function () {
    // Extract Course Name from the <li> element with id="course-id"
    const courseIdElement = document.getElementById("course-id");

    if (!courseIdElement) {
        console.error("Course ID element could not be found.");
        return;
    }

    // Get the course name from the <li> text content
    let currentCourseName = courseIdElement.innerText.trim().toLowerCase();

    if (!currentCourseName) {
        console.error("Course name could not be extracted from the <li> element.");
        return;
    }

    // Capitalize First Letter
    const formattedCourseName = currentCourseName.charAt(0).toUpperCase() + currentCourseName.slice(1);

    // Check if elements exist before setting values
    const courseNameInput = document.getElementById("courseName");
    const courseNameDisplay = document.getElementById("courseNameDisplay");

    if (courseNameInput) courseNameInput.value = formattedCourseName;
    if (courseNameDisplay) courseNameDisplay.innerText = formattedCourseName;

    console.log("Extracted Course Name:", currentCourseName);

    // Map courses to their specific Razorpay links
    const paymentLinks = {
        "full stack development": "yZrqPPa",
        "python": "XyZaBcD",
        "data-science": "12345Ds",
        "java": "JaVaCode12"
        "Advanced Python": "D4R0Hrr",
        
    };

    // Get the Razorpay link for the current course
    const razorpayBaseURL = "https://rzp.io/rzp/";
    const razorpayLink = paymentLinks[currentCourseName] ? razorpayBaseURL + paymentLinks[currentCourseName] : razorpayBaseURL + "defaultCode";

    // Update the Razorpay button dynamically
    const paymentButton = document.getElementById("razorpayButton");
    if (paymentButton) {
        paymentButton.href = razorpayLink;
    }

    // Form Validation & Submission
    const paymentForm = document.getElementById("paymentForm");
    if (paymentForm) {
        paymentForm.addEventListener("submit", async function (event) {
            event.preventDefault(); // Prevent Default Submission

            const name = document.getElementById("name")?.value.trim();
            const phone = document.getElementById("phone")?.value.trim();
            const screenshotFile = document.getElementById("paymentScreenshot")?.files[0];
            const courseName = document.getElementById("courseName")?.value;

            if (!name || !phone || !screenshotFile) {
                Swal.fire({
                    icon: "error",
                    title: "Oops!",
                    text: "Please fill all fields and upload the payment screenshot.",
                    confirmButtonColor: "#3085d6",
                });
                return;
            }

            // Upload Screenshot to Cloudinary
            try {
                const cloudinaryUrl = "https://api.cloudinary.com/v1_1/dkljhjkoa/image/upload";
                const uploadPreset = "Payments";

                let formData = new FormData();
                formData.append("file", screenshotFile);
                formData.append("upload_preset", uploadPreset);

                const uploadResponse = await fetch(cloudinaryUrl, {
                    method: "POST",
                    body: formData
                });

                const uploadData = await uploadResponse.json();
                if (!uploadData.secure_url) throw new Error("Cloudinary Upload Failed");

                const screenshotUrl = uploadData.secure_url;

                // Save to Google Sheets
                const excelData = {
                    name: name,
                    phone: phone,
                    course: courseName,
                    screenshotUrl: screenshotUrl
                };

                await fetch("https://script.google.com/macros/s/AKfycbzV2hBWnvy8YD05FWI1lOKXZCQjnvAmK-aTBJM4Tj3vP0TSMhsi8IV5bHRqjOEuQP7GEQ/exec", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    mode: "no-cors",
                    body: JSON.stringify(excelData)
                });

                // Show Success Message
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Your payment details have been submitted successfully!",
                    confirmButtonColor: "#28a745",
                }).then(() => {
                    document.getElementById("paymentForm").reset();
                });

            } catch (error) {
                Swal.fire({
                    icon: "error",
                    title: "Upload Failed!",
                    text: "Error uploading payment screenshot. Try again!",
                    confirmButtonColor: "#d33",
                });
            }
        });
    }
});

