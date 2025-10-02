<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <form action="scripts/regScript.php" method="post">
        <label for="sUsername">Username:</label>
        <input type="text" name="sUsername" id="sUsername">

        <label for="sPassword">Password:</label>
        <input type="password" name="sPassword" id="sPassword">
        <button type="submit">Register User</button>
    </form>
</body>
</html>