<!-- This page will look to allow for the user to create new clubs within the system, this will insert into the database through a form, use PHP Prepared Statements for this -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Clubs</title>
 </head>
 <body>
    <h1>Inserting Clubs</h1>

    <!-- A form which will be used to insert club information: -->
        <form action="scripts/insertclubs.php" method="post">
            <label for="sClubName">Club Name:</label>
            <input type="text" name="sClubName" id="sClubName">

            <br/>

            <label for="sClubDesc">Club Description: </label>
            <br/>
            <textarea name="sClubDesc" id="" cols="30" rows="10"></textarea>
            
            <!-- <input type="text" name="sClubDesc" id="sClubDesc"> -->
            <br/>
            <button type="submit">Submit Form</button>
        </form>
 </body>
 </html>