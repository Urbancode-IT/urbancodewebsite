<?php require_once "config.php"; ?>
<?php include 'inc/header.php';?>
<style>
    /* Sections Header
--------------------------------*/
body{
  overflow-x :hidden ;
}

.section-header h3 {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
  }
  
  .section-header h3::before {
    content: "";
    position: absolute;
    display: block;
    width: 120px;
    height: 1px;
    background: #ddd;
    bottom: 1px;
    left: calc(50% - 60px);
  }
  
  .section-header h3::after {
    content: "";
    position: absolute;
    display: block;
    width: 40px;
    height: 3px;
    background: #18d26e;
    bottom: 0;
    left: calc(50% - 20px);
  }
  
  .section-header p {
    text-align: center;
    padding-bottom: 30px;
    color: #333;
  }



  /*-------------------------------------------------------------- 
 # Testimonials-courses 
 --------------------------------------------------------------*/ 
 .testimonials-courses 
 .testimonials-carousel, 
 .testimonials-courses 
 .testimonials-slider { 
  overflow: hidden; 
  margin-bottom:30px;
} 
.testimonials-courses .testimonial-item {
  box-sizing: content-box;
  padding: 20px;
  margin: 30px 15px;
  max-height: 400px;
  min-height: 300px;
  box-shadow: 0 0 10px 10px rgba(0, 0, 0, 0.05);
  position: relative;
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.testimonials-courses .testimonial-item:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px 10px rgba(0, 0, 0, 0.1);
}

.testimonials-courses .testimonial-item .testimonial-img { 
  border-radius: 25px 25px 25px 25px; 
  box-shadow: 0 0 10px 10px rgba(0, 0, 0, 0.05);
  overflow: hidden; 
  transition: 0.3s ease-in-out; 
  max-height: 400px; 
  width: 4500px !important; 
} 

.testimonials-courses .testimonial-item h3 { 
  margin: 5px 0 5px 0; 
  margin-top: 10px; 
  color: black; 
  font-weight: 700; 
  font-size: 20px;
  text-align:center;
} 

.testimonials-courses .testimonial-item h4 {
  font-size: 14px;
  background: #5fcf80;
  padding: 7px 14px;
  color: #fff;
  margin: 0;
}
.testimonials-courses .testimonial-item h3 a { 
  color: #1f1f1f; 
  transition: 0.3s; 
  text-decoration: none;
} 
.testimonials-courses .testimonial-item h3 a:hover { 
  color: #25A877; 
} 
.testimonials-courses .testimonial-item h4 { 
  font-size: 14px; 
  color: #1f1f1f; 
  margin: 0; 
} 
.testimonials-courses .testimonial-item p { 
  margin: 10px auto 15px auto; 
  font-size: 14px; 
  color: #1f1f1f; 
  font-weight: 300; 
  font-family: "Poppins", sans-serif; 
  display: -webkit-box;
  -webkit-line-clamp: 4; /* Number of lines to show */
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}

.testimonials-courses .swiper-pagination { 
  margin-top: 20px; position: relative; 
} 
.testimonials-courses .swiper-pagination .swiper-pagination-bullet { 
  width: 12px; 
  height: 12px;
   background-color: #fff; 
   opacity: 1; 
   border: 1px solid #ffc451; 
  } 
.testimonials-courses .swiper-pagination .swiper-pagination-bullet-active { 
  background-color: #ffc451; 
} 
.testimonials-courses .trainer-courses{ 
  padding-top: 15px; 
  border-top: 1px solid #fff; 
} 
.testimonials-courses .trainer-courses .trainer-courses-profile img { 
  max-width: 50px; 
  border-radius: 50px; 
} 
.testimonials-courses .trainer-courses .trainer-courses-profile span { 
  padding-left: 10px; 
  font-weight: 600;
  font-size: 16px; 
  color: #1f1f1f; 
} 

.testimonials-courses .explore-btn {
  align-items: center;
  justify-content: center;
  text-align: center; 
}

.testimonials-courses .explore-btn a {
   text-decoration: none;
   font-weight:bold;
}

.testimonials-courses .btn-get-started {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-size: 18px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 28px;
  border-radius: 10px;
  transition: 0.5s;
  color: #fff;
  background: #00ac4d;
  margin-top: 20px;
  border-color: #0dba4b;
}

.testimonials-courses .btn-get-started:hover {
  background: #1b8b35;
}

.course__ranking {
  display: flex;
  justify-content: space-between;
}
.course__timer {
  color: #25A877;
  border-radius: 10px;
  padding-inline: 10px;
  background-color: #FEE5DF;
}
span.course__vote {
  color: #A2A2A2;
}

.un-vote {
  color: #AEAEAE;
}
.vote {
  font-weight: 900;
  color: #FFC014;
}
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/

/* Hero Content Animations */
.hero-content {
  overflow: hidden; /* Ensures text doesn't overflow during animation */
}

.section-title {
  animation: fadeInUp 1s ease-out both;
}

.span {
  display: inline-block; /* Required for animation */
  animation: fadeInUp 1s ease-out 0.3s both; /* Delayed start */
}

.hero-text {
  animation: fadeInUp 1s ease-out 0.6s both; /* More delayed start */
}

.btn-hero {
  animation: fadeInUp 1s ease-out 0.9s both; /* Even more delayed */
}

/* Keyframes for fade-in and slide-up effect */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/*--------------------------------------------------------------
# Stats Section
--------------------------------------------------------------*/
.stats i {
  background-color: #00ac4d;
  color: #ffffff;
  border: 6px solid #ffffff;
  width: 64px;
  height: 64px;
  font-size: 24px;
  border-radius: 50px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  position: relative;
  z-index: 1;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.stats i:hover {
  transform: translateY(-5px);
}

.stats .stats-item {
  background: #f4f4f4; /* Light gray background */
  margin-top: -32px;
  padding: 40px 30px 35px 30px;
  width: 100%;
  position: relative;
  text-align: center;
  border-radius: 8px;
  z-index: 0;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stats .stats-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.stats .stats-item span {
  font-size: 36px;
  display: block;
  font-weight: 700;
  color: #01af6a; /* Green text color */
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
}

.stats .stats-item p {
  padding: 0;
  margin: 0;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  color: #333333; /* Darker gray text color */
}

.stats-item .purecounter::after {
  content: "+";
  font-size: 36px;
  color: #00ac4d; /* Green plus sign */
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
}
.announcement-container {
    display: flex;
    align-items: center;
    background-color: #f2f2f2;
    padding: 5px;
    margin-bottom: 10px;
    overflow: hidden;
}

.static-announcement {
    display: flex;
    align-items: center;
    background-color: #00ac4d;
    color: white;
    padding: 5px 15px;
    margin-right: 20px;
    font-weight: bold;
    position: relative;
    white-space: nowrap; /* Ensure no line break */
}

.static-announcement::after {
    content: "";
    position: absolute;
    top: 50%;
    right: -15px;
    width: 0;
    height: 0;
    border-top: 15px solid transparent;
    border-bottom: 15px solid transparent;
    border-left: 15px solid #00ac4d;
    transform: translateY(-50%);
}

.scrolling-announcement {
    overflow: hidden;
    white-space: nowrap;
    flex-grow: 1;
}

.scrolling-content {
    display: inline-block;
    animation: scroll 20s linear infinite; /* Adjusted animation duration */
    font-size: 18px;
    color: #111111;
    font-weight: 600;
    padding-left: 10px; /* Ensure space between static and scrolling content */
}

@keyframes scroll {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(-100%);
    }
}

.ad-custom-modal-content {
            width: 90%; /* Adjust modal width for responsiveness */
            max-width: 600px; /* Set maximum width */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(135deg, #ffffff, #f0f0f0);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            animation: ad-custom-popupAnimation 0.7s ease-out forwards;
            z-index: 1000;
            display: none;
        }

        @keyframes ad-custom-popupAnimation {
            from {
                transform: translate(-50%, -50%) scale(0.5);
                opacity: 0;
            }
            to {
                transform: translate(-50%, -50%) scale(1);
                opacity: 1;
            }
        }

        .ad-custom-modal-header {
            border-bottom: none;
            background: linear-gradient(135deg, #01af6a, #007a4b);
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-size: 22px;
            margin: 0;
        }

        .ad-custom-close {
            font-size: 28px;
            color: #ffffff;
            cursor: pointer;
        }

        .ad-custom-close:hover {
            color: #cccccc;
        }

        .ad-custom-modal-body {
            max-height: 300px; /* Limit max height for smaller screens */
            overflow-y: auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .ad-custom-highlight {
            background-color: #e8f0fe;
            border-left: 5px solid #01af6a;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            display: flex;
            align-items: center;
        }

        .ad-custom-highlight:hover {
            background-color: #d0e8fa;
            transform: translateY(-3px);
        }

        .ad-custom-course-info {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .ad-custom-course-img {
            width: 120px; /* Increase image size */
            height: 120px; /* Increase image size */
            border-radius: 10px;
            margin-right: 15px;
            object-fit: cover;
            border: 2px solid #01af6a;
        }

        .ad-custom-card-title {
            color: #343a40;
            margin-bottom: 8px;
            font-size: 22px; /* Increase title font size */
            font-weight: bold; /* Make title bold */
        }

        .ad-custom-card-text {
            color: #6c757d;
            margin-bottom: 5px;
            font-size: 16px; /* Adjust text font size */
        }



</style>

<style>
    /*-----------------------------------*\
  #style.css
\*-----------------------------------*/
/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

/**
 * colors
 */

--selective-yellow: hsl(42, 94%, 55%);
--eerie-black-1: hsl(0, 0%, 9%);
--eerie-black-2: hsl(180, 3%, 7%);
--quick-silver: hsl(0, 0%, 65%);
--radical-red: #1ab79d;
--light-gray: hsl(0, 0%, 80%);
--isabelline: hsl(36, 33%, 94%);
--gray-x-11: hsl(0, 0%, 73%);
--kappel_15: hsla(170, 75%, 41%, 0.15);
--platinum: hsl(0, 0%, 90%);
--gray-web: hsl(0, 0%, 50%);
--black_80: hsla(0, 0%, 0%, 0.8);
--white_50: hsla(0, 0%, 100%, 0.5);
--black_50: hsla(0, 0%, 0%, 0.5);
--black_30: hsla(0, 0%, 0%, 0.3);
--kappel: hsl(170, 75%, 41%);
--white: hsl(0, 0%, 100%);

/**
 * gradient color
 */

--gradient: linear-gradient(-90deg,hsl(151, 58%, 46%) 0%,hsl(170, 75%, 41%) 100%);

/**
 * typography
 */

--ff-league_spartan:"Poppins", sans-serif;
--ff-poppins:"Poppins", sans-serif;

--fs-1: 4.2rem;
--fs-2: 3.2rem;
--fs-3: 2.3rem;
--fs-4: 1.8rem;
--fs-5: 1.5rem;
--fs-6: 1.4rem;
--fs-7: 1.3rem;

--fw-500: 500;
--fw-600: 600;

/**
 * spacing
 */

--section-padding: 55px;

/**
 * shadow
 */

--shadow-1: 0 6px 15px 0 hsla(0, 0%, 0%, 0.05);
--shadow-2: 0 10px 30px hsla(0, 0%, 0%, 0.06);
--shadow-3: 0 10px 50px 0 hsla(220, 53%, 22%, 0.1);

/**
 * radius
 */

--radius-pill: 500px;
--radius-circle: 50%;
--radius-3: 3px;
--radius-5: 5px;
--radius-10: 10px;

/**
 * transition
 */

--transition-1: 0.25s ease;
--transition-2: 0.5s ease;
--cubic-in: cubic-bezier(0.51, 0.03, 0.64, 0.28);
--cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);

}
/*------------------------------*\
    Proper case
/*--------------------------------*/
h1,h2,h3,h4,h5,h6,P{
  text-transform: lowercase;
}

body *::first-letter {
  text-transform: uppercase;
}


/*-----------------------------------*\
#RESET
\*-----------------------------------*/

*,
*::before,
*::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}

a {
color: inherit;
text-decoration: none;
}

img { height: auto; }

input,
button {
background: none;
border: none;
font: inherit;
}

input { width: 100%; }

button { cursor: pointer; }

ion-icon { pointer-events: none; }

address { font-style: normal; }

:focus-visible { outline-offset: 4px; }

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track { background-color: hsl(0, 0%, 98%); }

::-webkit-scrollbar-thumb { background-color: hsl(0, 0%, 80%); }

::-webkit-scrollbar-thumb:hover { background-color: hsl(0, 0%, 70%); }





/*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/



.section { padding-block: var(--section-padding); }

.shape {
position: absolute;
display: none;
}

.has-bg-image {
background-repeat: no-repeat;
background-size: cover;
background-position: center;
}

li { list-style: none; }

.h1,
.h2,
.h3 {
color: var(--eerie-black-1);
font-family: var(--ff-league_spartan);
line-height: 1.2;
}

.h1,
.h2 { font-weight: var(--fw-600); }

.h1 { font-size: var(--fs-2); }

.h2 { font-size: var(--fs-4); }

.h3 {
font-size: var(--fs-5);
font-weight: var(--fw-500);
}

.section-title {
--color: var(--radical-red);
text-align: center;
}

.section-title .span {
color: var(--color);
}

.btn-hero {
  background-color: var(--kappel);
  color: var(--white);
  font-family: var(--ff-league_spartan);
  font-size: var(--fs-4);
  display: flex;
  align-items: center;
  gap: 7px;
  max-width: max-content;
  padding: 10px 20px;
  border-radius: var(--radius-5);
  overflow: hidden;
  box-shadow: 0 8px 18px rgba(0, 0, 0, 0.25);
  transform: translateY(0);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative; /* Needed for the shimmer effect */
}

.btn-hero:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.35);
}

