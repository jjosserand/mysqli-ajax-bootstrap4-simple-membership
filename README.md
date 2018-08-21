# mysqli-ajax-bootstrap4-simple-membership
Simple Membership Admin Site with registration and edit capabilities using php7, mysqli, and ajax with modal popup for edits.<br/>
<br/>
There are 5 files in this package...<br/>
conn.php - database connection with error checking<br/>
register.php - member join form (with validation)<br/>
index.php - admin display of member list with edit capability<br/>
editdata.php - called in modal popup from index.php to edit a selected member's information<br/>
details.sql - used to create the required 'details' table (no data, blank table)<br/>
<br/>
# requirements
PHP 7, MySQLi compatible with PHP 7
<br/>
# how to install
First, create a MySQLi database (ideally using your MySQL Database Wizard in cPanel, but not a requirement -- any method of creating this database in MySQLi is acceptable -- in the process you must also create a database user and give full permissions on the database to that user)<br/>
Next, open conn.php in your favorite text editor (NOT MsWord!) and put the appropriate values in between the double quotes for these variables...<br/>
```
$dbname = "cpaneladm_databasename";
$username = "cpaneladm_databaseuser";
$password = "yoursecurepasswordhere";
```
You should have received the values you need for the above 3 variables at the end of the database creation process if you used the MySQL Database Wizard. If you created your database some other way, then go to your cPanel or other site manager (such as Plesk), find the MySQL Databases selection and you can view the values that you need there.<br/>
Save that file.<br/>
Finally, open your FTP program, connect to your site and upload conn.php, index.php, register.php, and editdata.php to your site.<br/>
That's it. As long as all files are in the same directory, you can now navigate to wherever your register.php file is and add users, then edit them from the index.php file.<br/>
# customization
Right now, upon registration, you are redirected to the index.php page, so if it's not in the same directory as register.php, you'll have to make a change in register.php for the correct redirect location for index.php.<br/>
If you're really going to use this for some kind of membership management, then you should probably create an admin directory and upload them there.<br/>
While the register.php program is meant for a user to register on your site, it will need to live in the same directory as the other files. However, you can put all the files except register.php in your admin directory and put register.php in your site's webroot directory and it should still work fine with the exception of the need to modify the redirect to index.php in register.php, as just mentioned above.<br/>
Of course, if you add any custom CSS to these pages, then that CSS will need to be accessible by all three pages (not conn.php, just the others). That should be no problem as long as you put the correct path in your CSS link statement.<br/>
For instance, if you create a css directory in your admin area and you want index.php and editdata.php (which should also be in your admin directory), you would place a line like the following in the <head></head> section of those 2 pages...<br/>
```
<link href="css/style.css" rel="stylesheet" type="text/css" /><br/>
```
Then, assuming your register.php is in your webroot directory, you place the following line in its <head></head> section...<br/>
```
<link href="admin/css/style.css" rel="stylesheet" type="text/css" /><br/>
```
You will need to create your own login form and password change form for users who've registered to be able to login for access to some related content on your site. To make that work, you'll also need to add a password field to the database columns and add a form field, similarly, in the register and editdata forms, but probably not the index.php file, as you might not want to display the password except when editing it.<br/>
I may add that here in later commits, but just thought I'd mention it, in case you really want to use this before I get to it.<br/>
Thanks,<br/>
Jesse<br/>
