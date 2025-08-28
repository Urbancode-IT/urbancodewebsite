<?php require_once "config.php"; ?>
<?php include 'inc/header.php'; ?>

<style>
    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 85vh;
  background: url("../img/hero-bg1.jpg") top left;
  background-size: cover;
  position: relative;
  margin-top: 14px;
}

#hero .container {
  position: relative;
}

#hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: white;
  font-family: Montserrat;
}

#hero h1 span {
  color: #fff;
}

#hero h2 {
  color: #fff;
  margin: 5px 0 30px 0;
  font-size: 20px;
  font-weight: 400;
  font-family: Montserrat;
}

#hero .btn-get-started {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 28px;
  border-radius: 10px;
  transition: 0.5s;
  color: #fff;
  background: #F7941D;
  margin-left: 25px;
}

#hero .btn-get-started:hover {
  background: #F26228;
}

#hero .btn-watch-video {
  font-size: 16px;
  transition: 0.5s;
  color: #fff;
  font-weight: 800;
  display: flex;
  align-items: center;
}

#hero .btn-watch-video i {
  color: #F7941D;
  font-size: 32px;
  transition: 0.3s;
  line-height: 0;
  margin-right: 8px;
}

#hero .btn-watch-video:hover {
  color: #F26228 ;
}

#hero .btn-watch-video:hover i {
  color: #F26228;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero {
    height: 100vh;
  }

  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }

  #hero .btn-get-started,
  #hero .btn-watch-video {
    font-size: 13px;
  }
}

@media (max-height: 500px) {
  #hero {
    height: 120vh;
  }
}

</style>

<!-- ======= 404 Page ======= -->
<section id="hero" class="d-flex align-items-center" style="background-image: url('images/404.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
  <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
    <h1>Page Not Found</h1>
    <h2>Sorry, the page you are looking for does not exist or has been moved. <br>
      Please check the URL or return to our homepage.</h2>
    <div class="d-flex justify-content-center">
      <a href="/" class="btn-get-started scrollto bg-success">Back to our Site</a>
    </div>
  </div>
</section>
<!-- End 404 Page -->



<?php include 'inc/footer.php'; ?>
