<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://urbancode.in/images/icon.png">
    <title>Urbancode</title>
    <meta name="description" content="Urbancode Training and Solutions - Software Training with Placement and Overseas Education">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">  
    <style>        
      .navbar .logo a{
        font-size: 30px;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
      }
      nav .navbar .nav-links{
        line-height: 70px;
        height: 100%;
      }
      nav .navbar .links{
        display: flex;margin-bottom:0px;gap:30px;align-items:center;
      }
      nav .navbar .links li{
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        list-style: none;
        padding: 0 14px;
      }
      nav .navbar .links li a{
        height: 100%;
        text-decoration: none;
        white-space: nowrap;
        color: #fff;
        font-size: 16px;
        font-weight: 500;
      }
      .links li:hover .htmlcss-arrow,
      .links li:hover .js-arrow{
        transform: rotate(180deg);
        }

      nav .navbar .links li .arrow{
          height: 100%;
          width: 22px;
          line-height: 22px;
          text-align: center;
          display: inline-block;
          color: #000000;
          transition: all 0.3s ease;
          margin-left: 10px;
          margin-right: -10px;
      }
      nav .navbar .links li > .arrow{color:#ffffff;}
      nav .navbar .links li .sub-menu{
          position: absolute;
          top: 37px;
          left: 0;
          line-height: 40px;
          background: #ffffff;
          border-radius: 5px;
          display: none;
          z-index: 2;
          padding: 0;
          box-shadow: 0 0 10px #00000036;
          width: 250px;
      }
      nav .navbar .links li:hover .htmlCss-sub-menu,
      nav .navbar .links li:hover .js-sub-menu{
        display: block;
      }
      .navbar .links li .sub-menu li{
        /* padding: 0 22px; */
        border-bottom: 1px solid #B7B8BB;
      }
      .navbar .links li .sub-menu a{
        color: #fff;
        font-size: 15px;
        font-weight: 500;
      }
      .more:hover, .more-sub-menu li:hover{background-color:#00ae69;}
      .more:hover span a, .more-sub-menu li:hover > a{color:#ffffff!important;}

      .navbar .links li .sub-menu .more-arrow{
        line-height: 40px;
      }
      .navbar .links li .htmlCss-more-sub-menu{
        /* line-height: 40px; */
      }
      .navbar .links li .sub-menu .more-sub-menu{
        position: absolute;
        top: 0;
        left: 100%;
        border-radius: 0 4px 4px 4px;
        z-index: 1;
        display: none;
      }
      .links li .sub-menu .more:hover .more-sub-menu{
        display: block;
      }
      .navbar .nav-links .sidebar-logo{
        display: none;
      }
      .navbar .fa-bars{
        display: none;
      }
      @media (max-width:920px) {
        nav .navbar{
          max-width: 100%;
          /* padding: 0 25px; */
        }

      nav .navbar .logo a{
          font-size: 27px;
        }
        nav .navbar .links li{
          padding: 0 10px;
          white-space: nowrap;
        }
        nav .navbar .links li a{
          font-size: 15px;
        }
      }
      @media (max-width:991px){
          .sub-menu{
              width: 225px!important;
              border:2px solid #ffffff!important;
          }
          .more{padding: 10px 15px!important;}
          .more-sub-menu.sub-menu{margin-top:15px;}
          .more-sub-menu.sub-menu li{border-bottom:1px solid red;}
          nav .navbar .links li .arrow{line-height: 22px !important;height:22px;}
          .navbar .links li .sub-menu .more-sub-menu.active{display:block!important;}
        .navbar .fa-bars{
          display: block;
        }
        nav .navbar .nav-links{
          position: fixed;
          top: 0;
          left: -100%;
          display: block;
          max-width: 300px;
          width: 100%;
          background:  #ffffff;
          line-height: 40px;
          padding: 20px;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
          transition: all 0.5s ease;
          z-index: 1000;
        }
        .navbar .nav-links .sidebar-logo{
          display: flex;
          align-items: center;
          justify-content: space-between;
        }
        .sidebar-logo .logo-name{
          font-size: 25px;
          color: #000000;
        }
          .sidebar-logo i,
          .navbar .fa-bars{
            font-size: 25px;
            color: #000000;
          }
        nav .navbar .links{
          display: block;
          margin-top: 25px;
          padding: 0;
          overflow: scroll;
          height: 100vh;
        }
        nav .navbar .links li .arrow{
          line-height: 40px;
        }
      nav .navbar .links li{
          display: block;
        }
      nav .navbar .links li .sub-menu{
        position: relative;
        top: 0;
        box-shadow: none;
        display: none;
      }
      nav .navbar .links li .sub-menu li{
        border-bottom: none;

      }
      .navbar .links li .sub-menu .more-sub-menu{
        display: none;
        position: relative;
        left: 0;
      }
      .navbar .links li .sub-menu .more-sub-menu li{
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .links li:hover .htmlcss-arrow,
      .links li:hover .js-arrow{
        transform: rotate(0deg);
        }
        .navbar .links li .sub-menu .more-sub-menu{
          display: none;
        }
        .navbar .links li .sub-menu .more span{
          /* background: red; */
          display: flex;
          align-items: center;
          /* justify-content: space-between; */
        }

        .links li .sub-menu .more:hover .more-sub-menu{
          display: none;
        }
        nav .navbar .links li:hover .htmlCss-sub-menu,
        nav .navbar .links li:hover .js-sub-menu{
          display: none;
        }
      .navbar .nav-links.show1 .links .htmlCss-sub-menu,
        .navbar .nav-links.show3 .links .js-sub-menu,
        .navbar .nav-links.show2 .links .more .more-sub-menu{
            display: block;
          }
          .navbar .nav-links.show1 .links .htmlcss-arrow,
          .navbar .nav-links.show3 .links .js-arrow{
              transform: rotate(180deg);
          }
          .navbar .nav-links.show2 .links .more-arrow{
            transform: rotate(90deg);
          }
          
      }
      @media (max-width:370px){
        nav .navbar .nav-links{
        max-width: 100%;
      } 
      }
      .dropmenu{
          border: 2px solid #01af6a;
          padding: 5px 15px!important;
          background: #01af6a;
          color: #fff!important;
          font-weight: 700;
      }
      .more .arrow{position: absolute;right: 23px;}
      .dropdown-item:focus, .dropdown-item:hover{background-color: transparent!important;}
      ul.more-sub-menu.sub-menu { width: 170px!important;}
      @media(min-width:992px) and (max-width:1200px){
        nav .navbar .links{gap:0px;}
      }
      .rotate-90deg{rotate:90deg;}
    </style>  
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TSZTNFS2');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSZTNFS2"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

<!-- header section  -->    
<header class="header py-1">
    <?php 
        $baseurl = 'https://urbancode.in/';
        $url = $_SERVER['REQUEST_URI'];
        $exp = explode("/",$url);
        $end = end($exp);
        $endex = explode(".",strval($end));
    ?>

<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="images/logo.png" alt="Logo" style="width:225px;max-width:unset;"></a>
            </div>
            <div class="navbar">
                <i class='menu-icon fa-solid fa-bars'></i>
                <div class="nav-links">
                    <div class="sidebar-logo">
                        <span class="logo-name"><a href="/"><img src="images/logo.png" alt="Logo" style="width:150px;"></a></span>
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <ul class="links">
                        <li><a class="<?php if($endex[0] == ''){echo 'active';} ?>" href="/">Home</a></li>
                        <li class="dropmenu">
                            <a href="javascript:;" style="color:#ffffff!important;">Courses</a>
                            <i class="fa-solid fa-chevron-down htmlcss-arrow arrow"></i>
                            <ul class="htmlCss-sub-menu sub-menu">
                                <li class="more">
                                    <span><a href="/data-science">Data Science</a></span>
                                </li>
				                        <li class="more">
                                    <span><a href="/digital-marketing">Digital Marketing</a></span>
                                </li>

                                <li class="more">
                                    <span><a href="javascript:;">Database</a>
                                        <i class="fa-solid fa-chevron-right arrow more-arrow"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">
                                        <li><a class="dropdown-item" href="/ms-sql">MS SQL Server</a>
                                    </ul>
                                </li>
                                <li class="more">
                                    <span><a href="javascript:;">Data Visualisation</a>
                                        <i class="fa-solid fa-chevron-right arrow more-arrow"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">
                                        <li><a class="dropdown-item" href="/power-bi">Power BI </a></li>
                                        <li><a class="dropdown-item" href="/tableau">Tableau </a></li>
                                    </ul>
                                </li>
                                <li class="more">
                                    <span><a href="javascript:;">Cloud & DevOps</a>
                                        <i class="fa-solid fa-chevron-right arrow more-arrow"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">                                        
                                        <li><a class="dropdown-item" href="/aws">AWS</a></li>
                                        <li><a class="dropdown-item" href="/azure">Azure</a></li>
                                        <li><a class="dropdown-item" href="javascript:;">GCP</a></li>
                                    </ul>
                                </li>
                                <li class="more">
                                    <span><a href="javascript:;">Data Analytics</a>
                                        <i class="fa-solid fa-chevron-right arrow more-arrow"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">                                        
                                        <li><a class="dropdown-item" href="/sas">SAS</a></li>
                                        <li><a class="dropdown-item" href="javascript:;">R Program</a></li>
                                    </ul>
                                </li>
                                <li class="more">
                                    <span><a href="javascript:;">Programming Language</a>
                                        <i class="fa-solid fa-chevron-right arrow more-arrow"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">                                        
                                        <li><a class="dropdown-item" href="/python">Core Python</a></li>
                                        <li><a class="dropdown-item" href="/java">Core JAVA</a></li>
                                        <li><a class="dropdown-item" href="javascript:;">C & C++</a></li>
                                    </ul>
                                </li>
                                <li class="more">
                                    <span><a href="javascript:;">Proficiency Exams</a>
                                        <i class="fa-solid fa-chevron-right arrow more-arrow"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">                                        
                                        <li><a class="dropdown-item" href="/ielts">IELTS</a></li>
                                        <li><a class="dropdown-item" href="/toefl">TOEFL</a></li>
                                        <li><a class="dropdown-item" href="/pte">PTE</a></li>
                                        <li><a class="dropdown-item" href="/oet">OET</a></li>
                                    </ul>
                                </li>
                                <li class="more">
                                    <span><a href="javascript:;">Language</a>
                                        <i class="fa-solid fa-chevron-right arrow more-arrow"></i>
                                    </span>
                                    <ul class="more-sub-menu sub-menu">                                        
                                        <li><a class="dropdown-item" href="/french">French </a></li>
                                        <li><a class="dropdown-item" href="/german">German</a></li>
                                        <li><a class="dropdown-item" href="javascript:;">Spoken English</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>
			<li>
                            <a class="<?php if($endex[0] == 'events'){echo 'active';}else{echo '';} ?>" aria-current="page" href="/events">Events</a>
                        </li>

                        <li>
                            <a class="<?php if($endex[0] == 'study-abroad'){echo 'active';}else{echo '';} ?>" aria-current="page" href="/study-abroad">Study Abroad</a>
                        </li>
                        <li>
                            <a class="<?php if($endex[0] == 'be-our-mentor'){echo 'active';}else{echo '';} ?>" aria-current="page" href="/be-our-mentor">Be our Mentor</a>
                        </li>
                        <li class="nav-item d-none d-lg-block" style="max-width:100%;">
                          <a class="nav-link" href="tel:9878798797" style="color: #01af6a !important;  font-weight: 700;font-size:23px;"><i class="fa-solid fa-phone-volume fa-fade" style="--fa-primary-color: #01af6a; --fa-primary-opacity: 1; --fa-secondary-color: #01af6a; --fa-secondary-opacity: 0;font-family: &quot;Font Awesome 6 Free&quot;;margin-right: 15px;"></i><span class="text-dark">+91</span> 987 <span class="text-dark">87</span> 987 <span class="text-dark">97</span></a>
                      </li>
                    </ul>
                </div>
                    
            </div>

</div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    let navLinks = $(".nav-links");
    let menuOpenBtn = $(".navbar .fa-bars");
    let menuCloseBtn = $(".nav-links .fa-xmark");

    menuOpenBtn.click(function() {
        navLinks.css("left", "0");
    });

    menuCloseBtn.click(function() {
        navLinks.css("left", "-100%");
    });

    // sidebar submenu open close js code
    $(".htmlcss-arrow").click(function() {
     navLinks.toggleClass("show1");
    });


    $(".navbar .more").click(function() {
      // $('.more').find('.more-sub-menu').removeClass("active");
      $(this).find('.more-sub-menu').toggleClass("active");
      $(this).find('.more-arrow').toggleClass("rotate-90deg");
    });
});
</script>
</header>