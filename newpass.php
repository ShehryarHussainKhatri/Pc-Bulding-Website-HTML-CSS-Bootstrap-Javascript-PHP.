<?php
session_start();
if(!(isset($_SESSION['funame']))){
    echo "<script> window.location.assign('forgot.php'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: url(pics/validation.png); background-size: cover;">
<div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">New Password</h1>
        <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" href="home.php"></a>
      </div>

      <div class="modal-body p-5 pt-0">  
    <form action="" method="post">
    <div class="form-floating mb-3">
        <input class="form-control rounded-3" type="password" required placeholder=" " name="npass" id="">
        <label for="">Enter new password</label>
        </div>
        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Update Password</button>
    </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
    $databaseServername = "localhost";
    $databaseUsername = "root";
    $databasePassword = "";
    $database = "webproject";

    $connection = mysqli_connect($databaseServername, $databaseUsername, $databasePassword, $database);

    $npass = $_POST['npass'];
    $funame = $_SESSION['funame'];

    $npasshash = password_hash($npass, PASSWORD_DEFAULT);

    $sql ="UPDATE userdata SET pass='$npasshash' WHERE username='$funame';";
    $result = mysqli_query($connection, $sql);

    if($result){
        if(isset($_SESSION['fname'])){
            unset($_SESSION['funame']);
            echo "<script> window.location.assign('userhome.php'); alert('Password Updated!'); </script>";
        }else{
            session_destroy();
        echo "<script> window.location.assign('login.php'); alert('Password Updated!'); </script>";
        }
    }else {
        echo "<script> alert('Error!'); </script>";
    }
}
    ?>
</body>
</html>