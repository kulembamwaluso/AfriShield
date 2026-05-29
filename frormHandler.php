<?php

$host = "";
$user = "";
$password = "";
$database = "AfriShield";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

//request hundling


include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO bookings(fullname,email,message)
            VALUES('$fullname','$email','$message')";

    if(mysqli_query($conn, $sql)){
        echo "<script>
                alert('Booking Submitted Successfully');
                window.location.href='index.html';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>