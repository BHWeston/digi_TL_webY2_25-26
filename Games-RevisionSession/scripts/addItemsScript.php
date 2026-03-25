<?php
// This script looks to provide an overview on how to add new items within the database file:


    require("connect.php");

// Assigned variables from form:
    $sentID = $_POST['sID'];
    $sentGameName = $_POST['sGameName'];
    $sentPrice = $_POST['fPrice'];
    $sentStock = $_POST['iStock'];

    $sql = "INSERT INTO tblgames (GameName, Price, Stock) VALUES(?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sdi', $sentGameName, $sentPrice, $sentStock);
    mysqli_stmt_execute($stmt);

    header("Location: ../homepage.php");
?>