# PHP Feedback Form
Students will create a basic PHP web application that collects user input through a form, processes the data using PHP variables, and displays the output dynamically.

# Task Requirements
You are tasked with creating a simple feedback form for a fictional website. The form should collect the following information from the user:

- Name
- Email
- Feedback message
Once the form is submitted, the PHP script should:

1. Capture the input using variables.
2. Display a personalised thank-you message using the input data.
3. Handle the form submission securely and correctly

# Instruction
Create an HTML form in a file called feedback_form.html:
- Use the POST method.
- Action should point to process_feedback.php.

Create a PHP script in a file called process_feedback.php:
- Retrieve the form data using $_POST.
- Store the data in variables.
- Display a thank-you message using the user's name and feedback

# Example Output
Thank you, Alice, for your feedback!
We’ve received your message:
"Great website, very helpful!"

# Extension Task
- Add basic validation (e.g., check if fields are empty).
- Sanitise input using htmlspecialchars() to prevent XSS.
- Style the form using basic CSS.