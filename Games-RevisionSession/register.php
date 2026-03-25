<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamesZone</title>
</head>
<body>
    <h1>Register Page</h1>

    <form action="scripts/registerScript.php" method="post">
        <label for="sUsername">Username: </label>
        <input type="text" name="sUsername" id="sUsername" minlength="2">

        <label for="sPassword">Password:</label>
        <input type="password" name="sPassword" id="sPassword" minlength="8">

        <button type="submit">Submit Form</button>
    </form>

    <a href="index.php">Login User</a>
</body>
</html>