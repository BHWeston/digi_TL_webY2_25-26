<?php
// Role of the page: To connect to the database to allow for access and storage

// Step #1 - Variables to store the connection:
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db-loginsystem";

// Step #2 - Running the connection:
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Step #3 - Testing the connection:
if(!$conn) {
    echo("Error cannot connect to server");
}
?>