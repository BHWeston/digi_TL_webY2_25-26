<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <!-- This website will look to get a user input and output this onto the screen: -->
     <p>Welcome to my website</p>

     <!-- Create a form which will ask the user to enter in their name: -->
        <form action="sentData.php" method="get">
            <!-- Label to identify what we are doing on the webpage: -->
            <label for="sEnterName">Enter in your name:</label>

            <!-- An input box for entering in our text -->
            <input type="text" name="sEnterName" id="sEnterName">

            <!-- Submit and reset buttons -->
            <button type="submit">Submit Form</button>
            <button type="reset">Reset Form</button>
        </form>
</body>
</html>