<?php

    require("connect.php");

    $sentID = $_POST['sID'];
    $sentGameName = $_POST['sGameName'];
    $sentPrice = $_POST['fPrice'];
    $sentStock = $_POST['iStock'];

    $sql = "UPDATE tblgames SET GameName = ?, Price = ?, Stock = ? WHERE GameID = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sdii', $sentGameName, $sentPrice, $sentStock, $sentID);
    mysqli_stmt_execute($stmt);

    header("Location: ../homepage.php");
?>