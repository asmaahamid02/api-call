<?php
$hostname = 'localhost';
$dbname = 'contactdb';
$username = 'root';
$password = '1234';

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";