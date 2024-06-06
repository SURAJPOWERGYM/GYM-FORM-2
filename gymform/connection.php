<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname ="power_gym_form";

 $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
       // echo "connection ok";
    }
    else
    {
        echo "connection failed";
    }
?>