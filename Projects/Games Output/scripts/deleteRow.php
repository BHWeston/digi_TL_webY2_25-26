<?php
    require("connect.php");
$getID = $_GET["id"];
// echo("This will delete record ID $getID");

// Based upon the ID displayed on this page using the $_GET command, delete the entire row from the database (you will need to look at the syntax for this).

// Write some SQL commands delete data:
$sql = "DELETE FROM tblgames WHERE tblgames.GameID = $getID";

// Run the query:
$result = mysqli_query($conn, $sql);
// Goes back to this page:
header('Location: ../index.php');

?>