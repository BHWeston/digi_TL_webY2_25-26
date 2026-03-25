<?php 
    // This page will send the data from newclubs.php to the database:

    require("connect.php");

    // Get our data from the last page:
    $sClubName = mysqli_real_escape_string($conn,$_POST['sClubName']);
    $sClubDesc = mysqli_real_escape_string($conn, $_POST['sClubDesc']);
    
    // Prepared Statements:
    $stmt = mysqli_prepare($conn, "INSERT INTO tblClubs (ClubName, ClubDesc) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "ss", $sClubName, $sClubDesc);
    mysqli_stmt_execute($stmt);

    header("Location: ../clubs.php");
    ?> 