<?php 

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'MeerInternational';

// Create connection
$con = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
