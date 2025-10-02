<?php
    // Variables to connect to the database:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbjournal";

    // Command that will connect to the server, this will be used through-out the project to support in completion:
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // This will check if the webpage does not connect i.e. if there is an error on the website:
    if(!$conn){
        // This will end the webpage and stop this from running in the event of an error:
        die("Error on page");
    }
?>