/* Shimmer animation */
.btn-hero::after {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    90deg,
    transparent,
    rgba(255, 255, 255, 0.2),
    transparent
  );
  animation: shimmer 2.5s infinite;
}

@keyframes shimmer {
  100% {
    left: 100%;
  }
}

.has-before,
.has-after {
position: relative;
z-index: 1;
}

.has-before::before,
.has-after::after {
position: absolute;
content: "";
}

.btn::before {
inset: 0;
background-image: var(--gradient);
z-index: -1;
border-radius: inherit;
transform: translateX(-100%);
transition: var(--transition-2);
}

.btn:is(:hover, :focus)::before { transform: translateX(0); }

.img-holder {
aspect-ratio: var(--width) / var(--height);
background-color: var(--light-gray);
overflow: hidden;
}

.img-cover {
width: 100%;
height: 100%;
object-fit: cover;
}

.section-subtitle {
font-size: var(--fs-5);
font-weight: var(--fw-500);
letter-spacing: 1px;
text-align: center;
margin-block-end: 15px;
}

.section-text {
font-size: var(--fs-5);
text-align: center;
margin-block: 15px 25px;
}

.grid-list {
display: grid;
gap: 30px;
}

.category-card,
.stats-card { background-color: hsla(var(--color), 0.1); }

:is(.course, .blog) .section-title { margin-block-end: 40px; }

/*-----------------------------------*\
#HERO
\*-----------------------------------*/

.hero { padding-block-start: calc(var(--section-padding) + 80px); }

.hero .container {
/*padding :0px !important;*/
display: grid;
gap: 40px;
}

.hero-text {
color: var(--eerie-black-1);
font-size: var(--fs-6);
text-align: left;
margin-block: 18px 20px;
}

.hero .btn-hero { margin-inline: auto; }

.hero-banner {
display: grid;
grid-template-columns: 1fr 0.8fr;
align-items: flex-start;
gap: 30px;
}


/* Individual image holders with 3D depth */
.hero-banner .img-holder {
  overflow: hidden;
  border-radius: 24px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  background-color: #fff; /* Adds a card-like appearance */
}

.hero-banner .img-holder:hover {
  transform: scale(1.03) rotateZ(1deg);
  box-shadow: 0 30px 50px rgba(0, 0, 0, 0.3);
}

/* Keep your existing radius styling */
.hero-banner .img-holder.one {
  border-top-right-radius: 70px;
  border-bottom-left-radius: 110px;
}

.hero-banner .img-holder.two {
  border-top-left-radius: 50px;
  border-bottom-right-radius: 90px;
}
/* Add to existing CSS */

@keyframes float {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0px);
  }
}

/* Apply floating animation */
.hero-banner .img-holder.one,
.hero-banner .img-holder.two {
  animation: float 5s ease-in-out infinite;
  animation-delay: 0.3s;
  animation-timing-function: ease-in-out;
}
.hero-banner .img-holder:hover {
  transform: scale(1.03) rotateZ(1deg) translateY(-5px); /* combine all */
  box-shadow: 0 30px 50px rgba(0, 0, 0, 0.3);
  animation: none; /* stop animation on hover if desired */
}

/*-----------------------------------*\
#ABOUT
\*-----------------------------------*/

.about {
padding-block-start: 0;
overflow: hidden;
}

.about .container {
display: grid;
gap: 30px;
}

.about-banner {
position: relative;
z-index: 1;
}

.about-banner .img-holder { border-radius: var(--radius-10); }

.about-shape-2 {
display: block;
bottom: -100px;
left: -60px;
animation: bounce 2.5s infinite;
}

@keyframes bounce {
0%,
20%,
50%,
80%,
100% { transform: translateY(0); }

40% { transform: translateY(-30px); }

60% { transform: translateY(-15px); }
}

.about :is(.section-subtitle, .section-title, .section-text) {
text-align: left;
}

.about-item {
margin-block: 15px;
display: flex;
align-items: center;
gap: 15px;
}

.about-item ion-icon {
color: var(--selective-yellow);
font-size: 20px;
--ionicon-stroke-width: 50px;
}

.about-item .span {
color: var(--eerie-black-1);
font-family: var(--ff-league_spartan);
}




/*-----------------------------------*\
#VIDEO
\*-----------------------------------*/

.video {
background-size: contain;
background-position: center top;
}

.video-banner {
position: relative;
border-top-right-radius: 80px;
border-bottom-left-radius: 120px;
}

.video .play-btn {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: var(--radical-red);
font-size: 30px;
padding: 16px;
color: var(--white);
border-radius: var(--radius-circle);
box-shadow: 0 0 0 0 var(--white_50);
z-index: 1;
animation: pulse 3s ease infinite;
}

@keyframes pulse {
0% { box-shadow: 0 0 0 0 var(--white_50); }
100% { box-shadow: 0 0 0 20px transparent; }
}

.video-banner::after {
inset: 0;
background-color: var(--black_30);
}





/*-----------------------------------*\
#STATS
\*-----------------------------------*/

.stats-card {
text-align: center;
padding: 25px;
border-radius: var(--radius-10);
}

.stats-card :is(.card-title, .card-text) { font-family: var(--ff-league_spartan); }

.stats-card .card-title {
color: hsl(var(--color));
font-size: var(--fs-2);
line-height: 1.1;
}

.stats-card .card-text {
color: var(--eerie-black-1);
}

/*-----------------------------------*\
#BACK TO TOP
\*-----------------------------------*/

.back-top-btn {
position: fixed;
bottom: 40px;
right: 30px;
background-color: var(--kappel);
color: var(--white);
font-size: 20px;
padding: 15px;
border-radius: var(--radius-circle);
z-index: 3;
opacity: 0;
pointer-events: none;
transition: var(--transition-1);
}

.back-top-btn.active {
transform: translateY(10px);
opacity: 1;
pointer-events: all;
}





/*-----------------------------------*\
#MEDIA QUERIES
\*-----------------------------------*/

/**
* responsive for large than 575px screen
*/

@media (min-width: 575px) {



.grid-list { grid-template-columns: 1fr 1fr; }

:is(.course, .blog) .grid-list { grid-template-columns: 1fr; }

/**
 * HERO
 */

.hero-banner { grid-template-columns: 1fr 0.9fr; }



/**
 * VIDEO
 */

.video .play-btn { padding: 25px; }



/**
 * STATS
 */

.stats-card { padding: 40px 30px; }


}


