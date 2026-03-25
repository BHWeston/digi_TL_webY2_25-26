<?php

function userCheck(){
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: scripts/authRedirect.php");
    };
}

?>