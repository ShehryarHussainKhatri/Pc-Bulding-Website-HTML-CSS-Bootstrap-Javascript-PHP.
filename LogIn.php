<?php
session_start();
if (isset($_SESSION['fname'])) { 
  echo "<script> 
          window.location.assign('userhome.php'); 
          alert('You are already Logged In'); 
          </script>";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">]
    <title>Login Form</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background: url(pics/validation.png); background-size: cover;">

    <main class="form-signin w-100 m-auto">
      <form method="POST" action="databaselog.php">
        <h1 class="h3 mb-3 fw-normal"><font color="#0d6efd">Please Sign in :)</font></h1>

        <div class="form-floating">
          <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="name@example.com" required>
          <label for="floatingEmail">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password" required>
          <label for="floatingPassword">Password</label>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button><br/><br/>

        <a class="btn btn-outline-secondary" href="forgot.php">Forgot your password? Click Here!</a><br/><br/>
        <a class="btn btn-outline-secondary" href="SignUp.php">New User? Feel Free to Sign Up Now!</a><br/>

        <br/><a href="home.php">Go back to Home</a>
      </form>
    </main>
  </body>
</html>
