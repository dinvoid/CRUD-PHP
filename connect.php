
<?php

$dbservername = "localhost";
$dbuname = "root";
$dbpass = "";

$dbname="user";

// Create connection
$con = mysqli_connect($dbservername, $dbuname, $dbpass, $dbname);

// Check connection

if (!$con) {
   die(mysqli_error($con));
}

?>