/**
* responsive for large than 768px screen
*/

@media (min-width: 768px) {



.btn-hero { 
padding: 5px 15px; 
}

:is(.course, .blog) .grid-list { grid-template-columns: 1fr 1fr; }

/**
 * HERO
 */

.hero { padding-block-start: calc(var(--section-padding) + 90px); }

.hero .container { gap: 50px; }

.hero-text { margin-block-end: 30px; }

.hero-banner {
  position: relative;
  z-index: 1;
}

.hero-banner .img-holder { max-width: max-content; }

.hero-banner .img-holder.one { justify-self: flex-end; }

.hero-banner .img-holder.two { margin-block-start: 100px; }

.hero-shape-1 {
  display: block;
  position: absolute;
  bottom: -40px;
  left: -10px;
}



/**
 * ABOUT
 */

.about { padding-block-start: 50px; }

.about-banner {
  padding: 60px;
  padding-inline-end: 0;
}

.about-banner .img-holder {
  max-width: max-content;
  margin-inline: auto;
}

.about-shape-1 {
  display: block;
  top: -40px;
  right: -70px;
}

}





/**
* responsive for large than 992px screen
*/

@media (min-width: 992px) {



.grid-list { grid-template-columns: repeat(4, 1fr); }

:is(.course, .blog) .grid-list { grid-template-columns: repeat(3, 1fr); }



/**
 * HERO
 */

.hero .container {
  grid-template-columns: 1fr 1fr;
  align-items: center;
}

.hero .section-title,
.hero-text { text-align: left; }

.hero .btn-hero { margin-inline: 0; }



/**
 * ABOUT
 */

.about .container {
  grid-template-columns: 1fr 0.6fr;
  align-items: center;
  gap: 60px;
}



/**
 * VIDEO
 */

.video-banner {
  max-width: 75%;
  margin-inline: auto;
}


}





/**
* responsive for large than 1200px screen
*/

@media (min-width: 1200px) {

/**
 * REUSED STYLE
 */


.shape { display: block; }

.about-content,
.video-card,


/**
 * HERO
 */

.hero { 
  background-color: white;
 }

.hero .container { gap: 80px; }

.hero-shape-2 {
  top: -80px;
  z-index: -1;
}



/**
 * ABOUT
 */

.about .container { gap: 110px; }

.about-banner .img-holder { margin-inline: 0; }

.about-shape-3 {
  top: -20px;
  left: -100px;
  z-index: -1;
}

.about-content { z-index: 1; }

.about-shape-4 {
  top: 30px;
  right: -60px;
  z-index: -1;
}



/**
 * VIDEO
 */

.video-shape-1 {
  top: -50px;
  left: 0;
}

.video-shape-2 {
  top: -80px;
  right: 120px;
  z-index: 1;
}


}
@media (max-width: 767px) {
  .btn-hero {
    font-size: 1rem;   /* smaller text */
    padding: 8px 16px;   /* smaller button */
  }

  .hero-text {
    text-align: center;
    margin-block: 18px 20px;
    }
}
</style> 

<!--  bar model-->

    <!--- #HERO -->

  <section class="section hero has-bg-image" id="home" aria-label="home"> 
        <div class="container">

          <div class="hero-content">
        
        <h1 class="h1 section-title">
        Success is a journey of constant evolution, <br>
          <span class="span">and at Urbancode</span>
      </h1>




           <p class="hero-text">
          we embrace every step with ingenuity and resilience.
        </p>



            <!--<a href="/courses" class="btn has-before">-->
            <!--  <span class="span">Find courses</span>-->
            

            <!--  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>-->
            <!--</a>-->
            
            <button type="button" class="btn-hero has-before" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquire now</button>

          </div>

          <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
              <img src="image/banner-1.webp" width="270" height="300" alt="hero banner" class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
              <img src="image/banner-2.webp" width="240" height="370" alt="hero banner" class="img-cover">
            </div>

            <img src="image/call.webp" width="380" height="190" alt="" class="shape hero-shape-1">

           <img src="image/hero-shape-2.webp" width="622" height="551" alt="" class="shape hero-shape-2">

          </figure>

        </div>
      </section>


   <!--<div id="ad-custom-popup" class="ad-custom-modal-content">-->
   <!--     <div class="ad-custom-modal-header">-->
   <!--         <h5 class="modal-title">Upcoming Courses</h5>-->
   <!--         <span class="ad-custom-close" onclick="closeModal()">&times;</span>-->
   <!--     </div>-->
   <!--     <div class="ad-custom-modal-body">-->
   <!--         <div class="ad-custom-highlight mb-3" onclick="window.location.href='ai-ml.php'">-->
   <!--             <div class="ad-custom-course-info">-->
   <!--                 <img src="images/courses/ai-ml/ai-ml-about.jpg" class="ad-custom-course-img" alt="Ai-ml">-->
   <!--                 <div>-->
   <!--                     <h5 class="ad-custom-card-title">AI & ML</h5>-->
   <!--                     <p class="ad-custom-card-text">Start Date: July 1, 2024</p>-->
   <!--                     <p class="ad-custom-card-text">Mode: Online and Offline</p>-->
   <!--                 </div>-->
   <!--             </div>-->
   <!--         </div>-->
   <!--         <div class="ad-custom-highlight mb-3" onclick="window.location.href='kids-python.jpg'">-->
   <!--             <div class="ad-custom-course-info">-->
   <!--                 <img src="images/python-lg.png" class="ad-custom-course-img" alt="Data Science Python">-->
   <!--                 <div>-->
   <!--                     <h5 class="ad-custom-card-title">Data Science with Python</h5>-->
   <!--                     <p class="ad-custom-card-text">Start Date: July 5, 2024</p>-->
   <!--                     <p class="ad-custom-card-text">Mode: Online and Offline</p>-->
   <!--                 </div>-->
   <!--             </div>-->
   <!--         </div>-->
   <!--         Add more courses as needed-->
   <!--     </div>-->
   <!-- </div> -->





