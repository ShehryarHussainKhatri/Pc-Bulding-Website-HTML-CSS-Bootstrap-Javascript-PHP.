<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (isset($_SESSION['fname'])) {
        echo '<title>Change Password</title>';
    }else {
        echo '<title>Forgot Password</title>';
    }
    ?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: url(pics/validation.png); background-size: cover;">
<div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <?php
        if (isset($_SESSION['fname'])) {
            echo '<h1 class="fw-bold mb-0 fs-2">Change your password</h1>';
        }else {
            echo '<h1 class="fw-bold mb-0 fs-2">Forgot your password?</h1>';
        }
        ?>
        <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" href="home.php"></a>
      </div>

      <div class="modal-body p-5 pt-0">
    <form action="" method="post">
        <div class="form-floating mb-3">
        <?php
        if(!isset($_SESSION['uname'])){
            ?>
        <input class="form-control rounded-3" type="text" required placeholder=" " name="uname" id="">
        <label for="">Username</label>
        </div>
        <?php
        }
        ?>
        <div class="form-floating mb-3">
        <input class="form-control rounded-3" type="date" required placeholder=" " name="dob" id="">
        <label for="">Date Of Birth</label>
        </div>
        <div class="form-floating mb-3">
        <input class="form-control rounded-3" type="text" required placeholder=" " name="secret" id="">
        <label for="">Secret Answer</label>
        </div>
        <?php
        if (isset($_SESSION['fname'])) {
            echo '<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Change Password</button>';
        } else {
            echo '<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Forgot Password</button>';
        }
        ?>
    </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
    $databaseServername = "localhost";
    $databaseUsername = "root";
    $databasePassword = "";
    $database = "webproject";

    $connection = mysqli_connect($databaseServername, $databaseUsername, $databasePassword, $database);

    if(isset($_SESSION['uname'])){
        $uname = $_SESSION['uname'];
    }else{
        $uname = $_POST['uname'];
    }
    $dob = $_POST['dob'];
    $secret = $_POST['secret'];

    $sql ="SELECT * FROM userdata WHERE username='$uname' AND date='$dob';";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $verify = password_verify($secret, $row['secret']);

    if(is_array($row) && $verify){
        $_SESSION['funame'] = $uname;
        echo "<script> window.location.assign('newpass.php'); </script>";
    }else{
        echo "<script> alert('Invalid Information'); </script>";
    }
}
    ?>
</body>
</html>