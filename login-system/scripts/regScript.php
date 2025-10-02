<?php 

require("connect.php");

$sSentUser = $_POST['sEnteredEmail'];
$sSentPass = $_POST['sEnteredPass'];

// Variable which will be used to insert the data into the database
// INSERT INTO tblName (cols) VALUES (values);
$sql = "INSERT INTO tblusers (username, password) VALUES ('$sSentUser', '$sSentPass')";

// mysqli_query() takes in two parameters (connection, query)
mysqli_query($conn,$sql);
?>