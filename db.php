<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];
$gender = $_POST['gender'];

//db connection
$db = mysqli_connect("localhost", "root", "" ,"task");


    $insert_query = "INSERT INTO userinput (name,email,mobile,country,gender) 
    VALUES ('$name','$email','$mobile','$country','$gender')";

    mysqli_query($db, $insert_query);

    echo "registratoin successfull";


?>