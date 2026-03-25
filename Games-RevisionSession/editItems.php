<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Items Page</title>
</head>
<body>
    <h1>Edit Items</h1>

    <?php
        require("scripts/connect.php");

        $gameId = $_GET['id'];

        $sql = "SELECT * FROM tblgames WHERE tblgames.GameID = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'i', $gameId);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        while($row = mysqli_fetch_assoc($result)){
    ?>

    <form action="scripts/editItemsScript.php" method="post">
        <input type="number" name="sID" id="sID" value=<?php echo($row['GameID']);?> hidden>

        <label for="sGameName">Game Name:</label>
        <input type="text" name="sGameName" id="sGameName" value=<?php echo($row['GameName']);?>>
        </br>

        <label for="fPrice">Price</label>
        <input type="number" name="fPrice" id="fPrice" value=<?php echo($row['Price']);?>>
        </br>

        <label for="iStock">Stock</label>
        <input type="number" name="iStock" id="iStock" value=<?php echo($row['Stock']);?>>
        </br>

        <button type="submit">Submit Form</button>

    </form>
    <?php
        }
    ?>
</body>
</html>