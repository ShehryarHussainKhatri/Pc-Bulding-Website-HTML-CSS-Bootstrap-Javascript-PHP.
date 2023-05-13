<?php
session_start();
if(!(isset($_SESSION['duname']))){
    echo "<script> window.location.assign('del.php'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please Confirm</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: url(pics/validation.png); background-size: cover;">
<div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Are You Sure?</h1>
        <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" href="home.php"></a>
      </div>

      <div class="modal-body p-5 pt-0">
    <form action="" method="post">
        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="submit">Click Here to Delete your Account</button>
    </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
    $databaseServername = "localhost";
    $databaseUsername = "root";
    $databasePassword = "";
    $database = "webproject";

    $connection = mysqli_connect($databaseServername, $databaseUsername, $databasePassword, $database);

    $uname = $_SESSION['duname'];
    
    $sql = "DELETE FROM userdata WHERE username='$uname';";
    $result = mysqli_query($connection, $sql);
    if($result){
        session_destroy();
        echo "<script> alert('Account Deleted'); window.location.assign('home.php'); </script>";
    } else{
        echo "<script> alert('Error');";
        }
    }
    ?>
</body>
</html>