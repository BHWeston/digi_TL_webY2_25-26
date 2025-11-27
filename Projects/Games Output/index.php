<!-- This page will display all of the details within our games database. This will contain two buttons for every row in our system, one for editing that row, another for deleting that row -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Home Page</title>
</head>
<body>
    <h1>Games List</h1>

    <?php 
    require("scripts/connect.php");
    
    // Query to get all data from the table:
    $sql = "SELECT * FROM tblGames";

    // This will run the above sql query ready to be used on our system:
    $result = mysqli_query($conn, $sql);

    // This will go through each of the rows and display the game name for them:
    echo("<table>");
    echo("<tr>");
    echo("<th>Game Name</th>");
    echo("<th>Game Price</th>");
    echo("<th>Amount in Stock</th>");
    echo("<th>Game Image</th>");
    echo("</tr>");

    
    while($row = mysqli_fetch_assoc($result)) {
        echo("<tr>");
        echo("<td>".$row['GameName']."</td>");
        echo("<td>".$row['Price']."</td>");
        echo("<td>".$row['Amount in Stock']."</td>");
        echo("<td><img src='images/".$row['GameImage']."'/></td>");
        // Display an edit button:
        echo("<td><a href='#'>Edit Row</a></td>");
        // Display a delete button:
        echo("<td><a href='scripts/deleteRow.php?id=".$row['GameID']."'>Delete Row</a></td>");
        echo("</tr>");
    }

    echo("</table>");
    ?>

</body>
</html>