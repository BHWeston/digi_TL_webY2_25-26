# Connecting to DB Project
Build a web page with a contact form that collects a user's name, email, and message, and inserts this data into a MySQL database using PHP.

## Requirements
### HTML Form:
- Fields: Name, Email, Message
Submit button

### PHP Script:
- Connect to a MySQL database using mysqli or PDO
Validate and sanitize user input
- Insert the data into a table called contacts
- Display a success or error message

### Database Setup:
- Create a database named test_db
- Create a table contacts with the following structure:
1. ID
2. Name
3. Email
4. Message
5. Submitted At 

## Additional Criteria
- Data is correctly inserted into the database.
- SQL injection is prevented using prepared statements.
- User receives feedback after submission.