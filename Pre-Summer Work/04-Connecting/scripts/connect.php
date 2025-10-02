<?php
    // This page will connect the user to the database:

    // Variables that will be used to connect to the database:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbfirst";

    // Connection to our database:
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Testing our connection/error handling:
    if(!$conn) {
       die("Error cannot connect");
       echo("THIS IS FUN I LIKE PHP :D");
    } else {
        echo("You can connect");
    }
    
?>