<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items Page</title>
</head>
<body>
    <h1>Add Items</h1>

    <form action="scripts/addItemsScript.php" method="post">
        <label for="sGameName">Game Name:</label>
        <input type="text" name="sGameName" id="sGameName">
        </br>

        <label for="fPrice">Price</label>
        <input type="number" name="fPrice" id="fPrice" min='0.00' step='0.01'>
        </br>

        <label for="iStock">Stock</label>
        <input type="number" name="iStock" id="iStock">
        </br>

        <button type="submit">Submit Form</button>

    </form>
</body>
</html>