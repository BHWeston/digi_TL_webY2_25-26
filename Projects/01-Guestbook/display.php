<?php

    // If statement to check if the user has submitted a POST request, this stops a user being able to bypass directly to the page and viewing data that has not been submitted:

    // IF statements in PHP use the following syntax if(condition) { action }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Variables for getting the data from the form.html page
        $sEnteredName = htmlspecialchars($_POST['sName']);
        $sEnteredMessage = htmlspecialchars($_POST['sMessage']);

        // Outputs for the variables:
        echo("This is the entered name: <br>" .$sEnteredName."<br>");
        echo("This is the entered message: <br>".$sEnteredMessage);

    }
?>