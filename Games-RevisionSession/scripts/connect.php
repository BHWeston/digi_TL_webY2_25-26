<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbgamezone";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if(!$conn) {
        die("Error, cannot connect to database");
    }
?>