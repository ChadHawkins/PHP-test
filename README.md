# PHP-test
web application allowing user to submit messages (email validations) and admin users can view the in info (such as name, email, message and date submitted) 

in order to run code, just clone the repository.

I used xamp to run it on a local machine,
index.php being my first and main source



A brief explanation of which features you prioritized:
- User Message Submission: The primary focus was creating a functional contact form that allows users to submit their name, email, and message.
- Email Validation: Ensuring that the email provided by the user is valid was a key feature to prevent invalid data from being submitted.
- Admin Panel: I prioritized implementing a basic admin panel where messages submitted by users could be viewed by administrators. This includes showing the name, email (with email masking), message content, and the date it was submitted.
- Data Protection: Since emails are sensitive information, I implemented basic email masking in the admin view to ensure privacy.
- DB : Datebase has a singular table with id(as primary key), name, email, message and date_submitted tables
