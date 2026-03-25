<?php
    require("connect.php");

    $sentGameId = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "DELETE FROM tblGames WHERE tblGames.GameID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $sentGameId);
    mysqli_stmt_execute($stmt);

    header("Location: ../homepage.php");
?>