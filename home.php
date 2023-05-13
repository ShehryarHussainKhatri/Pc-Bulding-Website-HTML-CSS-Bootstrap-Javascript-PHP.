<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="carousel.css" rel="stylesheet">
    <style>
    .dropdown-menu a:hover {
      color: #FFFFFF; 
      background-color: #00A4BD;
    } 
    .site-header {
      background-color: rgba(0, 0, 0, .85);
    }
    .site-header a {
      color: #8e8e8e;
      transition: color .15s ease-in-out;
    }
    .site-header a:hover {
      color: #fff;
      text-decoration: none;
    }
    </style>
</head>
<body>
  <header class="site-header py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="index.php" aria-label="Product">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto me-3" role="img" 
         viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/>
         <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
        </svg>
      </a>
      
      <ul class="nav col-12 col-md-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="home.php" class="py-2 d-md-inline-block me-3">Home</a></li>
        <li><a href="features.php" class="py-2 d-md-inline-block me-3">Features</a></li>
        <li><a href="faq.php" class="py-2 d-md-inline-block me-3">FAQs</a></li>
        <li><a href="about.php" class="py-2 d-md-inline-block me-3">About</a></li>
      </ul>

      <?php
        if (isset($_SESSION['fname'])) {
          echo "<script> 
          window.location.assign('userhome.php');
          </script>";
        }else {
          echo '<div class="text-end">
            <button type="button" class="btn btn-outline-light me-2" onclick="location.href=`login.php`">Login</button>
            <button type="button" class="btn btn-warning" onclick="location.href=`signup.php`">Sign-up</button>
          </div>';
        }
      ?>
    </nav>
  </header>

  <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
         aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
          aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777"/><image href="pics/carousel1.webp" width="100%"></image>
          </svg>
          <div class="container">
            <div class="carousel-caption text-start border border-info rounded px-3" style="color:black;background-color: rgba(255, 255, 255, 0.6);">
              <h1>Get started with BuildMyPC today!</h1>
              <p>Don't settle for a pre-built PC that doesn't meet your needs. Sign up for BuildMyPC and build your own custom machine, tailored to your specific needs and preferences.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
          aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777"/><image href="pics/carousel2.png" width="100%"></svg>
          <div class="container">
            <div class="carousel-caption border border-info rounded px-3" style="color:black;background-color: rgba(255, 255, 255, 0.6);">
              <h1>Need Help Troubleshooting Your PC Build?</h1>
              <p>Get expert advice and tips for troubleshooting your PC build.</p>
              <p><a class="btn btn-lg btn-primary" href="https://www.build-gaming-computers.com/troubleshooting-new-pc-build.html">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" 
          aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777"/><image href="pics/carousel3.jpg" width="100%"></svg>
          <div class="container">
            <div class="carousel-caption text-end border border-info rounded px-3" style="color:black;background-color: rgba(255, 255, 255, 0.6);">
              <h1>Find the Best PC Parts - Log in to BuildMyPC</h1>
              <p>Your dream PC is waiting for you. Log in to BuildMyPC and let's make it a reality.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Login</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="pics/hero.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"
          style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">Ready to build the perfect PC? Look no further than BuildMyPC</h1>
          <p class="lead">Our powerful PC builder tool allows you to easily find and compare components to create the custom PC of your dreams. Whether you're a beginner or a seasoned PC builder, our website provides all the information you need to make informed decisions about which components to choose. Join us today and be one of the satisfied users who have built their PCs with BuildMyPC today!</p>
      </div>
    </div>
  </main>
  <footer class="footer mt-auto py-3 bg-dark-subtle">
    <div class="container">
      <span class="text-muted">Disclaimer: The prices and availability of PC parts may vary and are subject to change without notice. BuildMyPC is not responsible for any errors, omissions, or inaccuracies in the information provided on our website. Users should always verify the information before making a purchase decision.</span>
      <br/><span class="text-muted">Copyright © 2023 BuildMyPC. All rights reserve</span>
    </div>
   </footer>
</body>
</html>