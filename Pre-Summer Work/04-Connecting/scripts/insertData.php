<?php
// If we are wanting to interact with a database i.e. CRUD operations: essentially INSERT, CREATE, DELETE etc. We must require the database connection:
require("connect.php");

// Get the data from the form (using the $_POST we looked at earlier in the week):
$sEnteredName = $_POST['sName'];
echo("Check if the name has been entered" .$sEnteredName);

// Steps to add into the database (the bad way):
// 1. Create an SQL query (INSERT INTO tbName (col1,col2....) VALUES (val1, val2....);
$sql = "INSERT INTO tblpeople (username) VALUES ('$sEnteredName')";

// 2. Run SQL query:
mysqli_query($conn, $sql);

?>