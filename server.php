<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "register_db";

    //Create Connection
    $conn = mysqli_connect ($servername,$username,$password,$dbname);

    //check connection
    if (!$conn){
        die("Connection failed" . mysqli_connect_error());
    }
?>