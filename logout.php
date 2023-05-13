<?php

session_start();

if(isset($_SESSION['fname'])){
    session_destroy();
    print "<script> window.location.assign('home.php'); alert('Logout Succesful.'); </script>";
}else {
    print "<script> window.location.assign('Login.php'); alert('Warning! Avoid doing it again, You are Not Logged In.'); </script>";
}

?>