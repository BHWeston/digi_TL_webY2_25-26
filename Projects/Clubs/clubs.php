<!-- This page will look to allow for the user to view the current clubs within the system, along with linking them to a page which will allow for them to insert data into the database -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Clubs</title>
    <?php require("scripts/connect.php");?>
 </head>
 <body>
    <h1>View Clubs</h1>
    <p>This page will look to display the details of the clubs that we can currently look to run</p>

    <?php
        // Query to check against the clubs within the database:
        $sql = "SELECT * FROM tblClubs";
        $result = mysqli_query($conn, $sql);

        // Validation to check if there are zero clubs within our database:
        if(mysqli_num_rows($result) == 0){
            echo("There are no clubs within our database");
        } else {
            ?>
                <table>
                    <tr>
                        <th>Club Name</th>
                        <th>Club Description</th>
                    </tr>
                    <?php while($row = mysqli_fetch_assoc($result)) {?>
                        <tr>
                            <td><?php echo($row['ClubName']);?></td>
                            <td><?php echo($row['ClubDesc']);?></td>
                        </tr>
                        <?php } ?>
                </table>
            <?php
        }
    ?>

    <!-- Display the clubs from the database, if no clubs found, display a message -->
     <br/>
    <a href="newclubs.php">Create new clubs</a>
 </body>
 </html>