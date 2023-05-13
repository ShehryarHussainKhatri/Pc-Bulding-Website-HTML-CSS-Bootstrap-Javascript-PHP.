<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
    <div class="container px-4 py-5">
        <div class="container border-bottom">
            <img src="pics/about.png" width="40" height="40" class="me-2 mb-2"/>
            <h2 class="pb-2" style="display: inline-block;">Abous Us</h2>
        </div>

        <div class="p-5 mt-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">About Our Website</h1><br/>
            <p class="col-md-8 fs-4">We created BuildMyPC to provide users with a comprehensive and user-friendly platform for building their own custom PC. Our database includes a wide range of PC parts from top manufacturers, and we update it regularly to ensure that our users have access to the latest products and prices.
                <br/><br/>We are committed to providing our users with the best possible experience, and we welcome feedback and suggestions on how we can improve our website. If you have any questions or comments, please don't hesitate to contact us at support@buildmypc.com.
                <br/><br/>Thank you for choosing BuildMyPC as your ultimate guide to building a custom PC.</p>
        </div>
        </div>

        <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
            <h2>Abouit Our Goal</h2>
            <p>At BuildMyPC, our mission is to help users build their own custom PC within their budget. We believe that everyone should have the opportunity to build a PC that meets their specific needs and preferences, whether it's for gaming, content creation, or work.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
            <h2>About Our Team</h2>
            <p>Our team is made up of PC enthusiasts and experts who are passionate about technology and helping others. We have years of experience in building and testing PCs, and we know what it takes to create a high-performing and reliable machine.</p>
            </div>
        </div>
        </div>
    </div>
   </main>
   <footer class="footer mt-auto py-3 bg-dark-subtle">
    <div class="container">
      <span class="text-muted">Contact Us: If you have any questions or comments, please feel free to contact us at support@buildmypc.com.</span>
      <br/><span class="text-muted">Copyright © 2023 BuildMyPC. All rights reserve</span>
    </div>
   </footer>
</body>
</html>