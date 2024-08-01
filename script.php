<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>





<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edugalitech";

$connection = mysqli_connect($servername,$username,$password,$dbname);

if (!$connection){
    echo "<script>alert('not connected')</script>";
}else{
    echo "<script>alert('not connected')</script>";
}

if(isset($_POST['submit'])){
    $fname = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $txt = $_POST['message'];

    if($fname and $lname and $email and $phone and $txt = "" ){
        $connection->close();
    }else{
        $insert = "INSERT INTO potencial_client(firstname,lastname,email,phone_n0,message) VALUES('$fname','$lname','$email','$phone','$txt');";

        if($connection,mysqli_query($insert)){
            echo "<script>alert('inserted successfully')</script>";
        }else{
            echo "<script>alert('Not inserted successfully')</script>";
        }
    }
$connection->close();
}



?>
    
</body>
</html>