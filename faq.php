<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions</title>
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
  <main class="container">
    <div class="container px-4 py-5">
        <div class="container border-bottom">
            <img src="pics/faq.png" width="50" height="50" class="me-2 mb-2"/>
            <h2 class="pb-2" style="display: inline-block;">Frequently Asked Questions</h2>
        </div>
        <div class="accordion mt-5">
            <div class="accordion-item">
            <h4 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <strong>Question: 1&nbsp;</strong>What is BuildMyPC?
                </button>
            </h4>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Answer:&nbsp;</strong>BuildMyPC is an online resource for PC builders of all levels, providing tools, resources, and expert advice to help users build the custom PC of their dreams.
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h4 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong>Question: 2&nbsp;</strong>How does BuildMyPC work?
                </button>
            </h4>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <strong>Answer:&nbsp;</strong>To use BuildMyPC, simply enter your budget and preferred specifications into our PC builder tool, and we'll provide you with a list of recommended parts that fit your requirements. You can also browse our extensive library of PC building guides, tutorials, and articles to learn more about the PC building process and get expert advice from our team.
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h4 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong>Question: 3&nbsp;</strong>Is BuildMyPC free to use?
                </button>
            </h4>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Answer:&nbsp;</strong>Yes, BuildMyPC is completely free to use. There are no hidden fees or charges, and you just need to create an account to access our tools and resources.
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h4 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <strong>Question: 4&nbsp;</strong>Do I need any special knowledge or experience to use BuildMyPC?
                </button>
            </h4>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Answer:&nbsp;</strong>No, BuildMyPC is designed to be accessible and user-friendly for PC builders of all levels. Whether you're a seasoned builder or a newcomer to the world of custom builds, our website is designed to provide you with the guidance and support you need to make your build a success.
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h4 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <strong>Question: 5&nbsp;</strong>Can I buy PC parts directly from BuildMyPC?
                </button>
            </h4>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>Answer:&nbsp;</strong>No, BuildMyPC does not sell PC parts directly. Instead, we provide locations of local stores where you can purchase the PC parts that you need to build your custom PC.
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h4 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <strong>Question: 6&nbsp;</strong>What if I have a problem with my PC build?
                </button>
            </h4>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <strong>Answer:&nbsp;</strong>While BuildMyPC provides resources and advice to help you build your PC, we cannot provide technical support for your build. If you experience problems with your build, we recommend seeking assistance from a qualified technician or the manufacturer of your PC parts.
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h4 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <strong>Question: 7&nbsp;</strong>How can I get in touch with BuildMyPC?
                </button>
            </h4>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <strong>Answer:&nbsp;</strong>You can contact us through our website's contact form or by emailing us at support@buildmypc.com. We aim to respond to all inquiries within 24 hours.
                </div>
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