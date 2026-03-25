<?php
    require("connect.php");
    session_start();
    if(empty($_POST['sUsername']) || empty($_POST['sPassword'])) {
        header("Location: ../index.php");
    } else{
        $sEnteredUsername = mysqli_real_escape_string($conn, $_POST['sUsername']);
        $sEnteredPassword = mysqli_real_escape_string($conn, $_POST['sPassword']);
        
        $sql = "SELECT * FROM tblusers WHERE tblusers.Username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 's', $sEnteredUsername);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $sStoredPass = $row['Password'];

            if(password_verify($sEnteredPassword, $sStoredPass)) {
                $_SESSION['username'] = $sEnteredUsername;
                $_SESSION['admin'] = $row['Admin'];
                header("Location: ../homepage.php");
            } else {
                header("Location: ../index.php");
            }
        } else {
            header("Location: ../index.php");
        }
    }
?>