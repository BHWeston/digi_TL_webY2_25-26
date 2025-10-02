<?php 
    // Starts a "session" running
    session_start();

    // This creates a session called "myFirstSession":
    $_SESSION["myFirstSession"] = 0;

    header("Location: index.php");
?>