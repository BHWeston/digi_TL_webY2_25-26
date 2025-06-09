<?php
    // Variables for getting the data from the form.html page
    $sEnteredName = $_POST['sName'];
    $sEnteredMessage = $_POST['sMessage'];

    // Outputs for the variables:
    echo("This is the entered name: <br>" .$sEnteredName."<br>");
    echo("This is the entered message: <br>".$sEnteredMessage);
?>