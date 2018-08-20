<?php
$servername = "localhost";
$dbname = "sqpgclub_reg";
$username = "sqpgclub_regadm";
$password = "Solarflare2018##";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
