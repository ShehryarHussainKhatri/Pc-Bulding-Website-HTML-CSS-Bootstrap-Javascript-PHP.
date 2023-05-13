<?php 
    $databaseServername = "localhost";
    $databaseUsername = "root";
    $databasePassword = "";
    $database = "webproject";

    $connection = mysqli_connect($databaseServername, $databaseUsername, $databasePassword, $database);
    if(!$connection){
        echo "Sorry, Database couldn't Connect 'ERROR'";
    }

    
    $signemail = $_POST['email'];
    $signfirstname = $_POST['fname'];
    $signlastname = $_POST['lname'];
    $signuser = $_POST['user'];
    $signpass = $_POST['pass'];
    $date = $_POST['date'];
    $secret = $_POST['secret'];

    $passhash = password_hash($signpass, PASSWORD_DEFAULT);
    $sechash = password_hash($secret, PASSWORD_DEFAULT);

    $check = "SELECT * FROM userdata WHERE email='$signemail' OR username='$signuser';";
    $checked = mysqli_query($connection, $check);
    $row = mysqli_fetch_assoc($checked);

    if($row) {

        echo "<script> 
        window.location.assign('SignUp.php'); 
        alert('Error: Username or Email already taken, Please Try something else!'); 
        </script>";

    } else {
        $sql ="INSERT INTO userdata(email, firstName, lastName, username, pass, date, secret) 
        VALUES('$signemail', '$signfirstname', '$signlastname', '$signuser', '$passhash', '$date', '$sechash');";

        $result = mysqli_query($connection, $sql);

        if ($result) {
            echo "<script> 
            window.location.assign('Login.php'); 
            alert('New record created successfully'); 
            </script>";
        }

    }

    mysqli_close($connection);
?>

<!-- CREATE TABLE userdata(
    ID int NOT NULL AUTO_INCREMENT PRIMARY key,
     email varchar(40) UNIQUE NOT NULL,
     firstName varchar(40) NOT NULL,
     lastName varchar(40) NOT NULL,
     username varchar(40) UNIQUE NOT NULL,
     pass varchar(255) NOT NULL,
     date varchar(40) NOT NULL,
     secret varchar(255) NOT NULL); -->