<style>
  /* General Styles */
  .padding-medium {
    padding: 4rem 0;
  }


  .text-center {
    text-align: center;
  }

  .section-header h3 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 1rem;
  }

  .section-header .lead {
    font-size: 1.25rem;
    color: #6c757d;
    margin: 0 auto;
    max-width: 800px;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
    margin: -15px;
  }

  .col-md-6, .col-lg-4 {
    padding: 15px;
  }

  /* Services Element Styles */
  .services-element {
    background-color: rgb(194 255 204);
    border: 1px solid #e0e0e0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease-in-out;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .services-element:hover {
    background-color: rgb(194 255 204);
    transform: translateY(-10px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  }

  .services-element .p-4 {
    padding: 2rem;
  }

  .services-element .rounded-3 {
    border-radius: 1rem;
  }

  .service-icon-container {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    background-color: #e0f7fa;
    border-radius: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .service-icon {
    font-size: 2.5rem;
    color: #00796b;
  }

  .services-element h4 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 0.5rem;
  }

  .service-description {
    font-size: 1rem;
    color: #333;
    line-height: 1.6;
    padding: 0 1rem;
    position: relative;
    margin: 0;
    transition: color 0.3s ease;
  }

  .service-description::before {
    content: "";
    display: block;
    width: 5px;
    height: 30px;
    background-color: #01af6a;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    transition: background-color 0.3s ease;
  }

  .services-element:hover .service-description {
    color: #00796b;
  }

  /* Responsive Styles */
  @media (max-width: 991.98px) {
    .padding-medium {
      padding: 3rem 0;
    }

    .service-icon-container {
      width: 70px;
      height: 70px;
    }

    .service-icon {
      font-size: 2rem;
    }

    .services-element h4 {
      font-size: 1.25rem;
    }

    .service-description {
      font-size: 0.9rem;
      padding: 0 0.5rem;
    }
  }

  @media (max-width: 767.98px) {
    .padding-medium {
      padding: 2rem 0;
    }

    .section-header h3 {
      font-size: 2rem;
    }

    .section-header .lead {
      font-size: 1rem;
      max-width: 100%;
    }

    .service-icon-container {
      width: 60px;
      height: 60px;
    }

    .service-icon {
      font-size: 1.75rem;
    }

    .services-element h4 {
      font-size: 1.15rem;
    }

    .service-description {
      font-size: 0.85rem;
    }
  }

  @media (max-width: 575.98px) {
    .padding-medium {
      padding: 1.5rem 0;
    }

    .section-header h3 {
      font-size: 1.75rem;
    }

    .section-header .lead {
      font-size: 0.9rem;
    }

    .service-icon-container {
      width: 50px;
      height: 50px;
    }

    .service-icon {
      font-size: 1.5rem;
    }

    .service-element {
      background-color: rgb(194 255 204);
    }

    .services-element h4 {
      font-size: 1rem;
    }

    .service-description {
      font-size: 0.75rem;
    }
  }

</style>

<!-- 
<section class="product-section">
   <div class="container py-3 py-md-5 text-center">
         <h3 style="color:#000000;">Why Urbancode?</h3>
        <p class="py-3 text-start" style="color:#000000;font-size:20px;">Urbancode Training and Solution is a premier educational institution dedicated to software and language training with global placement opportunities. Equipped with a strength of over 500 students and 40 experienced professional trainers, Urbancode was founded and established by Mr. Sivagaminathan, former Vice President of Wells Fargo. Urbancode is built on the strength of passionate mentors determined to enhance knowledge and provide extensive training to support the career growth and development of aspiring individuals. The belief, “Proficiency in software and language is the cornerstone of success in today's competitive world.” </b> </p> 
        <div class="cource-area mb-3">
            <img src="images/award-1.png"  alt="award-1"/>
            <img src="images/award-3.png" alt="award-3"/>
            <img src="images/award-2.png" alt="award-2"/>
        </div> 
        <div class="cource-area my-5">
            <div class="cource-item d-flex align-items-center ">
                <img src="images/Python-head.png" class="pe-2" alt="python"/>
                <p>Python</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/aws-head.png" class="pe-2" alt="aws"/>
                <p>AWS</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/angular-head.png" class="pe-2" alt="angular"/>
                <p>Angular</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/Mysql-head.png" class="pe-2" alt="mysql"/>
                <p>MySQL</p>
            </div>
            <div class="cource-item d-flex align-items-center">
                <img src="images/UI-&-UX-head.png" class="pe-2" alt="ui & ux"/>
                <p>UI/UX Designs</p>
            </div>
        </div>
    </div>
</section> -->


<!-- Glightbox CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

<!-- Glightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

      

  <section class="video has-bg-image" aria-label="video"
  style="background-image: url('image/video-bg.png')">
  <div class="container">

    <div class="video-card">

      <div class="video-banner img-holder has-after" style="--width: 970px; --height: 550px;">
        <img src="image/vid.webp" width="970" height="550" loading="lazy" alt="video banner"
          class="img-cover">

        <!-- Glightbox trigger -->
        <!-- <a href="" class="glightbox play-btn" data-type="video" aria-label="Play Video">
          <ion-icon name="play" aria-hidden="true"></ion-icon>
        </a> -->
      </div>

      <!-- <img src="image/video-shape-1.png" width="1089" height="605" loading="lazy" alt=""
        class="shape video-shape-1">

      <img src="image/video-shape-2.png" width="158" height="174" loading="lazy" alt=""
        class="shape video-shape-2"> -->

    </div>

  </div>
</section>





<!-- ======= courses Section ======= -->
<section id="testimonials-courses" class="testimonials-courses section-bg services py-md-4 py-3">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h3>Discover a course designed, Just for you</h3>
      <p>Level up your Career</p>
    </header>

    <div class="testimonials-courses-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">

        <!-- Python -->
        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="images/courses/python/python.webp" class="testimonial-img" alt="Python Programming Urbancode">
              <h3><a href="/python">Python Programming</a></h3>
              <p>Master the world’s most versatile programming language with Urbancode's Python Course. Learn the fundamentals of Python, data structures, object-oriented programming, and real-world project development. Ideal for beginners and professionals looking to upgrade. Join us and build a strong foundation in Python.</p>
              <div class="course__ranking">
                <div class="course__star">
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill un-vote"></i>
                </div>
                <span class="course__vote">4.0</span>
                <div class="course__timer">
                  <i class="bi bi-clock"></i>
                  <span>2 Months</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- MERN & MEAN -->
        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="images/courses/full-stack/full-stack.webp" class="testimonial-img" alt="MERN MEAN Full Stack Urbancode">
              <h3><a href="/full-stack">MERN & MEAN Stack</a></h3>
              <p>Learn full-stack web development with the MERN (MongoDB, Express, React, Node.js) and MEAN (MongoDB, Express, Angular, Node.js) stacks. From frontend design to backend logic, gain practical experience and build full-scale applications. Join Urbancode to master both JavaScript stacks in one program.</p>
              <div class="course__ranking">
                <div class="course__star">
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                </div>
                <span class="course__vote">5.0</span>
                <div class="course__timer">
                  <i class="bi bi-clock"></i>
                  <span>3 Months</span>
                </div>
              </div>
            </div>
          </div>
        </div>

       <!-- MIT Kids App Inventor -->
<div class="swiper-slide">
  <div class="testimonial-wrap">
    <div class="testimonial-item">
      <img src="images/courses/app-inventor-kids/mit.webp" class="testimonial-img" alt="MIT Kids App Inventor Course at Urbancode">
      <h3><a href="/app-inventor">MIT Kids - App Inventor</a></h3>
      <p>Empower your child to become a mobile app creator with Urbancode's <strong>MIT Kids App Inventor Course</strong>. This beginner-friendly program uses a visual, drag-and-drop interface to help kids design and build real Android apps—without writing complex code. Developed by MIT, App Inventor introduces children to logical thinking, user interface design, and creative problem solving in a fun and interactive way. Perfect for young innovators and future developers!</p>
      <div class="course__ranking">
        <div class="course__star">
          <i class="bi bi-star-fill vote"></i>
          <i class="bi bi-star-fill vote"></i>
          <i class="bi bi-star-fill vote"></i>
          <i class="bi bi-star-fill vote"></i>
          <i class="bi bi-star-fill vote"></i>
        </div>
        <span class="course__vote">5.0</span>
        <div class="course__timer">
          <i class="bi bi-clock"></i>
          <span>1 Month</span>
        </div>
      </div>
    </div>
  </div>
</div>


        <!-- React Native -->
        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="images/courses/react-native/react-native.webp" class="testimonial-img" alt="React Native Course Urbancode">
              <h3><a href="/react-native">React Native</a></h3>
              <p>Learn to build cross-platform mobile applications using React Native. From UI components to navigation and API integrations, gain practical experience to create high-performance Android & iOS apps. Join Urbancode and become a mobile app developer with in-demand skills.</p>
              <div class="course__ranking">
                <div class="course__star">
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                </div>
                <span class="course__vote">5.0</span>
                <div class="course__timer">
                  <i class="bi bi-clock"></i>
                  <span>2 Months</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Power BI & SQL -->
        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="images/courses/power-bi/power-bi.webp" class="testimonial-img" alt="Power BI & SQL Course Urbancode">
              <h3><a href="/powerbi-sql">Power BI & SQL</a></h3>
              <p>Master data analytics with Urbancode’s Power BI & SQL Course. Learn how to write efficient SQL queries, visualize data with Power BI dashboards, and make data-driven decisions. Ideal for aspiring data analysts and business intelligence professionals.</p>
              <div class="course__ranking">
                <div class="course__star">
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill un-vote"></i>
                </div>
                <span class="course__vote">4.0</span>
                <div class="course__timer">
                  <i class="bi bi-clock"></i>
                  <span>1.5 Months</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- AWS -->
        <div class="swiper-slide">
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="images/courses/aws/aws.webp" class="testimonial-img" alt="AWS Cloud Architect Urbancode">
              <h3><a href="/aws">AWS Cloud Architect</a></h3>
              <p>Become a certified AWS Cloud Architect with Urbancode. Learn core AWS services, architecture principles, deployment strategies, and security. Build, manage, and scale cloud solutions. Suitable for all tech enthusiasts aiming to specialize in cloud technologies.</p>
              <div class="course__ranking">
                <div class="course__star">
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                  <i class="bi bi-star-fill vote"></i>
                </div>
                <span class="course__vote">5.0</span>
                <div class="course__timer">
                  <i class="bi bi-clock"></i>
                  <span>2 Months</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="explore-btn">
        <a href="/courses" class="btn-get-started scrollto align-items-center">Explore Courses</a>
      </div>
    </div>
  </div>
</section><!-- End Testimonials Section -->

    <!-- 
        - #STATE
      -->
<section class="section stats" aria-label="Our Achievements">
  <div class="container">
    

    <ul class="grid-list">
      <li>
        <div class="stats-card">
          <h3 class="card-title" data-count="800">0</h3>
          <p class="card-text">Students Empowered</p>
        </div>
      </li>

      <li>
        <div class="stats-card">
          <h3 class="card-title" data-count="80">0</h3>
          <p class="card-text">Diverse Courses</p>
        </div>
      </li>

      <li>
        <div class="stats-card">
          <h3 class="card-title" data-count="100">0</h3>
          <p class="card-text">Student Satisfaction</p>
        </div>
      </li>

      <li>
        <div class="stats-card">
          <h3 class="card-title" data-count="50">0</h3>
          <p class="card-text">Expert Instructors</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<style>
  /* Base Styles - You can integrate these into your main CSS file */
  .section.stats {
    padding: 60px 20px;
    background-color: #f9f9f9;
    font-family: 'Arial', sans-serif;
  }

  .section.stats .container {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
  }

  .section-title {
    font-size: 2em;
    color: #333;
    margin-bottom: 15px;
    font-weight: 700;
  }

  .section-description {
    font-size: 1.2em;
    color: #666;
    margin-bottom: 50px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
  }

  .grid-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .stats-card {
    background-color: #ffffff;
    border-radius: 15px; /* Slightly more rounded */
    padding: 30px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transitions for hover */
    border-bottom: 5px solid; /* Defined by specific card colors */
  }

  .stats-card:hover {
    /* transform: translateY(-10px); Lifts the card on hover */
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15); /* More prominent shadow on hover */
  }

  .stats-card .card-title {
    font-size: 3.8em; /* Slightly larger */
    font-weight: 700;
    margin-bottom: 10px;
    line-height: 1;
    /* Color set by JavaScript or specific card styles */
  }

  .stats-card .card-text {
    font-size: 1.2em; /* Slightly larger */
    color: #555;
    font-weight: 500; /* A bit bolder */
    opacity: 0.9; /* Slightly transparent */
  }

  /* Individual card colors */
  .grid-list li:nth-child(1) .stats-card {
    border-color: hsl(170, 75%, 41%); /* Green */
  }

  .grid-list li:nth-child(1) .card-title {
    color: rgba(26, 183, 157, 0.8);
  }

  .grid-list li:nth-child(2) .stats-card {
    border-color: hsl(351, 83%, 61%); /* Red/Pink */
  }

  .grid-list li:nth-child(2) .card-title {
    color: rgba(238, 73, 98, 0.8);
  }

  .grid-list li:nth-child(3) .stats-card {
    border-color: hsl(260, 100%, 67%); /* Purple */
  }

  .grid-list li:nth-child(3) .card-title {
    color: rgba(143, 87, 255, 0.8);
  }

  .grid-list li:nth-child(4) .stats-card {
    border-color: hsl(42, 94%, 55%); /* Orange */
  }

  .grid-list li:nth-child(4) .card-title {
    color: rgba(248, 183, 32, 0.8);
  }
</style>

<script>
  // JavaScript for animated counting
  document.addEventListener('DOMContentLoaded', () => {
    const statsCards = document.querySelectorAll('.stats-card');

    const animateCount = (element, target) => {
      let count = 0;
      const duration = 2000; // 2 seconds
      const step = Math.ceil(target / (duration / 10)); // Adjust step for smoother animation

      const timer = setInterval(() => {
        count += step;
        if (count >= target) {
          count = target;
          clearInterval(timer);
        }
        element.textContent = count + (element.closest('li').querySelector('.card-text').textContent.includes('Satisfaction') ? '%' : '+');
      }, 10);
    };

    // Intersection Observer to trigger animation when cards are visible
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const titleElement = entry.target.querySelector('.card-title');
          const targetCount = parseInt(titleElement.getAttribute('data-count'));
          animateCount(titleElement, targetCount);
          observer.unobserve(entry.target); // Stop observing once animated
        }
      });
    }, {
      threshold: 0.5 // Trigger when 50% of the element is visible
    });

    statsCards.forEach(card => {
      observer.observe(card);
    });
  });
