<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
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
    .card-cover {
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    }
    .text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .50); }
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
            echo '<div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            '.$_SESSION['fname'].'
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="forgot.php">Change Password</a></li>
              <li><a class="dropdown-item" href="del.php">Delete Account</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
            </div>';
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
    <div class="container px-4 py-5" id="custom-cards">
      <div class="container border-bottom">
        <img src="pics/features.png" width="50" height="50" class="me-2 mb-2"/>
        <h2 class="pb-2" style="display: inline-block;">Features</h2>
      </div>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('pics/features1.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">User-friendly interface: The website have an intuitive and easy-to-use interface.</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('pics/features2.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Information about each PC part:&nbsp;&nbsp; The website provide information on each PC part.</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('pics/features3.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Local Stores Address: Navigate to local PC part stores with our convenient map feature.</h3>
                    </div>
                </div>
            </div>
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