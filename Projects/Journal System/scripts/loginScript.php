<?php 
    // Connect to database
    require("connect.php");
    // Get the posted data
    $sSentName = $_POST['sUsername'];
    $sSentPassword = $_POST['sPassword'];

    // Use a SELECT to look for the username
    $sql = "SELECT * FROM tblUsers WHERE tblUsers.Username = '$sSentName'";
    
    // Run query:
    $result = mysqli_query($conn, $sql);
    
    // NEW - Grab our stored password if number rows is 1:
    if(mysqli_num_rows($result) == 1){
        // Use password_verify() to check against password:
        $row = mysqli_fetch_assoc($result);

        $sStoredPass = $row['Password'];

        if(password_verify($sSentPassword, $sStoredPass)) {
            header("Location: ../journal.php");
        }
    }
?> 