</script>
      
      
      
 <section id="certificate" class="certificate-section" style="padding: 40px 20px; background: #f9f9f9;">
  <div class="container" style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; align-items: center; gap: 30px;">

    <!-- Certificate Image -->
    <div class="certificate-img" style="flex: 1 1 300px; min-width: 280px; max-width: 450px;">
      <img src="images/certificate/urbancode-harvard-certificate.webp" alt="Urbancode Harvard Certificate" style="width: 100%; height: auto; box-shadow: 0 4px 15px rgba(0,0,0,0.1);" />
    </div>

    <!-- Certificate Content -->
    <div class="certificate-content" style="flex: 1 1 400px; min-width: 280px;">
      <h2 style="font-size: 2rem; margin-bottom: 15px; color: #222;">Harvard University & Urbancode Certified Training</h2>
      <p style="font-size: 1.1rem; line-height: 1.6; color: #555; margin-bottom: 20px;">
        This prestigious certificate from Harvard University, delivered in partnership with Urbancode (UC), validates comprehensive expertise in [Subject/Field]. It signifies rigorous academic excellence combined with hands-on, industry-focused skill development by UC, ensuring learners are prepared for real-world challenges.
      </p>
      <p style="font-size: 1.1rem; line-height: 1.6; color: #555; margin-bottom: 20px;">
        Graduates benefit from access to Harvard's global alumni network and UC's dedicated career support and practical training, providing a unique blend of theory and application.
      </p>
      <ul style="list-style: disc inside; color: #555; font-size: 1rem; line-height: 1.5;">
        <li>Globally recognized credential from Harvard University</li>
        <li>Practical, hands-on training delivered by Urbancode (UC)</li>
        <li>Demonstrates advanced knowledge and industry readiness</li>
        <li>Access to Harvard’s alumni network and UC’s career resources</li>
        <li>Enhances professional credibility and career prospects</li>
      </ul>
      <!-- Bootstrap modal trigger button -->
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#certificateModal">
        View Certificate
      </button>
    </div>

  </div>
</section>

<!-- Bootstrap Modal -->
<div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="certificateModalLabel">Urbancode Harvard Certificate</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="images/certificate/urbancode-harvard-certificate.webp" alt="Certificate Large View" class="img-fluid rounded" />
      </div>
    </div>
  </div>
</div>




<style>
    .certificate-section {
  background-color: #f9f9f9;
  padding: 40px 20px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  color: #333;
}

.certificate-section .container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 30px;
}

.certificate-img {
  flex: 1 1 300px;
  min-width: 280px;
  max-width: 450px;
}

.certificate-img img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  display: block;
  object-fit: cover;
}

.certificate-content {
  flex: 1 1 400px;
  min-width: 280px;
}

.certificate-content h2 {
  font-size: 2rem;
  margin-bottom: 15px;
  color: #222;
  font-weight: 700;
}

.certificate-content p {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #555;
  margin-bottom: 20px;
}

.certificate-content ul {
  list-style: disc inside;
  color: #555;
  font-size: 1rem;
  line-height: 1.5;
  padding-left: 0;
}

.certificate-content ul li {
  margin-bottom: 10px;
}

.certificate-content a {
  display: inline-block;
  margin-top: 25px;
  padding: 12px 30px;
  background-color: #A51C30;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-weight: 600;
  transition: background-color 0.3s ease;
}

.certificate-content a:hover {
  background-color: #7d151f;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .certificate-section .container {
    flex-direction: column;
  }

  .certificate-img,
  .certificate-content {
    max-width: 100%;
    flex: 1 1 100%;
  }
}

</style>
<!-- Stats Section 
<section id="stats" class="stats section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      
      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-journal-bookmark"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
          <p>Courses</p>
        </div>
      </div> -- End Stats Item 

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-person-check"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
          <p>Trainers</p>
        </div>
      </div> End Stats Item 

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-person-circle"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
          <p>Students</p>
        </div>
      </div> End Stats Item 

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-award-fill"></i>
        <div class="stats-item">
          <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
          <p>Placements</p>
        </div>
      </div> End Stats Item 

    </div>
  </div>
</section> /Stats Section -->






