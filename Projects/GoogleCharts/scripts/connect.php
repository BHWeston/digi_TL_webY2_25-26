<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbcharts";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn) {
        die("Error");
    }
?>