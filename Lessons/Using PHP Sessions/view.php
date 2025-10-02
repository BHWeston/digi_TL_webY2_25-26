<?php 
    // Whenever you use a session, this must be needed:
    session_start();

    $_SESSION["myFirstSession"] += 1;
    echo($_SESSION["myFirstSession"]);

?>