<!-- <section class="courses-area py-3 py-md-5">
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
                <label for="time-filter">Select duration</label>
                <select class="form-control" id="time-filter">
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
        </div> 
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
                <div class="tab-list" role="listbox">
                    <div class="card w-100" role="option">
                        <a href="/ms-sql" style="text-decoration:none;">
                            <img class="card-img-top" src="images/mssql-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">MS SQL</h6>
                                <div><p>It is ranked as the 3rd most in-demand IT skill and the jobopportunities have been increasing in the global market.</p></div>
                                <div><p class="duration"><span>30</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>   
                    <div class="card w-100" role="option">
                        <a href="/power-bi" style="text-decoration:none;">
                            <img class="card-img-top" src="images/pbi-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Power BI</h5>
                                <div><p>Microsoft Power BI has market share of 14.31% in (business-intelligence) bi market. Microsoft Power BI competes with 206intelligence-bi category.</p></div>
                                <div><p class="duration"><span>40</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/tableau" style="text-decoration:none;">
                            <img class="card-img-top" src="images/tableau.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Tableau</h5>
                                <div><p>This course equips you with sought-after skills, making you adept at transforming raw data into impactful visual insights. </p></div>
                                <div><p class="duration"><span>35</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>  
                    <div class="card w-100" role="option">
                        <a href="/aws" style="text-decoration:none;">
                            <img class="card-img-top" src="images/aws-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">AWS</h5>
                                <div><p>Enrolling in Urbancode's AWS (Amazon Web Services) course enables professionals to design, deploy, and manage robust cloud infrastructure, fostering efficiency, cost-effectiveness, and scalability.</p></div>
                                <div><p class="duration"><span>45</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/azure" style="text-decoration:none;">
                            <img class="card-img-top" src="images/azure-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Azure</h5>
                                <div><p>Our course curriculum is curated by industry experts, offering a comprehensive grasp of Microsoft Azure fundamentals. Dive into hands-on learning experiences, gaining proficiency in configuring and managing Azure infrastructure for a robust foundation in cloud technology. Gain in-demand skills, empower yourself in cloud computing, and open doors to diverse opportunities in the rapidly evolving tech landscape.</p></div>
                                <div><p class="duration"><span>35</span> hrs Instructor-Led Training</p></div>
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
                    </div>    
                    <div class="card w-100" role="option">
                        <a href="/sas" style="text-decoration:none;">
                            <img class="card-img-top" src="images/sas-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">SAS</h5>
                                <div><p>Urbancode's SAS (Statistical Analysis System) plays a crucial role in providing advanced analytics and data management solutions. </p></div>
                                <div><p class="duration"><span>32</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div> 
                    <div class="card w-100" role="option">
                        <a href="/python" style="text-decoration:none;">
                            <img class="card-img-top" src="images/python-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Core Python</h5>
                                <div><p>Python Training Program at Urbancode empowers you to adeptly grasp the core concepts of this programming language.</p></div>
                                <div><p class="duration"><span>40</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/java" style="text-decoration:none;">
                            <img class="card-img-top" src="images/corejava-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Core JAVA</h5>
                                <div><p>Core Java course is pivotal for any aspiring software developer. Our course serves as the foundation of Java programming, providing a solid base for building robust applications.</p></div>
                                <div><p class="duration"><span>32</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>   
                    <div class="card w-100" role="option">
                        <a href="/ielts" style="text-decoration:none;">
                            <img class="card-img-top" src="images/ielts-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">IELTS</h5>
                                <div><p>The International English Language Testing System (IELTS) is globally recognized and serves as a benchmark for English language proficiency.</p></div>
                                <div><p class="duration"><span>35</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/toefl" style="text-decoration:none;">
                            <img class="card-img-top" src="images/toefl-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">TOEFL</h5>
                                <div><p>Selecting TOEFL is a strategic decision for anyone aiming to excel in English language proficiency.</p></div>
                                <div><p class="duration"><span>35</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/pte" style="text-decoration:none;">
                            <img class="card-img-top" src="images/pte.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">PTE</h5>
                                <div><p>PTE (Pearson Test of English) course is a globally recognized English language proficiency test, accepted by universities, employers, and immigration authorities.</p></div>
                                <div><p class="duration"><span>36</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/oet" style="text-decoration:none;">
                            <img class="card-img-top" src="images/oet-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">OET</h5>
                                <div><p>OET is specifically designed to assess English language proficiency in a healthcare context, making it a crucial certification for professionals in the medical field.</p></div>
                                <div><p class="duration"><span>30</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div> 
                    <div class="card w-100" role="option">
                        <a href="/french" style="text-decoration:none;">
                            <img class="card-img-top" src="images/fr-lan-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">French </h5>
                                <div><p>Urbancode's French Training Course paves as a gateway to economic opportunities, academic excellence, and cultural depth. Expertly curated by seasoned linguists, this online course explores fundamental French language concepts.</p></div>
                                <div><p class="duration"><span>40</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/german" style="text-decoration:none;">
                            <img class="card-img-top" src="images/ger-lan-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">German</h5>
                                <div><p>Urbancode's German Training Course paves as a gateway to economic opportunities, academic excellence, and cultural depth. Expertly curated by seasoned linguists, this online course explores fundamental and advanced German language concepts.</p></div>
                                <div><p class="duration"><span>60</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>  
                    <div class="card w-100" role="option">
                        <a href="/data-science" style="text-decoration:none;">
                            <img class="card-img-top" src="images/datascience.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Data Science</h5>
                                <div><p>Embark on a transformative journey with Urbancode's Data Science Certification Program. Crafted by seasoned experts, this online course delves into foundational and advanced data science concepts.</p></div>
                                <div><p class="duration"><span>60</span> hrs Instructor-Led Training</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>  
                    <!-- <div class="card w-100">
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
                <div class="tab-list" role="listbox">
                    <div class="card w-100" role="option">
                        <a href="/ms-sql" style="text-decoration:none;">
                            <img class="card-img-top" src="images/mssql-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">MS SQL</h5>
                                <div><p>It is ranked as the 3rd most in-demand IT skill and the jobopportunities have been increasing in the global market.</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>                    
                </div>
            </div>
            <div id="tab-3" class="tab-content">
                <div class="tab-list" role="listbox">
                    <div class="card w-100" role="option">
                        <a href="/power-bi" style="text-decoration:none;">
                            <img class="card-img-top" src="images/pbi-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Power BI</h5>
                                <div><p>Microsoft Power BI has market share of 14.31% in (business-intelligence) bi market. Microsoft Power BI competes with 206intelligence-bi category.</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/tableau" style="text-decoration:none;">
                            <img class="card-img-top" src="images/tableau.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Tableau</h5>
                                <div><p>This course equips you with sought-after skills, making you adept at transforming raw data into impactful visual insights. </p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="tab-4" class="tab-content">
                <div class="tab-list" role="listbox">
                    <div class="card w-100" role="option">
                        <a href="/aws" style="text-decoration:none;">
                            <img class="card-img-top" src="images/aws-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">AWS</h5>
                                <div><p>Enrolling in Urbancode's AWS (Amazon Web Services) course enables professionals to design, deploy, and manage robust cloud infrastructure, fostering efficiency, cost-effectiveness, and scalability.</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/azure" style="text-decoration:none;">
                            <img class="card-img-top" src="images/azure-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Azure</h5>
                                <div><p>Our course curriculum is curated by industry experts, offering a comprehensive grasp of Microsoft Azure fundamentals. Dive into hands-on learning experiences, gaining proficiency in configuring and managing Azure infrastructure for a robust foundation in cloud technology. Gain in-demand skills, empower yourself in cloud computing, and open doors to diverse opportunities in the rapidly evolving tech landscape.</p></div>
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
                    </div>
                </div>
            </div>
            <div id="tab-5" class="tab-content">
                <div class="tab-list" role="listbox">
                    <div class="card w-100" role="option">
                        <a href="/sas" style="text-decoration:none;">
                            <img class="card-img-top" src="images/sas-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">SAS</h5>
                                <div><p>Urbancode's SAS (Statistical Analysis System) plays a crucial role in providing advanced analytics and data management solutions. </p></div>
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
                    </div> 
                </div>
            </div>
            <div id="tab-6" class="tab-content">
                <div class="tab-list" role="listbox">
                    <div class="card w-100" role="option">
                        <a href="/python" style="text-decoration:none;">
                            <img class="card-img-top" src="images/python-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Core Python</h5>
                                <div><p>Python Training Program at Urbancode empowers you to adeptly grasp the core concepts of this programming language.</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/java" style="text-decoration:none;">
                            <img class="card-img-top" src="images/corejava-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Core JAVA</h5>
                                <div><p>Core Java course is pivotal for any aspiring software developer. Our course serves as the foundation of Java programming, providing a solid base for building robust applications.</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="tab-7" class="tab-content">
                <div class="tab-list" role="listbox">
                    <div class="card w-100" role="option">
                        <a href="/ielts" style="text-decoration:none;">
                            <img class="card-img-top" src="images/ielts-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">IELTS</h5>
                                <div><p>The International English Language Testing System (IELTS) is globally recognized and serves as a benchmark for English language proficiency.</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/toefl" style="text-decoration:none;">
                            <img class="card-img-top" src="images/toefl-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">TOEFL</h5>
                                <div><p>Selecting TOEFL is a strategic decision for anyone aiming to excel in English language proficiency.</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/pte" style="text-decoration:none;">
                            <img class="card-img-top" src="images/pte.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">PTE</h5>
                                <div><p>PTE (Pearson Test of English) course is a globally recognized English language proficiency test, accepted by universities, employers, and immigration authorities.</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/oet" style="text-decoration:none;">
                            <img class="card-img-top" src="images/oet-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">OET</h5>
                                <div><p>OET is specifically designed to assess English language proficiency in a healthcare context, making it a crucial certification for professionals in the medical field.</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="tab-8" class="tab-content">
                <div class="tab-list" role="listbox">
                    <div class="card w-100" role="option">
                        <a href="/french" style="text-decoration:none;">
                            <img class="card-img-top" src="images/fr-lan-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">French </h5>
                                <div><p>Urbancode's French Training Course paves as a gateway to economic opportunities, academic excellence, and cultural depth. Expertly curated by seasoned linguists, this online course explores fundamental French language concepts.</p></div>
                                <div class="mt-2 text-end"><span class="btn slide-btn custom-btn">View Details</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="card w-100" role="option">
                        <a href="/german" style="text-decoration:none;">
                            <img class="card-img-top" src="images/ger-lan-slide.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">German</h5>
                                <div><p>Urbancode's German Training Course paves as a gateway to economic opportunities, academic excellence, and cultural depth. Expertly curated by seasoned linguists, this online course explores fundamental and advanced German language concepts.</p></div>
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
                    </div> 
                </div>
            </div>
            <div id="tab-9" class="tab-content">
                <div class="tab-list" role="listbox">
                    <div class="card w-100" role="option">
                        <a href="/data-science" style="text-decoration:none;">
                            <img class="card-img-top" src="images/datascience.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 style="color: #019c61;">Data Science</h5>
                                <div><p>Embark on a transformative journey with Urbancode's Data Science Certification Program. Crafted by seasoned experts, this online course delves into foundational and advanced data science concepts.</p></div>
                                <div><p class="duration"><span>60</span> hrs Instructor-Led Training</p></div>
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
                            <img class="card-img-top" src="images/courses/digital-marketing/digital-markeing.jpg" alt="Card image cap">
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
</section>    --> 

<!-- <section class="form-section">
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
                        <label for="course-filter">Select course</label>
                        <select class="form-control" id="course-filter">
                            <option value="">Select course</option>
                            <option value="ms-sql">MS SQL Server</option>
                            <option value="power-bi">Power BI </option>
                            <option value="tableau">Tableau</option>
                            <option value="aws">AWS</option>
                            <option value="azure">Azure</option>
                            <option value="gcp">GCP</option>
                            <option value="sas">SAS</option>
                            <option value="python">Python</option>
                            <option value="java">Java</option>
                            <option value="ielts">IELTS</option>
                            <option value="toefl">TOEFL</option>
                            <option value="pte">PTE</option>
                            <option value="oet">OET</option>
			                <option value="data-science">Data Science</option>
                            <option value="digital-marketing">Digital Marketing</option>
                            <option value="french">French</option>
                            <option value="german">German</option>
                            <option value="spoken-english">Spoken English</option>
                        </select>
                    </div>                   
                    <button type="button" onclick="enroll('enquiry', 'enquiry-form')" class="btn btn-primary px-4 py-2 site">Submit</button>
                </form>    
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
</section> -->
<!-- 
<section class="partner-area py-3 py-md-4 text-center">
        <header class="section-header">
          <h3>Skills on Demand</h3>
          <p>Diverse range of courses led by Competent professionals</p>
        </header>
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
</section> -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">

<style>
 /*--------------------------------------------------------------
# Gallery Section
--------------------------------------------------------------*/
.gallery {
    overflow: hidden;
  }

  .gallery .swiper-pagination {
    margin-top: 20px;
    position: relative;
  }

  .gallery .swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: #d1d1d7;
    opacity: 1;
  }

  .gallery .swiper-pagination .swiper-pagination-bullet-active {
    background-color: #01af6a;
  }

  .gallery .swiper-slide-active {
    text-align: center;
  }
  .swiper-slide img {
  width: 250px;       /* Set your desired width */
  height: 250px;      /* Set your desired height */
  object-f.gallery-slider it: cover;  /* Ensures the image covers the box without distortion */
  border-radius: 10px; /* Optional: adds rounded corners */
}


  @media (min-width: 992px) {
    .gallery .swiper-wrapper {
      padding: 40px 0;
    }

    .gallery .swiper-slide-active {
      border: 6px solid #01af6a;
      padding: 4px;
      background: #fff;
      z-index: 1;
      transform: scale(1.2);
    }
  }
  /* ---- Mobile-only fixes for the gallery slider ---- */
@media (max-width: 576px) {
  /* Center each slide's content */
  .gallery .swiper-slide {
    display: flex;
    justify-content: center;
  }

  /* Make the anchor fill and center its child */
  .gallery .swiper-slide > a {
    display: flex;
    justify-content: center;
    width: 100%;
  }

  /* Center the image and keep the same look */
  .gallery .swiper-slide img {
    display: block;
    margin: 0 auto;
    width: 250px;
    height: 250px;
    object-fit: cover;           /* fixes mobile crop without changing desktop */
    border-radius: 10px;
  }

  /* Disable desktop “active” zoom/border on phones only */
  .gallery .swiper-slide-active {
    border: none;
    padding: 0;
    background: transparent;
    transform: none;
  }

  /* Remove extra vertical padding on phones */
  .gallery .swiper-wrapper { padding: 0; }
}
/* ---- Tablet (iPad) responsive tweaks: 577px–991px ---- */
@media (min-width: 577px) and (max-width: 991px) {
  /* Center each slide */
  .gallery .swiper-slide {
    display: flex;
    justify-content: center;
  }

  /* Make anchor fill and center */
  .gallery .swiper-slide > a {
    display: flex;
    justify-content: center;
    width: 100%;
  }

  /* Slightly larger image than phone */
  .gallery .swiper-slide img {
    display: block;
    margin: 0 auto;
    width: 300px;
    height: 300px;
    object-fit: cover;
    border-radius: 12px;
  }

  /* Gentle spacing on tablets */
  .gallery .swiper-wrapper { padding: 12px 0; }
  .gallery .swiper-pagination { margin-top: 16px; }

  /* No desktop zoom/border at this size */
  .gallery .swiper-slide-active {
    border: none;
    padding: 0;
    background: transparent;
    transform: none;
  }
}
/* phone + tablet */
@media (max-width: 991px) {
  .gallery .swiper-pagination {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;   /* keep one row */
    gap: 8px;
    overflow: hidden;    /* hide any accidental duplicates */

    padding-top:25px;
  }
}

