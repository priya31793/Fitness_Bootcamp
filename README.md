*******************
DB Fitness Project
*******************
We have created a webpage for DB Fitness Bootcamp, The webpage is all about health and fitness. The bootcamp will provide you guidance and support in order to reduce your weight with exciting special offers. In the home page you can find all the information related to DB Fitness Bootcamp such as classes and schedules, what are all the programs available, trainer details, Offers and plans etc. In our project we are following MVC Framework. 

*******************
Technology stack
******************* 
1. Frontend Framework - Codeigniter
2. Backend Framework - PHP
3. Database - MySQL
4. Editor - Brackets/NetBeans/Notepad++
5. Development Server - Xampp
6. Testing Tool - Selenium

*******************
Installation
*******************
1. Codeigniter -Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide. 
2. Xampp Server
3. Notepad++ / Netbeans/ Brackets
4. PHP version 5.6 or newer is recommended.
5. Selenium IDE

*******************
What is CodeIgniter
*******************

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. It provide a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter minimize the amount of code needed
for a given task.

*******************
Functionality
*******************

1. User Registration
2. User Login
3. Email Password Reset
4. Enquiry/Feedback/Contact Form  
5. Validation Rules
6. Google Map API
7. Admin Page 
8. Search 
9. Location Autocomplete
10. Edit, Update, Delete Contacts 
11. Logout 

*********************
1. User Registration
*********************

Initially user have to register with DB Fitness bootcamp by providing their name, email, password, age and mobile number. 
Refer Files:
Model:
Path - localhost/week6(your_folder_name)/application/models/User_modal.php
Method Name - register_user

Controller:
Path - localhost/week6(your_folder_name)/application/controller/User.php
Method Name - register_user

View:
Path - localhost/week6(your_folder_name)/application/views/register.php

*******************
2. User Login
*******************

Once user have registered with DB Fitness bootcamp, they can login with their username and password. 
Refer Files:
Model:
Path - localhost/week6(your_folder_name)/application/models/User_modal.php
Method Name - login_user

Controller:
Path - localhost/week6(your_folder_name)/application/controller/User.php
Method Name - login_user

View:
Path - localhost/week6(your_folder_name)/application/views/login.php

Once user has logged in successfully, they can view the DB Fitness Bootcamp with detailed guidance and support.
Refer file - localhost/week6(your_folder_name)/application/views/user_profile.php

*****************************************
3. Forgot Password (Email reset feature)
*****************************************

If the user doesn't know their password, they can click forgot password button, enter their email id and submit. Email will be sent to their mail id with their new password.   
Refer Files:
Go to localhost/week6(your_folder_name)/application/config/config.php and add below two lines for sending email,
$config['proxy_ips'] = '';
$config['smtp_host']='smtp.gmail.com';

Model:
Path - localhost/week6(your_folder_name)/application/models/User_modal.php
Method Name - ForgotPassword, sendpassword

Controller:
Path - localhost/week6(your_folder_name)/application/controller/User.php
Method Name - ForgotPassword

View:
Path - localhost/week6(your_folder_name)/application/views/login.php

*************************
4. Enquiry/Contact Form
*************************

The user/ new customer can submit an enquiry about fee structure or other details related to DB Fitness.
Refer Files:
Model:
Path - localhost/week6(your_folder_name)/application/models/User_modal.php
Method Name - insert
Controller:
Path - localhost/week6(your_folder_name)/application/controller/User.php
Method Name - add_contact
View:
Path - localhost/week6(your_folder_name)/application/views/home.php

********************
5. Validation Rules
********************

Added validation for User registration, user login, contact/enquiry form, admin login, password & username validations. Based on the validation condition, user can login. If the validation fails a error message will popup. 
Refer Files:
Model:
Path - localhost/week6(your_folder_name)/application/models/User_modal.php
Method Name - email_check, pass_check

Controller:
Path - localhost/week6(your_folder_name)/application/controller/User.php
Method Name - add_contact,login_user,register_user

View:
1. localhost/week6(your_folder_name)/application/views/home.php
2. localhost/week6(your_folder_name)/application/views/login.php
3. localhost/week6(your_folder_name)/application/views/register.php
4. localhost/week6(your_folder_name)/application/views/footer.php

******************
6. Google Map API
******************

Added Google Map API based on Address in the home page.
Refer Files:
View:
1. localhost/week6(your_folder_name)/application/views/home.php

*************
7. Admin Page
*************

We have seperate admin page to review the customer complaints and customer personal details. Admin will have the rights to edit, update and delete the user contacts.
Refer Files:
Model:
Path - localhost/week6(your_folder_name)/application/models/User_modal.php
Method Name - 
1. Validations - email_check, pass_check, 
2. Contacts/feedback view - admin_view, 

Controller:
Path - localhost/week6(your_folder_name)/application/controller/User.php
Method Name - 
1. View Feedbacks - admin_view,

View:
1. localhost/week6(your_folder_name)/application/views/footer.php

**********
8.Search
**********

Added search functionality in admin page, where admin can easily filter the user details based on the name.
View:
1. localhost/week6(your_folder_name)/application/views/admin.php
CSS - localhost/week6(your_folder_name)/css/admin.css
JS - localhost/week6(your_folder_name)/js/search.js

*************************
9. Location Autocomplete
*************************

Added auto suggest location functionality when user type their address.
View:
1. localhost/week6(your_folder_name)/application/views/footer.php
2. localhost/week6(your_folder_name)/application/views/location.php

*******************************
10. Edit/Update/Delete Contacts
*******************************

Admin user will have the rights to edit, update and delete the user contact details and feedbacks.
Refer Files:
Model:
Path - localhost/week6(your_folder_name)/application/models/User_modal.php
Method Name - 
1. Validations - email_check, pass_check,  
2. Delete contacts - delete, 
3. Update contact details - update

Controller:
Path - localhost/week6(your_folder_name)/application/controller/User.php
Method Name - 
1. Admin can edit user contact - update_contact_view, 
2. Admin can update user contacts - update_contact, 
3. Admin can delete the user details - delete_contact

View:
1. Path - localhost/week6(your_folder_name)/application/views/admin.php

***********
11. Logout
***********

We have added logout functionality for both user and admin.
Controller:
Path - localhost/week6(your_folder_name)/application/controller/User.php
Method Name - user_logout
View :
1. Path - localhost/week6(your_folder_name)/application/views/admin.php
2. Path - localhost/week6(your_folder_name)/application/views/user_profile.php

***************
Header & Footer
***************

Added all the css and javascript files in header and footer.
View:
Header Path - localhost/week6(your_folder_name)/application/views/header.php
Footer Path - localhost/week6(your_folder_name)/application/views/footer.php

************
Database
************

Created a database for storing user and contacts details in MySQL.
Steps:
Open PHPMyadmin - http://localhost/phpmyadmin
Create a new DB called "test"
Import user.sql & contact.sql (localhost/week6(your_folder_name)/user.sql)

Path - htdocs/week6/application/config/database.php
Enter below details:
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'test',

**************
Configuration
**************

Open week6 folder(your_folder_name)/application/config/config.php
Open config.php and change it to your folder name
$config['base_url'] = 'http://localhost/week6/';

Routes:
week6 folder(your_folder_name)/application/config/route.php
1. Add your initial loading page as your default route. I have added home.php as my default route.
$route['default_controller'] = 'home';
2. When user clicks the home page, the route will navigate to controller (User.php) and it will render the view page.
$route['home'] = 'user/home';
 





