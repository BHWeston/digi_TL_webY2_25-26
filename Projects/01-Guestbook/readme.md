# Guestbook Project
Create a basic PHP form that allows users to enter their name and a short message. Upon submission, the data will be displayed on a new page.

<b>HTML Form (form.html):</b>
- Fields: Name (text), Message (textarea)
- Method: POST
- Action: display.php

<b>PHP Script (display.php):</b>
- Retrieve the submitted data using $_POST
- Display the name and message in a styled format
- Include basic validation (e.g., check if fields are not empty)

<b>Bonus Challenge:</b>
- Sanitise the input using htmlspecialchars() to prevent XSS.
- Add a timestamp to each message.
- Store the messages in a text file and display all previous entries.