</style>

<div class="container">

    <header class="section-header">
        <h3>Ongoing Courses</h3>
        <p>New posts</p>
    </header>

<div class="gallery-slider swiper">
  <div class="swiper-wrapper align-items-center">
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-17.webp" aria-label="View image 1 in the gallery">
              <img src="images/gallery/g-17.webp" class="img-fluid" alt="Image 1">
          </a>
      </div>
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-18.webp" aria-label="View image 2 in the gallery">
              <img src="images/gallery/g-18.webp" class="img-fluid" alt="Image 2">
          </a>
      </div>
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-19.webp" aria-label="View image 3 in the gallery">
              <img src="images/gallery/g-19.webp" class="img-fluid" alt="Image 3">
          </a>
      </div>
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-20.webp" aria-label="View image 4 in the gallery">
              <img src="images/gallery/g-20.webp" class="img-fluid" alt="Image 4">
          </a>
      </div>
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-21.webp" aria-label="View image 5 in the gallery">
              <img src="images/gallery/g-21.webp" class="img-fluid" alt="Image 5">
          </a>
      </div>
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-22.webp" aria-label="View image 6 in the gallery">
              <img src="images/gallery/g-22.webp" class="img-fluid" alt="Image 7">
          </a>
      </div>
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-23.webp" aria-label="View image 7 in the gallery">
              <img src="images/gallery/g-23.webp" class="img-fluid" alt="Image 8">
          </a>
      </div>
      <!--<div class="swiper-slide">-->
      <!--    <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-8.jpg" aria-label="View image 8 in the gallery">-->
      <!--        <img src="images/gallery/g-24.jpg" class="img-fluid" alt="Image 9">-->
      <!--    </a>-->
      <!--</div>-->
      <!--<div class="swiper-slide">-->
      <!--    <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-9.jpg" aria-label="View image 8 in the gallery">-->
      <!--        <img src="images/gallery/g-25.jpg" class="img-fluid" alt="Image 9">-->
      <!--    </a>-->
      <!--</div>-->
      <!--<div class="swiper-slide">-->
      <!--    <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-10.jpg" aria-label="View image 8 in the gallery">-->
      <!--        <img src="images/gallery/g-26.jpg" class="img-fluid" alt="Image 10">-->
      <!--    </a>-->
      <!--</div>-->
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-11.webp" aria-label="View image 8 in the gallery">
              <img src="images/gallery/g-11.webp" class="img-fluid" alt="Image 11">
          </a>
      </div>
      <!--<div class="swiper-slide">-->
      <!--    <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-12.jpg" aria-label="View image 8 in the gallery">-->
      <!--        <img src="images/gallery/g-27.jpg" class="img-fluid" alt="Image 12">-->
      <!--    </a>-->
      <!--</div>-->
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-13.webp" aria-label="View image 8 in the gallery">
              <img src="images/gallery/g-13.webp" class="img-fluid" alt="Image 13">
          </a>
      </div>
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-14.webp" aria-label="View image 8 in the gallery">
              <img src="images/gallery/g-14.webp" class="img-fluid" alt="Image 14">
          </a>
      </div>
      <!--
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-15.jpg" aria-label="View image 8 in the gallery">
              <img src="images/gallery/g-15.jpg" class="img-fluid" alt="Image 15">
          </a>
      </div>
      <div class="swiper-slide">
          <a class="glightbox" data-gallery="images-gallery" href="images/gallery/g-16.jpg" aria-label="View image 8 in the gallery">
              <img src="images/gallery/g-16.jpg" class="img-fluid" alt="Image 16">
          </a>
      </div>-->
  </div>
  <div class="swiper-pagination"></div>
</div>

</section><!-- End Gallery Section -->
</div>
<!-- ======= Testimonials Section ======= -->

<style>
    /*-------------------------------------------------------------- # Reviews --------------------------------------------------------------*/
    .reviews {
        background-color: #f3f5fa; 
        padding: 60px 0;
    }
    .reviews .reviews-carousel, .reviews .reviews-slider { overflow: hidden; }
    .reviews .review-item { 
        box-sizing: content-box; 
        padding: 30px; 
        margin: 30px 15px; 
        min-height: 350px; 
        max-height: 350px; 
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08); 
        position: relative; 
        background: #fff; 
        border-radius: 15px; 
        display: flex; /* Added flexbox to align content */
        flex-direction: column; /* Align items vertically */
        justify-content: space-between; /* Space between items */
    }
    .reviews .review-item .review-img { 
        max-height: 80px; 
        max-width: 50%; 
        padding-bottom:20px;
        border-radius: 10px; 
        border: 6px solid #fff; 
        float: left; 
        margin: 0 10px 0 0; 
    }
    .reviews .review-item .cisco { 

        max-height: 80px; 
        max-width: 30%; 
        padding-bottom:20px;
        border-radius: 10px; 
        border: 6px solid #fff; 
        float: left; 
        margin: 0 10px 0 0; 
    }
    .reviews .review-item .ibm { 
      
      max-height: 75px; 
      max-width: 40%; 
      padding-bottom:20px;
      border-radius: 10px; 
      border: 6px solid #fff; 
      float: left; 
      margin: 0 10px 0 0; 
  }
    .reviews .review-item h3 { 
        font-size: 18px; 
        font-weight: bold; 
        margin: 0 0 5px 0; 
        color: #111; 
    }
    .reviews .review-item h4 { 
        font-size: 14px; 
        color: #999; 
        margin: 0; 
    }
    .reviews .review-item .quote-icon-left, .reviews .review-item .quote-icon-right { 
        color:#01af6a; 
        font-size: 26px; 
    }
    .reviews .review-item .quote-icon-left { 
        display: inline-block; 
        left: -5px; 
        position: relative; 
    }
    .reviews .review-item .quote-icon-right { 
        display: inline-block; 
        right: -5px; 
        position: relative; 
        top: 10px; 
        transform: scale(-1, -1);
    }
    .reviews .review-item p { 
        color: #0a2540; 
        font-style: italic; 
        margin: 15px auto; /* Adjusted margin for spacing */
        flex-grow: 1; /* Make the paragraph take up remaining space */
    }
    .reviews .swiper-pagination { 
        margin-top: 20px; 
        position: relative; 
    }
    .reviews .swiper-pagination .swiper-pagination-bullet { 
        width: 12px; 
        height: 12px; 
        background-color: #fff; 
        opacity: 1; 
        border: 1px solid #ffc451; 
    }
    .reviews .swiper-pagination .swiper-pagination-bullet-active { 
        background-color: #ffc451; 
    }
</style>


<section id="reviews" class="reviews section-bg">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
                <h3>Employer's Demand <?php echo date("Y"); ?></h3>
                <p>Your thought matters!</p>
            </header>

        <div class="reviews-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                
                <!-- Google -->
  <div class="swiper-slide">
    <div class="review-wrap">
      <div class="review-item">
        <img src="images/itdemand/google.webp" class="review-img" alt="google">
        <h3>Founder : Larry Page and Sergey Brin in 1998.</h3>
        <h4>CEO : Sundar Pichai since October 2, 2015.</h4>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          Search Engine Technology, Cloud Computing, Artificial Intelligence, Machine Learning, Data Analytics, Android Development, Cybersecurity.
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div>
  </div><!-- End review item -->

  <!-- Amazon -->
  <div class="swiper-slide">
    <div class="review-wrap">
      <div class="review-item">
        <img src="images/itdemand/amazon.webp" class="review-img" alt="amazon">
        <h3>Founder : Jeff Bezos in 1994.</h3>
        <h4>CEO : Andy Jassy since July 5, 2021.</h4>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          E-commerce, Cloud Computing (AWS), Artificial Intelligence, Robotics, Data Science, Supply Chain Technology, Customer Experience.
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div>
  </div><!-- End review item -->

  <!-- Apple -->
  <div class="swiper-slide">
    <div class="review-wrap">
      <div class="review-item">
        <img src="images/itdemand/apple.webp" class="review-img" alt="apple">
        <h3>Founder : Steve Jobs, Steve Wozniak, and Ronald Wayne in 1976.</h3>
        <h4>CEO : Tim Cook since August 24, 2011.</h4>
        <p>
          <i class="bi bi-quote quote-icon-left"></i>
          Consumer Electronics, Software Development, Artificial Intelligence, AR/VR, Machine Learning, Design Innovation, Cloud Services.
          <i class="bi bi-quote quote-icon-right"></i>
        </p>
      </div>
    </div>
  </div><!-- End review item -->


                <div class="swiper-slide">
                    <div class="review-wrap">
                        <div class="review-item">
                            <img src="images/itdemand/microsoft.webp" class="review-img" alt="microsoft">
                            <h3>Founder : Bill Gates and Paul Allen in 1975.</h3>
                            <h4>CEO : Satya Nadella since February 4, 2014.</h4>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Software development, Cloud computing, Artificial Intelligence, Cybersecurity, Sales, Marketing, Business Development, Azure Engineer,Administrator Associate, Azure Developer Associate.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End review item -->

                <div class="swiper-slide">
                    <div class="review-wrap">
                        <div class="review-item">
                            <img src="images/itdemand/ibm.webp" class="ibm" alt="ibm">
                            <h3>Founder : Thomas J. Watson Sr. in 1911.</h3>
                            <h4>CEO : Arvind Krishna since April 6, 2020.</h4>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Software engineering, data science, artificial intelligence, cloud computing, cybersecurity, problem-solving and analytical skills. communication skills,programming languages and tools.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End review item -->

                <div class="swiper-slide">
                    <div class="review-wrap">
                        <div class="review-item">
                            <img src="images/itdemand/tcs.webp" class="review-img" alt="tcs">
                            <h3>Founder : J.R.D Tata in 1968.</h3>
                            <h4>CEO : Rajesh Gopinathan since February 21, 2017</h4>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Data Analytics, Machine Learning, Applied Cloud Computing, Game Design, Cyber Security, Artificial Intelligence, IoT, Data Mining and Analytics, Social Media and Text Analytics, Career Edge.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End review item -->

                <div class="swiper-slide">
                    <div class="review-wrap">
                        <div class="review-item">
                            <img src="images/itdemand/cisco.webp" class="cisco" alt="cisco">
                            <h3>Founder : Leonard Bosack and Sandy Lerner in 1984.</h3>
                            <h4>CEO : Chuck Robbins since July 26, 2015.</h4>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                computer networking, software engineering, cloud computing, cybersecurity, analytical skills, communication skills, Strong understanding of industry trends and developments.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End review item -->

                <div class="swiper-slide">
                    <div class="review-wrap">
                        <div class="review-item">
                            <img src="images/itdemand/accenture.webp" class="review-img" alt="accenture">
                            <h3>Founder : Arthur Andersen in 1989.</h3>
                            <h4>CEO : Julie Sweet since September 1, 2019.</h4>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Strong analytical, problem-solving, communication, interpersonal, leadership and experience skills.certifications or degrees,technology and innovation,project management.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End review item -->

            </div>
        </div>

    </div>
