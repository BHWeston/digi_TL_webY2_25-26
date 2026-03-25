<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <?php
        require("scripts/connect.php");
        require('utils.php');
        userCheck();
    ?>
</head>
<body>
    <h1>Welcome <?php echo($_SESSION['username']);?></h1>

    <table>
        <tr>
            <th>Game Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <?php
            $sql = "SELECT * FROM tblGames";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)){
                echo("<tr>");
                    echo("<td>$row[GameName]</td>");
                    echo("<td>$row[Price]</td>");
                    echo("<td>$row[Stock]</td>");
                    if($_SESSION['admin'] == 1) {
                    echo("<td><a href='editItems.php?id=$row[GameID]'>Edit</a></td>");
                    echo("<td><a href='scripts/deleteItems.php?id=$row[GameID]'>Delete</a></td>");
            }
            echo("</tr>");
            }


        ?>
    </table>
    <a href="addItems.php">Add New Items</a>
    <a href="scripts/logout.php">Logout User</a>
</body>
</html>