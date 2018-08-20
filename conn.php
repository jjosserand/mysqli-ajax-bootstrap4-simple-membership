<?php
//leave servername set to localhost -- if you have problems, contact your hosting company for correct setting
$servername = "localhost";
//create a database, then change items in quotes to the correct settings for your database
$dbname = "cpaneladm_databasename";
$username = "cpaneladm_databaseuser";
$password = "yoursecurepasswordhere";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
