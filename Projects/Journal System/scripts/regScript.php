<?php
// Connect to the database:
require("connect.php");

// Get the posted data:
$sSentName = $_POST['sUsername'];
$sSentPassword = $_POST['sPassword'];

// NEW - Encrypt password:
// password_hash(password, encrypt type)
$sHashedPassword = password_hash($sSentPassword, PASSWORD_DEFAULT);

// Insert into database:
$sql = "INSERT INTO tblUsers (Username, Password, Admin) VALUES ('$sSentName', '$sHashedPassword', 0)";

// Run query:
mysqli_query($conn, $sql);

// Goes back to the index file:
header("Location: ../index.php");
?>