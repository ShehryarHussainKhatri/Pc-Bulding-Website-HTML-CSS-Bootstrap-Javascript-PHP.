<?php
    session_start();
    $databaseServername = "localhost";
    $databaseUsername = "root";
    $databasePassword = "";
    $database = "webproject";

    $connection = mysqli_connect($databaseServername, $databaseUsername, $databasePassword, $database);
    if(!$connection){
        echo "Sorry, Database couldn't Connect 'ERROR'";
    } else{
        echo "Database Connected<br/>";
    }

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql ="SELECT * FROM userdata WHERE email='$email';";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $verify = password_verify($pass, $row['pass']);

    if(is_array($row) && $verify) {
        $_SESSION['fname'] = $row['firstName'];
        $_SESSION['uname'] = $row['username'];
        echo "<script> window.location.assign('userhome.php'); alert('Login Succesful.'); </script>";
    } else {
        echo "<script> window.location.assign('login.php'); alert('Email or Password Incorrect.'); </script>";
    }

    mysqli_close($connection);
?>