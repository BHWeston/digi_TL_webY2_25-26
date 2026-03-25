<?php
// This file will look to connect the user to the database, this will include validation to look to ensure that any errors are caught:

// Connection variables:
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbclubs";

// Connect to the database:
$conn = mysqli_connect($servername, $username, $password, $dbname);

// If I cannot connect, display an error on the screen:
if(!$conn) {
    die("Cannot connect to database, error.");
}
    // } else {
    // For testing purposes:
    // echo("Database connected");
// }
?>