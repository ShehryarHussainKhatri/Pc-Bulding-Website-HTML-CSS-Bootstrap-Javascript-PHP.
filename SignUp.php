<?php
session_start();
if (isset($_SESSION['fname'])) { 
  echo "<script> 
          window.location.assign('userhome.php'); 
          alert('You are already Logged In'); 
          </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: url(pics/validation.png); background-size: cover;">
<div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
        <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" href="home.php"></a>
      </div>

      <div class="modal-body p-5 pt-0">
        <form action="database.php" method="POST">
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput"
            required placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
          </div>
          <div class = "row">
            <div class = "panel panel-default col-6">
                <div class = "panel-body">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" id="floatingfirstname" 
                    required placeholder="First Name" name="fname">
                    <label for="floatingfirstname">First Name</label>
                  </div>
                </div>
            </div>
            <div class = "panel panel-default col-6">
                <div class = "panel-body">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" id="floatinglastname" 
                    required placeholder="Last Name" name="lname">
                    <label for="floatinglastname">Last Name</label>
                  </div>
                </div>
            </div>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floatingUsername" 
            required placeholder="@username" name="user">
            <label for="floatingUsername">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" 
            required placeholder="Password" name="pass">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="date" class="form-control rounded-3" id="floatingDate" 
            required placeholder="Date" name="date"
            min="1900-01-01" max="2018-12-30">
            <label for="floatingDate">Date Of Birth</label>
          </div>
          <p>&nbsp;Q: What's your Favorite Food?</p>
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floatingSecret" 
            required placeholder="Secret" name="secret">
            <label for="floatingSecret">Secret Answer</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Sign up</button>
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>