<?php 

    $servername = "localhost";
    $username = "c9_admin";
    $password = "123456";
    $dbname = "c9_stu_regis";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } 

?>