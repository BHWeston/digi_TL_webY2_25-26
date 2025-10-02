<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <!-- This will display a form for use to use -->

    <!-- Heading to introduce the page you are on -->
     <h1>Form Page</h1>

    <!-- Add in a form with POST asking the user to enter in their name: -->
        <form action="scripts/insertData.php" method="post">
            <label for="sName">Enter in your name: </label>
            <input type="text" name="sName" id="sName"/>

            <button type="submit">Submit Form</button>
        </form>
</body>
</html>