<?php

    // If statement to check if the user has submitted a POST request, this stops a user being able to bypass directly to the page and viewing data that has not been submitted:

    // IF statements in PHP use the following syntax if(condition) { action }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Variables for getting the data from the form.html page
        $sEnteredName = htmlspecialchars($_POST['sName']);
        $sEnteredMessage = htmlspecialchars($_POST['sMessage']);

        // Find the current timestamp to be used
        date_default_timezone_set('Europe/London');
        $timestamp = date("Y-m-d H:i:s");
        // echo($timestamp);

        // Check if the variables contain empty values
        if(!empty($sEnteredName) && !empty($sEnteredMessage)){

            // The details I want entered into our text file:
            $docEntry = "$timestamp | $sEnteredName: $sEnteredMessage" .PHP_EOL;
            $filename = "guestbook.txt";
            // Functions to insert into our text file:
            file_put_contents($filename, $docEntry, FILE_APPEND);

            echo("Thank you for your message, this has been sent");
        } else {
            echo("Please fill in both entry fields");
        }
        // Outputs for the variables:
        echo("This is the entered name: <br>" .$sEnteredName."<br>");
        echo("This is the entered message: <br>".$sEnteredMessage);
    }

    // On your website, have a link to another page called output.php, this will  look to output the details from the text file onto the screen, so that the user can view what is within the guestbook.txt file on the website. 
?>