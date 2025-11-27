<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbgames";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn) {
        echo("Error in code");
    }
?>