</section><!-- End Reviews Section -->

<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.reviews-slider', {
      speed: 600,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      slidesPerView: 1, // Default number of slides per view
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

<style>
/*--------------------------------------------------------------
# Partners Section
--------------------------------------------------------------*/
.partners {
  padding: 40px 0;
  background-color: #f3f5fa; 
}
.partners .swiper {
  padding: 10px 0;
}
.partners .swiper-slide img {
  transition: 0.3s;
  max-height: 40px;
}
.partners .swiper-slide img:hover {
  transform: scale(1.1);
}
.partners .swiper-pagination {
  margin-top: 20px;
  position: relative;
}
.partners .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  background-color: #ddd;
}

</style>

<!-- ======= Partners Section ======= -->
<section id="partners" class="partners">

  <div class="container" data-aos="zoom-out">

  <header class="section-header">
    <h3>They bring a significant impact in their fields</h3>
    <p>Our alumni have gone on to work at leading companies and make significant impacts in their fields.</p>
</header>


    <div class="partners-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><img src="images/works/amazon.webp" class="img-fluid" alt="amazon"></div>
        <div class="swiper-slide"><img src="images/works/zoho.webp" class="img-fluid" alt="zoho"></div>
        <div class="swiper-slide"><img src="images/works/paypal.webp" class="img-fluid" alt="paypal"></div>
        <div class="swiper-slide"><img src="images/works/freshwork.webp" class="img-fluid" alt="freshwork"></div>
        <div class="swiper-slide"><img src="images/works/cisco.webp" class="img-fluid" alt="cisco"></div>
        <div class="swiper-slide"><img src="images/works/ibm.webp" class="img-fluid" alt="ibm"></div>
        <div class="swiper-slide"><img src="images/works/inposys.webp" class="img-fluid" alt="infosys"></div>
        <div class="swiper-slide"><img src="images/works/microsoft.webp" class="img-fluid" alt="microsoft"></div>
        <div class="swiper-slide"><img src="images/works/nptel.webp" class="img-fluid" alt="nptel"></div>
        <div class="swiper-slide"><img src="images/works/tcs.webp" class="img-fluid" alt="tata"></div>
        <div class="swiper-slide"><img src="images/works/guvi.webp" class="img-fluid" alt="guvi"></div>
        <div class="swiper-slide"><img src="images/works/google-partner.webp" class="img-fluid" alt="gcloud"></div>
        <div class="swiper-slide"><img src="images/works/hcl.webp" class="img-fluid" alt="hcl"></div>
        <div class="swiper-slide"><img src="images/works/github.webp" class="img-fluid" alt="github"></div>
        <div class="swiper-slide"><img src="images/works/oracle.webp" class="img-fluid" alt="oracle"></div>
        <div class="swiper-slide"><img src="images/works/iitmlogo..webp" class="img-fluid" alt="iitmlogo"></div>
        <div class="swiper-slide"><img src="images/works/capegemini.webp" class="img-fluid" alt="capgemini"></div>
        <div class="swiper-slide"><img src="images/works/deloitte.webp" class="img-fluid" alt="deloitte"></div>
      </div>
    </div>
  </div>

</section><!-- End Partners Section -->     

<script>
document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.partners-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 500,
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
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });
});
</script>


  


<!-- <section class="tutorial-area py-3 py-md-4 d-none">
    <div class="container">
        <header class="section-header">
          <h3>Our Tutorials</h3>
          <p>We collaborate with 300+ leading universities and companies</p>
        </header>

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
</section> -->


<?php include 'inc/related.php';?>
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


 
  
  document.addEventListener('DOMContentLoaded', function() {
    new PureCounter();
  });

 
// Function to select single or multiple elements
const select = (selector, all = false) => {
  if (all) {
    return [...document.querySelectorAll(selector)];
  } else {
    return document.querySelector(selector);
  }
};

// Adding carousel indicators dynamically
let heroCarouselIndicators = select("#hero-carousel-indicators");
let heroCarouselItems = select('#heroCarousel .carousel-item', true);

heroCarouselItems.forEach((item, index) => {
  if (index === 0) {
    heroCarouselIndicators.innerHTML += `<li data-bs-target='#heroCarousel' data-bs-slide-to='${index}' class='active'></li>`;
  } else {
    heroCarouselIndicators.innerHTML += `<li data-bs-target='#heroCarousel' data-bs-slide-to='${index}'></li>`;
  }
});

// function openModal() {
//             var modal = document.getElementById('ad-custom-popup');
//             modal.style.display = 'block';
//             setTimeout(function() {
//                 closeModal();
//             }, 10000); // Close modal after 10 seconds

//             setTimeout(function() {
//                 openModal();
//             }, 60000); // Open modal again after 1 minute
//         }

//         function closeModal() {
//             var modal = document.getElementById('ad-custom-popup');
//             modal.style.display = 'none';
//         }

//         setTimeout(openModal, 100); // Show popup after 1 minute initially

//         // Optional: Add auto-scrolling functionality
//         var modalBody = document.querySelector('.ad-custom-modal-body');
//         if (modalBody) {
//             function autoScroll() {
//                 var scrollHeight = modalBody.scrollHeight;
//                 var scrollTop = modalBody.scrollTop;
//                 var clientHeight = modalBody.clientHeight;

//                 if (scrollHeight - scrollTop === clientHeight) {
//                     modalBody.scrollTop = 0;
//                 } else {
//                     modalBody.scrollTop += 1;
//                 }
//             }

//             setInterval(autoScroll, 50); // Adjust scroll speed as needed
//         }


</script>




<!-- <section id="image-popup-section" class="image-popup-section">-->
<!--    <div id="image-popup" class="popup-container">-->
<!--        <div class="popup-content">-->
<!--            <span class="close-btn">&times;</span>-->
<!--            <div class="images-container">-->
<!--                <a href="/software-testing" class="first-image-container">-->
<!--                    <img src="images/gallery/g-23.jpg" alt="Software Testing">-->
<!--                </a>-->
<!--                <a href="/power-bi" class="second-image-container">-->
<!--                    <img src="images/gallery/g-17.jpg" alt="Power BI">-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section> -->



<style>

.image-popup-section {
    position: relative;
}

.popup-container {
    display: none; /* Hidden by default */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    max-width: 450px;
    background: linear-gradient(145deg, #ffffff, #e6e6e6);
    justify-content: center;
    align-items: center;
    z-index: 1000; /* Ensures it appears above all other content */
    border-radius: 12px;
    border: 1px solid #ccc;
}

.popup-content {
    position: relative;
    width: 100%;
    box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.3), 0 0 15px rgba(0, 0, 0, 0.3);
    border-radius: 12px;
}

.first-image-container, .second-image-container {
    display: none; /* Both hidden initially */
}

.images-container img {
    width: 100%;
    height: auto;
    display: block;
    border: 3px solid white;
    border-radius: 12px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.images-container img:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2), 0 15px 25px rgba(0, 0, 0, 0.2);
}

.close-btn {
    position: absolute;
    top: -10px;
    right: -10px;
    font-size: 24px;
    cursor: pointer;
    color: #fff;
    background-color: #333;
    border-radius: 50%;
    padding: 5px;
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.close-btn:hover {
    background-color: #555;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
}
  

</style> 


 <script>
  document.addEventListener("DOMContentLoaded", function() {
    let popup = document.getElementById('image-popup');
    let closeBtn = document.querySelector('.close-btn');
    let firstImageContainer = document.querySelector('.first-image-container');
    let secondImageContainer = document.querySelector('.second-image-container');

    let displayDurationFirst = 5000; // Display first image for 5 seconds
    let displayDurationSecond = 5000; // Display second image for 5 seconds

    function showPopup() {
        popup.style.display = 'flex';
        cycleImages(); // Start cycling images immediately
    }

    function cycleImages() {
        firstImageContainer.style.display = 'block'; // Show the first image immediately
        secondImageContainer.style.display = 'none'; // Ensure the second image is hidden initially

        setTimeout(() => {
            firstImageContainer.style.display = 'none'; // Hide first image after 2 seconds
            secondImageContainer.style.display = 'block'; // Show second image

            setTimeout(() => {
                secondImageContainer.style.display = 'none'; // Hide second image after 5 seconds
                firstImageContainer.style.display = 'block'; // Show first image again to continue the cycle
            }, displayDurationSecond);
        }, displayDurationFirst);
    }

    function closePopup() {
        popup.style.display = 'none';
        firstImageContainer.style.display = 'none';
        secondImageContainer.style.display = 'none';
        clearInterval(cycleInterval); // Stop the image cycling when popup is closed
    }

    let cycleInterval = setInterval(cycleImages, displayDurationFirst + displayDurationSecond); // Set the interval to repeat cycling

    closeBtn.addEventListener('click', function() {
        closePopup();
    });

    setTimeout(showPopup, 1000); // Show popup after initial delay
});



</script> 
