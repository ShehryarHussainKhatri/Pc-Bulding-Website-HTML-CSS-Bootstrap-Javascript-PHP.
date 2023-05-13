<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Home</title>
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
    body {
    background-color: #333;
    color: #fff;
    }
    main {
      font-family:'Arial Narrow Bold', sans-serif;
    }
    .form-control,
    .btn {
      background-color: #222;
      color: #fff;
      border-color: #444;
    }
    .form-control:focus,
    .btn:focus {
      border-color: #888;
    }
    #output {
      background-color: #222;
      color: #fff;
      border-color: #444;
    }
  </style>
</head>
<body>
<header class="site-header py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2" href="index.php" aria-label="Product">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" 
         viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/>
         <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
        </svg>
      </a>
      
      <ul class="nav col-12 col-md-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="userhome.php" class="py-2 d-md-inline-block me-3 ms-3">Home</a></li>
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
          echo "<script> 
          window.location.assign('Login.php'); 
          alert('Warning! Avoid doing it again, You are Not Logged In.'); 
          </script>";
        }
      ?>
    </nav>
  </header>
  <main class="text-center px-3 py-3">
  <div class="container mt-3">
    <h1 class="text-center mb-4 display-1">PC Build Generator</h1>
    <form>
      <div class="form-group m-3">
        <label for="city" class="m-2 h4">SELECT CITY</label>
        <select id="city" class="form-control">
          <option value="New York">New York</option>
          <option value="Seattle">Seattle</option>
          <option value="Pheonix">Pheonix</option>
          <option value="Houston">Houston</option>
          <option value="San Francisco">San Francisco</option>
          <option value="Washington">Washington</option>
        </select>
      </div>
      <div class="form-group m-3">
        <label for="budget" class="m-2 h4">BUDGET</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">$</span>
          </div>
          <input type="number" id="budget" name="budget" class="form-control" placeholder="Max Value: 800 (else the output will not come as expected)">
        </div>
      </div>
      <button type="button" class="btn btn-primary" onclick="if(document.getElementById('budget').value) buildPC(); myMap()">Build PC</button>
    </form>
    <hr>
    <div class="form-group m-3">
      <label for="output" class="mb-3 h4">PC Components:</label>
      <textarea id="output" class="form-control" readonly rows="10"></textarea>
    </div>
  </div>

    <!-- Open AI -->
    <script>
      const API_URL = "https://api.openai.com/v1/completions";
      const API_KEY = "OPENAI_API_KEY";
      var check = document.getElementById("budget").value.toString();
      if(check == "") {
        document.getElementById("output").value = "Please state your budget first in the above column";
      }

      async function buildPC() {
          document.getElementById("output").value = "Processing, Please wait....";

          const budget = document.getElementById("budget").value.toString();

          try {
              const response = await fetch(API_URL, {
                  method: "POST",
                  headers: {
                      "Authorization": `Bearer ${API_KEY}`,
                      "Content-Type": "application/json"
                  },
                  body: JSON.stringify({
                      model: "text-davinci-003",
                      prompt: `from now on, when I ask "build me a pc for ${budget}" with ${budget} being a dollar amount, list a set of components with the total cost not exceeding ${budget}. The components should includes a CPU, a motherboard, RAM, storage, a power supply unit, a graphics card (if necessary), and a case. Additionally, the PC build should be compatible with each component and should be upgradable in the future if necessary. If it is not possible to build a PC under the budget of $${budget} then please let me know. Thank you.`,
                      max_tokens: 2048,
                      top_p: 0.1
                  })
              });

              const mydata = await response.json();
              document.getElementById("output").value = mydata.choices[0].text;
          } catch (error) {
              console.error(error);
              alert("Error occurred, please try again later.");
          }
      }
    </script>
    
    <!-- Google Map -->
    <div id="googleMap" style="width:80%;height:400px; margin: auto;"></div>
      <script>
        async function myMap() {
          const city = document.getElementById("city").value.toString();
          
          //By default New York
          var latitude;
          var longitude;

          switch(city) {
            case "New York":
              latitude = 40.712775;
              longitude = -74.005973;
              break;
            case "Seattle":
              latitude = 47.6062;
              longitude = -122.3321;
              break;
            case "Pheonix":
              latitude = 33.4484;
              longitude = -112.0740;
              break;
            case "Houston":
              latitude = 29.7604;
              longitude = -95.3698;
              break;
            case "San Francisco":
              latitude = 37.7749;
              longitude = -122.4194;
              break;
            case "Washington":
              latitude = 38.9072;
              longitude = -77.0369;
              break;
            default:
              latitude = 40.712775;
              longitude = -74.005973;
          }

          var mapProp = {
            center: new google.maps.LatLng(latitude, longitude),
            zoom: 12,
          };
          var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

          const service = new google.maps.places.PlacesService(map);

          const request = {
            location: map.getCenter(),
            radius: 5000,
            keyword: 'computer hardware store'
          };

          service.nearbySearch(request, (results, status) => {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
              for (let i = 0; i < results.length; i++) {
                const place = results[i];
                const marker = new google.maps.Marker({
                  position: place.geometry.location,
                  map: map,
                  title: place.name
                });
                marker.addListener('click', function() {
                  map.setZoom(16);
                  map.setCenter(marker.getPosition());
                });
              }
            }
          });
        }
      </script>

      <script async src="https://maps.googleapis.com/maps/api/js?key=GOOGLE_API_KEY&libraries=places&callback=myMap"></script>
  </main>
  <footer class="footer mt-auto py-3" style="background-color: rgba(0, 0, 0, .85);">
    <div class="container">
      <span>Disclaimer: The prices and availability of PC parts may vary and are subject to change without notice. BuildMyPC is not responsible for any errors, omissions, or inaccuracies in the information provided on our website. Users should always verify the information before making a purchase decision.</span>
      <br/><span>Copyright © 2023 BuildMyPC. All rights reserve</span>
    </div>
   </footer>
</body>
</html>