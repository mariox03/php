<?php
$server = "localhost";
$username = "nejko";
$password = "admin123";
$database = "nejko";

// Create connection and Check connection
$conn = mysqli_connect($server, $username, $password) or die("Error in connection!");
mysqli_select_db($conn, $database ) or die("Could not select database");
?>