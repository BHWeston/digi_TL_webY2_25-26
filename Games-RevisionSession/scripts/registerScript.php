<?php
    require("connect.php");
    if(empty($_POST['sUsername']) || empty($_POST['sPassword'])) {
        header("Location: ../register.php");
    } else{
        $sEnteredUsername = mysqli_real_escape_string($conn, $_POST['sUsername']);
        $sEnteredPassword = mysqli_real_escape_string($conn, $_POST['sPassword']);
        
        $hashedPassword = password_hash($sEnteredPassword, PASSWORD_DEFAULT);

        $sql = "INSERT INTO tblusers (Username, Password, Admin) VALUES (?, ?, 0)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $sEnteredUsername, $hashedPassword);
        mysqli_stmt_execute($stmt);

        header("Location: ../index.php");
    }
    
?>